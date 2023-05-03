<?php 
	if(isset($_GET['view'])){
		$view=$_GET['view'];
		switch ($view) {
			case 'sua':
			?><h4>Quản Lý Khuyến Mãi -> Cập nhập </h4><hr> <?php 	
					include_once('khuyenmai/sua.php');
				break;
			case 'apply':
			?><h4>Quản Lý Khuyến Mãi -> Áp Dụng </h4><hr> <?php 	
					include_once('khuyenmai/apply.php');
				break;
			default:
				
				break;
		}
	}
	else{

		?><h4>Quản Lý Khuyến Mãi </h4><hr> <?php 		
		include_once('khuyenmai/them.php');
		include_once('khuyenmai/khuyenmai.php');
	}

?>