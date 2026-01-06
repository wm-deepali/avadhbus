<?php include('header.php'); ?>
<section class="page-title" style="background-image:url(images/bus_bg_1.jpg);">
	<div class="container">
		<h1>Contact Us</h1>
	</div>
</section>

<section class="map-contact">
			<iframe src="<?= $general_setting['map']; ?>" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>

<section class="contact-section no-padd-top">
    	<div class="container">
        	<div class="row clearfix">
                <!--Form Column-->
                <div class="column form-column col-lg-7 col-md-7 col-sm-6 col-xs-12">
                	<h2>Send Us Message</h2>
                    <?= $_SESSION['content']; $_SESSION['content']=''; ?>
                    <!--Default Form-->
                    <div class="default-form style-two">
                    	<form method="post" action="insert_contact.php" id="contact-form">
                        	
                            <div class="row clearfix">
                                <div class="col-md-12 col-sm-12 co-xs-12 form-group">
                                    <input type="text" name="name" placeholder="Full Name" class="form-control">
                                </div>
                                <div class="col-md-12 col-sm-12 co-xs-12 form-group">
                                    <input type="email" name="email" placeholder="Email Address" class="form-control">
                                </div>
                                 <div class="col-md-12 col-sm-12 co-xs-12 form-group">
                                    <input type="text" name="mobile" placeholder="Mobile Number" class="form-control">
                                </div>
                                <div class="col-md-12 col-sm-12 co-xs-12 form-group">
                                    <textarea name="message" placeholder="Message" class="form-control"></textarea>
                                </div>
                                <div class="col-md-12 col-sm-12 co-xs-12 form-group">
              <label>Captcha</label>
                <div class="form-group">  
                 <img src="captcha.php" id="captcha" /><br/>
    <a href="#" onClick="
    document.getElementById('captcha').src='captcha.php?'+Math.random();
    document.getElementById('captcha-form').focus();"
    id="change-image">Not readable? Change text.</a><br/>
  <b>Human Test</b><br/>
  <input type="text" class="form-control" name="captcha" id="captcha-form" />
              </div>
                    </div>
                            </div>
                            <div class="text-left"><button type="submit" class="btn btn-primary" name="submit">Send Message</button></div>
                        </form>
                    </div>
                </div>
                
                <!--Info Column-->
                <div class="column info-column col-lg-5 col-md-5 col-sm-6 col-xs-12">
                	<h2>Our Address</h2>
                    <div class="info-box">
                    	<div class="desc-text">We are one of the best Bus Service providers based in Lucknow and have been in the business for over 15 years.</div>
                        <ul class="contact-info-1">
                            <li><div class="icon"><span class="fas fa-location-arrow"></span></div><strong>Address</strong> <?= $general_setting['address']; ?></li>
                            <li><div class="icon"><span class="far fa-envelope-open"></span></div><strong>Email</strong> <?= $general_setting['email']; ?></li>
                            <li><div class="icon"><span class="fas fa-phone-volume"></span></div><strong>Phone</strong> <?= $general_setting['tel']; ?><?= $general_setting['mob']; ?> </li>
                        </ul>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
<?php include('footer.php'); ?>