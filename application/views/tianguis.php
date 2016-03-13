<section id="title">
	<div class="center">
        <h2>Librer&iacute;a</h2>
        <p class="lead">Bienvenido al apartado de empresas, aqu&iacute; podr&aacute;s encontrar el cat&aacute;logo de las empresas que se encuentran afiliadas a Redes evang&eacute;licas.</p>
    </div>
</section>

<section id="about-us">
    <div class="team">
        <div class="container">
	        <div class="team">
				<div class="row clearfix">
		        	<?php  if ($this->my_model->get() !=0):?>
    					<?php foreach ($this->my_model->get() as $row): ?>
							<div class="col-md-3 col-sm-6">	
								<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
									<div class="media">
										<div class="pull-left">
											<img class="caratula" src="<?=base_url('')."assets/uploads/"."$row->imagProd".".jpg"?>" alt="">
										</div>
										
									</div><!--/.media -->
									<h4><?php echo $row->nombProd ?></h4>
									<h5><?php echo $row->autoProd ?></h5>
									<p class="lead"><?php echo $row->descrProd ?></p>
									<a href="#" class="btn-primary">Ver m&aacute;s</a>
								</div>
							</div><!--/.col-lg-4 -->
						<?php endforeach;?>
					<?php endif;?>
				</div>
			</div>
			<p class="lead pull-right">Todos los precios se muestran en moneda nacional.</p>
		</div>
	</div>
</section>