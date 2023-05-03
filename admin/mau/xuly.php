
<?php
include_once('../../config/database.php');	
	// Thêm màu
	if(isset($_GET['themmau'])){
		$mamau=$_GET['mamau'];
		$sql="insert into mau(TenMau) values(N'$mamau')";
		$rs=mysqli_query($conn,$sql);
		if(isset($rs)){
			header('location:../index.php?action=mau&thongbao=them');
		}else{
			header('location:../index.php?action=mau&thongbao=loi');
		}
	}
	//----------------------------------------
	//Cập nhập
	if(isset($_GET['suamau'])){
		$id=$_GET['id'];
		$mamau=$_GET['mamau'];
		$sql="UPDATE `mau` SET `TenMau`=N'$mamau' where TenMau='$id'";
		$rs=mysqli_query($conn,$sql);
		if(isset($rs)){
			header('location:../index.php?action=mau&thongbao=sua');
		}else{
			header('location:../index.php?action=mau&thongbao=loi');
		}
	}

	//----------------------------------------
// xóa màu
if(isset($_GET['xoa'])){
		$mamau=$_GET['mamau'];
		$sql="delete  from mau where TenMau='$mamau'";
		$rs=mysqli_query($conn,$sql);
		if(isset($rs)){
			header('location:../index.php?action=mau&thongbao=xoa');
		}else{
			header('location:../index.php?action=mau&thongbao=loi');
		}
	}