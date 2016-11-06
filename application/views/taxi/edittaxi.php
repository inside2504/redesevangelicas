<div class="main">
	<div>
		<section class="header">
			<h1>Taxi</h1>
			<h2>Bienvenido al formulario para editar los datos de un taxi</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/taxi/actualizar');?>">
			<fieldset>
				<input name="id" class="pure-input-1-2" type="text" style="visibility:hidden" value="<?php echo $item->AidiTaxi ?>">
				<legend>Datos de la iglesia que lo recomienda</legend>
					<div class="pure-control-group">
						<label for="iglesia">Nombre de la iglesia:</label>
	            		<input name="iglesia" class="pure-input-1-2" type="text" value="<?php echo $item->IglePerTaxi ?>" required maxlength="50">
					</div>
				<legend>Datos del taxista</legend>
					<div class="pure-control-group">
						<label for="nombre">Nombre:</label>
	            		<input name="nombre" class="pure-input-1-2" type="text" value="<?php echo $item->NombTaxista ?>" required maxlength="20">
					</div>
					<div class="pure-control-group">
						<label for="apepaterno">Apellido paterno:</label>
	            		<input name="apepaterno" class="pure-input-1-2" type="text" value="<?php echo $item->ApePatTaxista ?>" required maxlength="20">
					</div>
					<div class="pure-control-group">
						<label for="apematerno">Apellido materno</label>
	            		<input name="apematerno" class="pure-input-1-2" type="text" value="<?php echo $item->ApeMatTaxista ?>" required maxlength="20">
					</div>
				<legend>Datos del taxi</legend>
					<div class="pure-control-group">
						<label for="numeco">N&uacute;mero econ&oacute;mico:</label>
	            		<input name="numeco" onkeypress="return validNumbers(event);"; class="pure-input-1-2" type="text" value="<?php echo $item->NumEcoTaxi ?>" required maxlength="5">
					</div>
					<div class="pure-control-group">
						<label for="placa">N&uacute;mero de placa:</label>
	            		<input name="placa" class="pure-input-1-2" type="text" value="<?php echo $item->PlacaNumTaxi ?>" required maxlength="8">
					</div>
					<div class="pure-control-group">
						<label for="horario">Horario:</label>
	            		<input name="horario" class="pure-input-1-2" type="text" value="<?php echo $item->HorarioTaxi ?>" required maxlength="20">
					</div>
				<legend>M&aacute;s datos</legend>
					<div class="pure-control-group">
						<label for="telefono">Tel&eacute;fono:</label>
	            		<input name="telefono" onkeypress="return validNumbers(event);"; class="pure-input-1-2" type="text" value="<?php echo $item->TelefTaxi ?>" required maxlength="12">
					</div>
					<div class="pure-control-group">
						<label for="localidad">Localidad:</label>
	            		<select name="localidad" required maxlength="40">
							<?php foreach ($this->index->getLocalidad() as $total): ?>
	                            <option value="<?php echo $total->nombreLocalidad ?>"><?php echo $total->nombreLocalidad ?></option>
	                        <?php endforeach;?>
						</select>
					</div>
					<div class="pure-control-group">
						<label for="tipoRec">Tipo de recomendaci&oacute;n:</label>
	            		<select name="tipoRec" required maxlength="40">
							<option value="Oro">Oro</option>
							<option value="Plata">Plata</option>
							<option value="Bronce">Bronce</option>
						</select>
					</div>
					<div class="pure-controls">
						<button type="submit" class="pure-button pure-button-primary">Actualizar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>