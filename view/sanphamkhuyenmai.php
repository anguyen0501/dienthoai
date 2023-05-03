<div class="container-fluid ">
  <hr class="mar-l-r">
   <h5 class="mar-l-r">SẢN PHẨM KHUYẾN MÃI</h5>
    <div class="row mar-l-r " >
      <?php 
        $sql1="SELECT * FROM `sanphamkhuyenmai`";
        $rs1=mysqli_query($conn, $sql1);
        while ($kq=mysqli_fetch_array($rs1))  {
            $masp=$kq['MaSP'];$makm=$kq['MaKM'];
            $sql="select *from sanpham where MaSP='$masp'";
            $rs=mysqli_query($conn, $sql);
            $row=mysqli_fetch_array($rs);
            $sql2="select *from khuyenmai where MaKM='$makm'";
            $rs2=mysqli_query($conn, $sql2);
            $t=0;
            while ($row2=mysqli_fetch_array($rs2)) {
               $t=$t+$row2['TriGia'];
             } ?>
              <div class="col-3 bor">
                <a href="index.php?view=chitietsanpham&masp=<?php echo $row['MaSP'] ?>" class="card-link">
                <div ><center>
                    <img class="item-img " src="admin/hinhanh/sanpham/<?php echo $row['AnhNen'] ?>" ></center>
                  <span><?php echo $row['TenSP'] ?></span>
                  <h6 style="font-size: 12px;"><strike><?php echo  number_format($row['DonGia']).' ₫' ?></strike></h6>
                  <h6 ><mark class="text-danger"><?php echo  number_format(($row['DonGia']-$t)).' ₫' ?></mark></h6>
                </div></a>
              </div>
<?php  } ?>
   
    </div>
</div>
