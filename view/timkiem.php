<?php 
//tìm kiếm theo từ khóa
if(isset($_POST['btsearch'])){
	$tukhoa=$_POST['search'];
 	$sql="SELECT * FROM `sanpham` WHERE `TenSP` LIKE N'%".$tukhoa."%'";
      $rs=mysqli_query($conn, $sql);?>

 <!-- item -->
<div class="container-fluid ">
  <hr class="mar-l-r">
   <h5 class="mar-l-r">KẾT QUẢ TÌM KIẾM TỪ KHÓA : '<?php echo $tukhoa ?>' </h5>
    <div class="row mar-l-r " >
      <?php while ($row=mysqli_fetch_array($rs)) {?>
      <div class="col-md-3 bor">
        <a href="index.php?view=chitietsanpham&masp=<?php echo $row['MaSP'] ?>" class="card-link">
        <div ><center>
            <img class="item-img " src="admin/hinhanh/sanpham/<?php echo $row['AnhNen'] ?>" ></center>
        
          <span><?php echo $row['TenSP'] ?></span>
          <h6><?php echo  number_format($row['DonGia']).' ₫' ?></h6>
        </div></a>
      </div><?php }?>
    </div>
</div>
<?php }
// tìm kiếm theo danh mục 
if(isset($_GET['madm'])){
	$madm=$_GET['madm'];
	$ten=$_GET['ten'];
 	$sql="SELECT * FROM `sanpham` WHERE `MaDM`=(select MaDM from danhmuc where MaDM=$madm)";
      $rs=mysqli_query($conn, $sql);?>

 <!-- item -->
<div class="container-fluid ">
  <hr class="mar-l-r">
   <h5 class="mar-l-r"><?php echo mb_strtoupper($ten, 'UTF-8') ?> </h5>
    <div class="row mar-l-r " >
      <?php while ($row=mysqli_fetch_array($rs)) {?>
      <div class="col-md-3 bor">
        <a href="index.php?view=chitietsanpham&masp=<?php echo $row['MaSP'] ?>" class="card-link">
        <div ><center>
            <img class="item-img " src="admin/hinhanh/sanpham/<?php echo $row['AnhNen'] ?>" ></center>
        
          <span><?php echo $row['TenSP'] ?></span>
          <h6><?php echo  number_format($row['DonGia']).' ₫' ?></h6>
        </div></a>
      </div><?php }?>
    </div>
</div>
<?php }

//tìm kiếm theo hãng
if(isset($_GET['mahang'])){
	$mahang=$_GET['mahang'];
	$ten=$_GET['ten'];
 	$sql="SELECT * FROM `sanpham` WHERE `MaTH`=(select MaTH from thuonghieu where MaTH=$mahang)";
      $rs=mysqli_query($conn, $sql);?>

 <!-- item -->
<div class="container-fluid ">
  <hr class="mar-l-r">
   <h5 class="mar-l-r"><?php echo 'ĐIỆN THOẠI '.mb_strtoupper($ten, 'UTF-8') ?> </h5>
    <div class="row mar-l-r " >
      <?php while ($row=mysqli_fetch_array($rs)) {?>
      <div class="col-md-3 bor">
        <a href="index.php?view=chitietsanpham&masp=<?php echo $row['MaSP'] ?>" class="card-link">
        <div ><center>
            <img class="item-img " src="admin/hinhanh/sanpham/<?php echo $row['AnhNen'] ?>" ></center>
        
          <span><?php echo $row['TenSP'] ?></span>
          <h6><?php echo  number_format($row['DonGia']).' ₫' ?></h6>
        </div></a>
      </div><?php }?>
    </div>
</div>
<?php }

?>      
       <!-- end item -->
