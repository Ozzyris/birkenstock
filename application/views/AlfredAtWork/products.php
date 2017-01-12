  <nav class="breadcrumb">
    <p><span>></span><span><a href="<?php echo base_url(); ?>alfredatwork/collection">All Collection</a><span>></span><a class="disabled" href="#"><?php echo $collection_name; ?></a></p>
  </nav>

  <section id="content">

    <?php if( $product_datas != null ){ ?>
      <?php  foreach ($product_datas as $datas): ?>
        <article class="object <?php  if($datas->active == 0){ echo 'archive'; } ?>" id="product_<?php  echo $datas->id; ?>">
          <div class="action">
            <?php if($datas->active == 0 ){ ?>
              <a class="icon edit" href="<?php  echo base_url() . 'alfredatwork/product-details/' . $datas->id; ?>">&#xf040;</a>
              <a class="icon cancel" onclick="simple_modal_factory( <?php  echo $datas->id; ?>, 'error', 'Are you sure you want to delete this news?', 'Are you sure of your choice ?' );">&#xf014;</a>
            <?php }else{ ?>
              <a class="icon edit" href="<?php  echo base_url() . 'alfredatwork/product-details/' . $datas->id; ?>">&#xf040;</a>
            <?php } ?>
            </div>
          </div>
          <div class="content">
            <div class="illustration" style="background: rgb(253, 206, 109) url(<?php echo base_url() . $datas->thumb; ?>); background-position: center center; background-repeat: no-repeat;"></div>
            <h2><?php  echo $datas->color; ?></h2>
            <p><b><?php  echo $datas->category; ?></b></p>
            <div class="switch_container" >
              <span class="switch <?php if($datas->active == 1 ){ echo 'active'; }?>" onclick="switch_archive( event, <?php  echo $datas->id; ?> );"></span>
            </div>
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