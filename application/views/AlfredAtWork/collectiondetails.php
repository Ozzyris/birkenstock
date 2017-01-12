	<nav class="breadcrumb">
   	<p><span>></span><span><a href="<?php echo base_url(); ?>alfredatwork/collection">All Collection</a><span>></span><a class="disabled" href="#"><?php echo $collectiondetails_datas->name;  ?></a></p>
  </nav>


	<section id="content">

    <input type="hidden" id="collection_id" value="<?php echo $collection_id;  ?>"/>

		<article class="card half">
      <div class="header yellow">
        <h1>Name - Collection</h1>
      </div>
      <div class="body">
        <div class="input_group active">
          <label class="text_label" for="input_name">Name of the collection</label>
          <input type="text"  id="input_name" class="classic_input" value="<?php echo $collectiondetails_datas->name;  ?>" />
        </div>
        <a onclick="main_verification( 'name' ); return false;" class="button blue">Save</a>
        <a onclick="location.reload();" class="button orange">Cancel</a>
      </div>
    </article>

	   <article class="card half">
	      <div class="header yellow">
	        <h1>Description - Collection</h1>
	      </div>
	      <fiv class="body">
	        <div class="input_group active">
	          <label class="text_label" for="input_description">Description of the collection</label>
	          <textarea id="input_description" class="classic_input" ><?php echo $collectiondetails_datas->description;  ?></textarea>
	        </div>
        <a onclick="main_verification( 'description' ); return false;" class="button blue">Save</a>
        <a onclick="location.reload();" class="button orange">Cancel</a>
	      </fiv>
	    </article>


	</section>

    <!-- Script -->
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/plugins/jQuery.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/collectiondetails.js"></script>
  </body>
</html>