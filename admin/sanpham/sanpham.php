

			<div class="form-row m-auto">
				 <div class="form-group col-sm-1"></div>
                 <div class="form-group col-sm-4">
                   <form action="index.php?action=sanpham&view=sanpham" method="POST">
	                  <div class="input-group ">
	                       <input class="form-control py-2 border-left-0 border search " type="search" placeholder="Nhập sản phẩm cần tìm" id="example-search-input" name="tk"/>
	                    <span class="input-group-append">
	                        <button class="btn btn-outline-success border-left-0  search " name="btsearch" type="submit">Tìm kiếm</button>
	                    </span>
	                  </div>
             		</form>
           		 </div>
           	</div><hr>
           <form action="index.php?action=sanpham&view=sanpham" method="POST">
	            <div class="form-row m-auto">
	            	<?php $sql="select *from thuonghieu";$rs=mysqli_query($conn,$sql);while ($row=mysqli_fetch_array($rs)) {?>
		            	 <div class="form-group col-xl-2"><button class="btn" value="<?php echo $row['MaTH'] ?>" type="submit" name="th"><?php echo $row['TenTH'] ?></button></div><?php }?>
	            </div>
	        </form><hr>

<?php 
// code tìm kiếm
if(isset($_POST['btsearch'])){
	$tk=$_POST['tk'];
	$sql="select * from sanpham where TenSP like N'%$tk%' order by MaTH DESC";
	$rs=mysqli_query($conn,$sql); ?>
		<table class="table-hover table text-center">
			<thead>
				<tr class="badge-info">
						<th>Hình Nền</th><th>Mã Sản Phẩm</th><th>Tên Sản Phẩm</th><th>Thương hiệu</th><th>Đơn Giá</th><th>Mô Tả</th><th>Số Lượng</th><th colspan="2" class="badge-danger" ></th>
				</tr>
			</thead>
<?php $i=0; while ($row=mysqli_fetch_array($rs)) {$i=$i+1;$mth=$row['MaTH'];$sql1="select *from thuonghieu where MaTH='$mth'";
					$rs1=mysqli_query($conn,$sql1);$row1=mysqli_fetch_array($rs1);?>
		<tbody>
				<tr>
					<td><img  src="hinhanh/sanpham/<?php echo $row['AnhNen'];?>" width="60" height="50"></td>
					<td><?php echo $row['MaSP'] ;?></td><td><?php echo $row['TenSP'] ;?></td><td><?php echo $row1['TenTH'] ;?></td>
					<td><?php echo number_format($row['DonGia']).' đ' ;?></td><td><button class="btn" title="<?php echo $row['MoTa'];?>">---</button></td><td><?php echo $row['SoLuong'] ;?></td>
					<td><a href="sanpham/xuly.php?masp=<?php echo $row['MaSP'] ?>&xoa" >xóa</a></td>
					<td><a href="index.php?action=sanpham&view=sua&masp=<?php echo $row['MaSP'] ?>&sua" >sửa</a></td>
				</tr>
			</tbody>
	
<?php } ?>
		</table><?php 
}
//
//code phẩn loại sản phẩm + phẩn trang.
if(isset($_POST['th'])){//nếu như bấm vài nút thương hiệu
	$mth=$_POST['th'];?><div><?php 
	// code phẩn trang
	if(isset($_POST['trang'])){ // kiểm tra đang ở trang mấy
        $trang=$_POST['trang'];
    }else{ $trang=1;}
    $from =($trang-1)*5; // xem có bn trang
    $sql="select * from sanpham where  MaTH ='$mth'  LIMIT $from,5"; // mỗi trang hiển thị được 10 sản phẩm
	$rs=mysqli_query($conn,$sql);?>

		<table class="table-hover table text-center">
			<thead>
				<tr class="badge-info">
						<th>Hình Nền</th><th>Mã Sản Phẩm</th><th>Tên Sản Phẩm</th><th>Thương hiệu</th><th>Đơn Giá</th><th>Mô Tả</th><th>Số Lượng</th><th colspan="2" class="badge-danger" ></th>
				</tr>
			</thead>
<?php $i=0; while ($row=mysqli_fetch_array($rs)) {$i=$i+1;$mth=$row['MaTH'];$sql1="select *from thuonghieu where MaTH='$mth'";
					$rs1=mysqli_query($conn,$sql1);$row1=mysqli_fetch_array($rs1);?>
		<tbody>
				<tr>
					<td><img  src="hinhanh/sanpham/<?php echo $row['AnhNen'];?>" width="60" height="50"></td>
					<td><?php echo $row['MaSP'] ;?></td><td><?php echo $row['TenSP'] ;?></td><td><?php echo $row1['TenTH'] ;?></td>
					<td><?php echo number_format($row['DonGia']).' đ' ;?></td><td><button class="btn" title="<?php echo $row['MoTa'];?>">---</button></td><td><?php echo $row['SoLuong'];?></td>
					<td><a href="sanpham/xuly.php?masp=<?php echo $row['MaSP'] ?>&xoa" >xóa</a></td>
					<td><a href="index.php?action=sanpham&view=sua&masp=<?php echo $row['MaSP'] ?>&sua" >sửa</a></td>
				</tr>
			</tbody>
	
<?php } ?>
		</table>
		 <?php  //code phân trang..hiển thị số trang sở dưới web
            $ds_spnb="select * from sanpham where  MaTH ='$mth'";
            $query_dssp2=mysqli_query($conn,$ds_spnb);
            $sosp=mysqli_num_rows($query_dssp2);
            $sotrang = ceil($sosp/5); ?> </div>
            <ul class="pagination justify-content-center">
         <?php for($x=1;$x<=$sotrang;$x++){ ?>
        <form action="index.php?action=sanpham&view=sanpham" method="post" accept-charset="utf-8">
			<li class="page-item"><button class="page-link" type="sub" name="th" value="<?php echo $mth ?>"><?php echo $x ;?></button></li>
			<input hidden name="trang" value="<?php echo $x ;?>">
		</form>
 			
          <?php } ?>
      </ul>
      <hr><?php 	
}