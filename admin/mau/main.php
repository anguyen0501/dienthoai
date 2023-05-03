<?php 
	if(isset($_GET['view'])){
		$view=$_GET['view'];
		switch ($view) {
			case 'suamau':
					include_once('mau/sua.php');
				break;
		
			case 'xoamau':
					$mamau=$_GET['mamau'];
					header('location:xuly.php?xoa=1&mamau='.$mamau);
				break;
			default:
					include_once('mau/them.php');
				break;
		}
	}
	else{

		?><h4>Quản Lý Sản Phẩm -> Màu </h4><hr> <?php 		
		include_once('mau/them.php');
		include_once('mau/mau.php');
	}

?>