<?php
	$sql="select * from Mau ";
	$rs=mysqli_query($conn,$sql);
	
?>
<hr class="badge-danger">
<?php include_once('main.php')?>
<table class="table table-hover m-auto text-center" style="font-size: 13px;">
	<thead class="badge-info">
		<tr>
			<th>Tên Màu</th><th colspan="2"></th>
		</tr>
	</thead>
	<tbody>
 <?php $so=0;
	 while ($row=mysqli_fetch_array($rs)) { ?>
		<tr>
			<td><?php echo $row['TenMau']; ?></td>
			<td><a href="index.php?action=mau&view=suamau&mamau=<?php echo $row['TenMau']; ?>" ><i class="far fa-edit"></i></a></td> <!-- sửa-->		
			<td><a href="mau/main.php?view=xoamau&mamau=<?php echo $row['TenMau']; ?>" ><i class="fas fa-backspace"></i></a></td><!-- xóa-->	
		</tr>
 <?php	} ?>
		
	</tbody>
</table>


<?php 


?>