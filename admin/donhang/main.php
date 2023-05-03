<?php 
	if(isset($_GET['view'])){
		$view=$_GET['view'];
		switch ($view) {
			case 'chitiet':
			?><h4>Quản Lý Đơn Đặt Hàng -> Chi Tiết Đơn Hàng </h4><hr> <?php 	
					include_once('donhang/chitietdonhang.php');
				break;

			default:
				
				break;
		}
	}
	else{

		?><h4>Quản Lý Đơn Đặt Hàng </h4><hr> <?php 		
		include_once('donhang/dondathang.php');
	}

?>