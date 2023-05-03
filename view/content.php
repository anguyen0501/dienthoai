<?php $sql="select *from sanpham where MaDM=(select MaDM from danhmuc where TenDM='Sản Phẩm Nổi Bật')";
      $rs=mysqli_query($conn, $sql)?>

 <!-- item -->
<div class="container-fluid ">
  <hr class="mar-l-r">
   <h5 class="mar-l-r">ĐIỆN THOẠI NỔI BẬT NHẤT</h5>
    <div class="row mar-l-r " >
      <?php while ($row=mysqli_fetch_array($rs)) {?>
      <div class="col-3 bor">
        <a href="index.php?view=chitietsanpham&masp=<?php echo $row['MaSP'] ?>" class="card-link">
        <div ><center>
            <img class="item-img " src="admin/hinhanh/sanpham/<?php echo $row['AnhNen'] ?>" ></center>
        
          <span><?php echo $row['TenSP'] ?></span>
          <h6><?php echo  number_format($row['DonGia']).' ₫' ?></h6>
        </div></a>
      </div><?php }?>
    </div>
</div>
        
       <!-- end item -->