	<header class="Global_Header">
		<img src="<?php echo base_url(); ?>assets/images/LOGO_logocolour.svg" alt="logo birkenstock">
	</header>

	<!-- NAVIGATION -->
	<?php $this->load->view('includes/nav.php'); ?>

	<section id="product_image">
		<ul class="gallery">
			<!-- Javacript gallery insertion here -->
		</ul>
		<ul class="dot">
			<!-- Javacript dot insertion here -->
		</ul>
		<span class="arrow left" onclick="slide_image( 'left' )"><img src="<?php echo base_url(); ?>assets/images/ELEM_Arrow.svg" alt=""></span>
		<span class="arrow right" onclick="slide_image( 'right' )"><img src="<?php echo base_url(); ?>assets/images/ELEM_Arrow.svg" alt=""></span>
	</section>

	<section id="product_information">
		<h1 class="title"><?php echo $collection_datas->name ?></h1>
		<p><?php echo $collection_datas->description ?></p>
		<ul class="tag"></ul>
    	<p class="size"></p>
    	<p class="color"></p>
	</section>
  <!-- <?php echo $products_datas ?> -->
	<!-- FOOTER -->
	<?php $this->load->view('includes/footer.php'); ?>

	<!-- SCRIPT -->
	<?php $this->load->view('includes/scripts.php'); ?>

	<script>
		var gallery_content = [
  		{ //ARIZONA CLASSIC BLACK #1
        name: 'arizona',
        picture: 'arizona_leather_black',
        tag: ['leather', 'regularfit', 'narrowfit'],
        size: [35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46, 47, 48],
        gender: ['men', 'women'], 
        color: 'Black'
      },
      { //ARIZONA CLASSIC BLACK #3
        name: 'arizona',
        picture: 'arizona_eva_black',
        tag: ['eva', 'narrowfit'],
        size: [36, 37, 38, 39, 40, 41],
        gender: ['men', 'women'], 
        color: 'Black'
      },
      { //ARIZONA CLASSIC WHITE #1
        name: 'arizona',
        picture: 'arizona_birkoflor_white',
        tag: ['birkoflor', 'regularfit', 'narrowfit'],
        size: [35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46],
        gender: ['men', 'women'], 
        color: 'White'
      },
      { //ARIZONA CLASSIC WHITE #2
        name: 'arizona',
        picture: 'arizona_eva_white',
        tag: ['eva', 'narrowfit'],
        size: [36, 37, 38, 39, 40, 41],
        gender: ['men', 'women'], 
        color: 'White'
      },
      { //ARIZONA CLASSIC BASALTE
        name: 'arizona',
        picture: 'arizona_birkoflor_basalt',
        tag: ['birkoflor', 'regularfit', 'narrowfit'],
        size: [35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46],
        gender: ['men', 'women'], 
        color: 'Basalt'
      },
      { //ARIZONA CLASSIC STONE
        name: 'arizona',
        picture: 'arizona_birkoflor_stone',
        tag: ['birkoflor', 'regularfit', 'narrowfit'],
        size: [35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46],
        gender: ['men', 'women'], 
        color: 'Stone'
      },
      { //ARIZONA CLASSIC HABANA
        name: 'arizona',
        picture: 'arizona_leather_habana',
        tag: ['leather', 'regularfit', 'narrowfit'],
        size: [35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46],
        gender: ['men', 'women'], 
        color: 'Habana'
      },
      { //ARIZONA CLASSIC ANTIQUE BROWN
        name: 'arizona',
        picture: 'arizona_leather_antiquebrown',
        tag: ['leather', 'regularfit', 'narrowfit'],
        size: [35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46],
        gender: ['men', 'women'], 
        color: 'Antique Brown'
      },
      { //ARIZONA CLASSIC TAUPE #1
        name: 'arizona',
        picture: 'arizona_leather_taupe',
        tag: ['leather', 'regularfit', 'narrowfit'],
        size: [35, 36, 37, 38, 39, 40, 41, 42, 43, 44, 45, 46],
        gender: ['men', 'women'], 
        color: 'Taupe'
      }
	];
	</script>
	<script src="<?php echo base_url(); ?>assets/scripts/product_details.js"></script>
</html>