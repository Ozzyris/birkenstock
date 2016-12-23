    <link href="<?php echo base_url(); ?>assets/AlfredAtWork/styles/forgotpassword.css" rel="stylesheet">

    <span id="tooltype">
      <form id="connexion_form" action="login/auth" method="POST">
            <input id="input_password" name="password" type="password" placeholder="password" />
            <input id="input_password" name="password" type="password" placeholder="password" />
        <br />
        <a href="#" class="input_button active">Change Password</a>
        <a href="login" class="input_button">Cancel</a>
      </form>
    </span>

    <img id="background_img"  src="<?php echo base_url(); ?>assets/AlfredAtWork/images/BG_forgotpassword.svg"> 
    
    <!-- SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/plugins/jQuery.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/forgotpassword.js"></script>
  </body>
</html>