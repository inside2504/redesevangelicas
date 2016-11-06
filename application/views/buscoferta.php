<section id="bolsaBack">
	<div class="center">
        <h1>Bolsa de trabajo</h1>
        <p class="lead">Bienvenido a la bolsa de trabajo, aqu&iacute; podr&aacute;s encontrar ofertas laborales para que encuentres el trabajo que necesitas.</p>
    </div>
    <section class="container">
        <div class="pull-right">
            <form action="<?php echo base_url('index.php/bolsaview/buscar');?>" method="GET" >
                <fieldset>
                    <h3>Filtrar por regi&oacute;n
                        <select type="text" autocomplete="off" name="buscar">
                            <?php foreach ($this->my_model->getLocalidad() as $total): ?>
                            <option value="<?php echo $total->nombreLocalidad ?>"><?php echo $total->nombreLocalidad ?></option>
                            <?php endforeach;?>
                        </select>
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
									<!-- <div class="media">
										<div class="pull-left">
											<img src="<?= base_url('').'assets/bolsa/'.$row->imgProd ?>" class="media-object">
										</div>
										
									</div>--><!--/.media --> 
									<h4>Puesto: <br><?php echo $row->tituloOferta ?></h4>
									<h3>Solicitante: <br><?php echo $row->solicitanteOferta ?></h3>
									<h3>Pertenece a la iglesia <br><?php echo $row->iglesiaVendedor ?></h3>
									<h3>Ubicaci&oacute;n: <br><?php echo $row->ubicacionOferta ?></h3>
									<h3>Fecha de publicaci&oacute;n: <br><?php echo $row->fechaPublicacion ?></h3>
									<br>
									<a href=<?php echo site_url("bolsaview/datos/".$row->idbolsaTrab) ?> class="btn-primary">Ver m&aacute;s</a>
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