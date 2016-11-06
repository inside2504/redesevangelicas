<div class="main">
	<div>
		<section class="header">
			<h1>Iglesias</h1>
			<h2>Bienvenido al formulario para editar una iglesia</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/regiones/actualizar');?>">
			<fieldset>
				<input name="id" class="pure-input-1-2" type="text" style="visibility:hidden" value="<?php echo $item->idRegiones ?>">
				<legend>Datos del mapa</legend>
					<div class="pure-control-group">
						<label for="linkmapa">Link del mapa:</label>
	            		<input name="linkmapa" class="pure-input-1-2" type="text" value="<?php echo $item->linkMapa ?>" required>
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
						<button type="submit" class="pure-button pure-button-primary">Actualizar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>