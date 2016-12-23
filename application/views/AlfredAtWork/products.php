  <nav class="breadcrumb">
    <p><span>></span><span><a href="<?php echo base_url(); ?>alfredatwork/collection">All Collection</a><span>></span><a class="disabled" href="#"><?php echo $collection_name; ?></a></p>
  </nav>

  <section id="content">

    <?php if( $product_datas != null ){ ?>
      <?php  foreach ($product_datas as $datas): ?>
      <article class="object <?php  if($datas->active != 1){ echo 'archive'; } ?>" id="object_<?php  echo $datas->id; ?>">
        <div class="action">
          <div class="btn_container" <?php if( $datas->active != -1 ){ echo 'style="display:none;"'; } ?> >
            <a class="icon edit" onclick="undo_deletion( <?php  echo $datas->id; ?>, event )">&#xf0e2;</a> 
          </div>     
          <div class="btn_container" <?php if( $datas->active == -1 ){ echo 'style="display:none;"'; } ?>>
            <a class="icon edit" href="<?php echo base_url(); ?>alfredatwork/productdetails/<?php  echo $datas->id; ?>">&#xf040;</a>
            <a class="icon cancel" onclick="simple_modal_factory( <?php  echo $datas->id; ?>, 'error', 'Are you sure you want to delete this news?', 'Are you sure of your choice ?<br>The news will be archive for 30 days, then delete.' );">&#xf014;</a>
          </div>
        </div>
        <div class="content">
          <div class="illustration" style="background-image: url(<?php echo base_url(); ?>assets/images/<?php  echo $datas->thumb; ?>);"></div>
          <h2><?php  echo $datas->collection . ' - ' . $datas->color; ?></h2>

          <div class="switch_container"  <?php if( $datas->active == -1 ){ echo 'style="display:none;"'; } ?>>
            <span class="switch <?php if($datas->active == 1 ){ echo 'active'; }?>" onclick="switch_archive( event, <?php  echo $datas->id; ?> );"></span>
          </div>
          <?php 
          if( $datas->active == -1 ){
            $timesamp_to_death = $datas->time_to_death;
            $timestamp = new DateTime();
            $timestamp = $timestamp->getTimestamp();
            $timestamp_final = $timesamp_to_death - $timestamp;
            $timestamp_final = round($timestamp_final / (60*60*24));

          ?>
          <div class="deletionTime">
            <p><?php echo $timestamp_final; ?> days before deletion</p>
          </div>
          <?php } ?>
        </div>
      </article>
      <?php  endforeach ?>
    <?php }else{ ?>
      <div class="noproduct">
        <img src="<?php echo base_url(); ?>assets/AlfredAtWork/images/ELEM_noproduct.svg" alt="fire camp">
        <h2>You don't have any product in this collection yet!</h2>
        <p>Add one with the "plus" button on the top!</p>
      </div>

    <?php } ?>

    <a onclick="product_tooltype_factory( <?php echo $collection_id; ?> ); return false;" id="Float_button">
      <span class="plus elem-1"></span>
      <span class="plus elem-2"></span>
    </a>
</section>


    <!-- Script -->
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/plugins/jQuery.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/products.js"></script>
  </body>
</html>