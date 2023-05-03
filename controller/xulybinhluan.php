<?php
	if(isset($_SESSION['kh_login'])){
			$tenkhh=$_SESSION['kh_login'];
			$nd=$_GET['noidung'];
			$masp=$_GET['masp'];
			$sql6="INSERT INTO `binhluan`( `MaSP`, `MaKH`, `NoiDung`) VALUES('$masp',".$tenkhh['MaKH'].",'$nd')";
			$query6=mysqli_query($conn,$sql6);
			if ($query6) {
				header('location:index.php?view=chitietsanpham&masp='.$masp);
			}
			
	} 
	else {
		header('location:login.php');
	}
?>