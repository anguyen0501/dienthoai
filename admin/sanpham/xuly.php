<?php 
include_once('../config/database.php');	
if(isset($_POST['xlthem'])){
	$masp=$_POST['masp'];
	$tensp=$_POST['tensp'];
	$math=$_POST['math'];
	$dongia=$_POST['dongia'];
	$sl=$_POST['sl'];
	$anhnen=$_FILES['anhnen']['name'];
	$AnhSP_tmp=$_FILES['anhnen']['tmp_name'];
	$mau=$_POST['mau'];
	move_uploaded_file($AnhSP_tmp,'../hinhanh/sanpham/'.$anhnen);
	$mota=$_POST['mota'];
	$manhinh=$_POST['mh'];
	$hdh=$_POST['hdh'];
	$camt=$_POST['camt'];
	$cams=$_POST['cams'];
	$cpu=$_POST['cpu'];
	$ram=$_POST['ram'];
	$bnt=$_POST['bnt'];
	$sim=$_POST['sim'];
	$pin=$_POST['pin'];
	$sql="INSERT INTO `sanpham`(`MaSP`, `TenSP`, `MoTa`, `AnhNen`, `MaTH`, `DonGia`,`SoLuong`) VALUES ('$masp','$tensp','$mota','$anhnen','$math','$dongia','$sl')";
	$rs=mysqli_query($conn,$sql);
	if(isset($rs)){
		$sql="INSERT INTO `thongtinsp`(`MaSP`, `ManHinh`, `HDH`, `CameraS`, `CameraT`, `CPU`, `Ram`, `BoNhoTrong`, `Sim`, `Pin`) VALUES ('$masp','$manhinh','$hdh','$camt','$cams','$cpu','$ram','$bnt','$sim','$pin')";
		$rs=mysqli_query($conn,$sql);
		if(isset($rs)){
			foreach ($mau as $key => $values) {
				$sql1="INSERT INTO `chitietmausp`(`MaSP`, `Mau`) VALUES ('$masp','$values')";
				$rs1=mysqli_query($conn, $sql1);
			}
			header('location:../index.php?action=sanpham&view=them&thongbao=them');
		}	
	}
}
if(isset($_GET['xoa'])){
	$masp=$_GET['masp'];
	$sql="DELETE FROM `thongtinsp` WHERE `MaSP`='$masp'";
	$rs=mysqli_query($conn,$sql);
	if(isset($rs)){
		$sql="DELETE FROM `chitietmausp` WHERE `MaSP`='$masp'";
		$rs=mysqli_query($conn,$sql);
		if(isset($rs)){
			$sql="DELETE FROM `sanpham` WHERE `MaSP`='$masp'";
			$rs=mysqli_query($conn,$sql);
			if(isset($rs)){
				header('location:../index.php?action=sanpham&view=sanpham&thongbao=xoa');
			}
		}
	}
}
if(isset($_POST['xlsua'])){
	$masp1=$_POST['masp1'];
	$masp=$_POST['masp'];
	$tensp=$_POST['tensp'];
	$math=$_POST['math'];
	$dongia=$_POST['dongia'];
	$sl=$_POST['sl'];
	$mau=$_POST['mau'];
	if(isset($_FILES['anhnen'])){
		$anhnen=$_FILES['anhnen']['name'];
		$AnhSP_tmp=$_FILES['anhnen']['tmp_name'];
		move_uploaded_file($AnhSP_tmp,'../hinhanh/sanpham/'.$anhnen);;}else{$anhnen=false;
	}
	$mota=$_POST['mota'];
	$manhinh=$_POST['mh'];
	$hdh=$_POST['hdh'];
	$camt=$_POST['camt'];
	$cams=$_POST['cams'];
	$cpu=$_POST['cpu'];
	$ram=$_POST['ram'];
	$bnt=$_POST['bnt'];
	$sim=$_POST['sim'];
	$pin=$_POST['pin'];
	if($anhnen){
		$sql="UPDATE  `sanpham` set `TenSP`='$tensp', `MoTa`='$mota', `AnhNen`='$anhnen', `MaTH`='$math', `DonGia`='$dongia', `SoLuong`='$sl' where MaSP='$masp1'";
		$rs=mysqli_query($conn,$sql);
		if(isset($rs)){
			$sql="UPDATE  `thongtinsp` set `ManHinh`='$manhinh', `HDH`='$hdh', `CameraS`='$camt', `CameraT`='$cams', `CPU`='$cpu', `Ram`='$ram', `BoNhoTrong`='$bnt', `Sim`='$sim', `Pin`='$pin' Where MaSP ='$masp1'";
			$rs=mysqli_query($conn,$sql);
			if(isset($rs)){
					$sql_xoa="DELETE FROM `chitietmausp` WHERE MaSP='$masp1'";
						$sr2=mysqli_query($conn,$sql_xoa);
					if(isset($sr2)){
						foreach ($mau as $key => $values) {	
							$sql_ctsp="insert into chitietmausp(MaSP,Mau) values('$masp1','$values')";
							$rs_ctsp=mysqli_query($conn, $sql_ctsp);
						}	
					}	
			}
		}
		header('location:../index.php?action=sanpham&view=sanpham&thongbao=sua');	
	}
	else{
		$sql="UPDATE  `sanpham` set `TenSP`='$tensp', `MoTa`='$mota',  `MaTH`='$math', `DonGia`='$dongia' , `SoLuong`='$sl'  where MaSP='$masp1'";
		$rs=mysqli_query($conn,$sql);
		if(isset($rs)){
			$sql="UPDATE  `thongtinsp` set  `ManHinh`='$manhinh', `HDH`='$hdh', `CameraS`='$camt', `CameraT`='$cams', `CPU`='$cpu', `Ram`='$ram', `BoNhoTrong`='$bnt', `Sim`='$sim', `Pin`='$pin' Where MaSP ='$masp1'";
			$rs=mysqli_query($conn,$sql);
			if(isset($rs)){
					$sql_xoa="DELETE FROM `chitietmausp` WHERE MaSP='$masp1'";
						$sr2=mysqli_query($conn,$sql_xoa);echo "ok";
					if(isset($sr2)){
						foreach ($mau as $key => $values) {	
							$sql_ctsp="insert into chitietmausp(MaSP,Mau) values('$masp1','$values')";
							$rs_ctsp=mysqli_query($conn, $sql_ctsp);
						}	
					}														
			}
		}
header('location:../index.php?action=sanpham&view=sanpham&thongbao=sua');	
	}
	
	
}