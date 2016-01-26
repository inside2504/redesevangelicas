<div class="main">
	<div>
		<section class="header">
			<h1><?php echo lang('index_heading');?></h1>
			<h2><?php echo lang('index_subheading');?></h2>
		</section>
	</div>
	<div class="content">
		<div id="infoMessage"><?php echo $message;?></div>
		<section>
			<table class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
				<thead>
					<tr>
						<th><?php echo lang('index_fname_th');?></th>
						<th><?php echo lang('index_lname_th');?></th>
						<th><?php echo lang('index_email_th');?></th>
						<th><?php echo lang('index_groups_th');?></th>
						<th><?php echo lang('index_status_th');?></th>
						<th><?php echo lang('index_action_th');?></th>
					</tr>
				</thead>
				<?php foreach ($users as $user):?>
					<tbody>
						<tr>
				            <td><?php echo htmlspecialchars($user->PrimerNameUsuario,ENT_QUOTES,'UTF-8');?></td>
				            <td><?php echo htmlspecialchars($user->ApelliUsuario,ENT_QUOTES,'UTF-8');?></td>
				            <td><?php echo htmlspecialchars($user->CorreUser,ENT_QUOTES,'UTF-8');?></td>
							<td>
								<?php foreach ($user->groups as $group):?>
									<?php echo anchor("auth/edit_group/".$group->AidiGrupo, htmlspecialchars($group->NeimGrupo,ENT_QUOTES,'UTF-8')) ;?><br />
				                <?php endforeach?>
							</td>
							<td><?php echo ($user->Activo) ? anchor("auth/deactivate/".$user->AidiUsuario, lang('index_active_link')) : anchor("auth/activate/". $user->AidiUsuario, lang('index_inactive_link'));?></td>
							<td><?php echo anchor("auth/edit_user/".$user->AidiUsuario, 'Edit') ;?></td>
						</tr>
					</tbody>
				<?php endforeach;?>
			</table>
		</section>
		<p><?php echo anchor('auth/create_user', lang('index_create_user_link'))?> | <?php echo anchor('auth/create_group', lang('index_create_group_link'))?> | <?php echo anchor('auth/change_password', lang('contrasena'))?></p>
	</div>
</div>