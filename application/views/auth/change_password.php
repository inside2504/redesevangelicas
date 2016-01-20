<div class="contenido">
      <div>
            <section class="borde">
                  <h3><?php echo lang('change_password_heading');?></h3>
            </section>
      </div>
      <div id="infoMessage"><?php echo $message;?></div>
            
            <?php echo form_open("auth/change_password");?>
            <section>
                  <p>
                        <?php echo lang('change_password_old_password_label', 'old_password');?> <br />
                        <?php echo form_input($old_password);?>
                  </p>
            </section>
            <section>
                  <p>
                        <label for="new_password"><?php echo sprintf(lang('change_password_new_password_label'), $min_password_length);?></label> <br />
                        <?php echo form_input($new_password);?>
                  </p>
            </section>
            <section>
                  <p>
                        <?php echo lang('change_password_new_password_confirm_label', 'new_password_confirm');?> <br />
                        <?php echo form_input($new_password_confirm);?>
                  </p>
            </section>
            <?php echo form_input($user_id);?>
            <p><?php echo form_submit('submit', lang('change_password_submit_btn'));?></p>
            <?php echo form_close();?>

</div>