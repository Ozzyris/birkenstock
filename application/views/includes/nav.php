<!-- NAVIGATION -->
<nav class="m-scrollable-filter">
	<a id="hamburger_icon" href="#" onclick="sidemenu()" title="Menu">
		<span class="line line-1"></span>
		<span class="line line-2"></span>
		<span class="line line-3"></span>
	</a>
	<a class="image_logo" href="<?php echo base_url(); ?>home"><img class="logo" src="<?php echo base_url(); ?>assets/images/LOGO_logomenu.svg" alt="Birkenstock"></a>
	<div class="left_menu" id="left_menu">
		<ul>
			<li <?php if($page_anchor == 'home'){ echo 'class="active"';} ?>><a href="<?php echo base_url(); ?>home">Home</a></li>
			<li <?php if($page_anchor == 'products'){ echo 'class="active"';} ?>><a href="<?php echo base_url(); ?>products/all">Product</a></li>
			<li <?php if($page_anchor == 'sesonal'){ echo 'class="active"';} ?>><a href="<?php echo base_url(); ?>products/seasonal">Seasonal</a></li>
			<li <?php if($page_anchor == 'aboutus'){ echo 'class="active"';} ?>><a href="<?php echo base_url(); ?>about">About Us</a></li>
			<li <?php if($page_anchor == 'contactus'){ echo 'class="active"';} ?>><a href="<?php echo base_url(); ?>contact">Contact Us</a></li>
		</ul>
	</div>
</nav>