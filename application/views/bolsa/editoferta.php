<div class="main">
	<div>
		<section class="header">
			<h1>Bolsa de trabajo</h1>
			<h2>Bienvenido al formulario para editar una oferta laboral</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/bolsa/actualizar');?>">
			<fieldset>
				<input name="id" class="pure-input-1-2" type="text" style="visibility:hidden" value="<?php echo $item->idbolsaTrab ?>">
				<legend>Datos de la iglesia que lo recomienda</legend>
					<div class="pure-control-group">
						<label for="iglesia">Iglesia a la que pertenece:</label>
	            		<input name="iglesia" class="pure-input-1-2" type="text" value="<?php echo $item->iglesiaVendedor ?>" required maxlength="100">
					</div>
				<legend>Datos de la oferta</legend>
					<div class="pure-control-group">
						<label for="titulo">Puesto de la oferta:</label>
	            		<input name="titulo" class="pure-input-1-2" type="text" value="<?php echo $item->tituloOferta ?>" required maxlength="100">
					</div>
					<div class="pure-control-group">
						<label for="ubicacion">Ubicación de la oferta</label>
	            		<input name="ubicacion" class="pure-input-1-2" type="text" value="<?php echo $item->ubicacionOferta ?>" required maxlength="100">
					</div>
					<div class="pure-control-group">
						<label for="solicitante">Solicitante:</label>
	            		<input name="solicitante" class="pure-input-1-2" type="text" value="<?php echo $item->solicitanteOferta ?>" required maxlength="150">
					</div>
					<div class="pure-control-group">
						<label for="sueldo">Sueldo (opcional)</label>
	            		<input name="sueldo" onkeypress="return validNumbers(event);"; class="pure-input-1-2" type="text" value="<?php echo $item->salarioOferta ?>" maxlength="10">
					</div>
					<div class="pure-control-group">
						<label for="descripcion">Descripción</label>
	            		<textarea name="descripcion" class="pure-input-1-2" type="text" value="<?php echo $item->descripOferta ?>"><?php echo $item->descripOferta ?></textarea>
					</div>
					<div class="pure-control-group">
						<label for="publicacion">Fecha de publicacion</label>
	            		<input name="publicacion" class="pure-input-1-2" type="date" value="<?php echo $item->fechaPublicacion ?>" required maxlength="12">
					</div>
					<div class="pure-control-group">
						<label for="expiracion">Vigencia de la oferta:</label>
	            		<input name="expiracion" class="pure-input-1-2" type="date" value="<?php echo $item->vigenciaOferta ?>" required maxlength="12">
					</div>
					<div class="pure-control-group">
						<label for="horario">Horario laboral</label>
	            		<input name="horario" class="pure-input-1-2" type="text" value="<?php echo $item->horarioTrabajo ?>" maxlength="15">
					</div>
					<div class="pure-control-group">
						<label for="dias">Días laborales</label>
	            		<input name="dias" class="pure-input-1-2" type="text" value="<?php echo $item->diasLaborales ?>" maxlength="40">
					</div>
					<div class="pure-control-group">
						<label for="experiencia">Tiempo de experiencia</label>
	            		<input name="experiencia" class="pure-input-1-2" type="text" value="<?php echo $item->experienciaOferta ?>" maxlength="12">
					</div>
					<div class="pure-control-group">
						<label for="telef">Tel&eacute;fono:</label>
	            		<input name="telef" class="pure-input-1-2" onkeypress="return validNumbers(event);"; type="text" value="<?php echo $item->telefonoVendedor ?>" maxlength="11">
					</div>
					<div class="pure-control-group">
						<label for="correo">Correo electrónico:</label>
	            		<input name="correo" class="pure-input-1-2" type="text" value="<?php echo $item->correoContacto ?>" maxlength="50">
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