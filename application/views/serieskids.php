<div>
    <div class="blog">
      	<div class="tit">
       		<span id="publish_date"><h1>Centro KIDS</h1></span>
       	</div>
       	<div id="kidsBackground">
       		<div class="container">
       			<div class="advice">
		        	<div class="center">
		        		<h2>En esta secci&oacute;n encontrar&aacute;s caricaturas cristianas de historias b&iacute;blicas en video.</h2>
		        		<h2>Los cap&iacute;tulos se muestran de manera que el &uacute;ltimo episodio registrado sea el primero en mostrarse.</h2>
		        		<h2>Para ver los cap&iacute;tulos en orden, debe buscar la serie en el filtro de b&uacute;squeda.</h2>
			        	<section class="container">
					        <div class="pull-right">
					            <form action="<?php echo base_url('index.php/kidsview/buscar');?>" method="GET" >
					                <fieldset>
					                    <p>Filtrar por serie
					                            <select type="text" autocomplete="off" name="buscar">
					                                <?php foreach ($this->my_model->getDistinct() as $total): ?>
					                                <option value="<?php echo $total->NombreSerie ?>"><?php echo $total->NombreSerie ?></option>
					                                <?php endforeach;?>
					                            </select>
					                         <button class="btn-primary" type="submit" value="Buscar">Buscar</button>
					                     </p>
					                </fieldset>
					            </form>
					        </div>
				    	</section>
				    </div>
			    </div>
	            <div class="row">
	            	<?php  if ($this->my_model->getAlldesc() !=0):?>
						<?php foreach ($results as $row): ?>
			                 <div class="col-md-12">
			                    <div class="blog-item">
			                        <div class="row">
			                            <div class="col-xs-12 col-sm-8 text-center">
			                                <div class="entry-meta">
			                                    <iframe class="YT-responsive" src="http://www.youtube.com/embed/<?php echo $row->LinkKids ?>" frameborder="0" allowfullscreen></iframe>
			                                </div>
			                            </div>
			                                
			                            <div class="col-xs-12 col-sm-4 blog-content">
			                            	<div class="advice">
				                                <div class="entry-meta">
				                                    <span id="publish_date"><h1><?php echo $row->TituloKids ?></h1></span>
				                                </div>
				                                <p>Fecha de creaci&oacute;n: <?php echo $row->FechaCreacion ?></p>
				                                <p>Serie <?php echo $row->NombreSerie ?></p>
				                                <p><?php echo $row->TextKids ?></p>
				                            </div>
			                        </div>    
	                    		</div><!--/.blog-item-->
	                		</div>
	                	<?php endforeach;?>
					<?php endif;?>
	            </div>
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
</div> 