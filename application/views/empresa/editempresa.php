<div class="main">
	<div>
		<section class="header">
			<h1>Empresas</h1>
			<h2>Bienvenido al formulario para editar una empresa</h2>
		</section>
	</div>
	<div class="content">
		<form class="pure-form pure-form-aligned" enctype="multipart/form-data" method="POST" action="<?php echo base_url('index.php/empresa/actualizar');?>">
			<fieldset>
				<input name="id" class="pure-input-1-2" type="text" style="visibility:hidden" value="<?php echo $item->AidiEmpr ?>">
				<legend>Datos de la iglesia que lo recomienda</legend>
					<div class="pure-control-group">
						<label for="iglesia">Iglesia perteneciente:</label>
	            		<input name="iglesia" class="pure-input-1-2" type="text" value="<?php echo $item->IglePertEmpr ?>">
					</div>
					<div class="pure-control-group">
						<label for="pastor">Pastor que lo recomienda:</label>
	            		<input name="pastor" class="pure-input-1-2" type="text" value="<?php echo $item->PastRecEmpr ?>">
					</div>
				<legend>Datos de la empresa</legend>
					<div class="pure-control-group">
						<label for="empresa">Nombre de la empresa:</label>
	            		<input name="empresa" class="pure-input-1-2" type="text" value="<?php echo $item->NameEmpr ?>">
					</div>
					<div class="pure-control-group">
						<label for="giro">Giro empresarial:</label>
	            		<input name="giro" class="pure-input-1-2" type="text" value="<?php echo $item->GiroEmpres ?>">
					</div>
					<div class="pure-control-group">
						<label for="descrip">Descripci&oacute;n:</label>
			       		<textarea name="descripcion" type="text" cols="45" rows="3"?><?php echo $item->DescrEmpr?></textarea>
			       	</div>
				<legend>Direcci&oacute;n</legend>
					<div class="pure-control-group">
						<label for="calle">Calle:</label>
	            		<input name="calle" class="pure-input-1-2" type="text" value="<?php echo $item->CalleEmpr ?>">
					</div>
					<div class="pure-control-group">
						<label for="numexterior">N&uacute;mero exterior:</label>
	            		<input name="numexterior" class="pure-input-1-2" type="text" value="<?php echo $item->NumExtEmpr ?>">
					</div>
					<div class="pure-control-group">
						<label for="numinterior">N&uacute;mero interior (si tiene):</label>
	            		<input name="numinterior" class="pure-input-1-2" type="text" value="<?php echo $item->NumIntEmpr ?>">
					</div>
					<div class="pure-control-group">
						<label for="colonia">Colonia:</label>
	            		<input name="colonia" class="pure-input-1-2" type="text" value="<?php echo $item->ColEmpr ?>">
					</div>
					<div class="pure-control-group">
						<label for="codigo">C&oacute;digo postal:</label>
	            		<input name="codigo" class="pure-input-1-2" type="text" value="<?php echo $item->CodPostEmpr ?>">
					</div>
					<div class="pure-control-group">
						<label for="ciudad">Ciudad:</label>
	            		<input name="ciudad" class="pure-input-1-2" type="text" value="<?php echo $item->CiudadEmpr ?>">
					</div>
					<div class="pure-control-group">
						<label for="edo">Estado:</label>
	            		<input name="edo" class="pure-input-1-2" type="text" value="<?php echo $item->EdoEmpr ?>">
					</div>
				<legend>Contacto</legend>
					<div class="pure-control-group">
						<label for="telefono">Tel&eacute;fono(s):</label>
	            		<input name="telefono" class="pure-input-1-2" type="text" value="<?php echo $item->TelefEmpr ?>">
					</div>
					<div class="pure-control-group">
						<label for="correo">Correo electrónico:</label>
	            		<input name="correo" class="pure-input-1-2" type="text" value="<?php echo $item->CorreElectEmpr ?>">
					</div>
					<div class="pure-control-group">
						<label for="descripserv">Descripci&oacute;n de servicios:</label>
			       		<textarea name="descripserv" type="text" cols="45" rows="3"><?php echo $item->DescServEmpr?></textarea>
			       	</div>
			       	<div class="pure-control-group">
						<label for="fb">Facebook (si tiene):</label>
	            		<input name="fb" class="pure-input-1-2" type="text" value="<?php echo $item->FbEmpr ?>">
					</div>
					<div class="pure-control-group">
						<label for="tw">Twitter (si tiene):</label>
	            		<input name="tw" class="pure-input-1-2" type="text" value="<?php echo $item->TwEmpr ?>">
					</div>
					<div class="pure-control-group">
						<label for="otrasred">Otras redes (si tiene):</label>
	            		<textarea name="otrasred" class="pure-input-1-2" type="text"><?php echo $item->OtrasRedEmpr?></textarea>
					</div>
					<div class="pure-control-group">
						<label for="eslogan">Eslogan:</label>
	            		<input name="eslogan" class="pure-input-1-2" type="text" value="<?php echo $item->EslogEmpr ?>">
					</div>
					<div class="pure-control-group">
						<label for="logo">Logotipo:</label>
	            		<input name="logo" class="pure-input-1-2" type="file" value="<?php echo $item->LogoEmpr ?>">
					</div>
				<legend>Datos del responsable de la empresa</legend>
					<div class="pure-control-group">
						<label for="nombre">Nombre(s):</label>
	            		<input name="nombre" class="pure-input-1-2" type="text" value="<?php echo $item->NombRespEmpr ?>">
					</div>
					<div class="pure-control-group">
						<label for="apepat">Apellido paterno:</label>
	            		<input name="apepat" class="pure-input-1-2" type="text" value="<?php echo $item->ApePatRespEmpr ?>">
					</div>
					<div class="pure-control-group">
						<label for="apemat">Apellido materno:</label>
	            		<input name="apemat" class="pure-input-1-2" type="text" value="<?php echo $item->ApeMatRespEmpr ?>">
					</div>
					<div class="pure-control-group">
						<label for="teleres">Tel&eacute;fono:</label>
	            		<input name="teleres" class="pure-input-1-2" type="text" value="<?php echo $item->TelefRespEmpr ?>">
					</div>
					<div class="pure-control-group">
						<label for="foto">Foto del responsable:</label>
	            		<input name="foto" class="pure-input-1-2" type="file" value="<?php echo $item->FotoRespEmpr ?>">
					</div>
					<div class="pure-controls">
						<button type="submit" class="pure-button pure-button-primary">Actualizar</button>
					</div>
			</fieldset>
		</form>
	</div>
</div>