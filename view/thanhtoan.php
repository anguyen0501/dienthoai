<?php  if (!isset($_SESSION['kh_login'])) {
		 header('Location:login.php');
	}
	$kh=$_SESSION['kh_login']; ?>
<div class="container-fluid ">
	<hr class="mar-l-r">
	<h5 class="mar-l-r " >THÔNG TIN THANH TOÁN </h5>
	<div class="mar-l-r">
		<div  class="card-footer thanhtoan" >
		  <form action="index.php?action=dathang" method="POST" accept-charset="utf-8">	
			<div class="row">
				<div class="col-md-7" style="border-right: 1px solid #d8d8d8;"><center>
					<h6>Cập nhập địa chỉ giao hàng</h6><hr>
					<div class="col-md-9">
						<input type="text" class="form-control" name="nn" placeholder=" &nbsp; Họ và Tên" required  value="<?php echo $kh['TenKH']?>"><br>
					</div>
					<div class="col-md-9">
						<input type="text" class="form-control" name="dcnn" placeholder=" &nbsp; Địa Chỉ" required value="<?php echo $kh['DiaChi']?>"><br>
					</div>
					<div class="col-md-9">
					 <input type="text" class="form-control" name="sdtnn" placeholder=" &nbsp; Sô điện thoại" required value="<?php echo $kh['SDT']?>"><br>
					</div>
					<div class="col-md-9" style=" float: bottom"><hr><a style="  text-decoration: none;" href="#">
						<button type="submit" class="btn btn-secondary btn-lg btn-block" name="action"> Đặt Hàng </button></a>
					</div>
					
						</center>	
				</div>
				<div class="col-md-5" >
					<center><h6>Phương thức thanh toán</h6><hr></center>
					<div>

					    <div class="custom-control custom-checkbox" style="margin-left: 15px;">
						    <input type="radio" class="custom-control-input" id="customCheck1"  checked>
						    <label class="custom-control-label" for="customCheck1"><h5> Thanh toán  khi nhận hàng</h5></label>
					    </div>
					    <div class="custom-control custom-checkbox" style="margin-left: 15px;">
						    <input type="radio" class="custom-control-input" id="customCheck2"  disabled >
						    <label class="custom-control-label" for="customCheck2"><h5> Thanh toán online <label style="font-size: 15px;">(coming soom)</label></h5></label>
					    </div> 						
					</div>
					<br><hr><hr>
					<center><h6>Hóa Đơn</h6></center>
					<?php $tgt=0; foreach ($_SESSION['gio_hang'] as $key) { ?>
							<div>
								<label style="font-size: 12px;"><?php echo $key['SoLuong'].' x';?></label>
								<label style="font-size: 12px;"><?php echo $key['TenSP']. ' - '.$key['Mau'];?></label>
								<label style="font-size: 12px;margin-top:3px;float: right;">
									<?php $tt=$key['SoLuong']*$key['DonGia'];$km=$key['SoLuong']*$key['KM'];
								 echo number_format($tt).'đ'.' (Giảm : '.number_format($km).' đ)';$tgt=$tgt+($tt-$km)?></label></div>
										

					<?php	}?>
					<hr>
					<div>
						<label style="font-size: 14px;">Tạm tính</label>
						<label style="font-size: 14px;float: right;"><?php echo number_format($tgt).' đ';?></label>
					</div>
					<div>
						<label style="font-size: 14px;"> Phí vận chuyển : </label>
						<label style="font-size: 14px;float: right; "><?php echo'0 đ';?></label>
					</div>
					<hr>
					<div>
						<label style="font-size: 14px;">Thành tiền</label>
						<label style="color:red;font-size: 14px;margin-top:0px;float: right;"><?php echo number_format($tgt).' đ';?></label>
					</div>
				</div>
			</div>
			<input hidden name="tt" value="<?php echo $tgt ?>">
			<?php $kh1=$_SESSION['kh_login'];?><input hidden name="kh" value="<?php echo $kh1['MaKH'] ?>">
		  </form>
		</div>
	</div>
	
</div>