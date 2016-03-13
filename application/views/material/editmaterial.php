<div class="main">
	<div>
		<section class="header">
			<h1>Materiales</h1>
			<h2>Bienvenido al formulario para editar un material</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/material/actualizar');?>">
			<fieldset>
				<legend>Datos del material</legend>
				<input name="id" class="pure-input-1-2" type="text" style="visibility:hidden" value="<?php echo $item->idMate ?>">
					<div class="pure-control-group">
						<label for="categoria">Categoria (Seleccione una):</label>
						<select name="categoria" value="<?php echo $item->cateMate ?>" required maxlength="40">
							<option>Libros</option>
							<option>Audio</option>
						</select>
					</div>
					<div class="pure-control-group">
						<label for="nombremate">Nombre del material:</label>
	            		<input name="nombremate" class="pure-input-1-2" type="text" value="<?php echo $item->nombMate ?>" required maxlength="50">
					</div>
					<div class="pure-control-group">
						<label for="autor">Autor:</label>
	            		<input name="autor" class="pure-input-1-2" type="text" value="<?php echo $item->autMate ?>" required maxlength="60">
					</div>
					<div class="pure-control-group">
						<label for="descrip">Descripci&oacute;n:</label>
			       		<textarea name="descripcion" type="text" cols="45" rows="3" required maxlength="100"><?php echo $item->descMate?></textarea>
			       	</div>
			       	<div class="pure-control-group">
						<label for="imagen">Imagen del material:</label>
	            		<input name="imagen" class="pure-input-1-2" type="file" value="<?= $item->imgMate; ?>" maxlength="50"></span>
					</div>
					<div class="pure-controls">
						<button type="submit" class="pure-button pure-button-primary">Actualizar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>