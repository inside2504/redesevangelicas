<div class="main">
	<div>
		<section class="header">
			<h1>Librer&iacute;a</h1>
			<h2>Bienvenido al formulario para registrar un producto a ofertar en el librer&iacute;a</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/libreria/guardarProd');?>">
			<fieldset>
				<legend>Datos del producto</legend>
					<div class="pure-control-group">
						<label for="id">Nombre de la librer&iacute;a</label>
						<select name="id" required maxlength="40">
							<?php foreach ($this->my_model->getLib() as $total): ?>
                                <option value="<?php echo $total->idLibreria ?>"><?php echo $total->nombLibProd ?></option>
                            <?php endforeach;?>
						</select>
					</div>
					<div class="pure-control-group">
						<label for="nombreprod">Nombre del producto:</label>
	            		<input name="nombreprod" class="pure-input-1-2" type="text" placeholder="Nombre del producto" required maxlength="40">
					</div>
					<div class="pure-control-group">
						<label for="autorprod">Autor:</label>
	            		<input name="autorprod" class="pure-input-1-2" type="text" placeholder="Autor del producto" required maxlength="50">
					</div>
					<div class="pure-control-group">
						<label for="descripprod">Descripci&oacute;n:</label>
			       		<textarea name="descripcionprod" type="text" cols="45" rows="3" placeholder="Ingrese la descripción aquí (Máximo 200 caracteres)" required maxlength="200"></textarea>
			       	</div>
			       	<div class="pure-control-group">
						<label for="precioprod">Precio:</label>
			       		<input name="precioprod" onkeypress="return validNumbers(event);"; class="pure-input-1-2" type="text" placeholder="Precio del producto (moneda nacional)" required maxlength="11">
			       	</div>
			       	<div class="pure-control-group">
						<label for="userfile">Imagen del producto:</label>
	            		<input name="userfile" class="pure-input-1-2" type="file" placeholder="Nombre" required maxlength="50">
					</div>
					<p class="pull-right">Los formatos admitidos son: .jpg, .jpeg y .png.<br>
						Las medidas de la imagen del producto deben ser menores de 1000x1000px.<br>
						En la imagen del libro, prefer&iacute;blemente debe ser mayor la medida del alto que del ancho.</p>		
					<div class="pure-controls">
						<button type="reset" class="pure-button pure-button-cancel">Borrar datos</button>
						<button type="submit" class="pure-button pure-button-primary">Registrar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>