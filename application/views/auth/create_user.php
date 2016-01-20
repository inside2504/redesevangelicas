<div class="contenido">
  <div>
    <section class="borde">
      <h3><?php echo lang('create_user_heading');?></h3>
      <p><?php echo lang('create_user_subheading');?></p>
    </section>
  </div>

  <div id="infoMessage"><?php echo $message;?></div>

    <?php echo form_open("auth/create_user");?>
        <section>
          <p>
                <?php echo lang('create_user_fname_label', 'first_name');?> <br />
                <?php echo form_input($first_name);?>
          </p>
        </section>
        <section>
          <p>
                <?php echo lang('create_user_lname_label', 'last_name');?> <br />
                <?php echo form_input($last_name);?>
          </p>
        </section>

          <?php
          if($identity_column!=='email') {
              echo '<p>';
              echo lang('create_user_identity_label', 'identity');
              echo '<br />';
              echo form_error('identity');
              echo form_input($identity);
              echo '</p>';
          }
          ?>
        <section>
          <p>
                <?php echo lang('create_user_company_label', 'company');?> <br />
                <?php echo form_input($company);?>
          </p>
        </section>
        <section>
          <p>
                <?php echo lang('create_user_email_label', 'email');?> <br />
                <?php echo form_input($email);?>
          </p>
        </section>
        <section>
          <p>
                <?php echo lang('create_user_phone_label', 'phone');?> <br />
                <?php echo form_input($phone);?>
          </p>
        </section>
        <section>
          <p>
                <?php echo lang('create_user_password_label', 'password');?> <br />
                <?php echo form_input($password);?>
          </p>
        </section>
        <section>
          <p>
                <?php echo lang('create_user_password_confirm_label', 'password_confirm');?> <br />
                <?php echo form_input($password_confirm);?>
          </p>
        </section>

          <p><?php echo form_submit('submit', lang('create_user_submit_btn'));?></p>

    <?php echo form_close();?>
</div>