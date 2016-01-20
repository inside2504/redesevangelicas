<div class="contenido">
	<div>
		<section class="borde">
			<h3><?php echo lang('deactivate_heading');?></h3>
			<p><?php echo sprintf(lang('deactivate_subheading'), $user->username);?></p>
		</section>
	</div>

		<?php echo form_open("auth/deactivate/".$user->id);?>
		<section>
		  <p>
		  	<?php echo lang('deactivate_confirm_y_label', 'confirm');?>
		    <input type="radio" name="confirm" value="yes" checked="checked" />
		    <?php echo lang('deactivate_confirm_n_label', 'confirm');?>
		    <input type="radio" name="confirm" value="no" />
		  </p>
		</section>

		  <?php echo form_hidden($csrf); ?>
		  <?php echo form_hidden(array('id'=>$user->id)); ?>

		  <p><?php echo form_submit('submit', lang('deactivate_submit_btn'));?></p>

		<?php echo form_close();?>
</div>