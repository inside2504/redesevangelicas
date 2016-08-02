<section id="title">
	<div class="center">
        <h2>Tianguis</h2>
        <p class="lead">Bienvenido al Tianguis, aqu&iacute; podr&aacute;s encontrar los productos se venden en el tianguis.</p>
    </div>
    <section class="container">
        <div class="pull-right">
            <form action="<?php echo base_url('index.php/tianguisview/buscar');?>" method="GET" >
                <fieldset>
                    <h3>Filtrar por nombre
                        <input type="text" name="buscar" placeholder="Ingresa una palabra"/>
                        <button class="btn-primary" type="submit" value="Buscar">Buscar</button>
                     </h3>
                </fielfset>
            </form>
        </div>
    </section>
</section>

<section id="about-us">
    <div class="team">
        <div class="container">
	        <div class="team">
				<div class="row clearfix">
		        	<?php  if ($this->my_model->get() !=0):?>
    					<?php foreach ($results as $item): ?>
							<div class="col-md-3 col-sm-6">	
								<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
									<div class="media">
										<div>
											<img src="<?= base_url('').'assets/tianguis/'.$item->imgProducto ?>" class="presimg">
										</div>
										
									</div><!--/.media -->
									<h4><?php echo $item->nombreProducto ?></h4>
									<h5><?php echo $item->nombreVendedor ?></h5>
									<h5>Precio $<?php echo $item->precioProducto ?></h5>
									<h5>Iglesia <?php echo $item->nombreIglesia ?></h5>
									<br>
									<a href=<?php echo site_url("tianguisview/datos/".$item->idTianguis) ?> class="btn-primary">Ver m&aacute;s</a>
								</div>
							</div><!--/.col-lg-4 -->
						<?php endforeach;?>
					<?php endif;?>
				</div>
			</div>
		</div>
	</div>
	<div class="container">
        <div class="pull-right">
            <h2><?=$this->pagination->create_links(); ?></h2>
        </div>
    </div>
</section>