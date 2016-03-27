<div class="main">
	<div>
		<section class="header">
			<h1>Taxi</h1>
			<h2>Bienvenido al formulario para editar la foto del taxista.</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/taxi/editimg');?>">
			<input name="idi" class="pure-input-1-2" type="text" style="visibility:hidden" value="<?php echo $cols->idfotoTaxi ?>">
			<fieldset>
				<legend>Datos de la foto</legend>
					<div class="pure-control-group">
						<label for="id">Nombre del taxista</label>
						<select name="id" required maxlength="40">
							<?php foreach ($this->my_model->get() as $total): ?>
                                <option value="<?php echo $total->AidiTaxi ?>"><?php echo $total->NombTaxista ?> <?php echo $total->ApePatTaxista ?> <?php echo $total->ApeMatTaxista ?></option>
                            <?php endforeach;?>
						</select>
					</div>
					<div class="pure-control-group">
						<label for="userfile">Foto del taxista:</label>
	            		<input name="userfile" class="pure-input-1-2" type="file" placeholder="Nombre" required maxlength="50">
					</div>
					<p class="pull-right">Los formatos admitidos son: .jpg, .jpeg y .png.<br>Las medidas del foto deben ser menores de 1000x1000px.</p>
					<div class="pure-controls">
						<button type="submit" class="pure-button pure-button-primary">Actualizar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>