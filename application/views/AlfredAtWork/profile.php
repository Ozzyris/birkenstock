  <section id="content">

    <article class="card half">
      <div class="header yellow">
        <h1>Name</h1>
      </div>
      <div class="body">
        <div class="input_group">
          <label class="text_label" for="input_firstname">First Name</label>
          <input type="text" id="input_firstname" class="classic_input" value="<?php echo $profile_datas->first_name; ?>" />
        </div>
        <div class="input_group active">
          <label class="text_label" for="input_lastname">Last Name</label>
          <input type="text" id="input_lastname" class="classic_input" value="<?php echo $profile_datas->last_name; ?>" />
        </div>
        <a onclick="main_verification( 'name' ); return false;" class="button blue">Save</a>
        <a onclick="location.reload();" class="button orange">Cancel</a>
      </div>
    </article>

    <article class="card half">
      <div class="header yellow">
        <h1>Email</h1>
      </div>
      <div class="body">
        <div class="input_group">
          <label class="text_label" for="input_email">Email</label>
          <input type="text"  id="input_email" class="classic_input" value="<?php echo $profile_datas->email; ?>" />
        </div>
        <a onclick="main_verification( 'email' ); return false;" class="button blue">Save</a>
        <a onclick="location.reload();" class="button orange">Cancel</a>
      </div>
    </article>

  </section>



    <!-- Script -->
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/plugins/jQuery.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/profile.js"></script>
  </body>
</html>