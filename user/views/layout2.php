<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>My website</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">  
	<link rel="stylesheet" href="public/css/reset.css">
	<link rel="stylesheet" href="public/css/bootstrap.css">
	<link rel="stylesheet" href="public/css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	
	<link rel="stylesheet" href="public/css/slick.css">
	<link rel="stylesheet" type="text/css" href="public/css/slick-theme.css">
	<link rel="stylesheet" href="public/css/home.css">

</head>
<body>
	<div class="top-header">
		<div class="container">
			<div class="row text-text">
				<div class="col-sm-6 text-left text-trai">
					<p>Địa điểm ăn uống Nha Trang</p>
				</div>
				<div class="col-sm-6 text-right text-phai">
					<i class="fa fa-phone-square" aria-hidden="true"></i>
					Hotline: 097 777 888
				</div>
			</div>
		</div>
	</div>
	<div class="top-menu">
		<nav class="navbar navbar-default my-navbar" role="navigation">
			<div class="container">
				<div class="row">
					<!-- Brand and toggle get grouped for better mobile display -->
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".my-navbar-collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand my-navbar-brand" href="."><img src="public/images/logo_nha_trang_foods.png" alt=""></a>
					</div>

					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse my-navbar-collapse">
						<form class="navbar-form navbar-left" role="search">
							<div class="form-group search-group">
								<input type="text" class="form-control tiemkiem" placeholder="Tìm nhà hàng, món ăn, địa điểm,...">
								<button type="submit" class="btn btn-default btn-lg btn-timkiem">TÌM KIẾM</button>
							</div>
						</form>
						<div class="dangnhap-dangky">
							<?php 
							if(isset($_SESSION["tendangnhap"])){
								echo '<a href="" class="btn btn-primary btn-sm nut btn-register" data-toggle="modal" data-target="#logoutModal">Đăng xuất</a>';
							}
							else{
								echo '<a href="" class="btn btn-primary btn-sm nut btn-register" data-toggle="modal" data-target="#loginModal">Đăng nhập</a>
								<a href="" class="btn btn-secondary btn-sm nut btn-joinnow" data-toggle="modal" data-target="#registerModal">Đăng ký</a>
								<p class="dangnhap-danhgia">Đăng nhập để đặt bàn quán ăn</p>';
							}
							?>
							<a href="" class="salver">
								<img src="public/images/salver.png" alt="">
								<p class="salver-thongtin">0 Bàn Đặt</p>
							</a>
							<div class="container">
								<div class="modal fade" id="loginModal" role="dialog">
									<div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Đăng nhập</h4>
											</div>
											<div class="modal-body">
												<p>Some text in the modal.</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>

									</div>
								</div>

							</div>
							<div class="container">
								<div class="modal fade" id="registerModal" role="dialog">
									<div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Đăng ký</h4>
											</div>
											<div class="modal-body">
												<p>Some text in the modal.</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>

									</div>
								</div>

							</div>

							<div class="container">
								<div class="modal fade" id="logoutModal" role="dialog">
									<div class="modal-dialog">

										<!-- Modal content-->
										<div class="modal-content">
											<div class="modal-header">
												<button type="button" class="close" data-dismiss="modal">&times;</button>
												<h4 class="modal-title">Đăng xuất</h4>
											</div>
											<div class="modal-body">
												<p>Some text in the modal.</p>
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
											</div>
										</div>

									</div>
								</div>

							</div>

						</div><!-- /.navbar-collapse -->
					</div> <!-- end row -->
				</div> <!-- end container -->
			</nav>
		</div> <!-- end header -->
		<main class="content">
			<?php require_once 'routes.php' ?>
		</main> <!-- end main -->
		<p class="back-top"><img src="public/images/back-top.png" alt=""></p>
	<!-- <div class="quangcao">
		<img src="public/images/slider01-compressor.jpg" alt="">
	</div> -->
	<footer class="footer text-center">
		<div class="col-sm-6">
			<h2>Nha Trang foods</h2>
			<p class="follow">Follow us:</p>
			<div class="icon-social">
				<a href=""><i class="fa fa-facebook"></i></a>
				<a href=""><i class="fa fa-twitter"></i></a>
				<a href=""><i class="fa fa-google-plus"></i></a>
				<a href=""><i class="fa fa-instagram" aria-hidden="true"></i></a>
			</div>
		<!-- <div class="top-footer">
			
	</div> -->
</div>	
<div class="col-sm-6">
	<iframe name="f138720271430c" width="1000px" height="1000px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:page Facebook Social Plugin" src="https://www.facebook.com/v2.9/plugins/page.php?adapt_container_width=true&amp;app_id=1660131457626774&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F0F7S7QWJ0Ac.js%3Fversion%3D42%23cb%3Df25cae77ef67548%26domain%3Dwww.muahangviet.com.vn%26origin%3Dhttps%253A%252F%252Fwww.muahangviet.com.vn%252Ff2127a46dbe228c%26relation%3Dparent.parent&amp;container_width=298&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com%2Fmuahangviet.com.vn&amp;locale=vi_VN&amp;sdk=joey&amp;show_facepile=true&amp;small_header=false" style="border: none; visibility: visible; width: 298px; height: 230px;" class=""></iframe>
</div>			

<div class="bottom-footer clearfix">
	<p class="copyright"><i class="fa fa-copyright" aria-hidden="true"></i> 2017 by Nha Trang Foods created with nhatrangfoods.com</p>
</div>
</footer>

<script type="text/javascript" src="public/js/bootstrap.js"></script>
<script type="text/javascript" src="public/js/jquery-1.12.3.min.js"></script>
<script type="text/javascript" src="public/js/slick.js"></script>
<script type="text/javascript" src="public/js/2.js"></script>
</body>
</html>