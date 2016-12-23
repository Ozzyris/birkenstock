<footer class="m-scrollable-filter"> 
	<form id="form_newsletter" class="newsletter" action="//birkenstockbondibeach.us14.list-manage.com/subscribe/post?u=b1c61f30dcc67e681ab1afc31&amp;id=3eb48a33e0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" target="_blank" novalidate>
		<p><?php echo $footer_datas->newsletter_text; ?></p>
		<div class="input_group">
			<!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
			<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_b1c61f30dcc67e681ab1afc31_3eb48a33e0" tabindex="-1" value=""></div>
			<input id="input_newsletter" type="text" name="EMAIL" placeholder="Suscribe">
			<a onclick="newsletter_verification(); return false;" href="#"></a>
		</div>
	</form>
	<ul class="external_link">
	  <li><a href="<?php echo $footer_datas->facebook_link; ?>" target="_blank"><span>&#xf09a;</span><p><?php echo $footer_datas->facebook_text; ?></p></a></li>
	  <li><a href="<?php echo $footer_datas->instagram_link; ?>" target="_blank"><span>&#xf16d;</span><p><?php echo $footer_datas->instagram_text; ?></p></a></li>
	  <li><a href="<?php echo $footer_datas->address_link; ?>" target="_blank"><span>&#xf041;</span><p><?php echo $footer_datas->address_text; ?></p></a></li>
	  <li><a href="<?php echo $footer_datas->email_link; ?>"><span></span><P><?php echo $footer_datas->email_text; ?></p></a></li>
	  <li><a href="<?php echo $footer_datas->phone_link; ?>"><span>&#xf095;</span><p><?php echo $footer_datas->phone_text; ?></p></a></li>
	</ul>
	<p class="copyright">Copyright - Birkenstock Bondi Beach <?php echo date("Y"); ?></p>
</footer>