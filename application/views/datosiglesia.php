<section class="igle-back">
        <div class="center">
            <h1>Iglesias</h1>
            <p class="lead">Est&aacute;s viendo los datos de la iglesia que seleccionaste. </p>
        </div>

	<div class="container">
		<div class="blog">
			<div class="row">
				<div class="blog-item">
					<div class="col-md-12">
				        <div class="row">
				           <div class="col-xs-12 col-sm-5 text-center">
				           		<div class="col-xs-12 col-sm-12">
				           			<img class="img-dato" src="<?= base_url('').'assets/iglesias/'.$this->my_model->getImg($item->idIgle) ?>">
				           		</div>
				           </div>
				           <div class="col-xs-12 col-sm-7">
								<div class="col-xs-12 col-sm-12">
									<h1><?php echo $item->nomIgle ?></h1>
									<h3>Pastor <?php echo $item->pasIgle ?></h3>
									<p><?php echo $item->eslogIgle ?></p>
									<p><?php echo $item->descIgle ?></p>
									<p>Direcci&oacute;n: <strong><?php echo $item->calleIgle ?></strong>, n&uacute;mero <strong><?php echo $item->numExtIgle ?></strong>, interior <strong><?php echo $item->numInteIgle ?></strong>,
									colonia <strong><?php echo $item->coloIgle ?></strong>, c&oacute;digo postal <strong><?php echo $item->codPostIgle ?></strong>, <strong><?php echo $item->ciudadIgle ?></strong>, <strong><?php echo $item->edoIgle ?>.</strong></p>
									<p>Tel&eacute;fono: <strong><?php echo $item->telIgle ?></strong>.</p>
									<p>Correo electr&oacute;nico: <strong><?php echo $item->correEleIgle ?></strong></p>
									<p>P&aacute;gina de facebook: <a href=<?php echo $item->fBIgle ?>><?php echo $item->fBIgle ?></a></p>
									<p>P&aacute;gina de twitter: <a href=<?php echo $item->tWIgle ?>><?php echo $item->tWIgle ?></a></p>
									<div class="map-responsive">
										<h1>Ubicaci&oacute;n en el mapa</h1>
						     			<iframe class="encap" src=<?php echo $item->mapaIgle ?> allowfullscreen><?php echo $item->mapaIgle ?></iframe>
						    		</div>
									<!--<p>Otras redes: <a href=<?php echo $item->mapaIgle ?>><?php echo $item->mapaIgle ?></a></p>
								-->
								</div>
							</div>
				       </div>
					</div>
				</div>
			</div>
			
		</div>
	</div>
</section>