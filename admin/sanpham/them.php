<hr class="badge-danger">
<form class="form-row " method="POST" action="sanpham/xuly.php" enctype="multipart/form-data">
    <div class="form-group col-3"><label for="masv">Mã Sản Phẩm</label><input type="text" class="form-control" name="masp"></div>
    <div class="form-group col-3"><label for="masv">Tên Sản Phẩm</label><input type="text" class="form-control" name="tensp"></div>
    <div class="form-group col-3"><label >Mã Thương Hiệu</label> 	<select name="math" class="form-control">
    <?php $sql1="select * from thuonghieu"; $rs1=mysqli_query($conn,$sql1); while ($row=mysqli_fetch_array($rs1)) { ?> 
   			<option value="<?php echo $row['MaTH'] ?>"><?php echo $row['MaTH'].' - '.$row['TenTH']; ?></option>
   		<?php } ?></select></div>

	<div class="form-group col-3"><label >Đơn Giá</label><input type="text" class="form-control" name="dongia" ></div>
  <div class="form-group col-3"><label >Só Lượng</label><input type="text" class="form-control" name="sl" ></div>
	<div class="form-group col-6"><label >Ảnh Nền</label> <input type="file" class="form-control" name="anhnen" ></div>
	<div class="form-group col-6"><label >Mô Tả</label><textarea class="form-control" name="mota"></textarea> </div>
  
    <div class="form-group col-2"><label for="mh">Màn hình</label><input type="text" class="form-control" name="mh"></div>
    <div class="form-group col-2"><label for="hdh">Hệ Điều Hành</label><input type="text" class="form-control" name="hdh"></div>
    <div class="form-group col-2"><label for="camt">Camera Trước</label>  <input type="text" class="form-control" name="camt"></div>
    <div class="form-group col-2"><label for="cams">Camera Sau</label><input type="text" class="form-control" name="cams"></div>
    <div class="form-group col-2"><label for="cpu">CPU</label><input type="text" class="form-control" name="cpu"></div>
    <div class="form-group col-2"><label for="ram">Ram</label><input type="text" class="form-control" name="ram"></div>
    <div class="form-group col-2"><label for="bnt">Bộ Nhớ Trong</label>  <input type="text" class="form-control" name="bnt"></div>
    <div class="form-group col-2"><label for="sim">Sim</label><input type="text" class="form-control" name="sim"></div>
    <div class="form-group col-2"><label for="pin">Pin</label><input type="text" class="form-control" name="pin"></div>
    <div class=" col-12  border " >
    <label >Màu :</label>
     <div class="form-group  " >
      <div class="btn-group  col-12 m-auto row">
        <?php $sql_mau="select * from mau"; $rs_mau=mysqli_query($conn,$sql_mau); while ($kq_mau=mysqli_fetch_array($rs_mau)) { ?>
          <div class=" custom-checkbox custom-control col-2 ">
              <input type="checkbox" class="custom-control-input" id="<?php echo $kq_mau['TenMau']; ?>" name="mau[]" value="<?php echo $kq_mau['TenMau']; ?>" <?php if($kq_mau['TenMau']==='none'){ echo "checked";  }?>>
              <label class="custom-control-label" for="<?php echo $kq_mau['TenMau']; ?>"><h5><?php echo $kq_mau['TenMau']; ?></h5></label>
          </div>
        <?php } ?>
    </div>
  </div>
  </div>
    


<div class="form-group col-sm-6 m-auto"><br>
	<input type="submit" class="form-control badge-info" value="Thêm" name="xlthem">
</div>
</form>
<hr><hr class="badge-danger">

