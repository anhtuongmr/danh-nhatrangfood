<div class="banner">
	<div id="slide1" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators nut-slider">
			<li data-target="#slide1" data-slide-to="0" class=""></li>
			<li data-target="#slide1" data-slide-to="1" class=""></li>
			<li data-target="#slide1" data-slide-to="2" class="active"></li>
		</ol>
		<div class="carousel-inner slide1-carousel-inner">
			<div class="item">
				<img src="public/images/slider01-compressor.jpg" alt="First slide">
				<div class="container">
					<div class="carousel-caption khung-slider">
						<h1>Chào mừng bạn đến với NhaTrangFoods</h1>
						<p>Thiên đường ăn uống</p>
					</div>
				</div>
			</div>
			<div class="item">
				<img src="public/images/slider02-compressed.jpg" alt="Second slide">
				<div class="container">
					<div class="carousel-caption khung-slider">
						<h1>Món ngon quán Việt</h1>
						<p>Khẳng đinh thương hiệu</p>
					</div>
				</div>
			</div>
			<div class="item active">
				<img src="public/images/slider03-compressed.jpg" alt="Third slide">
				<div class="container">
					<div class="carousel-caption khung-slider">
						<h1>Ăn uống no say, ưu đãi bất ngờ</h1>
						<p>Cùng nhau khám phá</p>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end slide -->
</div> <!-- end banner -->
<div class="top-restaurants">
	<div class="container">
		<div class="row tittle">
			<div class="title">Nhà hàng nổi bật
				<div class="sapxep">
					<select class="sapxep-select">
						<option value="volvo">Chất lượng</option>
						<option value="saab">Giá cả</option>
						<option value="opel">Vị trí</option>
						<option value="audi">Phục vụ</option>
						<option value="audi">Không gian</option>
					</select>
				</div>
			</div>
		</div>
		<div class="row nhahang-noibat">
			<?php foreach ($dsquanan as $row): ?>
				<div class="col-xs-12 col-sm-6 col-md-3 mp-2">
					<div class="restaurant">
						<img class="img-fluid" src="public/images/<?php echo $row['UrlHinhAnh'] ?>" alt="">
						<div class="restaurant-thongtin">
							<a href="?controller=chitiet&action=view&id=<?php echo $row['ID'] ?>" class="name"><?php echo $row['TenQuanAn'] ?></a>
							<button class="btn btn-primary btn-view btn-book">Đặt bàn</button>
						</div>
						
					</div> <!-- end restaurant -->
				</div> <!-- end col-xs-12 -->
			<?php endforeach ?>
		</div>
	</div> <!-- end row -->
</div> <!-- end container -->
</div> <!-- end top-restaurant -->
<div class="special-food">
	<div class="container">
		<div class="row tittle">
			<h2 class="title">Món ăn nổi bật</h2>
		</div>
		<div class="row monan-noibat">
			<?php foreach ($special_foods as $row): ?>
				<div class="col-xs-12 col-sm-4 col-md-3 mp-2">
					<div class="special-food-one">
						<div class="layer-gray"></div>
						<img class="img-fluid" src="public/images/<?php echo $row['UrlHinhAnh'] ?>" alt="">
						<div class="special-food-one-thongtin">
							<a href="" class="name"><?php echo $row['TenMon'] ?></a>
							<a href="" class="price"><?php echo $row['Gia'] ?></a>
						</div>
						
					</div> <!-- end special-food-one -->
				</div> <!-- end col-sm-3 -->
			<?php endforeach ?>
		</div> <!-- end row -->
	</div> <!-- end container -->
</div> <!-- end special-food -->

<div class="special-food special-drink">
	<div class="container">
		<div class="row tittle">
			<h2 class="title">Đồ uống nổi bật</h2>
		</div>
		<div class="row monan-noibat">
			<?php foreach ($special_drinks as $row): ?>
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
</div> <!-- end top-restaurant -->