	<header class="Global_Header">
		<img src="<?php echo base_url(); ?>assets/images/LOGO_logocolour.svg" alt="logo birkenstock">
	</header>

	<!-- NAVIGATION -->
	<?php $this->load->view('includes/nav.php'); ?>

	<!-- <section id="Home_History">
		<h2 class="title">Birkenstock Bondi Beach - History</h2>
		<div class="image"></div>
		<div class="content">
			<p>Birkenstock Bondi Beach is an independently owned, all Birkenstock retail shop that first opened it’s doors in Bondi Beach on 15th October 2015. It began as a ‘Pop-Up’ store and has since become a one stop, all season, retailer featuring one of the widest range of Birkenstock brand footwear in Sydney. Our mission and collective aim is to provide personalised customer service of Birkenstock footwear, helping people make informed choices for their long term comfort and lifestyle. We also offer a repair service for all classic Birkenstock styles, as well as accessories, such as Birkenstock footbeds and Birkenstock socks for everyday comfort.</p>
		</div>
	</section> -->
	<section id="get_in_touch">
		<h2 class="title">Get in touch</h2>
		<?php
      		$attributes = array('id' => 'contact_form');
      		echo form_open('/contact/submit', $attributes);
      	?> 
      	<div style="margin: 50px 0;" class="email_send <?php if( isset( $_SESSION['email_sent'] ) ){ echo 'active'; } ?>" >
			<h2 style="font-size: 2rem; text-align: center; color: #498098; font-weight: 200;"><?php if(isset($_SESSION['email_sent'])){ echo $_SESSION['email_sent']; }?></h2>
		</div>

			<div class="inputs_group">
				<label for="input_name">YOUR NAME</label>
      			<input name="contact_name" id="input_name" type="text" placeholder="John Doe" />
      			<label for="input_email">YOUR EMAIL ADRESS</label>
      			<input name="contact_email" id="input_email" type="text" placeholder="john.doe@outlook.com"/>
      			<label for="input_phone">YOUR PHONE NUMBER</label>
      			<input name="contact_phone" id="input_phone" type="text" placeholder="0456 985 568" />
      			<p id="contact_wall">Leave this empty: <input type="text" name="input_url" /></p>
      		</div>
      		<div class="inputs_group">
      			<label for="input_message">YOUR MESSAGE</label>
      			<textarea name="contact_message" id="input_message" placeholder="Hello,"></textarea>
      		</div>
      		<span onclick="validation(); return false;" class="button blue">send</span>
		<?php echo form_close(); ?> 
	</section>

	<section id="map">
		<h2 class="title">Come to see us !</h2>
		<div id="map_container">
			<span class="borderwhite"></span>
		</div>
	</section>


	<!-- FOOTER -->
	<?php $this->load->view('includes/footer.php'); ?>

	<!-- SCRIPT -->
	<?php $this->load->view('includes/scripts.php'); ?>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAd1bz-ck7zyEXYPF4dfGYKG_p3b9Km0bs&callback=initMap" async defer></script>
   	<script src="<?php echo base_url(); ?>assets/scripts/contact.js"></script>
</html>