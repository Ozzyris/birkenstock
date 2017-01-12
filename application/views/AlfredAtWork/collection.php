  <section id="content">

    <?php  foreach ($collection_datas as $datas): ?>
      <article class="object <?php  if( $datas->active == 0 ){ echo 'archive'; } ?>" id="collection_<?php  echo $datas->id; ?>">
        <div class="action">
          <?php if($datas->active == 0 ){ ?>
            <a class="icon edit" href="<?php  echo base_url() . 'alfredatwork/collectiondetails/' . $datas->id; ?>">&#xf040;</a>
            <a class="icon cancel" onclick="simple_modal_factory( <?php  echo $datas->id; ?>, 'error', 'Are you sure you want to delete this news?', 'Are you sure of your choice ?' );">&#xf014;</a>
          <?php }else{ ?>
            <a class="icon edit" href="<?php  echo base_url() . 'alfredatwork/collectiondetails/' . $datas->id; ?>">&#xf040;</a>
          <?php } ?>
        </div>
        <div class="content">
            <div class="illustration" style="background: rgb(253, 206, 109) url(<?php echo base_url() . $datas->thumb; ?>); background-position: center center; background-repeat: no-repeat;"></div>
          <h2><?php  echo $datas->name; ?></h2>
          <p><b><?php  echo 'count: ' . $datas->count . ' shoes'; ?></b></p>
          <div class="switch_container" action="#" >
           <span class="switch <?php if($datas->active == 1 ){ echo 'active'; }?>" onclick="switch_archive( event, <?php  echo $datas->id; ?> );"></span>
          </div>
          <a href="products/<?php  echo $datas->name; ?>" class="button blue">See Collection</a>
        </div>
      </article>
    <?php  endforeach ?>

    <a onclick="tooltype_factory(); return false;" id="Float_button">
      <span class="plus elem-1"></span>
      <span class="plus elem-2"></span>
    </a>
</section>


    <!-- Script -->
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/plugins/jQuery.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/collection.js"></script>
  </body>
</html>