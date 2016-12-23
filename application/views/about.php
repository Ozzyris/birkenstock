	<header class="Global_Header">
		<img src="<?php echo base_url(); ?>assets/images/LOGO_logocolour.svg" alt="logo birkenstock">
	</header>

	<!-- NAVIGATION -->
	<?php $this->load->view('includes/nav.php'); ?>

	<section id="benefit">
		<div class="text_content">
			<h2 class="sub_title">The foot health benefits of Birkenstock products</h2>
			<p>The Birkenstock tradition of quality craftsmanship goes back more than 225 years. Crafted in Germany, our footwear is created using only premium products and materials. Starting with high-grade leather, suede, nubuck, and non-leather uppers, we dye our materials all the way through for a lasting look. Birkenstock footwear also includes our unique contoured footbed, shock-absorbing soles and specially designed buckles for years of comfort and durability. Almost every component of our footwear can be repaired or replaced, making Birkenstock footwear a long-lasting investment in the health of your feet.</p>
		</div>
		<div class="shoes_details">
			<div class="image_key_point">
				<img src="<?php echo base_url(); ?>assets/images/ILLUSTRATION_about_1.jpg" alt="">
				<span onclick="change_key_point_description(0);" class="dot_border" style="top: 20px; left: 110px;"><span class="dot_background"></span></span>
				<span onclick="change_key_point_description(1);" class="dot_border" style="top: 40px; left: 74px;"><span class="dot_background"></span></span>
				<span onclick="change_key_point_description(2);" class="dot_border" style="top: 110px; left: 60px;"><span class="dot_background"></span></span>
				<span onclick="change_key_point_description(3);" class="dot_border active" style="top: 200px; left: 92px;"><span class="dot_background"></span></span>
				<span onclick="change_key_point_description(3);" class="dot_border active" style="top: 180px; left: 20px;"><span class="dot_background"></span></span>
				<span onclick="change_key_point_description(4);" class="dot_border" style="top: 270px; left: 80px;"><span class="dot_background"></span></span>
				<span onclick="change_key_point_description(5);" class="dot_border" style="top: 310px; left: 60px;"><span class="dot_background"></span></span>
			</div>
			<span class="colorborder"></span>
			<div class="image_key_point_detail">
				<h3 class="subtitle">LONGITUDINAL ARCH SUPPORTS</h3>
				<p>Longitudinal arch supports bolster the tarsus bones and provide good footing with each step.</p>
			</div>
		</div>
	</section>

	<section id="materials">
		<div class="content_right"><div class="image" style="background-image: url( '<?php echo base_url(); ?>assets/images/ILLUSTRATION_about_2.jpg' )"></div></div>
		<div class="content_left">
			<h2 class="sub_title">Info premium matrials.</h2>
			<div class="content_text">
				<p>BIRKENSTOCKS are a life decision, since our products last for decades. For that reason, all of our raw materials must meet the highest standards of quality. We use high-quality leather for our sandals and shoes. The leather is unsplit, with a smooth upper surface and a fibrous underside. In addition, we only use deeply dyed leather; the dye permeates the piece of leather completely. That allows the leather to remain open-pored and breathable.<br><br>We also utilize high-quality wool felt — a natural product that consists only of sheep’s wool, making it durable and breathable.<br>The quality of all of the materials used in our shoes is verified, and we can continuously track the production process, from the raw materials to manufacturing. We confirm this through regular testing by independent institutions.</p>
			</div>
		</div>

	</section>

	<section id="type_of_materials">
		<h2 class="sub_title">The material we use.</h2>
		<ul class="Three_column">
			<li>
				<div class="text_content">
					<h3>NATURAL LEATHER</h3>
					<p>Natural leather can be recognized by its characteristic untreated surface. We do not alter natural variations in the leather. Thus, its natural qualities remain intact.</p>
				</div>
				<span class="colorbackground"></span>					
			</li>
			<li>
				<div class="text_content">
					<h3>BIRKO-FLOR®</h3>
					<p>Birko-Flor® is a skin-friendly, strong, easy-care material. Its upper layer has a structure similar to leather. The underside is made of soft fleece.</p>
				</div>
				<span class="colorbackground"></span>					
			</li>
			<li>
				<div class="text_content">
					<h3>SMOOTH LEATHER</h3>
					<p>Smooth leather is very fine-grained and has an even surface. It is weather-resistant and features an extremely long lifespan.</p>
				</div>
				<span class="colorbackground"></span>					
			</li>
			<li>
				<div class="text_content">
					<h3>WOOL FELT</h3>
					<p>Our high-quality wool felt is 100 per cent natural and is made of pure, breathable wool.</p>
				</div>
				<span class="colorbackground"></span>					
			</li>
			<li>
				<div class="text_content">
					<h3>SUEDE LEATHER</h3>
					<p>We use high-qu ality, durable suede. That makes our suede sandals and clogs sturdy, but also soft and comfortable.</p>
				</div>
				<span class="colorbackground"></span>					
			</li>
			<li>
				<div class="text_content">
					<h3>FELT</h3>
					<p>The synthetic felt we use for our products is very strong, supple and breathable.</p>
				</div>
				<span class="colorbackground"></span>					
			</li>
			<li>
				<div class="text_content">
					<h3>NUBUCK LEATHER</h3>
					<p>Nubuck leather is created by sanding the natural grain of the leather. This process gives the leather a fine nap.</p>
				</div>
				<span class="colorbackground"></span>					
			</li>
			<li>
				<div class="text_content">
					<h3>BIRKO-FELT</h3>
					<p>Birko-Felt is made of a rayon blend and synthetic felt. This extremely hard-wearing fabric is breathable and skin-friendly.</p>
				</div>
				<span class="colorbackground"></span>					
			</li>
		</ul>
	</section>

	<!-- FOOTER -->
	<?php $this->load->view('includes/footer.php'); ?>

	<!-- SCRIPT -->
	<?php $this->load->view('includes/scripts.php'); ?>
	<script src="<?php echo base_url(); ?>assets/scripts/about.js"></script>
</html>