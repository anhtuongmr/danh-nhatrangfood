<h1>Thêm quán ăn mới</h1>
<form action="?controller=quanan&action=insert" method="POST">
	<div class="container">
		<div class="row">
			<div class="col-sm-6">
				<div class="form-group">
					<label>Tên quán</label>
					<input class="form-control" name="tenquanan" placeholder="Nhập tên quán">
				</div>
				<div class="form-group">
					<label>Địa chỉ</label>
					<input class="form-control" name="diachi" placeholder="Nhập địa chỉ">
				</div>
				<div class="form-group">
					<label>Giờ hoạt động</label>
					<input class="form-control" name="giohoatdong" placeholder="Nhập giờ hoạt động">
				</div>
				<div class="form-group">
					<label>View</label>
					<input class="form-control" name="view" placeholder="">
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
					<input class="form-control" name="sodienthoai" placeholder="Nhập số điện thoại">
				</div>
				<div class="form-group">
					<label>Email</label>
					<input class="form-control" name="email" placeholder="Nhập email">
				</div>
				<div class="form-group">
					<label>Facebook</label>
					<input class="form-control" name="facebook" placeholder="Nhập facebook">
				</div>
				<div class="form-group">
					<label>Website</label>
					<input class="form-control" name="website" placeholder="Nhập website">
				</div>
				<div class="form-group">
					<label>Bản đồ</label>
					<input class="form-control" name="bando" placeholder="">
				</div>
			</div>
			<div class="col-sm-12">
				<label>Giới thiệu chung</label>
				<textarea  id="gioithieuchung" name="gioithieuchung" class="ckeditor" cols="50" rows="10"></textarea> </br>
				<input type="submit" name="submit" class="btn btn-primary" value="Submit">
			</div>
		</div>
	</div>
</form>