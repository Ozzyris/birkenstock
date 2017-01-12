    <section id="content">

        <article id="card_newslettertext" class="card half">
          <div class="header yellow">
            <h1>Footer - Newsletter Text</h1>
          </div>
          <div class="body">
            <div class="input_group">
              <label class="text_label" for="input_newslettertext">Newsletter text</label>
              <textarea id="input_newslettertext" class="classic_input"><?php echo $home_datas->newsletter_text; ?></textarea>
            </div>
            <a onclick="main_verification( 'newsletter' ); return false;" class="button blue">Save</a>
            <a onclick="location.reload();" class="button orange">Cancel</a>
          </div>
        </article>

        <article id="card_facebook" class="card half">
          <div class="header yellow">
            <h1>Footer - Facebook</h1>
          </div>
          <div class="body">
            <div class="input_group">
              <label class="text_label" for="input_facebooktext">Fabebook text</label>
              <input type="text" id="input_facebooktext" class="classic_input" value="<?php echo $home_datas->facebook_text; ?>" />
            </div>
            <div class="input_group">
              <label class="text_label" for="input_facebooklink">Fabebook link</label>
              <input type="text" id="input_facebooklink" class="classic_input" value="<?php echo $home_datas->facebook_link; ?>" />
            </div>
            <a onclick="main_verification( 'facebook' ); return false;" class="button blue">Save</a>
            <a onclick="location.reload();" class="button orange">Cancel</a>
          </div>
        </article>

        <article id="card_instagram" class="card half">
          <div class="header yellow">
            <h1>Footer - Instagram</h1>
          </div>
          <div class="body">
            <div class="input_group active">
              <label class="text_label" for="input_instagramtext">Instagram text</label>
              <input type="text" id="input_instagramtext" class="classic_input" value="<?php echo $home_datas->instagram_text; ?>" />
            </div>
            <div class="input_group active">
              <label class="text_label" for="input_instagramlink">Instagram link</label>
              <input type="text" id="input_instagramlink" class="classic_input" value="<?php echo $home_datas->instagram_link; ?>" />
            </div>
            <a onclick="main_verification( 'instagram' ); return false;" class="button blue">Save</a>
            <a onclick="location.reload();" class="button orange">Cancel</a>
          </div>
        </article>

        <article id="card_address" class="card half">
          <div class="header yellow">
            <h1>Footer - Address</h1>
          </div>
          <div class="body">
            <div class="input_group active">
              <label class="text_label" for="input_addresstext">Address text</label>
              <input type="text" id="input_addresstext" class="classic_input" value="<?php echo $home_datas->address_text; ?>" />
            </div>
            <div class="input_group active">
              <label class="text_label" for="input_addresslink">Address link</label>
              <input type="text" id="input_addresslink" class="classic_input" value="<?php echo $home_datas->address_link; ?>" />
            </div>
            <a onclick="main_verification( 'address' ); return false;" class="button blue">Save</a>
            <a onclick="location.reload();" class="button orange">Cancel</a>
          </div>
        </article>

        <article id="card_email" class="card half">
          <div class="header yellow">
            <h1>Footer - Email</h1>
          </div>
          <div class="body">
            <div class="input_group active">
              <label class="text_label" for="input_emailtext">Email text</label>
              <input type="text" id="input_emailtext" class="classic_input" value="<?php echo $home_datas->email_text; ?>" />
            </div>
            <div class="input_group active">
              <label class="text_label" for="input_emaillink">Email link</label>
              <input type="text" id="input_emaillink" class="classic_input" value="<?php echo $home_datas->email_link; ?>" />
            </div>
            <a onclick="main_verification( 'email' ); return false;" class="button blue">Save</a>
            <a onclick="location.reload();" class="button orange">Cancel</a>
          </div>
        </article>

        <article id="card_phone" class="card half">
          <div class="header yellow">
            <h1>Footer - Phone</h1>
          </div>
          <div class="body">
            <div class="input_group active">
              <label class="text_label" for="input_phonetext">Phone text</label>
              <input type="text" id="input_phonetext" class="classic_input" value="<?php echo $home_datas->phone_text; ?>" />
            </div>
            <div class="input_group active">
              <label class="text_label" for="input_phonelink">Phone link</label>
              <input type="text" id="input_phonelink" class="classic_input" value="<?php echo $home_datas->phone_link; ?>" />
            </div>
            <a onclick="main_verification( 'phone' ); return false;" class="button blue">Save</a>
            <a onclick="location.reload();" class="button orange">Cancel</a>
          </div>
        </article>

    </section>

    <!-- Script -->
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/plugins/jQuery.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/home.js"></script>
  </body>
</html>