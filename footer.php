<footer class="site-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <aside class="widget widget_text"><h3 class="widget-title"><span>About Us</span></h3>
          <div class="textwidget">
            <p>
              <img src="images/logo1.png" class="img-fluid"><br>
              Avadh Transport Co. is a leading Bus Services provider in Lucknow as well as in entire U.P. We provide safe, reliable, comfortable and friendly travel experiences. 
            </p>
          </div>
        </aside>
        <div class="social-menu">
            <ul id="social-menu-footer" class="menu">
              <li class="menu-item">
                <a href="<?= $social_media['facebook']; ?>"><i class="fab fa-facebook-f"></i></a>
              </li>
              <li class="menu-item">
                <a href="<?= $social_media['ggle']; ?>"><i class="fab fa-google-plus-g"></i></a>
              </li>
              <li class="menu-item">
                <a href="<?= $social_media['twitter']; ?>"><i class="fab fa-twitter"></i></a>
              </li>
              <li class="menu-item">
                <a href="<?= $social_media['vimeo']; ?>"><i class="fab fa-linkedin-in"></i></a></li>
              <li class="menu-item">
				<a href="<?= $social_media['youtube']; ?>"><i class="fab fa-youtube"></i></a>
           	  </li>
            </ul>
          </div>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4">
        <aside id="better-menu-widget-2" class="widget better-menu-widget">
          <h3 class="widget-title"><span>Quick Links</span></h3>
          <div class="menu-information-container">
            <ul id="menu-information" class="menu">
              <li><a href="index.php"><i class="fas fa-long-arrow-alt-right"></i> Home</a></li>
              <li><a href="about-us.php"><i class="fas fa-long-arrow-alt-right"></i> About Us</a></li>
              <li><a href="services.php"><i class="fas fa-long-arrow-alt-right"></i> Services</a></li>
              <li><a href="gallery.php"><i class="fas fa-long-arrow-alt-right"></i> Gallery</a></li>
              <li><a href="#send_enquiry" data-target="#send_enquiry" data-toggle="modal"><i class="fas fa-long-arrow-alt-right"></i> Send Enquiry</a></li>
              <li><a href="contact-us.php"><i class="fas fa-long-arrow-alt-right"></i> Contact Us</a></li>
            </ul>
          </div>
        </aside>
      </div>
      <div class="col-sm-6 col-md-4">
        <aside class="widget widget_text">
          <h3 class="widget-title"><span>Address</span></h3>
          <div class="textwidget">
            <div class="office">
              <p><i class="fa fa-map-marker"></i> <?= $general_setting['address']; ?>
              </p>
              <p><i class="fa fa-phone"></i> <?= $general_setting['mob']; ?></p>
              <p><i class="fa fa-envelope"></i><?= $general_setting['email']; ?></p>
              <p><i class="fa fa-fax"></i> <?= $general_setting['tel']; ?> </p>
            </div>
          </div>
        </aside>
      </div>
    </div>
  </div>
</footer>
<div class="copyright">
  <div class="container">
    <div class="row">
      <div class="col-md-4 left">
          Made with <i class="fa fa-heart"></i> by <a target="_blank" href="http://www.sonyinfocom.com/">Sony Infocom</a>.
      </div>
      <div class="col-md-8">
        <div class="right">
          © Copyrights 2019 Avadh Transport Co. All rights reserved.
        </div>
      </div>
    </div>
  </div>
</div>

<!-- The Modal -->
<div class="modal" id="send_enquiry">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Send Enquiry</h4>
         <?= $_SESSION['henquiry'];  $_SESSION['henquiry']='' ; ?>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <form method="post" action="insert_enquiry.php">
        <div class="form-group row">
        	<div class="col-sm-12">
        		<label class="label label-control">Full Name</label>
        		<input type="text" class="form-control" placeholder="Enter Your Name" name="name" required="">
        	</div>
        </div>
        <div class="form-group row">
        	<div class="col-sm-12">
        		<label class="label label-control">Email Address</label>
        		<input type="email" class="form-control" placeholder="Enter Your Name *" name="email" required="">
        	</div>
        </div>
        <div class="form-group row">
        	<div class="col-sm-12">
        		<label class="label label-control">Mobile Number</label>
        		<input type="number" class="form-control" placeholder="Enter Mobile Number *" name="mobile" required="">
        	</div>
        </div>
        <div class="form-group row">
        	<div class="col-sm-12">
        		<label class="label label-control">Query</label>
				<textarea class="form-control" placeholder="Enter your query here" name="query"></textarea>
        	</div>
        </div>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="submit">Send Enquiry</button>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
</form>
    </div>
  </div>
</div>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/popper.js"></script>
<script type="text/javascript" src="js/bootstrap.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>