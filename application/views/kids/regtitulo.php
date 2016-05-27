<div class="main">
	<div>
		<section class="header">
			<h1>KIDS</h1>
			<h2>Bienvenido al formulario para dar de alta una nueva serie.</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/kids/guardartitulo');?>">
			<fieldset>
				<legend>Datos de la entrada del blog</legend>
					<div class="pure-control-group">
						<label for="nombre">T&iacute;tulo de la serie:</label>
	            		<input name="nombre" class="pure-input-1-2" type="text" placeholder="Título" required maxlength="200">
					</div>
					<div class="pure-controls">
						<button type="reset" class="pure-button pure-button-cancel">Borrar datos</button>
						<button type="submit" class="pure-button pure-button-primary">Registrar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>