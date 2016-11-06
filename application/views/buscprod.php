<section id="tianguis">
	<div class="center">
        <h1>Tianguis</h1>
        <p class="lead">Bienvenido al Tianguis, aqu&iacute; podr&aacute;s encontrar los productos se venden en el tianguis.</p>
    </div>
    <section class="container">
        <div class="pull-right">
            <form action="<?php echo base_url('index.php/tianguisview/buscar');?>" method="GET" >
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
									<div class="media">
										<img src="<?= base_url('').'assets/tianguis/'.$row->imgProducto ?>" class="presimg">
									</div><!--/.media -->
									<h4><?php echo $row->nombreProducto ?></h4>
									<h5><?php echo $row->nombreVendedor ?></h5>
									<h5>Precio $<?php echo $row->precioProducto ?></h5>
									<br>
									<a href=<?php echo site_url("tianguisview/datos/".$row->idTianguis) ?> class="btn-primary">Ver m&aacute;s</a>
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