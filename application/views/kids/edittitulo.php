<div class="main">
	<div>
		<section class="header">
			<h1>KIDS</h1>
			<h2>Bienvenido al formulario para editar el t&iacute;tulo de una serie.</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/kids/actualizartitulo');?>">
			<fieldset>
				<input name="id" class="pure-input-1-2" type="text" style="visibility:hidden" value="<?php echo $item->idTituloSerie ?>">
				<legend>Datos de la entrada del blog</legend>
					<div class="pure-control-group">
						<label for="nombre">T&iacute;tulo de la serie:</label>
	            		<input name="nombre" class="pure-input-1-2" type="text" value="<?php echo $item->NombreSerie ?>" required maxlength="200">
					</div>
					<div class="pure-controls">
						<button type="submit" class="pure-button pure-button-primary">Actualizar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>