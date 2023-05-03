
<?php
include_once('../../config/database.php');	
	// Thêm màu
	if(isset($_GET['them'])){
		$th=$_GET['th'];
		$sql="insert into thuonghieu(TenTH) values(N'$th')";
		$rs=mysqli_query($conn,$sql);
		if(isset($rs)){
			header('location:../index.php?action=thuonghieu&thongbao=them');
		}else{
			header('location:../index.php?action=thuonghieu&thongbao=loi');
		}
	}
	//----------------------------------------
	//Cập nhập
	if(isset($_GET['suamau'])){
		$id=$_GET['id'];
		$th=$_GET['th'];
		$sql="UPDATE `thuonghieu` SET `TenTH`=N'$th' where MaTH='$id'";
		$rs=mysqli_query($conn,$sql);
		if(isset($rs)){
			header('location:../index.php?action=thuonghieu&thongbao=sua');
		}else{
			header('location:../index.php?action=thuonghieu&thongbao=loi');
		}
	}

	//----------------------------------------
// xóa màu
if(isset($_GET['xoa'])){
		$id=$_GET['id'];
		$sql="delete  from thuonghieu where MaTH='$id'";
		$rs=mysqli_query($conn,$sql);
		if(isset($rs)){
			header('location:../index.php?action=thuonghieu&thongbao=xoa');
		}else{
			header('location:../index.php?action=thuonghieu&thongbao=loi');
		}
	}