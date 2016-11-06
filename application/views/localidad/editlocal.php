<div class="main">
	<div>
		<section class="header">
			<h1>Localidad</h1>
			<h2>Bienvenido al formulario para registrar una localidad</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/localidad/actualizar');?>">
			<fieldset>
				<input name="id" class="pure-input-1-2" type="text" style="visibility:hidden" value="<?php echo $item->idlocalidad ?>">
				<legend>Datos de la iglesia que lo recomienda</legend>
					<div class="pure-control-group">
						<label for="nombre">Iglesia perteneciente:</label>
	            		<input name="nombre" class="pure-input-1-2" type="text" value="<?php echo $item->nombreLocalidad ?>" required maxlength="50">
					</div>
					<div class="pure-controls">
						<button type="submit" class="pure-button pure-button-primary">Actualizar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>