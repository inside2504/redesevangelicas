<section id="libreriaBack">
	<div class="center">
        <h1>Librer&iacute;a</h1>
        <p class="lead">Bienvenido a la librer&iacute;a, aqu&iacute; podr&aacute;s encontrar los materiales de las librer&iacute;as.</p>
    </div>
    <section class="container">
        <div class="pull-right">
            <form action="<?php echo base_url('index.php/libreriaview/buscar');?>" method="GET" >
                <fieldset>
                    <h3>Filtrar por nombre
                        <input type="text" name="buscar" placeholder="Ingresa una palabra"/>
                        <button class="btn-primary" type="submit" value="Buscar">Buscar</button>
                     </h3>
                </fieldset>
            </form>
        </div>
    </section>

    <div class="team">
        <div class="container">
	        <div class="team">
				<div class="row clearfix">
		        	<?php  if ($this->my_model->get() !=0):?>
    					<?php foreach ($item as $row): ?>
							<div class="col-md-3 col-sm-6">	
								<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
									<div class="media">
										<div class="pull-left">
											<img src="<?= base_url('').'assets/libreria/'.$row->imgProd ?>" class="media-object">
										</div>
										
									</div><!--/.media -->
									<h4><?php echo $row->nombProd ?></h4>
									<h5><?php echo $row->autoProd ?></h5>
									<h5>Librer&iacute;a <?php echo $row->nombLibProd ?></h5>
									<br>
									<a href=<?php echo site_url("libreriaview/datos/".$row->idProd) ?> class="btn-primary">Ver m&aacute;s</a>
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

<?php  if ($this->my_model->get() ==0):?>
<section>
	<h2>No se encontr&oacute;</h2>
</section>
<?php endif;?>