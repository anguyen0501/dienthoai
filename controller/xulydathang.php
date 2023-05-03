<?php 
	$nn=$_POST['nn'];//người nhận hàng
	$dcnn=$_POST['dcnn']; //địa chỉ người nhận
	$sdtnn=$_POST['sdtnn'];//số điện thoại người nhận
	$kh=$_SESSION['kh_login'];$makh=$kh['MaKH'];
	$tt=$_POST['tt'];
	$sql="INSERT INTO `hoadon`(`MaKH`,  `TinhTrang`, `TongTien`, `TenNN`, `DiaChiNN`, `SDTNN`) VALUES ($makh,N'chưa duyệt',$tt,'$nn','$dcnn',$sdtnn)";
	$rs=mysqli_query($conn,$sql);
	if($rs){ 
		$sql2="select MaHD from hoadon where MaKH=$makh and TongTien=$tt and TenNN='$nn' ORDER BY MaHD DESC limit 1";
		$rs2=mysqli_query($conn,$sql2);
		$kq2=mysqli_fetch_array($rs2);$mahd=$kq2['MaHD'];
		echo $mahd;
		foreach ($_SESSION['gio_hang'] as $item) {
			$km=($item['SoLuong']*$item['KM']);
			$ttt=($item['SoLuong']*$item['DonGia'])-$km;
			$masp=$item['MaSP']; $sl=$item['SoLuong']; $dg=$item['DonGia']; $mau=$item['Mau']; 
		$sql3="INSERT INTO `chitiethoadon`(`MaHD`, `MaSP`, `SoLuong`, `DonGia`, `KM`,`ThanhTien`, `Mau`) VALUES($mahd,'$masp',$sl,$dg,$km,$ttt,'$mau')";
			$rs3=mysqli_query($conn,$sql3);
		}
		if($rs3){

				unset($_SESSION['gio_hang']);
				header('location:index.php?view=ths');
		}
		
	}
?>