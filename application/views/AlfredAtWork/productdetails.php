  <nav class="breadcrumb">
    <p><span>></span><span><a href="<?php echo base_url(); ?>alfredatwork/collection">All Collections</a><span>></span><span><a href="<?php echo base_url(); ?>alfredatwork/products/<?php echo $productdetails_datas->collection;  ?>">All Products</a><span>></span><a class="disabled" href="#"><?php echo 'Product N°' . $product_id; ?></a></p>
  </nav>

  	<section id="content">

		<article class="card half">
          <div class="header yellow">
            <h1>Image - Product</h1>
          </div>
          <form class="body" id="picture_upload" enctype="multipart/form-data" accept-charset="utf-8" action="" method="post">
			      <label class="darganddrop">
			      	<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 63.9 53.3" style="enable-background:new 0 0 63.9 53.3;" xml:space="preserve">
			      		<path class="svg_elem_white" d="M45.7,14.8L45.7,14.8L45.7,14.8c3.2,3.2,3.6,8.1,1.2,11.8L46.7,27l3.3,3.3l4.7-3.4c3.4-2.4,6.1-5.6,8-9.3 l0,0l-9.5-9.5l-0.4-0.4l1.4-1.4L50,2.1l-1.4,1.4l-2.1-2.1l-7.1,7.1l2.1,2.1L45.7,14.8z"/>
			      		<path class="svg_elem_white" d="M18.2,14.8L18.2,14.8L18.2,14.8C15,18,14.5,23,17,26.7l0.2,0.4l-3.3,3.3L9.2,27c-3.4-2.4-6.1-5.6-8-9.3l0,0 l9.5-9.5l0.4-0.4L9.7,6.4l4.2-4.2l1.4,1.4l2.1-2.1l7.1,7.1l-2.1,2.1L18.2,14.8z"/>
			      		<polyline class="svg_elem_orange" points="35.9,25.5 56.7,47.6 52.4,51.8 31.9,30.1"/>
			      		<path class="svg_elem_orange" d="M36.1,25.6l-4,4.6L43.4,42c1.3-1.5,2.7-3.1,4-4.6L36.1,25.6z"/>
			      		<polygon class="svg_elem_darkgrey" points="52.4,53.3 31.1,30.8 32.6,29.4 52.5,50.4 54.8,48 56.2,49.5"/>
			      		<rect x="51.3" y="42" transform="matrix(0.728 -0.6856 0.6856 0.728 -15.1948 47.5215)" class="svg_elem_darkgrey" width="2" height="1.9"/>
			      		<path class="svg_elem_lightgrey" d="M46.6,26.8c0.2-0.1,6.7-4.5,6.7-4.5l3.5-3.9L59,15l1.4,0.2l2.2,2.3l-0.2,0.8l-2.4,4L57,25.4L52.7,29 l-3.1,1.3L46.6,26.8z"/>
			      		<path class="svg_elem_lightgrey" d="M17.2,26.8c-0.2-0.1-6.7-4.5-6.7-4.5l-3.5-3.9L4.8,15l-1.4,0.2l-2.2,2.3l0.2,0.8l2.4,4l3.1,3.2l4.2,3.6 l3.1,1.3L17.2,26.8z"/>
			      		<polyline class="svg_elem_orange" points="27.9,25.6 18,15.2 22.2,10.8 31.9,21"/>
			      		<polygon class="svg_elem_orange" points="41.3,11.2 7.2,47.6 11.5,51.8 45.8,15.3"/>
			      		<path class="svg_elem_darkgrey" d="M49.9,31.7l-4.5-4.5l0.7-1c2.2-3.3,1.8-7.7-1-10.6l-7.1-7.1L46.4,0l2.1,2.1L50,0.7l5.7,5.7l-1.4,1.4l9.7,9.7 l-0.3,0.6c-1.9,3.8-4.8,7.2-8.3,9.7L49.9,31.7z M47.9,26.9l2.2,2.2l4-2.9c3-2.2,5.6-5,7.3-8.3L51.4,7.8l1.4-1.4L50,3.5l-1.4,1.4 l-2.1-2.1l-5.7,5.7l5.7,5.7C49.8,17.5,50.4,22.8,47.9,26.9z"/>
			      		<polygon class="svg_elem_darkgrey" points="11.5,53.3 5.8,47.6 15.7,37 17.2,38.4 8.6,47.6 11.4,50.4 45,14.6 46.5,16"/>
			      		<rect x="17.3" y="34.8" transform="matrix(0.6836 -0.7299 0.7299 0.6836 -20.3259 24.6554)" class="svg_elem_darkgrey" width="1.9" height="2"/>
			      		<rect x="21.1" y="19" transform="matrix(0.6836 -0.7299 0.7299 0.6836 -4.1123 30.4493)" class="svg_elem_darkgrey" width="24" height="2"/>
			      		<rect x="48.3" y="5.1" transform="matrix(0.707 -0.7072 0.7072 0.707 9.4304 36.9048)" class="svg_elem_darkgrey" width="2" height="4"/>
			      		<rect x="42.6" y="9.7" transform="matrix(0.7071 -0.7071 0.7071 0.7071 3.7725 34.56)" class="svg_elem_darkgrey" width="2" height="6"/>
			      		<path class="svg_elem_darkgrey" d="M14,31.7l-5.4-3.9c-3.5-2.5-6.4-5.8-8.3-9.7L0,17.5l9.7-9.7L8.3,6.4l5.7-5.7l1.4,1.4L17.5,0L26,8.5l-7.1,7.1 c-2.8,2.8-3.2,7.2-1,10.6l0.7,1L14,31.7z M2.4,17.9c1.8,3.3,4.3,6.2,7.3,8.3l4,2.9l2.2-2.2c-2.5-4.1-1.9-9.4,1.5-12.7l5.7-5.7 l-5.7-5.7l-2.1,2.1l-1.4-1.4l-2.8,2.8l1.4,1.4L2.4,17.9z"/>
			      		<polygon class="svg_elem_darkgrey" points="27.2,26.3 16.6,15.2 22.2,9.3 29.4,16.8 27.9,18.2 22.2,12.2 19.4,15.2 28.6,24.9"/>
			      		<rect x="12.7" y="6.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -0.7085 12.4301)" class="svg_elem_darkgrey" width="4" height="2"/>
			      		<path class="svg_elem_white" d="M11.8,46.6c-0.2,0-0.5-0.1-0.7-0.3c-0.4-0.4-0.4-1,0-1.4l0.4-0.4c0.4-0.4,1-0.4,1.4,0c0.4,0.4,0.4,1,0,1.4 l-0.4,0.4C12.3,46.5,12,46.6,11.8,46.6z"/>
			      		<path class="svg_elem_white" d="M14.5,43.8c-0.2,0-0.5-0.1-0.7-0.3c-0.4-0.4-0.4-1-0.1-1.4l24-25.8c0.4-0.4,1-0.4,1.4-0.1	c0.4,0.4,0.4,1,0.1,1.4l-24,25.8C15,43.6,14.8,43.8,14.5,43.8z"/>
			      		<path class="svg_elem_white" d="M40.6,15.7c-0.2,0-0.5-0.1-0.7-0.3c-0.4-0.4-0.4-1-0.1-1.4l0.4-0.4c0.4-0.4,1-0.4,1.4-0.1	c0.4,0.4,0.4,1,0.1,1.4l-0.4,0.4C41.2,15.6,40.9,15.7,40.6,15.7z"/>
			      		<rect x="41.4" y="22.9" transform="matrix(0.728 -0.6856 0.6856 0.728 -10.6862 37.888)" class="svg_elem_darkgrey" width="2" height="19"/>
			      	</svg>
			      	<p>Drop a file or click to select one</p>
			      	<input id="file_picture_input" name="file_picture_input" class="file_input" type="file" multiple>
			      </label>
            <a href="#" onclick="main_verification( 'picture' )" class="button blue">Save</a>
            <!-- <input type="submit" value="Save" class="button blue"> -->
            <a href="#" class="button orange">Cancel</a>
          </form>
        </article>

        <article class="card half">
          	<div class="header yellow">
            	<h1>Color - Product</h1>
          	</div>
          	<form class="body" action="" method="post">
            	<div class="input_group active">
              		<label class="text_label" for="product_color">Color of the product</label>
              		<input type="text" name="product_color"  id="product_color" class="classic_input" value="<?php echo $productdetails_datas->color;  ?>" onfocus="animation_label('focus', event);" onblur="animation_label('blur', event);"/>
              		<input type="hidden" name="product_id" id="product_id" value="<?php echo $product_id;  ?>"/>
            	</div>
            	<a href="#" onclick="main_verification( 'color' )" class="button blue">Save</a>
            	<a href="#" class="button orange">Cancel</a>
          	</form>
        </article>

        <article class="card">
    		<div class="header yellow">
    			<h1>Gender - Product</h1>
    		</div>
    		<div class="body">
          <div class="input_group" data-toggle="buttons" style="width: calc(100% - 60px);">
            <label class="checkbox_input" for="men_input">
              <input type="checkbox" id="men_input" name='men_input' <?php if($ismenactive){ echo 'checked';} ?>>
              <i class="icon unchecked">&#xf096;</i>
              <i class="icon checked">&#xf046;</i>
              <span>Men</span>
            </label>
          </div>
          <div class="input_group" data-toggle="buttons" style="width: calc(100% - 60px);">
            <label class="checkbox_input" for="woman_input">
              <input type="checkbox" id="woman_input" name='woman_input' <?php if($iswomenactive){ echo 'checked';} ?>>
              <i class="icon unchecked">&#xf096;</i>
              <i class="icon checked">&#xf046;</i>
              <span>Woman</span>
            </label>
          </div>
    		  <div class="input_group" data-toggle="buttons" style="width: calc(100% - 60px);">
            <label class="checkbox_input" for="kids_input">
              <input type="checkbox" id="kids_input" name='kids_input' <?php if($iskidsactive){ echo 'checked';} ?>>
              <i class="icon unchecked">&#xf096;</i>
              <i class="icon checked">&#xf046;</i>
    		  	  <span>Kids</span>
            </label>
    		  </div>
          <a href="#" onclick="main_verification( 'gender' )" class="button blue">Save</a>
          <a href="#" class="button orange">Cancel</a>
    		</div>
    	</article>

      <article id="products_tags" class="card">
    		<div class="header yellow">
    			<h1>Tags - Product</h1>
    		</div>
    		<div class="body">
    		  <ul class="five_column">
    		  	<li data-value="antistatic"><img onclick="higlight_multiselec( event );" src="<?php echo base_url(); ?>assets/images/BADGE_antistatic.svg" alt=""></li>
    		  	<li data-value="aquafootbed"><img onclick="higlight_multiselec( event );" src="<?php echo base_url(); ?>assets/images/BADGE_aquafootbed.svg" alt=""></li>
    		  	<li data-value="birkoflor"><img onclick="higlight_multiselec( event );" src="<?php echo base_url(); ?>assets/images/BADGE_birkoflor.svg" alt=""></li>
    		  	<li data-value="carryover"><img onclick="higlight_multiselec( event );" src="<?php echo base_url(); ?>assets/images/BADGE_carryover.svg" alt=""></li>
    		  	<li data-value="cork"><img onclick="higlight_multiselec( event );" src="<?php echo base_url(); ?>assets/images/BADGE_cork.svg" alt=""></li>
    		  	<li data-value="duosole"><img onclick="higlight_multiselec( event );" src="<?php echo base_url(); ?>assets/images/BADGE_duosole.svg" alt=""></li>
    		  	<li data-value="esdproduct"><img onclick="higlight_multiselec( event );" src="<?php echo base_url(); ?>assets/images/BADGE_esdproduct.svg" alt=""></li>
    		  	<li data-value="eva"><img onclick="higlight_multiselec( event );" src="<?php echo base_url(); ?>assets/images/BADGE_eva.svg" alt=""></li>
    		  	<li data-value="exquisite"><img onclick="higlight_multiselec( event );" src="<?php echo base_url(); ?>assets/images/BADGE_exquisite.svg" alt=""></li>
    		  	<li data-value="kidsandadults"><img onclick="higlight_multiselec( event );" src="<?php echo base_url(); ?>assets/images/BADGE_kidsandadults.svg" alt=""></li>
    		  	<li data-value="leather"><img onclick="higlight_multiselec( event );" src="<?php echo base_url(); ?>assets/images/BADGE_leather.svg" alt=""></li>
    		  	<li data-value="narrowfit"><img onclick="higlight_multiselec( event );" src="<?php echo base_url(); ?>assets/images/BADGE_narrowfit.svg" alt=""></li>
    		  	<li data-value="newitem"><img onclick="higlight_multiselec( event );" src="<?php echo base_url(); ?>assets/images/BADGE_newitem.svg" alt=""></li>
    		  	<li data-value="regularfit"><img onclick="higlight_multiselec( event );" src="<?php echo base_url(); ?>assets/images/BADGE_regularfit.svg" alt=""></li>
    		  	<li data-value="salesmix"><img onclick="higlight_multiselec( event );" src="<?php echo base_url(); ?>assets/images/BADGE_salesmix.svg" alt=""></li>
    		  	<li data-value="sandal20plus"><img onclick="higlight_multiselec( event );" src="<?php echo base_url(); ?>assets/images/BADGE_sandal20plus.svg" alt=""></li>
    		  	<li data-value="sandal40plus"><img onclick="higlight_multiselec( event );" src="<?php echo base_url(); ?>assets/images/BADGE_sandal40plus.svg" alt=""></li>
    		  	<li data-value="seasonal"><img onclick="higlight_multiselec( event );" src="<?php echo base_url(); ?>assets/images/BADGE_seasonal.svg" alt=""></li>
    		  	<li data-value="softfootbed"><img onclick="higlight_multiselec( event );" src="<?php echo base_url(); ?>assets/images/BADGE_softfootbed.svg" alt=""></li>
    		  	<li data-value="steeltoe"><img onclick="higlight_multiselec( event );" src="<?php echo base_url(); ?>assets/images/BADGE_steeltoe.svg" alt=""></li>
    		  	<li data-value="stockitem"><img onclick="higlight_multiselec( event );" src="<?php echo base_url(); ?>assets/images/BADGE_stockitem.svg" alt=""></li>
    		  	<li data-value="supergrip"><img onclick="higlight_multiselec( event );" src="<?php echo base_url(); ?>assets/images/BADGE_supergrip.svg" alt=""></li>
    		  	<li data-value="textile"><img onclick="higlight_multiselec( event );" src="<?php echo base_url(); ?>assets/images/BADGE_textile.svg" alt=""></li>
    		  	<li data-value="vegan"><img onclick="higlight_multiselec( event );" src="<?php echo base_url(); ?>assets/images/BADGE_vegan.svg" alt=""></li>
    		  </ul>
    		  <a href="#" onclick="main_verification( 'multiselect' )" class="button blue">Save</a>
          <a href="#" class="button orange">Cancel</a>
    		</div>
    	</article>

    	<article id="size_tags" class="card">
    		<div class="header yellow">
    			<h1>Size - Product</h1>
    		</div>
    		<div class="body" style="padding: 20px;">
          <div class="input_group">
            <label for="input_minsize">Min Size</label>
            <input type="range" class="range" id="input_minsize" min="0" max="50">
            <span id="span_minsize" class="range_value">25</span>
          </div>
          <div class="input_group">
            <label for="input_maxsize">Max Size</label>
            <input type="range" class="range" id="input_maxsize" min="0" max="50">
            <span id="span_maxsize" class="range_value">25</span>
          </div>
          <a href="#" onclick="main_verification( 'range' )" class="button blue">Save</a>
          <a href="#" class="button orange">Cancel</a>
    		</div>
    	</article>


    </section>

    <!-- Script -->
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/plugins/jQuery.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/plugins/ajaxfileupload.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/productdetails.js"></script>
    <script>
      var tags = [];
      var size = [];
      <?php
        $all_tags = explode(",", $productdetails_datas->tag);
        foreach($all_tags as $i =>$key) {
          echo 'tags.push("' . $key . '");';
        }
        $all_size = explode(",", $productdetails_datas->size);
        foreach($all_size as $i =>$key) {
          echo 'size.push("' . $key . '");';
        }
      ?>
      tags.forEach(function(value,index){
        $('article#products_tags div.body ul li[data-value="' + value + '"]').addClass('active');
      });
      if(size[0] == ''){}else{ $('div.body div.input_group input#input_minsize').val(size[0]);}
      if(size[0] == ''){}else{ $('div.body div.input_group span#span_minsize').text(size[0]);}
      if(size[size.length-1] == ''){}else{$('div.body div.input_group input#input_maxsize').val(size[(size.length-1)]);}
      if(size[size.length-1] == ''){}else{$('div.body div.input_group span#span_maxsize').text(size[(size.length-1)]);}

    </script>
  </body>
</html>