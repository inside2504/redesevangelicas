<section id="materialBack">
	<div class="center">
	    <h1>Materiales</h1>
		 <p class="lead">Bienvenido al apartado de materiales, aqu&iacute; podr&aacute;s encontrar el cat&aacute;logo de los materiales que Redes evang&eacute;licas te ofrece.</p>
	</div>

	<section class="container">
        <div class="pull-right">
            <form action="<?php echo base_url('index.php/materialesview/buscar');?>" method="GET" >
                <fieldset>
                    <h3>Filtrar por tipo de material
                            <select type="text" autocomplete="off" name="buscar">
                                <option value="Libros">Libros</option>
                                <option value="Audio">Audio</option>
                            </select>
                         <button class="btn-primary" type="submit" value="Buscar">Buscar</button>
                     </h3>
                </fielfset>
            </form>
        </div>
    </section>

        <div class="container">
	        <div class="team">
				<?php foreach ($item as $row): ?>
					<div class="col-md-3 col-sm-6">	
						<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
							<div class="media">
								<div class="pull-left">
									<img class="media-object" src="<?= base_url('').'assets/material/'.$this->my_model->getImg($row->idMate) ?>">
								</div>
							</div><!--/.media -->
							<h3><?php echo $row->nombMate ?></h3>
							<h4><?php echo $row->autMate ?></h4>
							<ul class="tag clearfix">
								<li><h5><?php echo $row->cateMate ?></h5></li>
							</ul>
							<a href=<?php echo site_url("materialesview/datos/".$row->idMate) ?> class="btn-primary">Ver datos</a>
						</div>
					</div><!--/.col-lg-4 -->
				<?php endforeach;?>
			</div>
		</div>

	<div class="container">
        <div class="pull-right">
            <h2><?=$this->pagination->create_links(); ?></h2>
        </div>
    </div>
</section>