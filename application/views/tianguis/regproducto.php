<div class="main">
	<div>
		<section class="header">
			<h1>Tianguis</h1>
			<h2>Bienvenido al formulario para registrar un producto a ofertar en el tianguis</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/tianguis/guardarProd');?>">
			<fieldset>
				<legend>Datos del producto</legend>
					<div class="pure-control-group">
						<label for="nombreigle">Iglesia a la que pertenece:</label>
	            		<input name="nombreigle" class="pure-input-1-2" type="text" placeholder="Iglesia" required maxlength="50">
					</div>
					<div class="pure-control-group">
						<label for="nombrepas">Nombre del Pastor:</label>
	            		<input name="nombrepas" class="pure-input-1-2" type="text" placeholder="Nombre del Pastor" required maxlength="50">
					</div>
					<div class="pure-control-group">
						<label for="nombrevend">Nombre del vendedor (opcional):</label>
	            		<input name="nombrevend" class="pure-input-1-2" type="text" placeholder="Nombre del vendedor" maxlength="40">
					</div>
					<div class="pure-control-group">
						<label for="nombreprod">Nombre del producto:</label>
	            		<input name="nombreprod" class="pure-input-1-2" type="text" placeholder="Nombre del producto" required maxlength="40">
					</div>
					<div class="pure-control-group">
						<label for="descripprod">Descripci&oacute;n:</label>
			       		<textarea name="descripcionprod" type="text" cols="45" rows="3" placeholder="Ingrese la descripción aquí" required></textarea>
			       	</div>
			       	<div class="pure-control-group">
						<label for="telefono">Tel&eacute;fono del vendedor:</label>
			       		<input name="telefono" onkeypress="return validNumbers(event);"; type="text" placeholder="Teléfono" required maxlength="10"></textarea>
			       	</div>
			       	<div class="pure-control-group">
						<label for="precioprod">Precio:</label>
			       		<input name="precioprod" onkeypress="return validNumbers(event);"; class="pure-input-1-2" type="text" placeholder="Precio opcional (moneda nacional)" maxlength="11">
			       	</div>
			       	<div class="pure-control-group">
						<label for="userfile">Imagen del producto:</label>
	            		<input name="userfile" class="pure-input-1-2" type="file" placeholder="Nombre" required maxlength="255">
					</div>
					<div class="pure-control-group">
						<label for="status">Status del producto</label>
						<select name="status" required maxlength="6">
							<option value="Nuevo">Nuevo</option>
							<option value="Usado">Usado</option>
						</select>
					</div>
					<p class="pull-right">Los formatos admitidos son: .jpg, .jpeg y .png.<br>
						Las medidas de la imagen del producto deben ser menores de 1000x1000px.<br>		
					<div class="pure-controls">
						<button type="reset" class="pure-button pure-button-cancel">Borrar datos</button>
						<button type="submit" class="pure-button pure-button-primary">Registrar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>