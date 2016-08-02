<div id="blog">
	<div class="tit">
		<span id="publish_date"><h1>MusiKids</h1></span>
	</div>
	<div id="player">
	<section id="kidsBackground">
		<div class="container">
			<div class="advice">
				<h2 class="center"> Todos los videos mostrados son listas de reproducci&oacute;n</h2>
			</div>
			<section class="container">
		        <div class="pull-right">
		            <form action="<?php echo base_url('index.php/kidsview/buscarMusi');?>" method="GET" >
		                <fieldset>
		                    <h2 class="busc">Filtrar por autor
		                            <select type="text" autocomplete="off" name="buscar">
		                                <?php foreach ($this->my_model->getDistinctMusic() as $total): ?>
		                                <option value="<?php echo $total->autorMusic ?>"><?php echo $total->autorMusic ?></option>
		                                <?php endforeach;?>
		                            </select>
		                         <button class="btn-primary" type="submit" value="Buscar">Buscar</button>
		                     </h2>
		                </fieldset>
		            </form>
		        </div>
		    </section>
			<div class="musi">
				<div class="row">
					<?php  if ($this->my_model->get_music() !=0):?>
						<?php foreach ($item as $row): ?>
							<div class="col-md-4 col-sm-6">
								<div class="advice">
									<h2 class="cent"><?php echo $row->nombreMusic ?> - <?php echo $row->autorMusic ?></h2>
								</div>
									<iframe class="YT-responsive" src="http://www.youtube.com/embed/<?php echo $row->linkMusic ?>" frameborder="0" allowfullscreen></iframe>
							</div>
						<?php endforeach;?>
					<?php endif;?>
				</div>
			</div>
			<div class="advice">
		        <div class="container">
			        <div class="pull-right">
			            <h3><?=$this->pagination->create_links(); ?></h3>
			        </div>
			    </div>
			</div>
		</div>
	</section>
</div>