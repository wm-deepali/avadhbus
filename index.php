<?php include('header.php'); ?>
<div class="slider-carousel">
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<?php 
			$query="SELECT * FROM bk_slider WHERE status='active'";
			$get_slider=mysqli_query($db->conn,$query) or die(mysqli_error($db->conn). "DATA NOT INSERTED");
			$i=0;
			while($slider=mysqli_fetch_array($get_slider)){
				?>
				<li data-target="#myCarousel" data-slide-to="<?= $i; ?>" class="<?php if($i==0){ echo 'active'; }?>"></li>
				<?php $i++; } ?>
			</ol>
			<div class="carousel-inner">
				<?php 
				$query="SELECT * FROM bk_slider WHERE status='active'";
				$get_slider=mysqli_query($db->conn,$query) or die(mysqli_error($db->conn). "DATA NOT INSERTED");
				$i=0;
				while($slider=mysqli_fetch_array($get_slider)){
					?>
					<div class="carousel-item <?php if($i==0){ echo 'active' ; }?>">
						<img src="administrator/slider/thumb/<?= $slider['image_name']; ?>">
						<div class="container">
							<div class="carousel-caption text-left">
								<h1><?= $slider['heading']; ?></h1>
								<p><?= $slider['content']; ?> </p>
								<!--<p><a class="btn btn-lg btn-primary" href="<?= $slider['link']; ?>" role="button">Read More</a>
								</p>-->
							</div>
						</div>
					</div>
					<?php $i++; } ?>
				</div>
				<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>

				<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>

			</div>
		</div>

		<div class="block-content">
			<div class="container">
				<?php 
				$query="SELECT * FROM bk_about WHERE status='active'";
				$get_about=mysqli_query($db->conn,$query) or die(mysqli_error($db->conn). "DATA NOT INSERTED");
				$about=mysqli_fetch_array($get_about);
				?>
				<div class="row">
					<div class="col-sm-5 col-md-5 col-lg-5 welcome-text wow fadeInLeft" data-wow-delay="3.3s">
						<h1><?= $about['title']; ?></h1>
						<?= $about['content']; ?>
						<a href="about_us.php" class="btn btn-sm btn-success">READ MORE</a>
					</div>
					<div class="col-sm-7 col-md-7 col-lg-7 wow fadeInRight" data-wow-delay="3.3s">
						<div class="quote-form">
							<div class="hgroup">
								<h1 class="color-1">Get A Free Enquiry</h1>
								<h2>we always use best &amp; fastest replies</h2>
								<?= $_SESSION['equiry']; $_SESSION['equiry']=''; ?>
							</div>
							<form novalidate id="contactForm" class="reply-form" method="post" action="insert_home_enquiry.php">
								<div class="row">
									<div class="col-sm-6">
										<input type="text" class="form-control" name="name" id="user-name" placeholder="Enter Name *" required="">
									</div>
									<div class="col-sm-6">
										<input type="email" class="form-control" name="email" placeholder="Email Address *" required="">
									</div>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="destinationfrom" placeholder="Destination From">
									</div>
									<div class="col-sm-6">
										<input type="text" class="form-control" placeholder="Destination To" name="destinationto">
									</div>
									<div class="col-sm-6">
										<input type="text" class="form-control" name="mobile" placeholder="Enter Mobile No.">
										<input type="text" class="form-control" name="subject" placeholder="Subject">
									</div>
									<div class="col-sm-6">
										<textarea id="user-message" class="form-control" placeholder="Query" name="message"></textarea>
									</div>
									<div class="col-sm-6 offset-sm-6">
										<button type="submit" class="btn btn-danger" name="submit">Submit Now</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="call-action ba-1">
			<div class="container">
				<?php 
					$query="SELECT * FROM bk_parallax_content WHERE status='active'";
					$get_parallax_content=mysqli_query($db->conn,$query) or die(mysqli_error($db->conn). "DATA NOT INSERTED");
					$parallax_content=mysqli_fetch_array($get_parallax_content);
						?>
				<div class="row">
					<div class="col-lg-7 padding-tb-15px">
						<h2><?= $parallax_content['title']; ?></h2>
						<div class="text"><?= $parallax_content['content']; ?> </div>
					</div>
					<div class="col-lg-5">
						<div class="row">
							<div class="col-lg-4 col-md-4 sm-mb-45px">
								<a href="#send_enquiry" data-target="#send_enquiry" data-toggle="modal" class="action-bottom layout-1">
									<img src="images/small-icon-1.png" alt=""> 
									<h4>Send Enquiry</h4>
								</a>
							</div>
							<div class="col-lg-4 col-md-4 sm-mb-45px">
								<a href="about-us.php" class="action-bottom layout-1">
									<img src="images/small-icon-2.png" alt=""> 
									<h4>Read More</h4>
								</a>
							</div>
							<div class="col-lg-4 col-md-4">
								<a href="contact-us.php" class="action-bottom layout-1">
									<img src="images/small-icon-3.png" alt=""> 
									<h4>Contact Us</h4>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="section padding-tb-100px section-ba-1">
			<div class="container">
				<!-- Title -->
				<div class="section-title margin-bottom-40px">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<?php 
							$query="SELECT * FROM bk_about_us WHERE status='active'";
							$get_about_us=mysqli_query($db->conn,$query) or die(mysqli_error($db->conn). "DATA NOT INSERTED");
							$about_us=mysqli_fetch_array($get_about_us);
							?>
							<div class="icon text-main-color"><i class="fas fa-bus"></i></div>
							<div class="h2"><?= $about_us['title']; ?></div>
							<div class="des"><?= $about_us['content']; ?></div>
						</div>
					</div>
				</div>
				<!-- // End Title -->

				<div class="row">
					<?php 
					$query="SELECT * FROM bk_services WHERE status='active' order by id desc limit 0,3";
					$get_services=mysqli_query($db->conn,$query) or die(mysqli_error($db->conn). "DATA NOT INSERTED");
					while($services=mysqli_fetch_array($get_services)){
						?>
						<div class="col-lg-4 col-md-4">
							<div class="service-icon-box">
								<div class="icon"><img src="administrator/gallery/<?= $services['image_name']; ?>" alt=""></div>
								<a href="#" class="title h2"><?= $services['name']; ?></a>
								<div class="des"><?= $services['content']; ?></div>
							</div>
						</div>
					<?php } ?>
				</div>
				<div class="text-center">
					<a href="services.php" class="nile-bottom md">Show all <i class="fa fa-arrow-right"></i> </a>
				</div>

			</div>
		</div>

		<section class="gallery-area ptb-100">
			<div class="container">
				<div class="section-title margin-bottom-40px">
					<div class="row justify-content-center">
						<div class="col-lg-8">
							<div class="icon text-white-color text-white"><i class="fas fa-bus"></i>
							</div>
							<div class="h2 text-white">Our Gallery</div>
						</div>
					</div>
				</div>
				<div class="owl-buses">
					<?php 
					$query="SELECT * FROM bk_gallery WHERE status='active' order by id desc limit 0,3";
					$get_gallery=mysqli_query($db->conn,$query) or die(mysqli_error($db->conn). "DATA NOT INSERTED");
					while($gallery=mysqli_fetch_array($get_gallery)){
						?>
					<div>
						<div class="bus-main">
							<div class="bus-img">
								<a class="thumbnail fancybox" rel="ligthbox" href="administrator/gallery/<?= $gallery['image_name']; ?>">
								<img src="administrator/gallery/thumb/<?= $gallery['image_name']; ?>" class="img-fluid"></a>
								<a class="thumbnail fancybox" rel="ligthbox" href="administrator/gallery/<?= $gallery['image_name1']; ?>">
								<img src="administrator/gallery/thumb/<?= $gallery['image_name1']; ?>" class="img-fluid"></a>
							</div>
							<div class="bus-text">
								<h3><?= $gallery['title']; ?></h3>
						<h4><?= $gallery['content']; ?></h4>
							</div>
						</div>	
					</div>
				<?php } ?>
				</div>
			</div>
		</section>
		<section class="flat-row flat-qoute">
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="text-qoute">
							<h3>As well as being transport services provider, Avadh Transport Co. also provides bus hire services for events, smart business travelers, Domestic and corporate/personal tours</h3>
						</div>
					</div><!-- /.col-sm-8 -->
					<div class="col-sm-4">
						<div class="btn-qoute right">
							<button type="button" onClick="location.href='about-us.php'">Read More</button>
						</div>
					</div><!-- /.col-sm-4 -->
				</div><!-- /.row -->
			</div><!-- /.container -->
		</section>	
		<?php include('footer.php'); ?>