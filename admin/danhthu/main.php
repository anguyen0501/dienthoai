<?php 
	if(isset($_GET['view'])){
		$view=$_GET['view'];
		switch ($view) {
			case 'chitiet':
					include_once('danhthu/chitiet.php');
				break;
			case 'chitietdh':
					include_once('danhthu/chitiet.php');
				break;	
			default:
				
				break;
		}
	}
	else{

		?><h4> Danh Thu </h4><hr> <?php 		
		include_once('danhthu/danhthu.php');
	}

?>