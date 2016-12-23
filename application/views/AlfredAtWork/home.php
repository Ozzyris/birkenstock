    <section id="content">

        <article id="card_newslettertext" class="card half">
          <div class="header yellow">
            <h1>Footer - Newsletter Text</h1>
          </div>
          <form class="body" action="" method="post">
            <div class="input_group active">
              <label class="text_label" for="newsletter_form_text">Fabebook text</label>
              <textarea name="newsletter_form_text" id="newsletter_form_text" class="classic_input" onfocus="animation_label('focus', event);" onblur="animation_label('blur', event);"><?php echo $home_datas->newsletter_text; ?></textarea>
            </div>
            <a href="#" onclick="main_verification(['text'], ['newsletter_form_text']); return false;" class="button blue">Save</a>
            <a href="#" class="button orange">Cancel</a>
          </form>
        </article>

        <article id="card_facebook" class="card half">
          <div class="header yellow">
            <h1>Footer - Facebook</h1>
          </div>
          <form class="body" action="" method="post">
            <div class="input_group active">
              <label class="text_label" for="facebook_form_text">Fabebook text</label>
              <input type="text" name="facebook_form_text"  id="facebook_form_text" class="classic_input" value="<?php echo $home_datas->facebook_text; ?>" onfocus="animation_label('focus', event);" onblur="animation_label('blur', event);"/>
            </div>
            <div class="input_group active">
              <label class="text_label" for="facebook_form_link">Fabebook link</label>
              <input type="text" name="facebook_form_link"  id="facebook_form_link" class="classic_input" value="<?php echo $home_datas->facebook_link; ?>" onfocus="animation_label('focus', event);" onblur="animation_label('blur', event);"/>
            </div>
            <a href="#" onclick="main_verification(['text', 'url'], ['facebook_form_text', 'facebook_form_link']); return false;" class="button blue">Save</a>
            <a href="#" class="button orange">Cancel</a>
          </form>
        </article>

        <article id="card_instagram" class="card half">
          <div class="header yellow">
            <h1>Footer - Instagram</h1>
          </div>
          <form class="body" action="" method="post">
            <div class="input_group active">
              <label class="text_label" for="instagram_form_text">Instagram text</label>
              <input type="text" name="instagram_form_text"  id="instagram_form_text" class="classic_input" value="<?php echo $home_datas->instagram_text; ?>" onfocus="animation_label('focus', event);" onblur="animation_label('blur', event);"/>
            </div>
            <div class="input_group active">
              <label class="text_label" for="instagram_form_link">Instagram link</label>
              <input type="text" name="instagram_form_link"  id="instagram_form_link" class="classic_input" value="<?php echo $home_datas->instagram_link; ?>" onfocus="animation_label('focus', event);" onblur="animation_label('blur', event);"/>
            </div>
            <a href="#" class="button blue">Save</a>
            <a href="#" class="button orange">Cancel</a>
          </form>
        </article>

        <article id="card_address" class="card half">
          <div class="header yellow">
            <h1>Footer - Adress</h1>
            <!-- ADD A TOOLTYPE INFORMATION ON BR TAG-->
          </div>
          <form class="body" action="" method="post">
            <div class="input_group active">
              <label class="text_label" for="address_form_text">Address text</label>
              <input type="text" name="address_form_text"  id="address_form_text" class="classic_input" value="<?php echo $home_datas->address_text; ?>" onfocus="animation_label('focus', event);" onblur="animation_label('blur', event);"/>
            </div>
            <div class="input_group active">
              <label class="text_label" for="address_form_link">Address link</label>
              <input type="text" name="address_form_link"  id="address_form_link" class="classic_input" value="<?php echo $home_datas->address_link; ?>" onfocus="animation_label('focus', event);" onblur="animation_label('blur', event);"/>
            </div>
            <a href="#" class="button blue">Save</a>
            <a href="#" class="button orange">Cancel</a>
          </form>
        </article>

        <article id="card_email" class="card half">
          <div class="header yellow">
            <h1>Footer - Email</h1>
          </div>
          <form class="body" action="" method="post">
            <div class="input_group active">
              <label class="text_label" for="email_form_text">Email text</label>
              <input type="text" name="email_form_text"  id="email_form_text" class="classic_input" value="<?php echo $home_datas->email_text; ?>" onfocus="animation_label('focus', event);" onblur="animation_label('blur', event);"/>
            </div>
            <div class="input_group active">
              <label class="text_label" for="email_form_link">Email link</label>
              <input type="text" name="email_form_link"  id="email_form_link" class="classic_input" value="<?php echo $home_datas->email_link; ?>" onfocus="animation_label('focus', event);" onblur="animation_label('blur', event);"/>
            </div>
            <a href="#" class="button blue">Save</a>
            <a href="#" class="button orange">Cancel</a>
          </form>
        </article>

        <article id="card_phone" class="card half">
          <div class="header yellow">
            <h1>Footer - Phone</h1>
          </div>
          <form class="body" action="" method="post">
            <div class="input_group active">
              <label class="text_label" for="phone_form_text">Phone text</label>
              <input type="text" name="phone_form_text"  id="phone_form_text" class="classic_input" value="<?php echo $home_datas->phone_text; ?>" onfocus="animation_label('focus', event);" onblur="animation_label('blur', event);"/>
            </div>
            <div class="input_group active">
              <label class="text_label" for="phone_form_link">Phone link</label>
              <input type="text" name="phone_form_link"  id="phone_form_link" class="classic_input" value="<?php echo $home_datas->phone_link; ?>" onfocus="animation_label('focus', event);" onblur="animation_label('blur', event);"/>
            </div>
            <a href="#" class="button blue">Save</a>
            <a href="#" class="button orange">Cancel</a>
          </form>
        </article>

    </section>

    <!-- Script -->
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/plugins/jQuery.js"></script>
    <script src="<?php echo base_url(); ?>assets/alfredatwork/scripts/main.js"></script>
    <script src="<?php echo base_url(); ?>assets/AlfredAtWork/scripts/home.js"></script>
  </body>
</html>