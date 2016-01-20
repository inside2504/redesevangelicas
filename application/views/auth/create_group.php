<div class="contenido">
	<div>
		<section class="borde">
			<h3><?php echo lang('create_group_heading');?></h3>
			<p><?php echo lang('create_group_subheading');?></p>
		</section>
	</div>
		<div id="infoMessage"><?php echo $message;?></div>

		<?php echo form_open("auth/create_group");?>
			<section>
		    	<p>
		            <?php echo lang('create_group_name_label', 'group_name');?> <br />
		            <?php echo form_input($group_name);?>
		     	</p>
		    </section>
		    <section>
		      	<p>
		            <?php echo lang('create_group_desc_label', 'description');?> <br />
		            <?php echo form_input($description);?>
		      	</p>
		    </section>
		      	<p><?php echo form_submit('submit', lang('create_group_submit_btn'));?></p>

		<?php echo form_close();?>

</div>