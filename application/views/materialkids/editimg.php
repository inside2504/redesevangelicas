<div class="main">
	<div>
		<section class="header">
			<h1>Iglesias</h1>
			<h2>Bienvenido al formulario para registrar el logo de una iglesia</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/materialkids/editimg');?>">
			<fieldset>
				<input name="idi" class="pure-input-1-2" type="text" style="visibility:hidden" value="<?php echo $cols->idLogoMaterialKids ?>">
				<legend>Datos de la imagen del material</legend>
					<div class="pure-control-group">
						<label for="id">Seleccione el material:</label>
						<select name="id" required maxlength="40">
							<?php foreach ($this->my_model->get() as $total): ?>
                                <option value="<?php echo $total->idMaterialesKids ?>"><?php echo $total->nombreMateKids ?></option>
                            <?php endforeach;?>
						</select>
					</div>
					<div class="pure-control-group">
						<label for="userfile">Imagen del material:</label>
	            		<input name="userfile" class="pure-input-1-2" type="file" required maxlength="50">
					</div>
					<p class="pull-right">Los formatos admitidos son: .jpg, .jpeg y .png.<br>Las medidas del logo deben ser menores de 1000x1000px.</p>
					<div class="pure-controls">
						<button type="reset" class="pure-button pure-button-cancel">Borrar datos</button>
						<button type="submit" class="pure-button pure-button-primary">Actualizar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>