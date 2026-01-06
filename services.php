<?php include('header.php'); ?>
<section class="page-title" style="background-image:url(images/bus_bg_1.jpg);">
	<div class="container">
		<h1>Services</h1>
	</div>
</section>

<div class="section padding-tb-100px section-ba-1">
        <div class="container">
            <!-- Title -->
            <div class="section-title margin-bottom-40px">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <?php 
                            $query="SELECT * FROM bk_about_us WHERE status='active'";
                            $get_about_us=mysqli_query($db->conn,$query) or die(mysqli_connect_errorno(). "DATA NOT INSERTED");
                            $about_us=mysqli_fetch_array($get_about_us);
                            ?>
                        <div class="des"><?= $about_us['content']; ?></div>
                    </div>
                </div>
            </div>
            <!-- // End Title -->

            <div class="row">
                <?php 
                    $query="SELECT * FROM bk_services WHERE status='active'";
                    $get_services=mysqli_query($db->conn,$query) or die(mysqli_connect_errorno(). "DATA NOT INSERTED");
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
        </div>
    </div>
<?php include('footer.php'); ?>