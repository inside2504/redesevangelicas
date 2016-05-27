<div class="main">
	<div>
		<section class="header">
			<h1>Materiales KIDS</h1>
			<h2>Bienvenido al formulario para dar de alta un material para el apartado de KIDS.</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/materialkids/actualizar');?>">
			<fieldset>
				<input name="id" class="pure-input-1-2" type="text" style="visibility:hidden" value="<?php echo $item->idMaterialesKids ?>">
				<legend>Datos de la entrada del blog</legend>
					<div class="pure-control-group">
						<label for="nombre">Nombre del material:</label>
	            		<input name="nombre" class="pure-input-1-2" type="text" value="<?php echo $item->nombreMateKids ?>" required maxlength="50">
					</div>
					<div class="pure-control-group">
						<label for="descripcion">Descripci&oacute;n:</label>
						<textarea name="descripcion" type="text" cols="45" rows="15" class="pure-input-1-2" type="text" maxlength="150" placeholder="Descripción" required><?php echo $item->descripcionMateKids ?></textarea>
					</div>
					<div class="pure-control-group">
						<label for="link">Link de descarga:</label>
			       		<input name="link" class="pure-input-1-2" type="text" value="<?php echo $item->linkDescarga ?>" required>
			       	</div>
					<div class="pure-controls">
						<button type="reset" class="pure-button pure-button-cancel">Borrar datos</button>
						<button type="submit" class="pure-button pure-button-primary">Registrar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>