<?php
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	$date=getdate();
	$ngay=$date['year'];
	$thang = array($ngay-2,$ngay-1,$ngay);
	  

?>
<form action="danhthu/xuly.php" method="POST" accept-charset="utf-8">
	<select name="nam" ><?php
		foreach( $thang as $value ) 
	    { ?>
	       <option  <?php if($value===$ngay){echo 'selected';} ?>  value="<?php echo $value ?>"><?php echo $value ?></option>
	   <?php } ?>

	</select>
	<button type="sub" name="xem">Xem</button>
</form>

<?php 
	if(isset($_GET['nam'])){
		$nam2=$_GET['nam'];
		echo'<hr><h4> Danh Thu Năm : '.$nam2.' </h4><hr>';
		for($month=1;$month<=12; $month++){
			switch($month)
			{		
			case 1: case 3: case 5: case 7: case 8: case 10: case 12:
						{
							$day = 31;
							break;
						}	
			case 4: case 6: case 9: case 11:
						{
							$day = 30;
							break;
						}
			case 2:{
				$day=28;
				break;
				}	
			}
			$day1= $nam2.'-'.$month.'-'.'1'.' 00:00:00';
			$day2= $nam2.'-'.$month.'-'.$day.' 23:59:59';
			$sql="SELECT * FROM hoadon WHERE TinhTrang='hoàn thành' and (NgayGiao BETWEEN '{$day1}' AND '{$day2}')";
			$rs=mysqli_query($conn,$sql);
			$tt=0;
			while ( $row=mysqli_fetch_array($rs)) {
				$tt=$tt+$row['TongTien'];
			}
			
?>			
			<div class="card">
				<div class="card-body">
					<h4 class="text-info"> Tháng : <?php echo $month ?></h4>
					<table class="m-auto " >
						<thead>
							<tr>
								<th>Tổng Tiền : </th> <th class="text-danger font-weight-bold"> <?php echo '&#160;'.number_format($tt).' đ <br>' ?></th>
							</tr>
							<tr >
								<th class="text-center" colspan="2"></th>
							</tr>
						</thead>

					</table>
					<h6 class="text-right"><a href="index.php?action=danhthu&view=chitiet&thang=<?php echo $month; ?>&nam=<?php echo $nam2 ?>" >Xem chi tiết</a></h6>
				</div>
			</div>
			<br>

<?php		}
?>

		
		
		
<?php	}

?>