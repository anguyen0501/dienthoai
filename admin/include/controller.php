
  <div class="col-10">
    <?php
      if(isset($_GET['action'])){
          $action=$_GET['action'];
          switch ($action) {
                    case 'logout':  
                        header('location:logout.php');
                    case 'sanpham':
                        include('sanpham/main.php');
                        break;
                     case 'mau':
                        include('mau/main.php');
                        break;
                    case 'thuonghieu':
                        include('thuonghieu/main.php');
                        break; 
                    case 'khuyenmai':
                        include('khuyenmai/main.php');
                        break;  
                    case 'donhang':
                        include('donhang/main.php');
                        break;
                    case 'giaohang':
                        include('giaohang/main.php');
                        break;
                    case 'danhthu':
                        include('danhthu/main.php');
                        break;
                    case 'baohanh':
                        include('baohanh/main.php');
                        break;                        
                    default:
                         
                        break;
                }
      }
      else {
          include_once('a.php');
      }

    ?>
  </div>
