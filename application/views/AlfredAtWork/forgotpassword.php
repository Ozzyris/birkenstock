    <link href="<?php echo base_url(); ?>assets/AlfredAtWork/styles/forgotpassword.css" rel="stylesheet">

    <span id="tooltype">
      <div id="connexion_form" action="">
        <input id="revovery_email" name="email" type="text" placeholder="email" onKeyPress="if(event.keyCode == 13) sendrecoveryemail();" value="nemokervi@yahoo.fr"/><br />
        <br />
        <a href="#" onclick="sendrecoveryemail()" class="input_button active">Send recovery email</a>
        <a href="login" class="input_button">Cancel</a>
      </div>
    </span>

    <img id="background_img"  src="<?php echo base_url(); ?>assets/AlfredAtWork/images/BG_forgotpassword.svg"> 
    
    <!-- SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/plugins/jQuery.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/forgotpassword.js"></script>
  </body>
</html>