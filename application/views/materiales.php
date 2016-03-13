
		<section id="title">
			<div class="center">
		        <h2>Materiales</h2>
		        <p class="lead">Bienvenido al apartado de materiales, aqu&iacute; podr&aacute;s encontrar el cat&aacute;logo de los materiales que Redes evang&eacute;licas te ofrece.</p>
		    </div>
		</section>
		<section id="about-us">
		    <div class="team">
		        <div class="container">
		        	<div class="col-md-6">
					    <div class="list-group">
					        <a href="#" class="list-group-item">Libros</a>
					    </div>
					</div>
					<div class="col-md-6">
					    <div class="list-group">
					        <a href="#" class="list-group-item">Audio</a>
					    </div>
					</div>
			        <div class="team">			        	
						<div class="row clearfix">
				        	</div>
							<?php  if ($this->my_model->get() !=0):?>
							    <?php foreach ($this->my_model->get() as $row): ?>
									<div class="col-md-3 col-sm-6">	
										<div class="single-profile-top wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="300ms">
											<div class="media">
												<div class="pull-left">
													<img class="caratula" src="<?=base_url('')."assets/uploads/"."$row->imgMate".".jpg"?>" alt="">
												</div>
											</div><!--/.media -->
											<h4><?php echo $row->nombMate ?></h4>
											<h3><?php echo $row->autMate ?></h3>
											<ul class="tag clearfix">
												<li class="btn"><a href="#"><?php echo $row->cateMate ?></a></li>
											</ul>
											<p class="lead"><?php echo $row->descMate ?></p>
											<a href="#" class="btn-primary">Ver datos</a>
										</div>
									</div><!--/.col-lg-4 -->
								<?php endforeach;?>
							<?php endif;?>
						</div>

					</div>
				</div>
			</div>
		</section>
	