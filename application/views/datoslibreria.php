<section id="libreriaBack">
        <div class="center">
            <h1>Librer&iacute;a</h1>
            <p class="lead">Est&aacute;s viendo los datos del producto que seleccionaste. </p>
        </div>

	<div class="container">
		<div class="blog">
			<div class="row">
				<div class="blog-item">
					<div class="col-md-12">
				        <div class="row">
				           <div class="col-xs-12 col-sm-5 text-center">
				           		<div class="col-xs-12 col-sm-12">
				           			<img src="<?= base_url('').'assets/libreria/'.$item->imgProd ?>" class="img-dato">
				           		</div>
				           </div>
				           <div class="col-xs-12 col-sm-7">
								<div class="col-xs-12 col-sm-12">
									<h1><?php echo $item->nombProd ?></h1>
									<h3><?php echo $item->autoProd ?></h3>
									<p><?php echo $item->descrProd ?></p>
									<p>El precio de este producto es de: <strong>$<?php echo $item->precProd ?> pesos.*</strong></p>
									<p>Puedes encontrarlo en <strong>Librer&iacute;a <?php echo $item->nombLibProd ?></strong> perteneciente a la <strong> iglesia <?php echo $item->nombIgleProd ?></strong>.</p>
									<p>Ubicada en <strong><?php echo $item->calleLibProd ?></strong>, n&uacute;mero: <strong><?php echo $item->numExtLibProd ?></strong> interior <strong><?php echo $item->numIntLibProd ?></strong>,
									colonia <strong><?php echo $item->coloLibProd ?></strong>, c&oacute;digo postal <strong><?php echo $item->codPostLibProd ?></strong>, <strong><?php echo $item->ciuLibrProd ?></strong>, <strong><?php echo $item->edoLibProd ?></strong></p>
									<p>Tel&eacute;fono <strong><?php echo $item->telefLibProd ?></strong></p>
									<p>Correo electr&oacute;nico: <strong><?php echo $item->correEleLibProd ?></strong></p>
									<p>P&aacute;gina de facebook: <a href=<?php echo $item->fBLibProd ?>><?php echo $item->fBLibProd ?></a></p>
									<p>P&aacute;gina de twitter: <a href=<?php echo $item->tWLibProd ?>><?php echo $item->tWLibProd ?></a></p>
								</div>
							</div>
				       </div>
					</div>
				</div>
			</div>
			<p class="lead pull-right"><strong>*Todos los precios se muestran en moneda nacional.</strong></p>
		</div>
	</div>
</section>