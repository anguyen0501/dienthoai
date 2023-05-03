<?php 
	if(isset($_GET['view'])){
		$view=$_GET['view'];
		switch ($view) {
			case 'sua':
					include_once('thuonghieu/sua.php');
				break;
		
			case 'xoa':
					$id=$_GET['id'];
					header('location:xuly.php?xoa=1&id='.$id);
				break;
			default:
				
				break;
		}
	}
	else{

		?><h4>Quản Lý Thương Hiệu </h4><hr> <?php 		
		include_once('thuonghieu/them.php');
		include_once('thuonghieu/thuonghieu.php');
	}

?>