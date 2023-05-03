<?php 
	$thang=$_GET['thang'];
	$nam=$_GET['nam'];
	$sql="SELECT * FROM `hoadon` WHERE NgayGiao like '$nam-$thang-%' and TinhTrang='hoàn thành'";
	$rs=mysqli_query($conn,$sql);

?>
<h4> Danh Thu -> Tháng :<?php echo $thang.'/'.$nam ?></h4><hr>	
<table class="table table-hover m-auto text-center" style="font-size: 13px;">
	<thead class="badge-info">
		<tr>
			<th>Mã Hóa Đơn</th> <th>Mã Khách Hàng</th><th>Mã Nhân Viên</th><th>Ngày Đặt</th><th>Tổng Tiền</th><th>Tình trạng</th><th>Chi Tiết</th>
		</tr>
	</thead>
	<tbody>
 <?php $so=0;
	 while ($row=mysqli_fetch_array($rs)) { ?>
		<tr>
			<td><?php echo $row['MaHD']; ?></td><td><?php echo $row['MaKH']; ?></td></td><td><?php echo $row['MaNV']; ?></td><td><?php echo $row['NgayDat']; ?></td><td><?php echo number_format($row['TongTien']).' đ'; ?></td><td><?php echo $row['TinhTrang']; ?></td>
			<td><a href="index.php?action=donhang&view=chitiet&mahd=<?php echo $row['MaHD']; ?>" >Detail </a></td>
		</tr>

 <?php	$so=$so+$row['TongTien'];} ?>
		<tr  class="text-right text-danger" style="font-size: 150%">
			<td colspan="7"> Tổng : <?php echo number_format($so).' đ'; ?></td>
		</tr>
	</tbody>

</table>
