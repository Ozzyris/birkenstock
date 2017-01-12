	<nav class="breadcrumb">
    	<p><span>></span><span><a href="<?php echo base_url(); ?>alfredatwork/news">All News</a><span>></span><a class="disabled" href="#"><?php echo 'News N°' . $newsdetails_datas->id;  ?></a></p>
  	</nav>

	<section id="content">

    <input type="hidden" id="product_id" value="<?php echo $product_id;  ?>"/>

    <article class="card">
      <div class="header yellow">
        <h1>Image - News <i>(600px x 400px)</i></h1>
      </div>
      <form class="body" enctype="multipart/form-data" accept-charset="utf-8" action="" method="post">
        <label for="input_image" class="darganddrop" style="background-image: url(<?php echo base_url() . $newsdetails_datas->image; ?>); background-size: cover; background-position: center center;">
          <p>Drop a file or click to select one</p>
          <input id="input_image" class="file_input" type="file" multiple>
        </label>
        <a href="#" onclick="main_verification( 'image' ); return false;" class="button blue">Save</a>
        <a onclick="location.reload();" class="button orange">Cancel</a>
      </form>
    </article>

		<article class="card half">
      <div class="header yellow">
        <h1>Title - News</h1>
      </div>
      <div class="body">
        <div class="input_group">
          <label class="text_label" for="title_input">Title of the news</label>
          <input type="text"  id="title_input" class="classic_input" value="<?php echo $newsdetails_datas->title;  ?>" />
        </div>
        <a href="#" onclick="main_verification( 'title' ); return false;" class="button blue">Save</a>
        <a onclick="location.reload();" class="button orange">Cancel</a>
      </div>
    </article>

    <article class="card half">
      <div class="header yellow">
        <h1>Data - News</h1>
      </div>
      <div class="body">
        <div class="input_group">
              <label class="text_label" for="time_input">Event Date (MM/DD/YYYY)</label>
              <input type="text" id="time_input" class="classic_input" value="<?php echo date('m/d/Y', $newsdetails_datas->time); ?>">
            </div> 
            <a onclick="main_verification( 'time' ); return false;" class="button blue">Save</a>
          <a onclick="location.reload();" class="button orange">Cancel</a>
      </div>
    </article>

	  <article class="card half">
	    <div class="header yellow">
	      <h1>Description - News</h1>
	    </div>
	    <div class="body">
	      <div class="input_group active">
	        <label class="text_label" for="description_input">Description of the news</label>
	        <textarea id="description_input" class="classic_input" ><?php echo $newsdetails_datas->description;  ?></textarea>
	      </div>
        <a href="#" onclick="main_verification( 'description' ); return false;" class="button blue">Save</a>
        <a onclick="location.reload();" class="button orange">Cancel</a>
	    </div>
	  </article>

	  <article class="card half">
      <div class="header yellow">
          <h1>Link - News</h1>
      </div>
      <div class="body">
        <div class="input_group active">
          <label class="text_label" for="link_input">Link of the news (if none keep '#')</label>
          <input type="text"  id="link_input" class="classic_input" value="<?php echo $newsdetails_datas->link;  ?>" />
        </div>
        <a href="#" onclick="main_verification( 'link' ); return false;" class="button blue">Save</a>
        <a onclick="location.reload();" class="button orange">Cancel</a>
      </div>
    </article>

	</section>

    <!-- Script -->
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/plugins/jQuery.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/newsdetails.js"></script>
  </body>
</html>