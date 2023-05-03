<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	// thêm vào giỏ hàng.
if(isset($_GET['action'])){
		$masp=$_GET['masp'];
		$slmua=$_GET['slmua'];
		$mau=$_GET['mau'];
		$km=$_GET['km'];
		//giới hạn chỉ mua được	 1 sản phẩm với số lượng 10;
		if($slmua>10){
			# code
		}
		$sql="select * from sanpham where MaSP='$masp'";
		$resulf=mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($resulf);
		if($row){
			$new_cart=array(array('MaSP'=>$row['MaSP'],'TenSP'=>$row['TenSP'],'SoLuong'=>$slmua,'Mau'=>$mau,'KM'=>$km,'DonGia'=>$row['DonGia']));
			if(isset($_SESSION['gio_hang'])){
				$found = false; // biến tìm
				foreach ($_SESSION['gio_hang'] as $item_cart) {
				 	if(($item_cart['MaSP']==$masp) and  ($item_cart['Mau']===$mau)){
				 			$cart[]=array('MaSP'=>$item_cart['MaSP'],'TenSP'=>$item_cart['TenSP'],'SoLuong'=>($item_cart['SoLuong'] + $slmua),'Mau'=>$item_cart['Mau'],'KM'=>$item_cart['KM'],'DonGia'=>$item_cart['DonGia']);
				 				$found=true;
				 		}
				 		else{
				 			$cart[]=array('MaSP'=>$item_cart['MaSP'],'TenSP'=>$item_cart['TenSP'],'SoLuong'=>$item_cart['SoLuong'],'Mau'=>$item_cart['Mau'],'KM'=>$item_cart['KM'],'DonGia'=>$item_cart['DonGia']);
				 		}				
				 }
				 if($found==false){
				 	$_SESSION['gio_hang']=array_merge($cart,$new_cart);
				 } 
				 else{
				 	$_SESSION["gio_hang"] = $cart;
				 }			
			}
			else{
				$_SESSION['gio_hang']=$new_cart;
			}
		}
		if($_GET['action']==='themgiohang'){
			header('location:index.php?');
		}
		elseif($_GET['action']==='muahang'){
			header('location:index.php?view=giohang');
		}
	
}
// cộng thêm số lượng mua sản phẩm vào giỏ hàng.
if(isset($_GET['cong'])){
	$masp=$_GET['masp'];
	$km=$_GET['km'];
	$mau=$_GET['mau'];
	session_start();
		foreach ($_SESSION['gio_hang'] as $item_cart){
			if(($item_cart['MaSP']===$masp) and ($item_cart['Mau']===$mau)) {
				if($item_cart['SoLuong']<5){
					$tang=$item_cart['SoLuong']+1;
					$cart[]=array('MaSP'=>$item_cart['MaSP'],'TenSP'=>$item_cart['TenSP'],'SoLuong'=>$tang,'KM'=>$item_cart['KM'],'Mau'=>$item_cart['Mau'],'DonGia'=>$item_cart['DonGia']);
					
				}else{
					$cart[]=array('MaSP'=>$item_cart['MaSP'],'TenSP'=>$item_cart['TenSP'],'SoLuong'=>$item_cart['SoLuong'],'KM'=>$item_cart['KM'],'Mau'=>$item_cart['Mau'],'DonGia'=>$item_cart['DonGia']);

				}
				$_SESSION['gio_hang']=$cart;
					header('location:../index.php?view=giohang');
			}
			else{
				$cart[]=array('MaSP'=>$item_cart['MaSP'],'TenSP'=>$item_cart['TenSP'],'SoLuong'=>$item_cart['SoLuong'],'KM'=>$item_cart['KM'],'Mau'=>$item_cart['Mau'],'DonGia'=>$item_cart['DonGia']);
				$_SESSION['gio_hang']=$cart;
			}

		}
		header('location:../index.php?view=giohang'); 
		echo "string";
	}
// trừ số lượng mua sản phẩm vào giỏ hàng.
if(isset($_GET['tru'])){
	$masp=$_GET['masp'];
	$km=$_GET['km'];
	$mau=$_GET['mau'];
	session_start();
		foreach($_SESSION['gio_hang'] as $item_cart){
			if(($item_cart['MaSP']===$masp)  and ($item_cart['Mau']===$mau)) {
				if($item_cart['SoLuong']>1){
					$tang=$item_cart['SoLuong']-1;
					$cart[]=array('MaSP'=>$item_cart['MaSP'],'TenSP'=>$item_cart['TenSP'],'SoLuong'=>$tang,'KM'=>$item_cart['KM'],'Mau'=>$item_cart['Mau'],'DonGia'=>$item_cart['DonGia']);
					
				}else{
					$cart[]=array('MaSP'=>$item_cart['MaSP'],'TenSP'=>$item_cart['TenSP'],'SoLuong'=>$item_cart['SoLuong'],'KM'=>$item_cart['KM'],'Mau'=>$item_cart['Mau'],'DonGia'=>$item_cart['DonGia']);

				}
				$_SESSION['gio_hang']=$cart;
					header('location:../index.php?view=giohang'); 
			}
			else{
				$cart[]=array('MaSP'=>$item_cart['MaSP'],'TenSP'=>$item_cart['TenSP'],'SoLuong'=>$item_cart['SoLuong'],'KM'=>$item_cart['KM'],'Mau'=>$item_cart['Mau'],'DonGia'=>$item_cart['DonGia']);
				$_SESSION['gio_hang']=$cart;
			}
		}
		header('location:../index.php?view=giohang'); 
	}
// xóa 1 sản phẩm trong giỏ hàng.
if(isset($_GET['xoa1'])){
	$masp=$_GET['masp'];
	$mau=$_GET['mau'];
	session_start();
		foreach($_SESSION['gio_hang'] as $item_cart){
			if($item_cart['MaSP']===$masp and ($item_cart['Mau']===$mau)){	
			}
			else{
				$cart[]=array('MaSP'=>$item_cart['MaSP'],'TenSP'=>$item_cart['TenSP'],'SoLuong'=>$item_cart['SoLuong'],'KM'=>$item_cart['KM'],'Mau'=>$item_cart['Mau'],'DonGia'=>$item_cart['DonGia']);
				
			}
			$_SESSION['gio_hang']=$cart;
		header('location:../index.php?view=giohang'); 
		}
	}
	//xoa toan bo giỏ hàng
	if(isset($_GET['xoaall'])){
		session_start();
		unset($_SESSION['gio_hang']);
		header('location:../index.php?view=giohang'); 
	}
	?>
</body>
</html>
