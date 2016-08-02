<section id="title">
	<div class="center">
        <h2>Bolsa de trabajo</h2>
        <p class="lead">Bienvenido a la bolsa de trabajo, aqu&iacute; podr&aacute;s encontrar ofertas laborales para que encuentres el trabajo que necesitas.</p>
    </div>
    <section class="container">
        <div class="pull-right">
            <form action="<?php echo base_url('index.php/bolsaview/buscar');?>" method="GET" >
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
									<!-- <div class="media">
										<div class="pull-left">
											<img src="<?= base_url('').'assets/bolsa/'.$item->imgProd ?>" class="libreria">
										</div>
										
									</div> --><!--/.media -->
									<h4>Puesto: <br><?php echo $item->tituloOferta ?></h4>
									<h3>Solicitante: <br><?php echo $item->solicitanteOferta ?></h3>
									<h3>Pertenece a la iglesia: <br><?php echo $item->iglesiaVendedor ?></h3>
									<h3>Ubicaci&oacute;n: <br><?php echo $item->ubicacionOferta ?></h3>
									<h3>Fecha de publicaci&oacute;n: <br><?php echo $item->fechaPublicacion ?></h3>
									<br>
									<a href=<?php echo site_url("bolsaview/datos/".$item->idbolsaTrab) ?> class="btn-primary">Ver m&aacute;s</a>
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