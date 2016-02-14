<div class="main">
	<div>
		<section class="header">
			<h1>Materiales</h1>
			<h2>Bienvenido al formulario para dar de alta un material</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/material/guardar');?>">
			<fieldset>
				<legend>Datos del material</legend>
					<div class="pure-control-group">
						<label for="categoria">Categoria:</label>
						<select name="categoria">
							<option selected>Seleccione la categoria del material</option>
							<option>Libros</option>
							<option>Audio</option>
							<option>Kids</option>
						</select>
					</div>
					<div class="pure-control-group">
						<label for="nombremate">Nombre del material:</label>
	            		<input name="nombremate" class="pure-input-1-2" type="text" placeholder="Nombre del material">
					</div>
					<div class="pure-control-group">
						<label for="autor">Autor:</label>
	            		<input name="autor" class="pure-input-1-2" type="text" placeholder="Autor del material">
					</div>
					<div class="pure-control-group">
						<label for="descrip">Descripci&oacute;n:</label>
			       		<textarea name="descripcion" type="text" cols="45" rows="3" placeholder="Ingrese la descripción aquí (Máximo 100 caracteres)"></textarea>
			       	</div>
			       	<div class="pure-control-group">
						<label for="imagen">Imagen del material:</label>
	            		<input name="imagen" class="pure-input-1-2" type="file" placeholder="">
					</div>
					<div class="pure-controls">
						<button type="reset" class="pure-button pure-button-cancel">Borrar datos</button>
						<button type="submit" class="pure-button pure-button-primary">Registrar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>