<div class="main">
	<div>
		<section class="header">
			<h1>Servicios</h1>
			<h2>Bienvenido al formulario para dar editar un servicio previamente dado de alta</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/servicio/actualizar');?>">
			<fieldset>
				<input name="id" class="pure-input-1-2" type="text" style="visibility:hidden" value="<?php echo $item->AidiServi ?>">
				<legend>Datos de la iglesia que lo recomienda</legend>
					<div class="pure-control-group">
						<label for="iglesia">Iglesia perteneciente:</label>
	            		<input name="iglesia" class="pure-input-1-2" type="text" value="<?php echo $item->IglePert ?>">
					</div>
					<div class="pure-control-group">
						<label for="pastor">Pastor que lo recomienda:</label>
	            		<input name="pastor" class="pure-input-1-2" type="text" value="<?php echo $item->PastRec ?>">
					</div>
				<legend>Datos del prestador de servicios </legend>
					<div class="pure-control-group">
						<label for="nombre">Nombre(s):</label>
	            		<input name="nombre" class="pure-input-1-2" type="text" value="<?php echo $item->NamePrestServ ?>">
					</div>
					<div class="pure-control-group">
						<label for="apepat">Apellido paterno:</label>
	            		<input name="apepat" class="pure-input-1-2" type="text" value="<?php echo $item->ApePatPrestServ ?>">
					</div>
					<div class="pure-control-group">
						<label for="apemat">Apellido materno:</label>
	            		<input name="apemat" class="pure-input-1-2" type="text" value="<?php echo $item->ApeMatPrestServ ?>">
					</div>
					<div class="pure-control-group">
						<label for="servofrece">Servicio que ofrece:</label>
	            		<input name="servofrece" class="pure-input-1-2" type="text" value="<?php echo $item->ServOfrecido ?>">
					</div>
					<div class="pure-control-group">
						<label for="descripbreve">Descripci&oacute;n de servicio(s):</label>
			       		<textarea name="descripbreve" type="text" cols="45" rows="3"><?php echo $item->DescServi?></textarea>
			       	</div>
				<legend>Direcci&oacute;n del servicio</legend>
					<div class="pure-control-group">
						<label for="calle">Calle:</label>
	            		<input name="calle" class="pure-input-1-2" type="text" value="<?php echo $item->CalleServ ?>">
					</div>
					<div class="pure-control-group">
						<label for="numexterior">N&uacute;mero exterior:</label>
	            		<input name="numexterior" class="pure-input-1-2" type="text" value="<?php echo $item->NumExtSer ?>">
					</div>
					<div class="pure-control-group">
						<label for="numinterior">N&uacute;mero interior (si tiene):</label>
	            		<input name="numinterior" class="pure-input-1-2" type="text" value="<?php echo $item->NumIntServ ?>">
					</div>
					<div class="pure-control-group">
						<label for=colonia"">Colonia:</label>
	            		<input name="colonia" class="pure-input-1-2" type="text" value="<?php echo $item->ColServ ?>">
					</div>
					<div class="pure-control-group">
						<label for="codigo">C&oacute;digo postal:</label>
	            		<input name="codigo" class="pure-input-1-2" type="text" value="<?php echo $item->CodPostServ ?>">
					</div>
					<div class="pure-control-group">
						<label for="ciudad">Ciudad:</label>
	            		<input name="ciudad" class="pure-input-1-2" type="text" value="<?php echo $item->CiudadServ ?>">
					</div>
					<div class="pure-control-group">
						<label for="edo">Estado:</label>
	            		<input name="edo" class="pure-input-1-2" type="text" value="<?php echo $item->EdoServ ?>">
					</div>
				<legend>Contacto</legend>
					<div class="pure-control-group">
						<label for="telefono">Tel&eacute;fono:</label>
	            		<input name="telefono" class="pure-input-1-2" type="text" value="<?php echo $item->TelefServ ?>">
					</div>
					<div class="pure-control-group">
						<label for="celular">Celular:</label>
	            		<input name="celular" class="pure-input-1-2" type="text" value="<?php echo $item->telCelServ ?>">
					</div>
					<div class="pure-control-group">
						<label for="correo">Correo electrónico:</label>
	            		<input name="correo" class="pure-input-1-2" type="text" value="<?php echo $item->CorreElectServ ?>">
					</div>
					<div class="pure-control-group">
						<label for="descripserv">Descripci&oacute;n detallada de servicios:</label>
			       		<textarea name="descripserv" type="text" cols="45" rows="3"><?php echo $item->DescDetServ?></textarea>
			       	</div>
			       	<div class="pure-control-group">
						<label for="fb">Facebook (si tiene):</label>
	            		<input name="fb" class="pure-input-1-2" type="text" value="<?php echo $item->FbServ ?>">
					</div>
					<div class="pure-control-group">
						<label for="tw">Twitter (si tiene):</label>
	            		<input name="tw" class="pure-input-1-2" type="text" value="<?php echo $item->TwServ ?>">
					</div>
					<div class="pure-control-group">
						<label for="otrasred">Otras redes (si tiene):</label>
	            		<textarea name="otrasred" class="pure-input-1-2" type="text"><?php echo $item->OtrasRedesServ?></textarea>
					</div>
				<legend>Otros datos</legend>
					<div class="pure-control-group">
						<label for="eslogan">Eslogan (si cuenta con uno):</label>
	            		<input name="eslogan" class="pure-input-1-2" type="text" value="<?php echo $item->EslogServ ?>">
					</div>
					<div class="pure-control-group">
						<label for="fotoservi">Foto del prestador de servicios:</label>
	            		<input name="fotoservi" class="pure-input-1-2" type="file" value="<?php echo $item->ImgPrestServ ?>">
					</div>
					<div class="pure-controls">
						<button type="submit" class="pure-button pure-button-primary">Actualizar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>