<div class="main">
	<div>
		<section class="header">
			<h1>KIDS</h1>
			<h2>Bienvenido al formulario para registrar una canci&oacute;n.</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/kids/guardarMusica');?>">
			<fieldset>
				<legend>Datos de la canci&oacute;n</legend>
					<div class="pure-control-group">
						<label for="nombre">Nombre de la canci&oacute;n:</label>
	            		<input name="nombre" class="pure-input-1-2" type="text" placeholder="Nombre de la canción" required maxlength="50">
					</div>
					<div class="pure-control-group">
						<label for="autor">Nombre de la autor:</label>
	            		<input name="autor" class="pure-input-1-2" type="text" placeholder="Autor" required maxlength="50">
					</div>
					<div class="pure-control-group">
						<label for="link">Link del contenido<br><strong>Revise el <a onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" href="<?=base_url('')."Administrador.pdf"?>">manual de usuario</a> para saber c&oacute;mo encontrar el link del contenido.</strong></label>
	            		<input name="link" class="pure-input-1-2" type="text" placeholder="Link del contenido" required maxlength="50">
					</div>
					<div class="pure-controls">
						<button type="reset" class="pure-button pure-button-cancel">Borrar datos</button>
						<button type="submit" class="pure-button pure-button-primary">Registrar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>