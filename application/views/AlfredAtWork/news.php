  <section id="content">

    <?php  foreach ($news_datas as $datas): ?>
    <article id="news_<?php  echo $datas->id; ?>"class="object <?php  if($datas->active == 0){ echo 'archive'; } ?>">
      <div class="action">
        <?php if($datas->active == 1 ){ ?>
          <a class="icon edit" href="<?php  echo base_url() . 'alfredatwork/newsdetails/' . $datas->id; ?>">&#xf040;</a>
        <?php }else{ ?>
          <a class="icon edit" href="<?php  echo base_url() . 'alfredatwork/newsdetails/' . $datas->id; ?>">&#xf040;</a>
          <a class="icon cancel" onclick="simple_modal_factory( <?php  echo $datas->id; ?>, 'error', 'Are you sure you want to delete this news?', 'Are you sure of your choice ?' );">&#xf014;</a>
        <?php } ?>
      </div>
      <div class="content">
        <div class="illustration" style="background-image: url(<?php echo base_url() . $datas->image; ?>);"></div>
        <h2><?php  echo $datas->title; ?></h2>
        <p><b><?php  echo date('l jS \of F', $datas->time); ?></b></p>
        <div class="switch_container" action="#" >
          <span class="switch <?php if($datas->active == 1 ){ echo 'active'; }?>" onclick="switch_element( event, <?php  echo $datas->id; ?> );"></span>
        </div>
        <div class="deletionTime">
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
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/news.js"></script>
  </body>
</html>