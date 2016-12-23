	<nav class="breadcrumb">
    	<p><span>></span><span><a href="<?php echo base_url(); ?>alfredatwork/news">All News</a><span>></span><a class="disabled" href="#"><?php echo 'News N°' . $newsdetails_datas->id;  ?></a></p>
  	</nav>

	<section id="content">

		<article id="card_email" class="card half">
          <div class="header yellow">
            <h1>Title - News</h1>
          </div>
          <form class="body" action="" method="post">
            <div class="input_group active">
              <label class="text_label" for="news_title">Title of the news</label>
              <input type="text" name="news_title"  id="news_title" class="classic_input" value="<?php echo $newsdetails_datas->title;  ?>" onfocus="animation_label('focus', event);" onblur="animation_label('blur', event);"/>
              <input type="hidden" name="product_id" id="product_id" value="<?php echo $product_id;  ?>"/>
            </div>
            <a href="#" onclick="main_verification( 'title' )" class="button blue">Save</a>
            <a href="#" class="button orange">Cancel</a>
          </form>
        </article>

	    <article id="card_newslettertext" class="card half">
	      <div class="header yellow">
	        <h1>Description - News</h1>
	      </div>
	      <form class="body" action="" method="post">
	        <div class="input_group active">
	          <label class="text_label" for="news_description">Description of the news</label>
	          <textarea name="news_description" id="news_description" class="classic_input" onfocus="animation_label('focus', event);" onblur="animation_label('blur', event);"><?php echo $newsdetails_datas->description;  ?></textarea>
	        </div>
	        <a href="#" onclick="main_verification( 'description' )" class="button blue">Save</a>
	        <a href="#" class="button orange">Cancel</a>
	      </form>
	    </article>

	    <article id="card_email" class="card half">
          <div class="header yellow">
            <h1>Link - Link</h1>
          </div>
          <form class="body" action="" method="post">
            <div class="input_group active">
              <label class="text_label" for="news_link">Link of the news (if none keep '#')</label>
              <input type="text" name="news_link"  id="news_link" class="classic_input" value="<?php echo $newsdetails_datas->link;  ?>" onfocus="animation_label('focus', event);" onblur="animation_label('blur', event);"/>
            </div>
            <a href="#" onclick="main_verification( 'link' )" class="button blue">Save</a>
            <a href="#" class="button orange">Cancel</a>
          </form>
        </article>

	</section>

    <!-- Script -->
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/plugins/jQuery.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/newsdetails.js"></script>
  </body>
</html>