<div class="main">
	<div>
		<section class="header">
			<h1>Tianguis</h1>
			<h2>Bienvenido al formulario para registrar un producto a ofertar en el tianguis</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/tianguis/guardar');?>">
			<fieldset>
				<legend>Datos del producto</legend>
					<div class="pure-control-group">
						<label for="nombreprod">Nombre del producto:</label>
	            		<input name="nombreprod" class="pure-input-1-2" type="text" placeholder="Nombre del producto">
					</div>
					<div class="pure-control-group">
						<label for="autorprod">Autor:</label>
	            		<input name="autorprod" class="pure-input-1-2" type="text" placeholder="Autor del producto">
					</div>
					<div class="pure-control-group">
						<label for="descripprod">Descripci&oacute;n:</label>
			       		<textarea name="descripcionprod" type="text" cols="45" rows="3" placeholder="Ingrese la descripción aquí (Máximo 100 caracteres)"></textarea>
			       	</div>
			       	<div class="pure-control-group">
						<label for="precioprod">Precio:</label>
			       		<input name="precioprod" class="pure-input-1-2" type="text" placeholder="Precio del producto (moneda nacional)">
			       	</div>
			       	<div class="pure-control-group">
						<label for="imagen">Imagen del material:</label>
	            		<input name="imagen" class="pure-input-1-2" type="file" placeholder="">
					</div>
				<legend>Localizaci&oacute;n del producto</legend>
					<div class="pure-control-group">
						<label for="nombrelib">Nombre de la Librer&iacute;a:</label>
	            		<input name="nombrelib" class="pure-input-1-2" type="text" placeholder="Nombre de la librería">
					</div>
					<div class="pure-control-group">
						<label for="calle">Calle:</label>
	            		<input name="calle" class="pure-input-1-2" type="text" placeholder="Calle">
					</div>
					<div class="pure-control-group">
						<label for="numexterior">N&uacute;mero exterior:</label>
	            		<input name="numexterior" class="pure-input-1-2" type="text" placeholder="Número exterior">
					</div>
					<div class="pure-control-group">
						<label for="numinterior">N&uacute;mero interior (si existe):</label>
	            		<input name="numinterior" class="pure-input-1-2" type="text" placeholder="Número interior">
					</div>
					<div class="pure-control-group">
						<label for=colonia"">Colonia:</label>
	            		<input name="colonia" class="pure-input-1-2" type="text" placeholder="Colonia">
					</div>
					<div class="pure-control-group">
						<label for="codigo">C&oacute;digo postal:</label>
	            		<input name="codigo" class="pure-input-1-2" type="text" placeholder="Código postal">
					</div>
					<div class="pure-control-group">
						<label for="ciudad">Ciudad:</label>
	            		<input name="ciudad" class="pure-input-1-2" type="text" placeholder="Ciudad">
					</div>
					<div class="pure-control-group">
						<label for="edo">Estado:</label>
	            		<input name="edo" class="pure-input-1-2" type="text" placeholder="Estado">
					</div>
				<legend>Contacto con la librer&iacute;a</legend>
					<div class="pure-control-group">
						<label for="telefono">Tel&eacute;fonos:</label>
	            		<input name="telefono" class="pure-input-1-2" type="text" placeholder="Teléfonos">
					</div>
					<div class="pure-control-group">
						<label for="correo">Correo electrónico:</label>
	            		<input name="correo" class="pure-input-1-2" type="text" placeholder="Correo">
					</div>
			       	<div class="pure-control-group">
						<label for="fb">Facebook (si tiene):</label>
	            		<input name="fb" class="pure-input-1-2" type="text" placeholder="Dirección de Facebook">
					</div>
					<div class="pure-control-group">
						<label for="tw">Twitter (si tiene):</label>
	            		<input name="tw" class="pure-input-1-2" type="text" placeholder="Dirección de Twitter">
					</div>
					<div class="pure-control-group">
						<label for="otrasred">Otras redes (si tiene):</label>
	            		<textarea name="otrasred" class="pure-input-1-2" type="text" placeholder="Ingrese los enlaces de sus otras redes."></textarea>
					</div>
					<div class="pure-controls">
						<button type="reset" class="pure-button pure-button-cancel">Borrar datos</button>
						<button type="submit" class="pure-button pure-button-primary">Registrar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>