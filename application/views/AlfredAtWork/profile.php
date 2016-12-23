<!-- OLD INCLUDES -->
  <section id="content">

    <article id="card_name" class="card half">
      <div class="header yellow">
        <h1>Name</h1>
      </div>
      <form class="body" action="" method="post">
        <div class="input_group active">
          <label class="text_label" for="first_name_form">First Name</label>
          <input type="text" name="first_name_form"  id="first_name_form" class="classic_input" value="<?php echo $profile_datas->first_name; ?>" onfocus="animation_label('focus', event);" onblur="animation_label('blur', event);" />
        </div>
        <div class="input_group active">
          <label class="text_label" for="last_name_form">Last Name</label>
          <input type="text" name="last_name_form"  id="last_name_form" class="classic_input" value="<?php echo $profile_datas->last_name; ?>" onfocus="animation_label('focus', event);" onblur="animation_label('blur', event);" />
        </div>
        <a href="#" onclick="main_verification('name'); return false;" class="button blue">Save</a>
        <a href="#" class="button orange">Cancel</a>
      </form>
    </article>

    <article id="card_email" class="card half">
      <div class="header yellow">
        <h1>Email</h1>
      </div>
      <form class="body" action="" method="post">
        <div class="input_group active">
          <label class="text_label" for="email_form">Email</label>
          <input type="text" name="email_form"  id="email_form" class="classic_input" value="<?php echo $profile_datas->email; ?>" onfocus="animation_label('focus', event);" onblur="animation_label('blur', event);" />
        </div>
        <a href="#" onclick="main_verification('email'); return false;" class="button blue">Save</a>
        <a href="#" class="button orange">Cancel</a>
      </form>
    </article>

    <article id="card_password" class="card half">
      <div class="header yellow">
        <h1>Password</h1>
      </div>
      <form class="body" action="" method="post">
        <div class="input_group">
          <label class="text_label" for="password_form_old">Old Password</label>
          <input type="password" name="password_form_old"  id="password_form_old" class="classic_input" onfocus="animation_label('focus', event);" onblur="animation_label('blur', event);"/>
        </div>
        <div class="input_group">
          <label class="text_label" for="password_form_new">New Password</label>
          <input type="password" name="password_form_new"  id="password_form_new" class="classic_input" onfocus="animation_label('focus', event);" onblur="animation_label('blur', event);"/>
        </div>
        <div class="input_group">
          <label class="text_label" for="password_form_newbis">Repeat New Password</label>
          <input type="password" name="password_form_newbis"  id="password_form_newbis" class="classic_input" onfocus="animation_label('focus', event);" onblur="animation_label('blur', event);" />
        </div>
        <a href="#" onclick="main_verification('password'); return false;" class="button blue">Save</a>
        <a href="#" class="button orange">Cancel</a>
      </form>
    </article>

  </section>



    <!-- Script -->
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/plugins/jQuery.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/profile.js"></script>
  </body>
</html>