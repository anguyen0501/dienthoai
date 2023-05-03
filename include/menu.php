<?php 
	$sql="select * from thuonghieu";
	$rs=mysqli_query($conn,$sql);
	
 ?>


	

<div class="container-fluid ">
	<div class="row mar-l-r badge-light boder">
		<?php 
					while ($row=mysqli_fetch_array($rs)) {?>
						<div class="col-2 menu text-center">
							<a href="index.php?view=timkiem&mahang=<?php echo $row['MaTH'] ?>&ten=<?php echo $row['TenTH'] ?>" class="nav-link">
								<div class=" ">
									
									<?php echo $row['TenTH'] ?>
									
								</div>	
							</a>
						</div>
							
							
				<?php	}
				?>
	</div>

</div>
