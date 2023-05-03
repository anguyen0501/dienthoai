
<form class="form-row " method="GET" action="khuyenmai/xuly.php" enctype="multipart/form-data">
	<div class="form-group col-sm-4">
		<label class="m-auto" for="th">Tên khuyến mãi</label><input type="text" class="form-control" name="tkm" required>
	</div>
    <div class="form-group col-sm-4">
    	<label class="m-auto" for="th">Ngày bắt đầu</label><input type="date" class="form-control" name="nbd" required>
    </div>
    <div class="form-group col-sm-4">
    	<label class="m-auto" for="th">Ngày kết thúc</label><input type="date" class="form-control" name="nkt" required>
    </div>
	<div class="form-group col-sm-4">
		<label class="m-auto" for="th">Trị Giá</label><input type="text" class="form-control" name="tg" required>
	</div>
    <div class="form-group col-sm-8">
    	<label class="m-auto" for="th">Mô Tả</label><textarea class="form-control" name="mt" required></textarea>
    </div>

	<div class="form-group col-sm-4 "></div>
    <div class="form-group col-sm-3 "><label for="masv">&emsp;</label><input type="submit" class="form-control badge-info" name="them" value="Thêm"></div>
    <hr>	
 </form>