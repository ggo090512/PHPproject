<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<!-- <link rel="icon" href="img/favicon.png" type="image/png" /> -->
	<title>TocoToco | Computer Centre</title>
	<link rel="shortcut icon" href="/assets/image/desktop.png">
	<!-- Icon fontanwesome -->
	<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="assets/home/css/bootstrap.css" />
	<link rel="stylesheet" href="assets/home/vendors/linericon/style.css" />
	<link rel="stylesheet" href="assets/home/css/font-awesome.min.css" />
	<link rel="stylesheet" href="assets/home/css/themify-icons.css" />
	<link rel="stylesheet" href="assets/home/css/flaticon.css" />
	<link rel="stylesheet" href="assets/home/vendors/owl-carousel/owl.carousel.min.css" />
	<link rel="stylesheet" href="assets/home/vendors/lightbox/simpleLightbox.css" />
	<link rel="stylesheet" href="assets/home/vendors/nice-select/css/nice-select.css" />
	<link rel="stylesheet" href="assets/home/vendors/animate-css/animate.css" />
	<link rel="stylesheet" href="assets/home/vendors/jquery-ui/jquery-ui.css" />

	<!-- boostrap -->
	<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	 -->
	<!-- main css -->
	<link rel="stylesheet" href="assets/home/style.css" />
	<link rel="stylesheet" href="assets/home/css/responsive.css" />

	<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
	<!--================Header Menu Area =================-->
	<header class="header_area">

		<div style="background-color: #80ff00" class="main_menu">
			<div class="container">
				<nav class="navbar navbar-expand-lg navbar-light w-100">
					<!-- Brand and toggle get grouped for better mobile display -->
					<a class="navbar-brand logo_h" href="index.html">
						<img src="img/logo.png" alt="" />
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse offset w-100" id="navbarSupportedContent">
						<div class="row w-100 mr-0">
							<div class="col-lg-5 pr-7">
								<ul class="nav navbar-nav center_nav pull-right">
									<li class="nav-item">
										<a style="font-weight: bold !important" class="nav-link" href="index.php">Trang chủ</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" href="index.php?mod=home&act=listProduct">Sản phẩm</a>
									</li>
									<li class="nav-item submenu dropdown">
											<a href="#" class="nav-link dropdown-toggle ml-1" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Đăng nhập/Đăng ký</a>
											<ul class="dropdown-menu">
											<li class="nav-item">
												<a class="nav-link" href="index.php?mod=auth&act=login">Đăng nhập</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" href="index.php?mod=auth&act=create">Đăng ký</a>
											</li>
										</ul>
									</li>
								</ul>
							</div>

							<div class="col-lg-7 pr-0">
								<ul class="nav navbar-nav navbar-right right_nav pull-right">
									<li class="nav-item">
										<form method="POST" class="example mt-4 mr-5" action="index.php?mod=home&act=listProductBySearch" style="margin:auto;max-width:300px">
											<input style="border-radius: 10px 10px 10px 10px !important; width: 255px" type="text" placeholder="Tìm kiếm..." name="product_name">
											<button style="border-radius: 10px 10px 10px 10px !important" type="submit"><i class="fa fa-search"></i></button>
										</form>
									</li>

									<li class="nav-item">
										<a href="index.php?mod=home&act=listCart" class="icons">
											<i class="ti-shopping-cart"></i>
										</a>
									</li>

									<li class="nav-item dropdown submenu ">
										<a href="#" class=" icons nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
											<i class="ti-user pr-0 ml-4" aria-hidden="true"></i>
										</a>

										<ul class="dropdown-menu">
											<?php if (isset($_SESSION['auth']['fullname'])) {
												if ($_SESSION['auth']['role_id'] == 2) {
											?>
													<li class="nav-item">
														<a class="nav-link" href="#">Xin chào <?= $_SESSION['auth']['fullname'] ?></a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="index.php?mod=home&act=listOrder&id_user=<?= $_SESSION['auth']['id'] ?>" class="icons">
														Đơn hàng
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="index.php?mod=auth&act=reset">Đổi mật khẩu</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="index.php?mod=auth&act=logoutFrontend">Đăng xuất</a>
													</li>
												<?php } else { ?>
													<li class="nav-item">
														<a class="nav-link" href="#"> Xin chào <?= $_SESSION['auth']['fullname'] ?></a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="index.php?mod=category&act=index">Trang quản lý</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="index.php?mod=auth&act=reset">Đổi mật khẩu</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="index.php?mod=auth&act=logoutFrontend">Đăng xuất</a>
													</li>
												<?php }
											} 
											?>
										</ul>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>