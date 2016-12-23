	<header class="Global_Header">
		<img src="<?php echo base_url(); ?>assets/images/LOGO_logocolour.svg" alt="logo birkenstock">
	</header>

	<!-- NAVIGATION -->
	<?php $this->load->view('includes/nav.php'); ?>

	<section id="products">
		<div class="filter">
			<div class="filter_group">
				<h4 data-type="collection" class="name">Collection :</h4>
				<div class="dropdown_content">
     				<p class="choice">All</p>
					<ul class="dropdown">
        				<li><a href="#">All</a></li>
        				<li><a href="#">Seasonal</a></li>
        				<li><a href="#">Classic</a></li>
      				</ul>
      			</div>
			</div>
			<div class="filter_group">
				<h4 data-type="gender" class="name">For :</h4>
				<div class="dropdown_content">
     				<p class="choice">All</p>
					<ul class="dropdown">
        				<li><a href="#">All</a></li>
        				<li><a href="#">Men</a></li>
        				<li><a href="#">Women</a></li>
        				<li><a href="#">Kids</a></li>
      				</ul>
      			</div>
			</div>
			<div class="filter_group">
				<h4 data-type="size" class="name">Size :</h4>
				<a class="main" href="#">All</a>
				<input type="range" name="points" min="32" max="48" id="points" class="rangeMaterial">
			</div>
			<span onclick="filter_menu();" class="arrow_button">></span>
		</div>
		<div class="product_container">
			<ul id="products_wrapper" class="Three_column"></ul>
			<div class="noResult"><h2>Sorry no result has been Found.</h2></div>
			<div class="loaders loaders-bg-3"><span class="loader loader-circles"></span><p>Loading...</p></div>
		</div>
		
	</section>

	<!-- FOOTER -->
	<?php $this->load->view('includes/footer.php'); ?>

	<!-- SCRIPT -->
	<?php $this->load->view('includes/scripts.php'); ?>
	<script>
	var products = [
		<?php  foreach ($products_datas as $datas): ?>
  		{ //ARIZONA CLASSIC BLACK #1
          	id: '<?php echo $datas->id; ?>',
          	name: '<?php echo $datas->collection; ?>',
  			picture: 'arizona_leather_black',
  			tag: [<?php echo json_encode($datas->tag); ?>],
  			size: [<?php echo $datas->size; ?>],
  			gender: [<?php echo json_encode($datas->gender); ?>], 
  			color: '<?php echo $datas->color; ?>'
   		},
   		<?php  endforeach ?>
   	];
	</script>
	<script src="<?php echo base_url(); ?>assets/scripts/products.js"></script>
	</body>
</html>