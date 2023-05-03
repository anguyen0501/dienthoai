<?php
	$sql="select * from thuonghieu ";
	$rs=mysqli_query($conn,$sql);
	
?>
<hr class="badge-danger">
<?php include_once('main.php')?>
<table class="table table-hover m-auto text-center" style="font-size: 13px;">
	<thead class="badge-info">
		<tr>
			<th>Mã Thương Hiệu</th><th>Tên Thương Hiệu</th><th colspan="2"></th>
		</tr>
	</thead>
	<tbody>
 <?php $so=0;
	 while ($row=mysqli_fetch_array($rs)) { ?>
		<tr>
			<td><?php echo $row['MaTH']; ?></td>
			<td><?php echo $row['TenTH']; ?></td>
			<td><a href="index.php?action=thuonghieu&view=sua&id=<?php echo $row['MaTH']; ?>" ><i class="far fa-edit"></i></a></td> <!-- sửa-->		
			<td><a href="thuonghieu/main.php?view=xoa&id=<?php echo $row['MaTH']; ?>" ><i class="fas fa-backspace"></i></a></td><!-- xóa-->	
		</tr>
 <?php	} ?>
		
	</tbody>
</table>


<?php 


?>