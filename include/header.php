<div class="container-fluid mc">
	<div class="row mar-l-r badge-light">
		<div class="col-lg-4 ">
			<a href="index.php?view=trangchu" ><img class="logo" src="include/logo.png" ></a>
		</div>
		<div class="col-5 sea">
			<form action="index.php?view=timkiem" method="POST">
                <div class="input-group ">
                       <input class="form-control py-2 border-left-0 border search " type="search" placeholder="Tìm kiếm sản phẩm" id="example-search-input" name="search"/>
                        <span class="input-group-append">
                          <button class="btn btn-outline-success border-left-0  search " name="btsearch" type="submit"><i class="fas fa-search"></i></button>
                       </span>
                 </div>
             </form>
		</div>
		<div class="col-3">
			<div class="text-center  info ">
				<h6 >Tổng đài (7:00 - 20:30)</h6>
				<h5 class=" text-danger">0328 006 072</h5>
			</div>
			
		</div>
	</div>
</div>
<div class="">
	<div class="row mar-l-r ">
		<div class="col-12">
		<nav class="navbar navbar-expand-sm navbar-dark bg-primary">
        
 
         <!-- Left -->
         <ul class="navbar-nav mr-auto">
           
             <li class="nav-item dropdown ">
               <a class="navbar-brand dropdown-toggle font1" href="#" id="navbardrop" data-toggle="dropdown">
               	DANH MỤC SẢN PHẨM
               </a>
               <div class="dropdown-menu">
               	<?php $sql="select *from danhmuc";$rs=mysqli_query($conn,$sql);while ($row=mysqli_fetch_array($rs)) {?>
               		<a href="index.php?view=timkiem&madm=<?php echo $row['MaDM'] ?>&ten=<?php echo $row['TenDM'] ?>" class="dropdown-item font1" href="#"><?php echo $row['TenDM'] ?></a>
                  
            <?php	}?>
                  
               </div>
            </li>
             <li class="nav-item">
               <a href="index.php?view=khuyenmai" class="navbar-brand font1">SẢN PHẨM KHUYỄN MÃI</a>
            </li>
         </ul>
         <!-- Right -->
         <ul class="navbar-nav ml-auto">
           <li class="nav-item logogh">

             	<a class="navbar-brand font1" href="index.php?view=giohang">
              	  	<i class="fas fa-shopping-cart"></i>&nbsp; Giỏ hàng&nbsp;
              	  	<?php $dem=0;
                        if(isset($_SESSION['gio_hang'])){
                          foreach ($_SESSION['gio_hang'] as $item_cart){
                            $dem2=$item_cart['SoLuong'];
                            $dem=$dem+$dem2;
                          }
                    }?>
                      <span   class="badge badge-primary"><?php echo  $dem;?></span>
              	  	
           		</a>
           </li>
           <li class="nav-item" >
           	<?php if(isset($_SESSION['kh_login'])){$kh=$_SESSION['kh_login'];
           			 echo '<a class="navbar-brand font1" href="logout.php">Hi,'.$kh['TenKH'].' (logout)</a>';}else{
           			 echo '<a class="navbar-brand font1" href="login.php">Đăng Nhập</a>';
           			 } ?>
              
           </li>
         </ul>
      </nav>
 
		</div>
		
	</div>
</div>
	
<div class="mr1">
	<div class="row mar-l-r ">
		<div id="myCarousel" class="carousel slide col-12 " data-ride="carousel">
   <!-- Indicators -->
		   <ol class="carousel-indicators">
		      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      <li data-target="#myCarousel" data-slide-to="1"></li>
		      <li data-target="#myCarousel" data-slide-to="2"></li>
		      <li data-target="#myCarousel" data-slide-to="3"></li>
		   
		   </ol>
		   <div class="carousel-inner  ">
		      <div class="carousel-item active">
		         <img class="d-block  slide banner" src="include/img/1.PNG" alt="Leopard">
		      </div>
		      <div class="carousel-item">
		         <img class="d-block  slide banner" src="include/img/2.png" alt="Cat">
		      </div>
		      <div class="carousel-item">
		         <img class="d-block  slide banner" src="include/img/3.png" alt="Cat">
		      </div>
		      <div class="carousel-item">
		         <img class="d-block  slide banner" src="include/img/4.png" alt="Cat">
		      </div>
		      
		   </div>
		   <!-- Controls -->
		   <a class="carousel-control-prev " href="#myCarousel" role="button" data-slide="prev">
		     <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		     <span class="sr-only">Previous</span>
		   </a>
		   <a class="carousel-control-next " href="#myCarousel" role="button" data-slide="next">
		     <span class="carousel-control-next-icon" aria-hidden="true"></span>
		     <span class="sr-only">Next</span>
		   </a>
		</div>
		
	</div>
</div>

