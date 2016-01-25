<div class="main">
  <div>
    <section class="header">
      <h1><?php echo lang('edit_user_heading');?></h1>
      <h2><?php echo lang('edit_user_subheading');?></h2>
    </section>
  </div>
  <div class="content">
    <form class="pure-form pure-form-stacked">
      <fieldset>
      <div id="infoMessage"><?php echo $message;?></div>

      <?php echo form_open(uri_string());?>
      <div class="pure-g">
        <div class="pure-u-1 pure-u-md-1-3">
                <?php echo lang('edit_user_fname_label', 'first_name');?>
                <?php echo form_input($first_name);?>
        </div>
        <div class="pure-u-1 pure-u-md-1-3">
            <?php echo lang('edit_user_lname_label', 'last_name');?>
            <?php echo form_input($last_name);?>
        </div>
        <div class="pure-u-1 pure-u-md-1-3">
            <?php echo lang('edit_user_phone_label', 'phone');?> 
            <?php echo form_input($phone);?>
        </div>
        <div class="pure-u-1 pure-u-md-1-3">
              <?php echo lang('edit_user_password_label', 'password');?> 
              <?php echo form_input($password);?>
        </div>
        <div class="pure-u-1 pure-u-md-1-3">
              <?php echo lang('edit_user_password_confirm_label', 'password_confirm');?>
              <?php echo form_input($password_confirm);?>
        </div>
      </div>
            <?php if ($this->ion_auth->is_admin()): ?>
                <h3><?php echo lang('edit_user_groups_heading');?></h3>
                <?php foreach ($groups as $group):?>
                    <label class="checkbox">
                    <?php
                        $gID=$group['AidiGrupo'];
                        $checked = null;
                        $item = null;
                        foreach($currentGroups as $grp) {
                            if ($gID == $grp->AidiGrupo) {
                                $checked= ' checked="checked"';
                            break;
                            }
                        }
                    ?>
                    <input type="checkbox" name="groups[]" value="<?php echo $group['AidiGrupo'];?>"<?php echo $checked;?>>
                    <?php echo htmlspecialchars($group['NeimGrupo'],ENT_QUOTES,'UTF-8');?>
                    </label>
                <?php endforeach?>

            <?php endif ?>

            <?php echo form_hidden('id', $user->AidiUsuario);?>
            <?php echo form_hidden($csrf); ?>
            <p><?php echo form_submit('submit', lang('edit_user_submit_btn'));?></p>

      <?php echo form_close();?>
    </fieldset>
  </form>
  </div>
</div>