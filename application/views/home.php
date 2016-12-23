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
				<a href="products/Collection/Seasonal">
					<h3>Seasonal</h3>
				</a>
			</li>
			<li class="image_link" style="background-image: url('<?php echo base_url(); ?>assets/images/THUMB_allcollections.jpg')" >
				<a href="products/Collection/All">
					<h3>All Collections</h3>
				</a>
			</li>
		</ul>
		<ul class="Three_column">
			<li class="image_link" style="background-image: url('<?php echo base_url(); ?>assets/images/THUMB_women.jpg')" >
				<a href="products/Collection/Women">
					<h3>Women</h3>
				</a>
			</li>
			<li class="image_link" style="background-image: url('<?php echo base_url(); ?>assets/images/THUMB_men.jpg')" >
				<a href="products/Collection/Men">
					<h3>Men</h3>
				</a>
			</li>
			<li class="image_link" style="background-image: url('<?php echo base_url(); ?>assets/images/THUMB_kids.jpg')" >
				<a href="products/Collection/Kids">
					<h3>Kids</h3>
				</a>
			</li>
		</ul>
	</section>

	<section id="Featured_products" class="m-scrollable-filter">
		<h2 class="title">Featured Products</h2>
		<ul class="Three_column">
			<li>
				<a href="product_details/Collection/Classical/Arizona/leather_black">
					<img src="<?php echo base_url(); ?>assets/images/products/classical/arizona_leather_black.png" alt="Arizona">
					<h3>ARIZONA</h3>
				</a>
			</li>
			<li>
				<a href="product_details/Collection/Classical/Mayari/birkoflor_mocca">
					<img src="<?php echo base_url(); ?>assets/images/products/classical/mayari_birkoflor_mocca.png" alt="MAYARI">
					<h3>MAYARI</h3>
				</a>
			</li>
			<li>
				<a href="product_details/Collection/Classical/Gizeh/birkoflor_silver">
					<img src="<?php echo base_url(); ?>assets/images/products/classical/gizeh_birkoflor_silver.png" alt="GIZEH">
					<h3>GIZEH</h3>
				</a>
			</li>
			<li>
				<a href="product_details/Collection/Classical/boston/leather_habana">
					<img src="<?php echo base_url(); ?>assets/images/products/classical/boston_leather_habana.png" alt="BOSTON">
					<h3>BOSTON</h3>
				</a>
			</li>
			<li>
				<a href="product_details/Collection/Classical/Madrid/birkoflor_black">
					<img src="<?php echo base_url(); ?>assets/images/products/classical/madrid_birkoflor_black.png" alt="MADRID">
					<h3>MADRID</h3>
				</a>
			</li>
			<li>
				<a href="product_details/Collection/Classical/Milano/birkoflor_mocca">
					<img src="<?php echo base_url(); ?>assets/images/products/classical/milano_birkoflor_mocca.png" alt="MILANO">
					<h3>MILANO</h3>
				</a>
			</li>
			<li>
				<a href="product_details/Collection/Classical/Florida/birkoflor_onyx">
					<img src="<?php echo base_url(); ?>assets/images/products/classical/florida_birkoflor_onyx.png" alt="FLORIDA">
					<h3>FLORIDA</h3>
				</a>
			</li>
			<li>
				<a href="products/Collection/Classical/Salina/birkoflor_black">
					<img src="<?php echo base_url(); ?>assets/images/products/classical/salina_birkoflor_black.png" alt="SALINA">
					<h3>SALINA</h3>
				</a>
			</li>
			<li>
				<a href="products/Collection/Classical/Yara/leather_antiquebrown">
					<img src="<?php echo base_url(); ?>assets/images/products/classical/yara_leather_antiquebrown.png" alt="YARA">
					<h3>YARA</h3>
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
				<div class="image" style="background-image: url('<?php echo base_url(); ?>assets/images/news/THUMB_news2.jpg');">	</div>
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