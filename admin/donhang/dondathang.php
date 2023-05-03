<?php
	$sql="select * from hoadon Order  by NgayDat DESC ";
	$rs=mysqli_query($conn,$sql);
	
?>
<table class="table table-hover m-auto text-center" style="font-size: 13px;">
	<thead class="badge-info">
		<tr>
			<th>Mã Hóa Đơn</th> <th>Mã Khách Hàng</th><th>Mã Nhân Viên</th><th>Ngày Đặt</th><th>Tổng Tiền</th><th>Tình trạng</th><th>Chi Tiết</th><th colspan ="2" class="badge-danger"></th>
		</tr>
	</thead>
	<tbody>
 <?php $so=0;
	 while ($row=mysqli_fetch_array($rs)) { ?>
		<tr>
			</td><td><?php echo $row['MaHD']; ?></td><td><?php echo $row['MaKH']; ?></td></td><td><?php echo $row['MaNV']; ?></td><td><?php echo $row['NgayDat']; ?></td><td><?php echo number_format($row['TongTien']).' đ'; ?></td><td><?php echo $row['TinhTrang']; ?></td>
			<td><a href="index.php?action=donhang&view=chitiet&mahd=<?php echo $row['MaHD']; ?>" >Detail </a></td>
			<td><?php if($row['TinhTrang']==="chưa duyệt"){echo '<a  href="donhang/xuly.php?action=duyet&mahd='.$row['MaHD'].'" >Duyệt <i class="fas fa-check"></i> </a>';}?></td>
			
		</tr>
 <?php	} ?>
		
	</tbody>

</table>

<?php 


?>