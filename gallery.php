<?php include('header.php'); ?>
<section class="page-title" style="background-image:url(images/bus_bg_1.jpg);">
	<div class="container">
		<h1>Gallery</h1>
	</div>
</section>
<section class="gallery-area-1 ptb-100">
	<div class="container">
		<div class="row">
			<?php 
					$query="SELECT * FROM bk_gallery WHERE status='active' ORDER BY id desc";
					$get_gallery=mysqli_query($db->conn,$query) or die(mysqli_connect_errorno(). "DATA NOT INSERTED");
					while($gallery=mysqli_fetch_array($get_gallery)){
						?>
			<div class="col-sm-4">
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
<?php include('footer.php'); ?>