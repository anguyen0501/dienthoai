<?php
	$sql="select *from baohanh ";
	$rs=mysqli_query($conn,$sql);
?>
<table class="table table-hover m-auto text-center" style="font-size: 13px;">
	<thead class="badge-info">
		<tr>
			<th>Mã Hóa Đơn</th> <th>Mã Khách Hàng</th><th>SDT khách Hàng</th><th>Mã Sản Phẩm </th><th>Ngày Bắt Đầu</th><th>Ngày Kết Thúc </th><th>Mô Tả</th>
		</tr>
	</thead>
	<tbody>
 <?php $so=0;
	 while ($row=mysqli_fetch_array($rs)) { ?>
		<tr>
			</td><td><?php echo $row['MaHD']; ?></td><td><?php echo $row['MaKH']; ?></td><td><?php echo $row['SDTKH']; ?></td></td><td><?php echo $row['MaSP']; ?></td><td><?php echo $row['NgayBD']; ?></td><td><?php echo $row['NgayKT']; ?></td><td><?php echo $row['MoTa']; ?></td>		
		</tr>
 <?php	} ?>	
	</tbody>
</table>
<?php 


?>