<section id="bolsaData">
    <div class="center">
        <h1>Bolsa de trabajo</h1>
        <p>Est&aacute;s viendo los datos de la oferta que seleccionaste. </p>
    </div>
	<div class="container">
		<div class="blog">
			<div class="row">
				<div class="blog-item">
					<div class="col-md-12">
				        <div class="row">
				           	<!-- <div class="col-xs-12 col-sm-5 text-center">
				           		<div class="col-xs-12 col-sm-12">
				           			<img src="<?= base_url('').'assets/bolsa/'.$item->imgProd ?>" class="img-dato">
				           		</div>
				          	</div> -->
				           	<div class="col-xs-12 col-sm-6">
				           		<h3><strong>Puesto:</strong> <br><?php echo $item->tituloOferta ?></h3>
								<h3><strong>Ubicaci&oacute;n</strong> <br><?php echo $item->ubicacionOferta ?></h3>
								<h3><strong>Solicitante:</strong> <br><?php echo $item->solicitanteOferta ?></h3>
								<h3>Pertenece a la iglesia: <?php echo $item->iglesiaVendedor ?></h3>
								<h3><strong>Salario:</strong> <br>$<?php echo $item->salarioOferta ?> pesos.*</h3>
								<h3><strong>Descripci&oacute;n:</strong> <br><?php echo $item->descripOferta ?></h3>
				           	</div>
							<div class="col-xs-12 col-sm-6">
								<h3><strong>Fecha de publicaci&oacute;n:</strong> <br><?php echo $item->fechaPublicacion ?></h3>
								<h3><strong>Vigencia de la oferta:</strong> <br><?php echo $item->vigenciaOferta ?></h3>
								<h3><strong>Horario:</strong> <br><?php echo $item->horarioTrabajo ?></h3>
								<h3><strong>D&iacute;as laborales:</strong> <br><?php echo $item->diasLaborales ?></h3>
								<h3><strong>Experiencia: </strong> <br><?php echo $item->experienciaOferta ?></h3>
								<h3><strong>Tel&eacute;fono: </strong> <br><?php echo $item->telefonoVendedor ?></h3>
								<h3><strong>Correo de contacto:</strong> <br><?php echo $item->correoContacto ?></h3>
							</div>
				       </div>
					</div>
				</div>
			</div>
			<p class="pull-right"><strong>*El salario se muestra en moneda nacional.</strong></p>
		</div>
	</div>
</section>