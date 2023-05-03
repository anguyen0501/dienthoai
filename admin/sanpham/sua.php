<?php $masp=$_GET['masp'];
$sql123="select * from sanpham where MaSP='$masp'";
 $rs123=mysqli_query($conn,$sql123);
 $row123=mysqli_fetch_array($rs123);
 $sql1234="select * from thongtinsp where MaSP='$masp'";
 $rs1234=mysqli_query($conn,$sql1234);
 $row1234=mysqli_fetch_array($rs1234); ?>
<hr class="badge-danger">
<form class="form-row " method="POST" action="sanpham/xuly.php" enctype="multipart/form-data">
    <div class="form-group col-3"><label for="masv">Mã Sản Phẩm</label><input type="text" class="form-control" value="<?php echo $row123['MaSP'] ?>" name="masp"></div><input type="text" hidden value="<?php echo $row123['MaSP'] ?>" name="masp1">
    <div class="form-group col-3"><label for="masv">Tên Sản Phẩm</label><input type="text" class="form-control" value="<?php echo $row123['TenSP'] ?>" name="tensp"></div>
    <div class="form-group col-3"><label >Mã Thương Hiệu</label> 	<select name="math" class="form-control">
    <?php $sql1="select * from thuonghieu"; $rs1=mysqli_query($conn,$sql1); while ($row=mysqli_fetch_array($rs1)) { ?> 
   			<option  <?php if($row123['MaTH']===$row['MaTH']){echo "selected";} ?> value="<?php echo $row['MaTH'] ?>"><?php echo $row['MaTH'].' - '.$row['TenTH']; ?></option>
   		<?php } ?></select></div>

	<div class="form-group col-3"><label >Đơn Giá</label><input type="text" class="form-control" value="<?php echo $row123['DonGia'] ?>" name="dongia" ></div>
  <div class="form-group col-3"><label >Số Lượng</label><input type="text" class="form-control" value="<?php echo $row123['SoLuong'] ?>" name="sl" ></div>
	<div class="form-group col-6"><label >Ảnh Nền</label> <input type="file"  class="form-control" name="anhnen" ></div>
	<div class="form-group col-6"><label >Mô Tả</label><textarea class="form-control"  name="mota"><?php echo $row123['MoTa'] ?></textarea> </div>

    <div class="form-group col-2"><label for="mh">Màn hình</label><input type="text" class="form-control" value="<?php echo $row1234['ManHinh'] ?>" name="mh"></div>
    <div class="form-group col-2"><label for="hdh">Hệ Điều Hành</label><input type="text" class="form-control" value="<?php echo $row1234['HDH'] ?>" name="hdh"></div>
    <div class="form-group col-2"><label for="camt">Camera Trước</label>  <input type="text" class="form-control" value="<?php echo $row1234['CameraT'] ?>" name="camt"></div>
    <div class="form-group col-2"><label for="cams">Camera Sau</label><input type="text" class="form-control"  value="<?php echo $row1234['CameraS'] ?>" name="cams" ></div>
    <div class="form-group col-2"><label for="cpu">CPU</label><input type="text" class="form-control"  value="<?php echo $row1234['CPU'] ?>" name="cpu"></div>
    <div class="form-group col-2"><label for="ram">Ram</label><input type="text" class="form-control"  value="<?php echo $row1234['Ram'] ?>" name="ram"></div>
    <div class="form-group col-2"><label for="bnt">Bộ Nhớ Trong</label>  <input type="text" class="form-control"  value="<?php echo $row1234['BoNhoTrong'] ?>" name="bnt"></div>
    <div class="form-group col-2"><label for="sim">Sim</label><input type="text" class="form-control"  value="<?php echo $row1234['Sim'] ?>" name="sim"></div>
    <div class="form-group col-2"><label for="pin">Pin</label><input type="text" class="form-control"  value="<?php echo $row1234['Pin'] ?>" name="pin"></div>
    <div class=" col-12  border " >
    <label >Màu :</label>
     <div class="form-group  " >
     <div class="btn-group col-12 row">
        <?php $sql_mau="select * from mau"; $rs_mau=mysqli_query($conn,$sql_mau);
         while ($kq_mau=mysqli_fetch_array($rs_mau)){$mm=$kq_mau['TenMau'];$sql_mau2="select Mau from chitietmausp where MaSP='$masp' and Mau='$mm'";
            $rs_mau2=mysqli_query($conn,$sql_mau2);?>
          <div class=" custom-checkbox custom-control col-2 ">
            <input type="checkbox" class="custom-control-input" id="<?php echo $kq_mau['TenMau']; ?>" name="mau[]" value="<?php echo $kq_mau['TenMau']; ?>" <?php  while ($kq_mau2=mysqli_fetch_array($rs_mau2)) {if($kq_mau['TenMau']===$kq_mau2['Mau']){ echo "checked";  }}?>>
              <label class="custom-control-label" for="<?php echo $kq_mau['TenMau']; ?>"><h5><?php echo $kq_mau['TenMau']; ?></h5></label>
          </div>
        <?php }    ?>
    </div>
  </div>
  </div>
    


<div class="form-group col-sm-6 m-auto"><br>
	<input type="submit" class="form-control badge-info" value="Sửa" name="xlsua">
</div>
</form>
<hr><hr class="badge-danger">

