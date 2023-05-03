<?php 
    $id=$_GET['id'];
    $sql_sua="SELECT * FROM `thuonghieu` WHERE MaTH=$id";
    $rs_sua=mysqli_query($conn,$sql_sua);
    $kq_sua=mysqli_fetch_array($rs_sua)?>
  <form class="form-row " method="GET" action="thuonghieu/xuly.php" enctype="multipart/form-data">
	 <div class="form-group col-sm-4"></div><input hidden name="id" value="<?php echo $kq_sua['MaTH'];?>">
    <div class="form-group col-sm-3"><label class="m-auto" for="mamau">Tên Thương Hiệu</label>
    	<input type="text" class="form-control" name="th" autofocus value="<?php echo $kq_sua['TenTH'];?>"></div>
    <div class="form-group col-sm-5"></div> <div class="form-group col-sm-4"></div>
    <div class="form-group col-sm-3"><label for="masv">&emsp;</label><input type="submit" class="form-control badge-info" name="suamau" value="Cập Nhập"></div>
    <hr>	
 </form><hr class=" badge-danger">
