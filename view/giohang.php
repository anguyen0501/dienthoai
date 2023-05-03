<!DOCTYPE html>
<html>
<head>
	<title></title>

</head>
<body>

	<div class="container cangtop">
		<hr><h3 style="text-align: center"> Giỏ Hàng </h3><hr>
		<div class="card">

			<div class="container-fluid">
				<div class="row">
					<table class="table">
						  <thead class="thead-light">
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col"></th>
						      <th scope="col">Tên sản phẩm</th>
						      <th scope="col">màu</th>
						      <th scope="col">Số lượng mua</th>
						      <th scope="col">Đơn Giá</th>
						      <th scope="col">Khuyến Mãi</th>
						      <th scope="col">Thành tiền</th>
						      <th scope="col"></th>
						    </tr>
						  </thead>
<?php 
	if(isset($_SESSION['gio_hang'])){
	$stt=0; $money=0;	
		foreach ($_SESSION['gio_hang'] as $item_cart) { 
				$sql8="SELECT * FROM `sanpham` WHERE MaSP='".$item_cart['MaSP']."'";
				$rs=mysqli_query($conn,$sql8);
				$kqa=mysqli_fetch_array($rs);
?>
						<tbody>
						    <tr>
						      <th scope="row"><?php echo $stt+1; $stt=$stt+1; ?></th>
						      <td><img class="anh" src="admin/hinhanh/sanpham/<?php echo $kqa['AnhNen'];?>"></td>
						      <td><?php echo $item_cart['TenSP'];?></td>
						      <td><?php echo $item_cart['Mau'];?></td>
						      <td>
						      	 <div class="btsl ">
						      	 	<a href="giohang/cart_update.php?tru&masp=<?php echo $item_cart['MaSP']; ?>&km=<?php echo $item_cart['KM']; ?>&mau=<?php echo $item_cart['Mau']; ?>">
						      	 		<button <?php if($item_cart['SoLuong']<=1){echo 'disabled';}?> class="btsl1  text-center btn-outline-success">-</button></a>
						      		<div class="btsl2  text-center"><?php echo $item_cart['SoLuong'] ?></div>
						      		<a href="giohang/cart_update.php?cong&masp=<?php echo $item_cart['MaSP']; ?>&km=<?php echo $item_cart['KM']; ?>&mau=<?php echo $item_cart['Mau']; ?>">
						      			<button <?php if($item_cart['SoLuong']>=5){echo 'disabled';}?> class="btsl3 text-center btn-outline-success">+</button></a>
						      	 </div>
						  	  </td>
						      <td><?php echo number_format($item_cart['DonGia']).' đ';?></td>
						      <td><?php echo number_format($item_cart['KM']).' đ';?></td>
						      <td><?php $tt=0; $tt1=$item_cart['SoLuong'] * $item_cart['DonGia']- $item_cart['KM']*$item_cart['SoLuong'] ; $tt=$tt+$tt1;
						      			echo number_format($tt).' đ';?></td>
						      <td><a href="giohang/cart_update.php?xoa1&masp=<?php echo $item_cart['MaSP']; ?>&mau=<?php echo $item_cart['Mau']; ?>"><i class="fas fa-backspace"></i></a></td>
						    </tr>
						    
						</tbody>
<?php	
	$money=$money+$tt;	}
}
?> 								<tr><td><?php if(isset($_SESSION['gio_hang'])){echo '<a href="giohang/cart_update.php?xoaall" >xóa tất cả</a>';}?></td><td></td><td></td><td></td><td></td><th style="font-size: 35px;"><?php if(!isset($_SESSION['gio_hang'])){echo '<i class="far fa-frown"></i> Giỏ hàng của bạn rỗng <i class="far fa-frown"></i>';}?></th>
						    	<th scope="row" colspan="3">
<?php if(isset($_SESSION['gio_hang'])){echo	'Tổng tiền :  '.number_format($money).' đ'; }?>
						    	</th>
						    </tr>
					</table>
				</div><hr>
				<div class="row">
					<div class="col-md-6"><a style="  text-decoration: none;" href="index.php" title="">
						<button type="button" class="btn btn-secondary btn-lg btn-block" name="action"> Tiếp tục mua hàng <i class="fas fa-cart-arrow-down"></i></button></a>
					</div>	
					<div class="col-md-6"><a style="  text-decoration: none;" href="index.php?view=thanhtoan" title="">
						<button type="submit"  class="btn btn-secondary btn-lg btn-block" name="action" <?php if(!isset($_SESSION['gio_hang'])){echo 'disabled="disabled"';}?> > Thanh Toán <i class="fas fa-money-check-alt"></i></button></a>
					
					</div>		
				</div>
			</div><hr>
		</div>
	</div>
</body>
</html>