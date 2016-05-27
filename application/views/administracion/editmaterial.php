<div class="main">
	<div>
		<section class="header">
			<h1>Materiales</h1>
			<h2>Bienvenido al formulario para editar un material</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned">
			<fieldset>
				<legend>Datos del material</legend>
					<div class="pure-control-group">
						<label for="categoria">Categoria:</label>
						<select name="transporte">
							<option selected>Seleccione la categoria del material</option>
							<option>Libros</option>
							<option>Audio</option>
							<option>Kids</option>
						</select>
					</div>
					<div class="pure-control-group">
						<label for="nombremate">Nombre del material:</label>
	            		<input id="nombremate" class="pure-input-1-2" type="text" placeholder="Nombre del material">
					</div>
					<div class="pure-control-group">
						<label for="autor">Autor:</label>
	            		<input id="autor" class="pure-input-1-2" type="text" placeholder="Autor del material">
					</div>
					<div class="pure-control-group">
						<label for="descrip">Descripci&oacute;n:</label>
			       		<textarea id="descripcion" type="text" cols="45" rows="3" placeholder="Ingrese la descripción aquí (Máximo 100 caracteres)"></textarea>
			       	</div>
			       	<div class="pure-control-group">
						<label for="imagen">Imagen del material:</label>
	            		<input id="imagen" class="pure-input-1-2" type="file" placeholder="">
					</div>
					<div class="pure-controls">
						<button type="reset" class="pure-button pure-button-cancel">Cancelar</button>
						<button type="submit" class="pure-button pure-button-primary">Registrar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>