<div class="contenido">
  <div>
    <section class="borde">
      <h2><?php echo lang('login_heading');?></h2>
    </section>
    <div>
      <h4><?php echo lang('login_subheading');?></h4>
      <div id="infoMessage"><?php echo $message;?></div>

        <?php echo form_open("auth/login");?>
        <section>
          <p>
            <?php echo lang('login_identity_label', 'identity');?>
            <?php echo form_input($identity);?>
          </p>
        </section>
        <section>
          <p>
            <?php echo lang('login_password_label', 'password');?>
            <?php echo form_input($password);?>
          </p>
        </section>
        <section>
          <p>
            <?php echo lang('login_remember_label', 'remember');?>
            <?php echo form_checkbox('remember', '1', FALSE, 'id="remember"');?>
          </p>
        </section>
        <section>
          <p><?php echo form_submit('submit', lang('login_submit_btn'));?></p>
        </section>
        <?php echo form_close();?>

      <p><a href="forgot_password"><?php echo lang('login_forgot_password');?></a></p>
  </div>
</div>