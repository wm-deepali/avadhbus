<?php include('administrator/connection.php'); ?>
<?php 
$query="SELECT * FROM bk_general_setting WHERE status='active'";
$get_general_setting=mysqli_query($db->conn,$query) or die(mysqli_error($db->conn). "DATA NOT INSERTED");
$general_setting=mysqli_fetch_array($get_general_setting);
$query="SELECT * FROM bk_social_media WHERE status='active'";
$get_social_media=mysqli_query($db->conn,$query) or die(mysqli_error($db->conn). "DATA NOT INSERTED");
$social_media=mysqli_fetch_array($get_social_media);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Welcome to Avadh Bus</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Bootstrap v4.1 -->
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/responsive.css" type="text/css">
	<!-- Font Awesome v5.6 -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
</head>
<body>

	<div class="header-main-body">
		<!-- header -->
		<header class="site-header header-style-4 style-1">
			<!-- top bar -->
			<div class="top-bar">
				<div class="container">
					<div class="row">
						<div class="dez-topbar-left col-sm-6">
							<ul class="social-line text-center pull-right">
								<li><a href="javascript:void(0);"><i class="fa fa-map-marker"></i> <span> <?= substr($general_setting['address'],0,60); ?> </span> </a>
								</li>
							</ul>
						</div>
						<div class="dez-topbar-right col-sm-6">
							<ul class="social-line text-center pull-right">
								<li><a href="<?= $social_media['facebook']; ?>" class="fab fa-facebook-f"></a>
								</li>
								<li><a href="<?= $social_media['twitter']; ?>" class="fab fa-twitter"></a>
								</li>
								<li><a href="<?= $social_media['vimeo']; ?>" class="fab fa-linkedin"></a>
								</li>
								<li><a href="<?= $social_media['ggle']; ?>" class="fab fa-google-plus-g"></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<!-- top bar END-->
			<!-- main header -->
			<div class="sticky-header main-bar-wraper">
				<div class="main-bar clearfix ">
					<div class="container header-contant-block">
						<div class="row">
							<div class="col-md-4">
								<div class="logo-header ">
									<a href="index.php">
										<img src="administrator/logo/<?= $general_setting['image_name']; ?>"></a>
									</div>
								</div>
								<div class="col-md-8">
									<ul class="contact-info clearfix">
										<li>
											<h6 class="text-primary"><i class="fa fa-phone"></i> Call Us</h6>
											<span><?= $general_setting['mob']; ?></span> </li>
											<li>
												<h6 class="text-primary"><i class="far fa-envelope"></i> Send us an Email</h6>
												<span><?= $general_setting['email']; ?></span> </li>
												<li>
													<h6 class="text-primary"><i class="far fa-clock"></i> Office Time</h6>
													<span> 10:30 AM to 9:00 PM</span> </li>
													<li> <span class="site-button m-r15 text-white text-center btn-block radius-sm"> <strong class="m-a0 dis-block font-poppins font-16 font-weight-500">Call Now</strong> <span class="m-a0 dis-block"><?= $general_setting['tel']; ?></span> </span>
													</li>
												</ul>
											</div>
										</div>
									</div>
									<div class="container">
										<nav class="navbar navbar-expand-md navbar-dark bg-dark">
											<a class="navbar-brand" href="#">Main Menu</a>
											<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
												<span class="navbar-toggler-icon"></span>
											</button>
											<div class="collapse navbar-collapse" id="navbarsExample04">
												<ul class="navbar-nav nav-custom mr-auto">
													<li class="nav-item active">
														<a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="about-us.php">About Us</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="services.php">Services</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="gallery.php">Gallery</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="#send_enquiry" data-target="#send_enquiry" data-toggle="modal">Send Enquiry</a>
													</li>
													<li class="nav-item">
														<a class="nav-link" href="contact-us.php">Contact Us</a>
													</li>
												</ul>
											</div>
										</nav>
									</div>
								</div>
							</div>
							<!-- main header END -->
						</header>
						<!-- header END -->
					</div>