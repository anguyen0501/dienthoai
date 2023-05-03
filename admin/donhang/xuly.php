<?php 
include_once('../../config/database.php');
date_default_timezone_set('Asia/Ho_Chi_Minh');
if(isset($_GET['action'])){
	$action=$_GET['action'];
	switch ($action) {
		case 'duyet':
			$mahd=$_GET['mahd'];
			$admin=$_SESSION['nv_admin'];$manv=$admin['MaNV'];
			$date=getdate();
  			$ngay=$date['year']."-".$date['mon']."-".($date['mday']+1)." ".$date['hours'].":".$date['minutes'].":".$date['seconds'];
  			$sql="update `hoadon` set NgayGiao = '$ngay', MaNV='$manv', TinhTrang='Đã duyệt' where MaHD=$mahd";
  			$rs=mysqli_query($conn,$sql);
  			$sql3="SELECT *from khachhang where MaKH=(SELECT MaKH from hoadon where MaHD='$mahd')";
  			$rs3=mysqli_query($conn,$sql3);
  			$r=mysqli_fetch_array($rs3);
  			if($rs){
  				$sql1="SELECT *from chitiethoadon where MaHD='$mahd'";
  				$rs1=mysqli_query($conn,$sql1);
  				 while ($row1=mysqli_fetch_array($rs1)) {
  				 	$ngaykt=($date['year']+2)."-".$date['mon']."-".($date['mday']);
  				 	$masp=$row1['MaSP'];
  				 	$makh=$r['MaKH'];
  				 	$sdt=$r['SDT'];
  				 	$mt="Chính sách bảo hành 2 năm về phần cứng điện thoại";
  				 	$sql2="INSERT INTO `baohanh`( `MaKH`, `MaSP`, `SDTKH`,`NgayKT`, `MoTa`,`MaHD`)
  				 						 VALUES ('$makh','$masp','$sdt','$ngaykt','$mt','$mahd')";
  				 	$rs2=mysqli_query($conn,$sql2);

  				 }
  			}
  			header('location:../index.php?action=donhang');
			break;
		
		default:
			# code...
			break;
	}
}


?>