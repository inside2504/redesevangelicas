<section id="title">
        <div class="center">
            <h2>Tianguis</h2>
            <p class="lead">Est&aacute;s viendo los datos del producto que seleccionaste. </p>
        </div>
</section>

<section id="about-us">
	<div class="container">
		<div class="blog">
			<div class="row">
				<div class="blog-item">
					<div class="col-md-12">
				        <div class="row">
				           <div class="col-xs-12 col-sm-5 text-center">
				           		<div class="col-xs-12 col-sm-12">
				           			<img src="<?= base_url('').'assets/tianguis/'.$item->imgProducto ?>" class="img-prod">
				           		</div>
				           </div>
				           <div class="col-xs-12 col-sm-7">
								<div class="col-xs-12 col-sm-12">
									<h2 class="tit-letters"><?php echo $item->nombreProducto ?></h2>
									<p class="bod-letters">Descripci&oacute;n del producto: <strong><?php echo $item->descripcionProducto ?></strong></p>
									<p class="bod-letters">Status del producto: <strong><?php echo $item->statusProducto?></strong></p>
									<p class="bod-letters">El precio de este producto es de: <strong>$<?php echo $item->precioProducto ?> pesos.*</strong></p>
									<p class="bod-letters">El vendedor pertenece a la <strong>Iglesia <?php echo $item->nombreIglesia ?></strong> cuyo <strong> Pastor es <?php echo $item->nombrePastor ?></strong>.</p>
									<p class="bod-letters">Para mayores informes comun&iacute;quese directamente con el vendedor. Su n&uacute;mero de <strong>tel&eacute;fono</strong> es: <strong><?php echo $item->telefVendedor ?></strong></p>
								</div>
							</div>
				       </div>
				       <div class="row">
				           	<div class="col-xs-12 col-sm-5 text-center">
				           		<div class="col-xs-12 col-sm-12">
				           			<img class="img-prod" src="<?= base_url('').'assets/tianguis/'.$this->my_model->getImg($item->idTianguis) ?>">
				           		</div>
				           	</div>
				           	<div class="col-xs-12 col-sm-7">
								<div class="col-xs-12 col-sm-12">
									<h2 class="sub-letters">Vendedor</h2>
									<h2 class="sub-letters"><?php echo $item->nombreVendedor ?></h2>
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