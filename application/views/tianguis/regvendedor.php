<div class="main">
	<div>
		<section class="header">
			<h1>Tianguis</h1>
			<h2>Bienvenido al formulario para registrar la foto del vendedor</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/tianguis/guardarVend');?>">
			<fieldset>
				<legend>Foto del vendedor</legend>
					<div class="pure-control-group">
						<label for="id">Nombre del producto</label>
						<select name="id" required maxlength="40">
							<?php foreach ($this->my_model->getProductos() as $total): ?>
                                <option value="<?php echo $total->idTianguis ?>"><?php echo $total->nombreProducto ?></option>
                            <?php endforeach;?>
						</select>
					</div>
			       	<div class="pure-control-group">
						<label for="userfile">Imagen del vendedor:</label>
	            		<input name="userfile" class="pure-input-1-2" type="file" placeholder="Nombre" required maxlength="255">
					</div>
					<p class="pull-right">Los formatos admitidos son: .jpg, .jpeg y .png.<br>
						Las medidas de la imagen del producto deben ser menores de 1000x1000px.<br>	
					<div class="pure-controls">
						<button type="reset" class="pure-button pure-button-cancel">Borrar datos</button>
						<button type="submit" class="pure-button pure-button-primary">Registrar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>