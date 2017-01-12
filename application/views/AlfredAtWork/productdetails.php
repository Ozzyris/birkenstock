  <nav class="breadcrumb">
    <p><span>></span><span><a href="<?php echo base_url(); ?>alfredatwork/collection">All Collections</a><span>></span><span><a href="<?php echo base_url(); ?>alfredatwork/products/<?php echo $productdetails_datas->collection;  ?>">All Products</a><span>></span><a class="disabled" href="#"><?php echo 'Product N°' . $product_id; ?></a></p>
  </nav>

  	<section id="content">

      <input type="hidden" id="product_id" value="<?php echo $product_id;  ?>"/>

      <article class="card">
        <div class="header yellow">
          <h1>Category - Product</h1>
        </div>
        <div class="body">
          <p style="font-size: 1.3rem; width: 100%; text-align: center;">This define the categorie where you product gonna be place</p>
          <div class="input_group" data-toggle="buttons" style="width: calc(100% - 60px);">
            <label class="checkbox_input" for="classical_input">
              <input type="radio" name="category" id="classical_input" <?php if($productdetails_datas->category == 'classic'){ echo 'checked'; } ?>>
              <i class="icon unchecked">&#xf10c;</i>
              <i class="icon checked">&#xf111;</i>
              <span>Classic</span>
            </label>
          </div>
          <div class="input_group" data-toggle="buttons" style="width: calc(100% - 60px);">
            <label class="checkbox_input" for="seasonal_input">
              <input type="radio" name="category" id="seasonal_input" <?php if($productdetails_datas->category == 'seasonal'){ echo 'checked'; } ?>>
              <i class="icon unchecked">&#xf10c;</i>
              <i class="icon checked">&#xf111;</i>
              <span>Seasonal</span>
            </label>
          </div>
          <div class="input_group" data-toggle="buttons" style="width: calc(100% - 60px);">
            <label class="checkbox_input" for="child_input">
              <input type="radio" name="category" id="child_input" <?php if($productdetails_datas->category == 'kids'){ echo 'checked'; } ?>>
              <i class="icon unchecked">&#xf10c;</i>
              <i class="icon checked">&#xf111;</i>
              <span>Kids</span>
            </label>
          </div>
          <a href="#" onclick="main_verification( 'category' ); return false;" class="button blue">Save</a>
          <a onclick="location.reload();" class="button orange">Cancel</a>
        </div>
      </article>

      <article class="card half">
        <div class="header yellow">
          <h1>Image - Product <i>(800px x 526px)</i></h1>
        </div>
        <form class="body" enctype="multipart/form-data" accept-charset="utf-8" action="" method="post">
          <label for="input_picture" class="darganddrop" style="background-image: url(<?php echo base_url() . $productdetails_datas->picture; ?>); background-size: cover; background-position: center center;">
            <p>Drop a file or click to select one</p>
            <input id="input_picture" class="file_input" type="file" multiple>
          </label>
          <a href="#" onclick="main_verification( 'picture' ); return false;" class="button blue">Save</a>
          <a onclick="location.reload();" class="button orange">Cancel</a>
        </form>
      </article>

      <article class="card half">
        <div class="header yellow">
          <h1>Thumb - Product <i>(200px x 132px)</i></h1>
        </div>
        <form class="body" enctype="multipart/form-data" accept-charset="utf-8" action="" method="post">
          <label for="thumb_input" class="darganddrop" style="background-image: url(<?php echo base_url() . $productdetails_datas->thumb; ?>); background-size: cover; background-position: center center;">
			      <p>Drop a file or click to select one</p>
			      <input id="thumb_input" class="file_input" type="file" multiple>
			    </label>
          <a href="#" onclick="main_verification( 'thumb' ); return false;" class="button blue">Save</a>
          <a onclick="location.reload();" class="button orange">Cancel</a>
        </form>
      </article>

      <article class="card">
       	<div class="header yellow">
         	<h1>Color - Product</h1>
       	</div>
       	<div class="body">
          <div class="input_group">
              <label class="text_label" for="color_input">Color of the product</label>
              <input type="text"  id="color_input" class="classic_input" value="<?php echo $productdetails_datas->color; ?>" />
          </div>
          <a href="#" onclick="main_verification( 'color' ); return false;" class="button blue">Save</a>
          <a onclick="location.reload();" class="button orange">Cancel</a>
       	</div>
      </article>

      <article class="card">
    		<div class="header yellow">
    			<h1>Gender - Product</h1>
    		</div>
    		<div class="body">
          <div class="input_group" data-toggle="buttons" style="width: calc(100% - 60px);">
            <label class="checkbox_input" for="men_input">
              <input type="checkbox" id="men_input" <?php if($ismenactive){ echo 'checked';} ?>>
              <i class="icon unchecked">&#xf096;</i>
              <i class="icon checked">&#xf0c8;</i>
              <span>Man</span>
            </label>
          </div>
          <div class="input_group" data-toggle="buttons" style="width: calc(100% - 60px);">
            <label class="checkbox_input" for="woman_input">
              <input type="checkbox" id="woman_input" <?php if($iswomenactive){ echo 'checked';} ?>>
              <i class="icon unchecked">&#xf096;</i>
              <i class="icon checked">&#xf0c8;</i>
              <span>Woman</span>
            </label>
          </div>
    		  <div class="input_group" data-toggle="buttons" style="width: calc(100% - 60px);">
            <label class="checkbox_input" for="kids_input">
              <input type="checkbox" id="kids_input" <?php if($iskidsactive){ echo 'checked';} ?>>
              <i class="icon unchecked">&#xf096;</i>
              <i class="icon checked">&#xf0c8;</i>
    		  	  <span>Kids</span>
            </label>
    		  </div>
          <a href="#" onclick="main_verification( 'gender' ); return false;" class="button blue">Save</a>
          <a onclick="location.reload();" class="button orange">Cancel</a>
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
          <a href="#" onclick="main_verification( 'tags' ); return false;" class="button blue">Save</a>
          <a onclick="location.reload();" class="button orange">Cancel</a>
    		</div>
    	</article>

    	<article id="size_tags" class="card">
    		<div class="header yellow">
    			<h1>Size - Product</h1>
    		</div>
    		<div class="body" style="padding: 20px;">
          <div class="input_group">
            <label class="text_label" for="input_minsize">Min Size</label>
            <input type="range" class="range" id="input_minsize" min="0" max="50">
            <span id="span_minsize" class="range_value">25</span>
          </div>
          <div class="input_group">
            <label class="text_label" for="input_maxsize">Max Size</label>
            <input type="range" class="range" id="input_maxsize" min="0" max="50">
            <span id="span_maxsize" class="range_value">25</span>
          </div>
          <a href="#" onclick="main_verification( 'size' ); return false;" class="button blue">Save</a>
          <a onclick="location.reload();" class="button orange">Cancel</a>
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