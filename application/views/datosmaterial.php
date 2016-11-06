<section id="materialBack">
        <div class="center">
            <h1>Materiales</h1>
            <p class="lead">Est&aacute;s viendo los datos del material que seleccionaste. </p>
        </div>

	<div class="container">
		<div class="blog">
			<div class="row">
				<div class="blog-item">
					<div class="col-md-12">
				        <div class="row">
				           <div class="col-xs-12 col-sm-5 text-center">
				           		<div class="col-xs-12 col-sm-12">
				           			<img src="<?= base_url('').'assets/material/'.$this->my_model->getImg($item->idMate) ?>">
				           		</div>
				           </div>
				           <div class="col-xs-12 col-sm-7">
								<div class="col-xs-12 col-sm-12">
									<h1><?php echo $item->nombMate ?></h1>
									<h3><?php echo $item->autMate ?></h3>
									<p><?php echo $item->cateMate ?></p>
									<p><?php echo $item->descMate ?></p>
									<a class="btn-primary" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" href="<?php echo $item->linkMate ?>">Descargar</a>
								</div>
							</div>
				       </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>