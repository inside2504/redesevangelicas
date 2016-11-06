<div class="main">
	<div>
		<section class="header">
			<h1>Iglesias</h1>
			<h2>Bienvenido al formulario para registrar una iglesia</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/regiones/guardar');?>">
			<fieldset>
				<legend>Datos del mapa</legend>
					<div class="pure-control-group">
						<label for="linkmapa">Link del mapa:</label>
	            		<input name="linkmapa" class="pure-input-1-2" type="text" placeholder="Link del mapa" required maxlength="50">
					</div>
					<div class="pure-control-group">
						<label for="localidad">Localidad:</label>
	            		<select name="localidad" required maxlength="40">
							<?php foreach ($this->index->getLocalidad() as $total): ?>
	                            <option value="<?php echo $total->nombreLocalidad ?>"><?php echo $total->nombreLocalidad ?></option>
	                        <?php endforeach;?>
						</select>
					</div>
					<div class="pure-controls">
						<button type="reset" class="pure-button pure-button-cancel">Borrar datos</button>
						<button type="submit" class="pure-button pure-button-primary">Registrar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>