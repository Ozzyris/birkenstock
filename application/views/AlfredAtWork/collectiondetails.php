	<nav class="breadcrumb">
   	<p><span>></span><span><a href="<?php echo base_url(); ?>alfredatwork/collection">All Collection</a><span>></span><a class="disabled" href="#"><?php echo $collectiondetails_datas->name;  ?></a></p>
  </nav>


	<section id="content">

		<article class="card half">
      <div class="header yellow">
        <h1>Name - Collection</h1>
      </div>
      <form class="body" action="" method="post">
        <div class="input_group active">
          <label class="text_label" for="collection_name">Name of the collection</label>
          <input type="text" name="collection_name"  id="collection_name" class="classic_input" value="<?php echo $collectiondetails_datas->name;  ?>" onfocus="animation_label('focus', event);" onblur="animation_label('blur', event);"/>
          <input type="hidden" id="collection_id" value="<?php echo $collection_id;  ?>"/>
        </div>
        <a href="#" onclick="main_verification( 'name' )" class="button blue">Save</a>
        <a href="#" class="button orange">Cancel</a>
      </form>
    </article>

	   <article id="card_newslettertext" class="card half">
	      <div class="header yellow">
	        <h1>Description - Collection</h1>
	      </div>
	      <form class="body" action="" method="post">
	        <div class="input_group active">
	          <label class="text_label" for="collection_description">Description of the collection</label>
	          <textarea name="collection_description" id="collection_description" class="classic_input" onfocus="animation_label('focus', event);" onblur="animation_label('blur', event);"><?php echo $collectiondetails_datas->description;  ?></textarea>
	        </div>
	        <a href="#" onclick="main_verification( 'description' )" class="button blue">Save</a>
	        <a href="#" class="button orange">Cancel</a>
	      </form>
	    </article>


	</section>

    <!-- Script -->
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/plugins/jQuery.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/collectiondetails.js"></script>
  </body>
</html>