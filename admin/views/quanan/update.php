<h1>Sửa thông tin quán ăn mới</h1>
<form action="?controller=quanan&action=update&id=<?php echo $quanan['ID']; ?>" method="POST">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label>Tên quán</label>
					<input class="form-control" name="tenquanan" placeholder="Nhập tên quán" value="<?php echo $quanan['TenQuanAn']; ?>">
				</div>
				<div class="form-group">
					<label>Địa chỉ</label>
					<input class="form-control" name="diachi" value="<?php echo $quanan['DiaChi']; ?>" placeholder="Nhập địa chỉ">
				</div>
				<div class="form-group">
					<label>Giờ hoạt động</label>
					<input class="form-control" name="giohoatdong" placeholder="Nhập giờ hoạt động" value="<?php echo $quanan['GioHoatDong']; ?>">
				</div>
				<div class="form-group">
					<label>View</label>
					<input class="form-control" name="view" placeholder="" value="<?php echo $quanan['View']; ?>">
				</div>
				<div class="form-group">
					<label>Phường</label>
					<select class="form-control" name="id_phuongxa">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
			</div>
			<div class="col-sm-6">
				<div class="form-group">
					<label>Số điện thoại</label>
					<input class="form-control" name="sodienthoai" placeholder="Nhập số điện thoại" value="<?php echo $quanan['SoDienThoai']; ?>">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input class="form-control" name="email" placeholder="Nhập email" value="<?php echo $quanan['Email']; ?>">
				</div>
				<div class="form-group">
					<label>Facebook</label>
					<input class="form-control" name="facebook" placeholder="Nhập facebook" value="<?php echo $quanan['Facebook']; ?>">
				</div>
				<div class="form-group">
					<label>Website</label>
					<input class="form-control" name="website" placeholder="Nhập website" value="<?php echo $quanan['Website']; ?>">
				</div>
				<div class="form-group">
					<label>Bản đồ</label>
					<input class="form-control" name="bando" placeholder="" value="<?php echo $quanan['BanDo']; ?>">
				</div>
			</div>
			<div class="col-sm-12">
				<label>Giới thiệu chung</label>
				<textarea  id="gioithieuchung" name="gioithieuchung" class="ckeditor" cols="50" rows="10"><?php echo $quanan['GioiThieuChung']; ?></textarea> </br>
				<input type="submit" name="submit" class="btn btn-primary" value="Lưu thay đổi">
			</div>
		</div>
	</div>
</form>