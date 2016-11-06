<section class="serv-back">
        <div class="center">
            <h1>Servicios</h1>
            <p class="lead">Est&aacute;s viendo los datos del prestador de servicios que seleccionaste. </p>
        </div>

	<div class="container">
		<div class="blog">
			<div class="row">
				<div class="blog-item">
					<div class="col-md-12">
				        <div class="row">
				           <div class="col-xs-12 col-sm-5 text-center">
				           		<div class="col-xs-12 col-sm-12">
				           			<img class="img-dato" src="<?= base_url('').'assets/servicio/'.$this->my_model->getImg($item->AidiServi) ?>">
				           		</div>
				           </div>
				           <div class="col-xs-12 col-sm-7">
								<div class="col-xs-12 col-sm-12">
									<h1><?php echo $item->NamePrestServ ?> <?php echo $item->ApePatPrestServ ?> <?php echo $item->ApeMatPrestServ ?></h1>
									<h3><?php echo $item->EslogServ ?></h3>
									<p><?php echo $item->ServOfrecido ?></p>
									<p><?php echo $item->DescDetServ ?></p>
									<p>Pertenece a la <strong>Iglesia <?php echo $item->IglePert ?></strong></strong></p>
									<p>Direcci&oacute;n: <strong><?php echo $item->CalleServ ?></strong>, <strong>n&uacute;mero <?php echo $item->NumExtSer ?></strong>, interior <strong><?php echo $item->NumIntServ ?></strong>,
									colonia <strong><?php echo $item->ColServ ?></strong>, c&oacute;digo postal <strong><?php echo $item->CodPostServ ?></strong>, <strong><?php echo $item->CiudadServ ?></strong>, <strong><?php echo $item->EdoServ ?>.</strong></p>
									<p>Tel&eacute;fono: <strong><?php echo $item->TelefServ ?></strong>, <strong><?php echo $item->telCelServ ?></strong>.</p>
									<p>Correo electr&oacute;nico: <strong><?php echo $item->CorreElectServ ?></strong></p>
									<p>P&aacute;gina de facebook: <a href=<?php echo $item->FbServ ?>><?php echo $item->FbServ ?></a></p>
									<p>P&aacute;gina de twitter: <a href=<?php echo $item->TwServ ?>><?php echo $item->TwServ ?></a></p>
								</div>
							</div>
				       </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>