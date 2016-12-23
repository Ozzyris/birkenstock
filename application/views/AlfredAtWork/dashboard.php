<!-- OLD INCLUDES -->
<!-- <?php include("processing/dashboard_treatment_news.php"); ?> -->
<!-- <?php include("processing/dashboard_treatment_switch.php"); ?> -->
<!-- <?php if($maintenance == 1){ echo 'Offline'; }else{ echo 'Online'; } ?> --> 
<!-- <?php if($maintenance == 0){ echo 'checked'; } ?> -->
<!-- <?php include("processing/dashboard_treatment_newsletter.php"); ?> -->


  <section id="content">
    <article id="card_update" class="card">
      <div class="header blue">
        <h1>Update</h1>
      </div>
      <ul class="body">
        <?php  foreach ($dashboard_datas as $datas): ?>
        <li <?php  if($datas->status != 1){ echo 'class="archive"'; } ?>>
          <span class="date"><?php  $timeconvert = strtotime( $datas->timestamp ); echo date('Y/m/d', $timeconvert); ?></span>
          <span class="message"><?php  echo $datas->message; ?></span>
          <span onclick="archivesysteme_news( event, <?php  echo $datas->id; ?> )" class="archive">X</span>
        </li>
        <?php  endforeach ?>
      </ul>
    </article>
  
    <article id="card_status" class="card">
      <div class="header yellow">
        <h1>Status of the website</h1>
      </div>
      <div class="body">
        <div id="embed-api-auth-container"></div>
        <div id="chart-container"></div>
        <div id="view-selector-container"></div>
      </div>
    </article>
  
    <article id="card_newsletter" class="card">
      <div class="header yellow">
        <h1>Last Email from the Newsletter</h1>
      </div>
      <table class="body">
        <tbody>
          <?php  foreach ($mailchimp_data as $datas): ?>
          <tr>
            <td class="<?php  echo $datas['status']; ?>"> <?php  echo $datas['status']; ?> </td>
            <td><?php $timeconvert = strtotime( $datas['timestamp_signup'] ); echo date('Y/m/d', $timeconvert);; ?></td>
            <td><?php echo $datas['email_address']; ?></td>
            <td><a onclick="archivemailchimp( event, '<?php  echo $datas['email_address']; ?>' );" class="archive">X</a></td>
          </tr>
          <?php  endforeach ?>          
        </tbody>
      </table>
    </article>
  
  </section>


<script>
  (function(w,d,s,g,js,fs){
    g=w.gapi||(w.gapi={});g.analytics={q:[],ready:function(f){this.q.push(f);}};
    js=d.createElement(s);fs=d.getElementsByTagName(s)[0];
    js.src='https://apis.google.com/js/platform.js';
    fs.parentNode.insertBefore(js,fs);js.onload=function(){g.load('analytics');};
  }(window,document,'script'));
</script>
    <!-- Script -->
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/plugins/jQuery.js"></script>
    <script src="<?php echo base_url(); ?>assets/alfredatwork/scripts/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/dashboard.js"></script>
</body>
</html>