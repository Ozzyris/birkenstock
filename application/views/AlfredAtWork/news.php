  <section id="content">

    <?php  foreach ($news_datas as $datas): ?>
    <article class="object <?php  if($datas->active != 1){ echo 'archive'; } ?>">
      <div class="action">
        <?php if($datas->active == -1 ){ ?>
          <a class="icon edit" onclick="undo_deletion( <?php  echo $datas->id; ?> )">&#xf0e2;</a>        
        <?php }else{ ?>
          <a class="icon edit" href="newsdetails/<?php  echo $datas->id; ?>">&#xf040;</a>
          <a class="icon cancel" onclick="simple_modal_factory( <?php  echo $datas->id; ?>, 'error', 'Are you sure you want to delete this news?', 'Are you sure of your choice ?<br>The news will be archive for 30 days, then delete.' );">&#xf014;</a>
        <?php } ?>
      </div>
      <div class="content">
        <div class="illustration" style="background-image: url(<?php echo base_url(); ?>assets/images/<?php  echo $datas->image; ?>);"></div>
        <h2><?php  echo $datas->title; ?></h2>
        <p><b><?php  echo date('l jS \of F', $datas->time); ?></b></p>
        <?php if($datas->active != -1 ){ ?>
        <div class="switch_container" action="#" >
          <span class="switch <?php if($datas->active == 1 ){ echo 'active'; }?>" onclick="switch_archive( event, <?php  echo $datas->id; ?> );"></span>
        </div>
        <?php }else{ 
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