<section id="title">
        <div class="center">
            <h2>Bolsa de trabajo</h2>
            <p class="lead">Est&aacute;s viendo los datos de la oferta que seleccionaste. </p>
        </div>
</section>

<section id="about-us">
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
				           		<h2 class="sub-letters"><strong>Puesto:</strong> <br><?php echo $item->tituloOferta ?></h2>
								<h2 class="sub-letters"><strong>Ubicaci&oacute;n</strong> <br><?php echo $item->ubicacionOferta ?></h2>
								<h2 class="sub-letters"><strong>Solicitante:</strong> <br><?php echo $item->solicitanteOferta ?></h2>
								<h2 class="sub-letters">Pertenece a la iglesia: <?php echo $item->iglesiaVendedor ?></h2>
								<h2 class="sub-letters"><strong>Salario:</strong> <br>$<?php echo $item->salarioOferta ?> pesos.*</h2>
								<h2 class="sub-letters"><strong>Descripci&oacute;n:</strong> <br><?php echo $item->descripOferta ?></h2>
				           	</div>
							<div class="col-xs-12 col-sm-6">
								<h2 class="sub-letters"><strong>Fecha de publicaci&oacute;n:</strong> <br><?php echo $item->fechaPublicacion ?></h2>
								<h2 class="sub-letters"><strong>Vigencia de la oferta:</strong> <br><?php echo $item->vigenciaOferta ?></h2>
								<h2 class="sub-letters"><strong>Horario:</strong> <br><?php echo $item->horarioTrabajo ?></h2>
								<h2 class="sub-letters"><strong>D&iacute;as laborales:</strong> <br><?php echo $item->diasLaborales ?></h2>
								<h2 class="sub-letters"><strong>Experiencia: </strong> <br><?php echo $item->experienciaOferta ?></h2>
								<h2 class="sub-letters"><strong>Tel&eacute;fono: </strong> <br><?php echo $item->telefonoVendedor ?></h2>
								<h2 class="sub-letters"><strong>Correo de contacto:</strong> <br><?php echo $item->correoContacto ?></h2>
							</div>
				       </div>
					</div>
				</div>
			</div>
			<p class="lead pull-right"><strong>*El salario se muestra en moneda nacional.</strong></p>
		</div>
	</div>
</section>