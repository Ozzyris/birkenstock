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
		<h1 class="title"><?php echo str_replace('_', ' ', $collection_datas->name) ?></h1>
		<p><?php echo $collection_datas->description ?></p>
		<ul class="tag"></ul>
    	<p class="size"></p>
    	<p class="color"></p>
	</section>
	<!-- FOOTER -->
	<?php $this->load->view('includes/footer.php'); ?>

	<!-- SCRIPT -->
	<?php $this->load->view('includes/scripts.php'); ?>

	<script>
		var GET_product = '<?php echo $products_id; ?>';
		var gallery_content = [
      <?php foreach ($products_datas as $datas):
            $tags = explode(",", $datas->tag);
      ?>
      {
        id: '<?php echo $datas->id; ?>',
        color: '<?php echo $datas->color; ?>',
        picture: '<?php echo $datas->picture; ?>',
        thumb: '<?php echo $datas->thumb; ?>',
        size: [<?php echo $datas->size; ?>],
        tags: [<?php foreach($tags as $tags_datas){ echo '"' . $tags_datas . '", '; } ?>],
      },
      <?php  endforeach ?>
	];
	</script>
	<script src="<?php echo base_url(); ?>assets/scripts/product_details.js"></script>
</html>