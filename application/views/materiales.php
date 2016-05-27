<section id="title">
	<div class="center">
	    <h2>Materiales</h2>
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
</section>

<div class="margen">
    <div class="elementos">
	    <div class="row clearfix">
            <div class="col-md-10 col-sm-6 col-md-offset-1"> 
		      	<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
					<div class="media">
						<div class="pull-left">
							<img class="media-object" src="<?=base_url('')."biblia_audio.jpg"?>">
						</div>
						<div class="media-body">
							<h4>Biblia ambientada</h4>
							<h3>Tenemos el Nuevo Testamento de la Biblia versión Reina Valera 1995 ambientada en audio.</h3>
							<ul class="tag clearfix">
								<li class="btn"><a>Audio</a></li>
							</ul>
							<a href=<?php echo site_url('materialesview/ambientada')?> class="btn-primary">Ver datos</a>
						</div>
					</div><!--/.media -->
				</div>
			</div>
		</div>
	</div>
</div>

<section id="about-us">
    <div class="team">
        <div class="container">
	        <div class="team">
				<?php  if ($this->my_model->get() !=0):?>
				    <?php foreach ($results as $row): ?>
						<div class="col-md-3 col-sm-6">	
							<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
								<div class="media">
									<div class="pull-left">
										<img class="libreria" src="<?= base_url('').'assets/material/'.$this->my_model->getImg($row->idMate) ?>">
									</div>
								</div><!--/.media -->
								<h4><?php echo $row->nombMate ?></h4>
								<h3><?php echo $row->autMate ?></h3>
								<ul class="tag clearfix">
									<li class="btn"><a href="#"><?php echo $row->cateMate ?></a></li>
								</ul>
								<a href=<?php echo site_url("materialesview/datos/".$row->idMate) ?> class="btn-primary">Ver datos</a>
							</div>
						</div><!--/.col-lg-4 -->
					<?php endforeach;?>
				<?php endif;?>
			</div>
		</div>
	</div>
	<div class="container">
        <div class="pull-right">
            <h2><?=$this->pagination->create_links(); ?></h2>
        </div>
    </div>
</section>
	