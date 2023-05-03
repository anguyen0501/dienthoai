<?php 
	if(isset($_GET['view'])){
		$view=$_GET['view'];
		switch ($view) {
			case 'chitiet':
					include_once('giaohang/chitiet.php');
				break;
			default:
				
				break;
		}
	}
	else{

		?><h4> Giao Hàng </h4><hr> <?php 		
		include_once('giaohang/donhang.php');
	}

?>