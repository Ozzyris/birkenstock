    <link href="<?php echo base_url(); ?>assets/AlfredAtWork/styles/login.css" rel="stylesheet">
    <button class="button" onclick="login_tooltype();">Connexion</button>
    <span id="tooltype">
      <form id="connexion_form" action="<?php echo base_url(); ?>alfredatwork/login/auth" method="POST">
        <input id="input_email" name="email" type="text" placeholder="email" /><br />
        <input id="input_password" name="password" onKeyPress="if(event.keyCode == 13) login_verfification();" type="password" placeholder="password" />
        <a href="forgot-password" class="link">forgot password ?</a>
        <br />
        <a href="#" onclick="login_verfification();" class="input_button active">Send</a>
        <a href="#" onclick="login_tooltype();" class="input_button">Cancel</a>
      </form>
    </span>

    <img id="background_img"  src="<?php echo base_url(); ?>assets/AlfredAtWork/images/intro_Background.svg"> 
    
    <!-- SCRIPTS -->
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/plugins/jQuery.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/login.js"></script>
  </body>
</html>