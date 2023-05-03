<?php 
	if(isset($_GET['view'])){
		$view=$_GET['view'];
		switch ($view) {
			case 'sanpham':
				?><h4>Quản Lý Sản Phẩm </h4><hr> <?php 
					include_once('sanpham/sanpham.php');
				break;
			case 'them':
				?><h4>Quản Lý Sản Phẩm -> Thêm Sản Phẩm </h4><hr> <?php 
					include_once('sanpham/them.php');
				break;
			case 'sua':
				?><h4>Quản Lý Sản Phẩm -> Cap Nhap Sản Phẩm </h4><hr> <?php 
					include_once('sanpham/sua.php');
				break;	
			default:
					
				break;
		}
	}
?>