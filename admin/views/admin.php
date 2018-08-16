<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Trang quản trị nhatrangfood</title>
	<link rel="stylesheet" href="../public/css/reset.css">
	<link rel="stylesheet" href="../public/css/bootstrap.css">
	<link rel="stylesheet" href="../public/css/font-awesome.css">
	
	<link rel="stylesheet" href="public/css/slick.css">
	<link rel="stylesheet" type="text/css" href="../public/css/slick-theme.css">
	<link rel="stylesheet" href="../public/css/admin.css"></head>
	<body>

		<div class="wrapper">
			<header class="top-header">
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
							<a href=""><img class="img-fluid" src="../public/images/logo_nha_trang_foods.png" alt="" style="height: 100%; width: 49%"></a>
						</div>
						<div class="col-sm-6 text-center active">
							<h2>Trang quản trị</h2>
						</div>
						<div class="col-sm-3 text-right">
							Xin chào admin,  
						</div>
					</div>
				</div>
			</header>
			<div class="container content clearfix">
				<div class="row">
					<nav class="col-xs-2 menu-trai">
						<ul>
							<li><h3 class="menutrai-tieude">Quán ăn</h3></li>
							<li><a href="?controller=quanan&action=view" class="menutrai-link <?php echo ($_GET['controller'] === 'quanan' && $_GET['action'] === 'view' ) ? 'active' : null ?>">Danh sách quán ăn</a></li>
							<li><a href="?controller=quanan&action=insert" class="menutrai-link <?php echo ($_GET['controller'] === 'quanan' && $_GET['action'] === 'insert' ) ? 'active' : null ?>">Thêm quán ăn mới</a></li>
							<li><h3 class="menutrai-tieude">Món ăn</h3></li>
							<li><a href="" class="menutrai-link">Danh sách món ăn</a></li>
							<li><a href="" class="menutrai-link">Thêm món ăn mới</a></li>
							<li><h3 class="menutrai-tieude">Khách hàng</h3></li>
							<li><a href="" class="menutrai-link">Danh sách khách hàng</a></li>
							<li><a href="" class="menutrai-link">Thêm khách hàng</a></li>
							<li><h3 class="menutrai-tieude">Thống kê đặt bàn</h3></li>
							<li><a href="" class="menutrai-link">Danh sách đặt bàn</a></li>
							<li><a href="" class="menutrai-link">Xử lý đặt bàn</a></li>
							<li><h3 class="menutrai-tieude">Thêm hình ảnh quán ăn</h3></li>
							<li><a href="" class="menutrai-link">Thêm mới hình ảnh quán ăn</a></li>
						</ul>
					</nav>
					<main class="col-xs-9 main-content">
						<?php require_once 'routes.php' ?>
					</main>
				</div>	
			</div>
			<footer class="footer">
				footer
			</footer>
		</div>

		<script type="text/javascript" src="../public/js/bootstrap.js"></script>
		<script type="text/javascript" src="../public/js/jquery-1.12.3.min.js"></script>
		<script type="text/javascript" src="../public/js/slick.js"></script>
		<script type="text/javascript" src="../public/js/admin.js"></script>
		<script type="text/javascript" src="../public/plugin/ckeditor/ckeditor.js"></script>
	</body>
	</html>

