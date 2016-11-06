<div class="main">
	<div>
		<section class="header">
			<h1>Localidad</h1>
			<h2>Bienvenido al formulario para registrar una localidad</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/localidad/guardar');?>">
			<fieldset>
					<div class="pure-control-group">
						<label for="nombre">Nombre de la localidad:</label>
	            		<input name="nombre" class="pure-input-1-2" type="text" placeholder="Nombre" required maxlength="50">
					</div>
					
					<div class="pure-controls">
						<button type="reset" class="pure-button pure-button-cancel">Borrar datos</button>
						<button type="submit" class="pure-button pure-button-primary">Registrar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>