    <link href="<?php echo base_url(); ?>assets/AlfredAtWork/styles/forgotpassword.css" rel="stylesheet">

    <span id="tooltype">
      <form id="connexion_form" action="login/auth" method="POST">
            <input id="input_password_recovery" name="password_recovery" type="password" placeholder="password" />
            <input id="input_password_recovery_bis" name="password_recovery_bis" type="password" placeholder="password" />
            <input id="token" name="token" type="hidden" value="<?php echo $token ?>" />
        <br />
        <a onclick="main_verification( 'password' ); return false;" class="input_button active">Change Password</a>
        <a href="login" class="input_button">Cancel</a>
      </form>
    </span>

    <img id="background_img"  src="<?php echo base_url(); ?>assets/AlfredAtWork/images/BG_forgotpassword.svg"> 
    
    <!-- SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/plugins/jQuery.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/createpassword.js"></script>
  </body>
</html>