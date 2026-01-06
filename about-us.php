<?php include('header.php'); ?>
<section class="page-title" style="background-image:url(images/bus_bg_1.jpg);">
	<div class="container">
		<h1>About Us</h1>
	</div>
</section>
<?php 
				$query="SELECT * FROM bk_about WHERE status='active'";
				$get_about=mysqli_query($db->conn,$query) or die(mysqli_error($db->conn). "DATA NOT INSERTED");
				$about=mysqli_fetch_array($get_about);
				?>
<div class="block-content">
	<div class="container">
		<div class="row">
			<div class="col-sm-5 col-md-5 col-lg-5 welcome-text wow fadeInLeft" data-wow-delay="3.3s">
				<h1><?= $about['title']; ?></h1>
				<?= $about['content']; ?>
			</div>
			<div class="col-sm-7 col-md-7 col-lg-7 wow fadeInRight" data-wow-delay="3.3s">
				<div class="quote-form">
					<div class="hgroup">
						<h1 class="color-1">Get A Free Enquiry</h1>
						<h2>we always use best &amp; fastest replies</h2>
						<?= $_SESSION['aboutequiry']; $_SESSION['aboutequiry']=''; ?>
					</div>
					<form novalidate id="contactForm" class="reply-form" method="post" action="insert_about_enquiry.php">
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
								<input type="number" class="form-control" name="mobile" placeholder="Enter Mobile No. *" required="">
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
<?php include('footer.php'); ?>