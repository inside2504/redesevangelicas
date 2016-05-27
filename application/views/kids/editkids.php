<div class="main">
	<div>
		<section class="header">
			<h1>KIDS</h1>
			<h2>Bienvenido al formulario para dar de alta una entrada para el apartado de KIDS.</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/kids/actualizar');?>">
			<fieldset>
				<input name="id" class="pure-input-1-2" type="text" style="visibility:hidden" value="<?php echo $item->AidiKids ?>">
				<legend>Datos de la entrada del blog</legend>
					<div class="pure-control-group">
						<label for="titulo">T&iacute;tulo del blog:</label>
	            		<input name="titulo" class="pure-input-1-2" type="text" value="<?php echo $item->TituloKids ?>" required maxlength="50" >
					</div>
					<div class="pure-control-group">
						<label for="serie">Nombre de la serie</label>
						<select name="serie" required maxlength="40">
							<?php foreach ($this->my_model->gettitulo() as $total): ?>
                                <option value="<?php echo $total->idTituloSerie ?>"><?php echo $total->NombreSerie ?></option>
                            <?php endforeach;?>
						</select>
					</div>
					<div class="pure-control-group">
						<label for="texto">Texto de la entrada:</label>
			       		<textarea name="texto" type="text" cols="45" rows="15" required><?php echo $item->TextKids ?></textarea>
			       	</div>
			       	<div class="pure-control-group">
						<label for="fecha">Fecha de creaci&oacute;n:</label>
	            		<input name="fecha" class="pure-input-1-2" type="date" value="<?php echo $item->FechaCreacion ?>" required>
	            	</div>
					<div class="pure-control-group">
						<label for="link">Link del contenido<br><strong>Revise el <a onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" href="<?=base_url('')."Administrador.pdf"?>">manual de usuario</a> para saber c&oacute;mo encontrar el link del contenido.</strong></label>
	            		<input name="link" class="pure-input-1-2" type="text" value="<?php echo $item->LinkKids ?>" required maxlength="50">
					</div>
					<div class="pure-controls">
						<button type="submit" class="pure-button pure-button-primary">Actualizar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>