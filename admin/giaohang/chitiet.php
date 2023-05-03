<?php
	$mahd=$_GET['mahd'];
	$sql="select * from chitiethoadon where MaHD=$mahd ";
	$rs=mysqli_query($conn,$sql);
	$sql2="select * from hoadon where MaHD=$mahd ";
	$rs2=mysqli_query($conn,$sql2);
	$row2=mysqli_fetch_array($rs2);
?>
<div class="row">
	<div class="col-3"></div>
	<div class="col-3"><h6>Người Nhận Hàng : </h6></div><div class="col-6"><h6><?php echo $row2['TenNN'] ?> </h6></div>
	<div class="col-3"></div>
	<div class="col-3"><h6>SĐT : </h6></div><div class="col-6"><h6><?php echo $row2['SDTNN'] ?> </h6></div>
	<div class="col-3"></div>
	<div class="col-3"><h6>Địa Chỉ : </h6></div><div class="col-6"><h6><?php echo $row2['DiaChiNN'] ?> </h6></div>
</div><hr>
<table class="table table-hover m-auto text-center" style="font-size: 13px;">
	<thead class="badge-info">
		<tr>
			<th>Mã Hóa Đơn</th> <th>Mã Sản Phẩm</th><th>Số Lượng </th><th>Đơn Giá</th><th>Khuyến Mãi</th><th>Thành Tiền</th><th>Màu</th>
		</tr>
	</thead>
	<tbody>
 <?php $so=0;
	 while ($row=mysqli_fetch_array($rs)) { ?>
		<tr>
			</td><td><?php echo $row['MaHD']; ?></td><td><?php echo $row['MaSP']; ?></td></td><td><?php echo $row['SoLuong']; ?></td><td><?php echo number_format($row['DonGia']).'đ'; ?></td>
			<td><?php echo number_format($row['KM']).'đ'; ?></td>
			<td><?php echo number_format($row['ThanhTien']).'đ'; ?></td><td><?php echo $row['Mau']; ?></td>

		</tr>
 <?php	} ?>
		
	</tbody>



<?php 


?>