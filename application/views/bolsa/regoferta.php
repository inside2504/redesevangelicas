<div class="main">
	<div>
		<section class="header">
			<h1>Bolsa de trabajo</h1>
			<h2>Bienvenido al formulario para registrar una oferta laboral</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/bolsa/guardar');?>">
			<fieldset>
				<legend>Datos de la iglesia que lo recomienda</legend>
					<div class="pure-control-group">
						<label for="iglesia">Iglesia a la que pertenece:</label>
	            		<input name="iglesia" class="pure-input-1-2" type="text" placeholder="Iglesia a la que pertenece" required maxlength="100">
					</div>
				<legend>Datos de la oferta</legend>
					<div class="pure-control-group">
						<label for="titulo">Puesto de la oferta:</label>
	            		<input name="titulo" class="pure-input-1-2" type="text" placeholder="Puesto de la oferta" required maxlength="100">
					</div>
					<div class="pure-control-group">
						<label for="ubicacion">Ubicación de la oferta</label>
	            		<input name="ubicacion" class="pure-input-1-2" type="text" placeholder="Lugar para trabajar de la oferta" required maxlength="100">
					</div>
					<div class="pure-control-group">
						<label for="solicitante">Solicitante:</label>
	            		<input name="solicitante" class="pure-input-1-2" type="text" placeholder="Persona o empresa que hace la oferta" required maxlength="150">
					</div>
					<div class="pure-control-group">
						<label for="sueldo">Sueldo (opcional)</label>
	            		<input name="sueldo" onkeypress="return validNumbers(event);"; class="pure-input-1-2" type="text" placeholder="Sueldo (opcional en caso de querer revelarlo)" maxlength="10">
					</div>
					<div class="pure-control-group">
						<label for="descripcion">Descripción</label>
	            		<textarea name="descripcion" class="pure-input-1-2" type="text" required placeholder="Descripcion de la oferta"></textarea>
					</div>
					<div class="pure-control-group">
						<label for="publicacion">Fecha de publicacion</label>
	            		<input name="publicacion" class="pure-input-1-2" type="date" placeholder="Día de publicación de la oferta" required maxlength="12">
					</div>
					<div class="pure-control-group">
						<label for="expiracion">Vigencia de la oferta:</label>
	            		<input name="expiracion" class="pure-input-1-2" type="date" placeholder="Día en el cuál vence la oferta" required maxlength="12">
					</div>
					<div class="pure-control-group">
						<label for="horario">Horario laboral</label>
	            		<input name="horario" class="pure-input-1-2" type="text" placeholder="Horario laboral diario" maxlength="15">
					</div>
					<div class="pure-control-group">
						<label for="dias">Días laborales</label>
	            		<input name="dias" class="pure-input-1-2" type="text" placeholder="Días de la semana que se laborará" maxlength="40">
					</div>
					<div class="pure-control-group">
						<label for="experiencia">Tiempo de experiencia</label>
	            		<input name="experiencia" class="pure-input-1-2" type="text" placeholder="Tiempo de experiencia" maxlength="12">
					</div>
					<div class="pure-control-group">
						<label for="telef">Tel&eacute;fono (En caso de no poner correo):</label>
	            		<input name="telef" class="pure-input-1-2" onkeypress="return validNumbers(event);"; type="text" placeholder="Teléfono para contacto" maxlength="11">
					</div>
					<div class="pure-control-group">
						<label for="correo">Correo electrónico (En caso de no poner tel&eacute;fono):</label>
	            		<input name="correo" class="pure-input-1-2" type="text" placeholder="Correo para enviar solicitud" maxlength="50">
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