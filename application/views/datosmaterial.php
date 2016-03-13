<section id="title">
        <div class="center">
            <h2>Materiales</h2>
            <p class="lead">Est&aacute;s viendo los datos del material que seleccionaste. </p>
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
				           			<img class="img-dato" src="<?=base_url('')."assets/material/"."$item->imgMate"?>">
				           		</div>
				           </div>
				           <div class="col-xs-12 col-sm-7">
								<div class="col-xs-12 col-sm-12">
									<h2 class="tit-letters"><?php echo $item->nombMate ?></h2>
									<h2 class="sub-letters"><?php echo $item->autMate ?></h2>
									<p class="bod-letters"><?php echo $item->cateMate ?></p>
									<p class="bod-letters"><?php echo $item->descMate ?></p>
								</div>
							</div>
				       </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>