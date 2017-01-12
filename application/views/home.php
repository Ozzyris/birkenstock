	<header id="slider">
		<ul class="slider_wrapper">
			<li class="current_slide">
				<div class="caption">
					<img src="<?php echo base_url(); ?>assets/images/LOGO_logocolour.svg" alt="logo birkenstock">
				</div>
				<div class="image" style="background-image: url('<?php echo base_url(); ?>assets/images/BG_Intro.jpg');"></div>
			</li>
			<li>
				<div class="caption">
				</div>
				<div class="image" style="background-image: url('<?php echo base_url(); ?>assets/images/BG_Intro2.jpg');"></div>
			</li>
		</ul>
		<ul id="control-buttons" class="control-buttons"></ul>
	</header>

	<!-- NAVIGATION -->
	<?php $this->load->view('includes/nav.php'); ?>


	<section id="collection" class="m-scrollable-filter">
		<h2 class="title">Collection</h2>
		<ul class="Two_column">
			<li class="image_link" style="background-image: url('<?php echo base_url(); ?>assets/images/THUMB_sesonal.jpg')" >
				<a href="products/seasonal">
					<h3>Seasonal</h3>
				</a>
			</li>
			<li class="image_link" style="background-image: url('<?php echo base_url(); ?>assets/images/THUMB_allcollections.jpg')" >
				<a href="products/all">
					<h3>All Collections</h3>
				</a>
			</li>
		</ul>
		<ul class="Three_column">
			<li class="image_link" style="background-image: url('<?php echo base_url(); ?>assets/images/THUMB_women.jpg')" >
				<a href="products/women">
					<h3>Women</h3>
				</a>
			</li>
			<li class="image_link" style="background-image: url('<?php echo base_url(); ?>assets/images/THUMB_men.jpg')" >
				<a href="products/men">
					<h3>Men</h3>
				</a>
			</li>
			<li class="image_link" style="background-image: url('<?php echo base_url(); ?>assets/images/THUMB_kids.jpg')" >
				<a href="products/kids">
					<h3>Kids</h3>
				</a>
			</li>
		</ul>
	</section>

	<section id="Featured_products">
		<h2 class="title">Featured Products</h2>
		<ul class="Three_column">
			<li>
				<a href="<?php echo base_url(); ?>product-details/Arizona/classic/10">
					<img src="<?php echo base_url(); ?>assets/uploads/thumbnails/thumb_picture_10.png" alt="Arizona">
					<h3>ARIZONA</h3>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>product-details/Mayari/classic/10">
					<img src="<?php echo base_url(); ?>assets/uploads/thumbnails/thumb_picture_59.png" alt="MAYARI">
					<h3>MAYARI</h3>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>product-details/Gizeh/classic/68">
					<img src="<?php echo base_url(); ?>assets/uploads/thumbnails/thumb_picture_68.png" alt="GIZEH">
					<h3>GIZEH</h3>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>product-details/Boston/classic/54">
					<img src="<?php echo base_url(); ?>assets/uploads/thumbnails/thumb_picture_54.png" alt="BOSTON">
					<h3>BOSTON</h3>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>product-details/Madrid/classic/44">
					<img src="<?php echo base_url(); ?>assets/uploads/thumbnails/thumb_picture_44.png" alt="MADRID">
					<h3>MADRID</h3>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>product-details/Milano/classic/79">
					<img src="<?php echo base_url(); ?>assets/uploads/thumbnails/thumb_picture_79.png" alt="MILANO">
					<h3>MILANO</h3>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>/product-details/Florida/classic/56">
					<img src="<?php echo base_url(); ?>assets/uploads/thumbnails/thumb_picture_56.png" alt="FLORIDA">
					<h3>FLORIDA</h3>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>product-details/Salina/classic/62">
					<img src="<?php echo base_url(); ?>assets/uploads/thumbnails/thumb_picture_62.png" alt="SALINA">
					<h3>SALINA</h3>
				</a>
			</li>
			<li>
				<a href="<?php echo base_url(); ?>product-details/Rio/kids/100">
					<img src="<?php echo base_url(); ?>assets/uploads/thumbnails/thumb_picture_100.png" alt="YARA">
					<h3>RIO</h3>
				</a>
			</li>
		</ul>
	</section>

	<section id="Home_History" class="m-scrollable-filter">
		<h2 class="title">Birkenstock Bondi Beach - History</h2>
		<article>
			<div class="image" style="background-image: url('<?php echo base_url(); ?>assets/images/BG_history.jpg');"></div>
			<div class="content">
				<p>Birkenstock Bondi Beach is an independently owned, all Birkenstock retail shop that first opened it’s doors in Bondi Beach on 15th October 2015. It began as a ‘Pop-Up’ store and has since become a one stop, all season, retailer featuring one of the widest range of Birkenstock brand footwear in Sydney.</p>
				<a class="button blue" href="about">See More</a>
				<span class="colorbackground"></span>
				<span class="colorborder"></span>
			</div>
		</article>
	</section>

	<section id="latestNews" class="m-scrollable-filter">
		<h2 class="title">Our last news</h2>

		<?php  foreach ($news_datas as $datas): ?>

			<article>
				<div class="image" style="background-image: url('<?php echo base_url() . $datas->image; ?>');">	</div>
				<div class="content">
					<h3><?php echo $datas->title; ?></h3>
					<time><?php  echo date('l jS \of F', $datas->time); ?></time>
					<p><?php echo $datas->description; ?></p>
					<span class="colorbackground"></span>
					<span class="colorborder"></span>
				</div>
			</article>

		<?php  endforeach ?>
		
	</section>

	<section id="home_map" class="m-scrollable-filter">
		<h2 class="title">Come to see us !</h2>
		<div id="map_container">
			<span class="borderwhite"></span>
		</div>
	</section>

	<!-- FOOTER -->
	<?php $this->load->view('includes/footer.php'); ?>

	<!-- SCRIPT -->
	<?php $this->load->view('includes/scripts.php'); ?>
	<script src="<?php echo base_url(); ?>assets/scripts/home.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAd1bz-ck7zyEXYPF4dfGYKG_p3b9Km0bs&callback=initMap" async defer></script>
</body>
</html>