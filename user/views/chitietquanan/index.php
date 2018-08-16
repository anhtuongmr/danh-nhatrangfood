<div class="chitietquanan">
	<div class="chitietquanan-menu">
		<ul class="container">
			<li><a class="nav-link" href="">Trang chủ</a></li>
			<li><a class="nav-link" href="">Thực đơn</a></li>
			<li><a class="nav-link" href="">Bản đồ</a></li>
			<li><a class="nav-link" href="">Bình luận</a></li>
		</ul>
	</div>
	<div class="container chitietquan-thongtin">
		<div class="col-sm-4 chitietquanan-image clearfix">
			<img src="public/images/<?php echo $image['UrlHinhAnh'] ?>" alt="">
		</div>
		<div class="col-sm-8 chitietquanan-thongtin">
			<h3 class="name"><?php echo $quanan['TenQuanAn'] ?></h3>
			<div class="row evaluate">
				<div class="col-sm-2">
					<p class="number">
						<?php echo $danhgia['ChatLuong'] ?>
					</p>
					<p class="text">
						Chất lượng
					</p>
				</div>
				<div class="col-sm-2">
					<p class="number">
						<?php echo $danhgia['GiaCa'] ?>
					</p>
					<p class="text">
						Giá cả
					</p>
				</div>
				<div class="col-sm-2">
					<p class="number">
						<?php echo $danhgia['ViTri'] ?>
					</p>
					<p class="text">
						Vị trí
					</p>
				</div>
				<div class="col-sm-2">
					<p class="number">
						<?php echo $danhgia['PhucVu'] ?>
					</p>
					<p class="text">
						Phục vụ
					</p>
				</div>
				<div class="col-sm-2">
					<p class="number">
						<?php echo $danhgia['KhongGian'] ?>
					</p>
					<p class="text">
						không gian
					</p>
				</div>
			</div> <!-- end row evaluate -->
			<p class="address"><i class="fa fa-location-arrow icon-thongtin" aria-hidden="true"></i> <?php echo $quanan['DiaChi'] ?></p>
			<p class="gio-hoat-dong">
				<i class="fa fa-clock-o icon-thongtin" aria-hidden="true"></i> <?php echo $quanan['GioHoatDong'] ?>
			</p>
			<p class="price">
				<i class="fa fa-money icon-thongtin" aria-hidden="true"></i> 10.000đ - 200.000đ
			</p>
		</div>
	</div>
</div>
<div class="special-food monan-phothong">
	<div class="container">
		<div class="row tittle">
			<h2 class="title">Thực đơn</h2>
		</div>
		<div class="row">
			<?php foreach ($dsmon as $row): ?>
				<div class="col-xs-12 col-sm-4 col-md-3 mp-2">
					<div class="special-food-one">
						<div class="layer-gray"></div>
						<img class="img-fluid" src="public/images/<?php echo $row['UrlHinhAnh'] ?>" alt="">
						<a href="" class="name"><?php echo $row['TenMon'] ?></a>
					</div> <!-- end special-food-one -->
				</div> <!-- end col-sm-3 -->
			<?php endforeach ?>
		</div> <!-- end row -->
	</div> <!-- end container -->
</div> <!-- end special-food -->
<div class="container bando">
	<h2>Bản đồ</h2>
	<div class="row">
		<div class="col-sm-9">
			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3898.8755337712787!2d109.19247311437665!3d12.25670123347805!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3170678583ee2ced%3A0x6a6533edd8081dbf!2zTmjDoCBIw6BuZyBM4bqhYyBD4bqjbmg!5e0!3m2!1svi!2s!4v1496654759130" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
		</div>
		<div class="col-sm-3">
			
		</div>
	</div>
	
</div>
<div class="container binhluan">
	<h2>Bình luận</h2>
	<div class="row">
		<div class="col-sm-6 khung-binhluan">
			<div class="nhap-binhluan">
				<textarea class="binhluan" placeholder="Viết bình luận..." name="" form="id" id="" cols="76%" rows="2"></textarea>
				<button class="btn btn-primary">Bình luận</button>
			</div>
			<div class="hienthi-binhluan clearfix">
				<?php 
				foreach ($binhluan as $row) {
					?>
					<h3 class="hienthi-binhluan-tieude">
						<?php echo $row['TenDangNhap'] ?>
					</h3>
					<p class="hienthi-binhluan-noidung">
						<?php echo $row['BinhLuan'] ?>
					</p>
					<?php
				}
				?>
			</div>
			
		</div>
		<div class="col-sm-6">
		</div>
	</div>

</div>