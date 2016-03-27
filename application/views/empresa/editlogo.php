<div class="main">
	<div>
		<section class="header">
			<h1>Empresa</h1>
			<h2>Bienvenido al formulario para registrar la foto del responsable de la empresa.</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/empresa/editlogo');?>">
			<input name="idi" class="pure-input-1-2" type="text" style="visibility:hidden" value="<?php echo $cols->idLogoEmpr ?>">
			<fieldset>
				<legend>Datos del logo</legend>
					<div class="pure-control-group">
						<label for="id">Nombre de la empresa</label>
						<select name="id" required maxlength="40">
							<?php foreach ($this->my_model->get() as $total): ?>
                                <option value="<?php echo $total->AidiEmpr ?>"><?php echo $total->NameEmpr ?></option>
                            <?php endforeach;?>
						</select>
					</div>
					<div class="pure-control-group">
						<label for="userfile">Logo de la empresa:</label>
	            		<input name="userfile" class="pure-input-1-2" type="file" placeholder="Nombre" required maxlength="255">
					</div>
					<p class="pull-right">Los formatos admitidos son: .jpg, .jpeg y .png.<br>Las medidas del logo deben ser menores de 1000x1000px.</p>
					<div class="pure-controls">
						<button type="submit" class="pure-button pure-button-primary">Actualizar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>