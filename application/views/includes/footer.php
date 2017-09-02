<footer class="m-scrollable-filter"> 
	<form id="form_newsletter" class="newsletter">
		<p><?php echo $footer_datas->newsletter_text; ?></p>
		<div class="input_group">
			<input id="newsletter_input" type="text" name="EMAIL" placeholder="Suscribe">
			<a onclick="save_email_to_mailchimp(); return false;" href="#"></a>
		</div>
	</form>
	<ul class="external_link">
	  <li><a href="<?php echo $footer_datas->facebook_link; ?>" target="_blank"><span>&#xf09a;</span><p><?php echo $footer_datas->facebook_text; ?></p></a></li>
	  <li><a href="<?php echo $footer_datas->instagram_link; ?>" target="_blank"><span>&#xf16d;</span><p><?php echo $footer_datas->instagram_text; ?></p></a></li>
	  <!-- <li><a href="<?php echo $footer_datas->address_link; ?>" target="_blank"><span>&#xf041;</span><p><?php echo $footer_datas->address_text; ?></p></a></li> -->
	  <li><a href="<?php echo $footer_datas->email_link; ?>"><span></span><P><?php echo $footer_datas->email_text; ?></p></a></li>
	  <li><a href="<?php echo $footer_datas->phone_link; ?>"><span>&#xf095;</span><p><?php echo $footer_datas->phone_text; ?></p></a></li>
	</ul>
	<p class="copyright">Copyright - Birkenstock Bondi Beach <?php echo date("Y"); ?></p>
</footer>