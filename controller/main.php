<?php 

// view
	if(isset($_GET['view'])){
		$view=$_GET['view'];
			switch ($view) {
                case 'trangchu':
                    include('view/content.php');
                    break;
               
              	case 'timkiem':
              			include('view/timkiem.php');
                     break;

                case 'chitietsanpham': 
                    include('view/chitietsanpham.php');
                     break;

                case 'giohang': 
                    include('view/giohang.php');
                     break;
                case 'thanhtoan': 
                    include('view/thanhtoan.php');
                     break;   
                case 'ths': 
                    include('view/camon.php');
                     break;
                case 'khuyenmai': 
                    include('view/sanphamkhuyenmai.php');
                     break;
                 
                default:
                      include('view/content.php'); 
                      break;  

                          
        	}

	}
if(!isset($_GET['view'])){
    if(!isset($_GET['action'])){
        include_once('view/content.php'); 
    }
  }

  // xử lý
  if(isset($_GET['action'])){
    $action=$_GET['action'];
      switch ($action) {
                case 'binhluan':
                    include_once('controller/xulybinhluan.php');
                    break;
                case 'themgiohang':
                    include_once('giohang/cart_update.php');
                    break;
                case 'muahang':
                    include_once('giohang/cart_update.php');
                    break; 
                case 'dathang':
                    include_once('controller/xulydathang.php');
                    break;    
                 
          }
  }
?>
