<?php
	$sql="SELECT * FROM `hoadon` WHERE NgayGiao is not null and TinhTrang='Đã duyệt' ORDER BY NgayGiao ASc";
	$rs=mysqli_query($conn,$sql);
	
?>
<h3 class="m-auto">Đơn Hàng Chưa Giao</h3>
<table class="table table-hover m-auto text-center" style="font-size: 13px;">
	<thead class="badge-info">
		<tr>
			<th>Mã Hóa Đơn</th><th>Ngày Đặt</th><th>Ngày Giao</th><th>Tổng Tiền</th><th>Tình trạng</th><th>Người Nhận</th><th>Địa Chỉ N/Nhận</th><th>SĐT N/Nhận</th><th>Chi Tiết</th><th colspan ="2" class="badge-danger"></th>
		</tr>
	</thead>
	<tbody>
 <?php $so=0;
	 while ($row=mysqli_fetch_array($rs)) { ?>

		<tr>
			</td><td><?php echo $row['MaHD']; ?></td><td><?php echo $row['NgayDat']; ?></td><td><?php echo $row['NgayGiao']; ?></td><td><?php echo number_format($row['TongTien']).'.đ'; ?></td><td><?php echo $row['TinhTrang']; ?></td><td><?php echo $row['TenNN']; ?></td><td><?php echo $row['DiaChiNN']; ?></td><td><?php echo $row['SDTNN']; ?></td>
			<td><a href="index.php?action=giaohang&view=chitiet&mahd=<?php echo $row['MaHD']; ?>" >Detail </a></td>
			<td><?php if($row['TinhTrang']==="Đã duyệt"){echo '<a  href="giaohang/xuly.php?action=duyet&mahd='.$row['MaHD'].'" >Đã Giao Hàng <i class="fas fa-check"></i> </a>';}?></td>
			</tr>
 <?php	} ?>
		
	</tbody>
</table>


<?php 
	$am=$_SESSION['nv_admin'];$nv=$am['MaNV'];
	$sql12="SELECT * FROM `hoadon` WHERE MaNVGH='$nv' and TinhTrang='hoàn thành' ORDER BY NgayGiao ASc";
	$rs12=mysqli_query($conn,$sql12);

?>
<hr class="badge-danger">
<h3 class="m-auto">Đơn Hàng Đã Giao</h3>
<table class="table table-hover m-auto text-center" style="font-size: 13px;">
	<thead class="badge-info">
		<tr>
			<th>Mã Hóa Đơn</th><th>Ngày Đặt</th><th>Ngày Giao</th><th>Tổng Tiền</th><th>Tình trạng</th><th>Người Nhận</th><th>Địa Chỉ N/Nhận</th><th>SĐT N/Nhận</th><th>Chi Tiết</th>
		</tr>
	</thead>
	<tbody>
 <?php $so=0;
	 while ($row12=mysqli_fetch_array($rs12)) { ?>

		<tr>
			</td><td><?php echo $row12['MaHD']; ?></td><td><?php echo $row12['NgayDat']; ?></td><td><?php echo $row12['NgayGiao']; ?></td><td><?php echo number_format($row12['TongTien']).'.đ'; ?></td><td><?php echo $row12['TinhTrang']; ?></td><td><?php echo $row12['TenNN']; ?></td><td><?php echo $row12['DiaChiNN']; ?></td><td><?php echo $row12['SDTNN']; ?></td>
			<td><a href="index.php?action=giaohang&view=chitiet&mahd=<?php echo $row12['MaHD']; ?>" >Detail </a></td>
			
			</tr>
 <?php	} ?>
		
	</tbody>
</table>