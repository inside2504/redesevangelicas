<section class="empre-back">
    <div class="center">
        <h1>Empresas</h1>
        <p class="lead">Bienvenido al apartado de empresas, aqu&iacute; podr&aacute;s encontrar el cat&aacute;logo de las empresas que se encuentran afiliadas a Redes evang&eacute;licas.</p>
    </div>
    <section class="container">
        <div class="pull-right">
            <form action="<?php echo base_url('index.php/empresasview/buscar');?>" method="GET" >
                <fieldset>
                    <h3>Filtrar por tipo de empresa
                            <select type="text" autocomplete="off" name="buscar">
                                <?php foreach ($this->my_model->getDistinct() as $total): ?>
                                <option value="<?php echo $total->GiroEmpres ?>"><?php echo $total->GiroEmpres ?></option>
                                <?php endforeach;?>
                            </select>
                         <button class="btn-primary" type="submit" value="Buscar">Buscar</button>
                     </h3>
                </fieldset>
            </form>
        </div>
    </section>

    <div class="divisores">
        <div class="container">
            <div class="divisores">
                <div class="row clearfix">
                    <?php  if ($this->my_model->get() !=0):?>
                        <?php foreach ($results as $row): ?>
                            <div class="col-md-3 col-sm-6"> 
                                <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img src="<?= base_url('').'assets/empresa/'.$this->my_model->getLogo($row->AidiEmpr) ?>" class="media-object">
                                        </div>
                                        <div class="media-body">  
                                            
                                            
                                        </div>
                                    </div><!--/.media -->
                                    <h3><div class="<?php echo $row->tipoRec; ?>">Esta empresa es de tipo <?php echo $row->tipoRec?></div></h3>
                                    <h3><?php echo $row->NameEmpr ?></h3>
                                    <h3>Responsable de la empresa: <em><?php echo $row->NombRespEmpr ?> <?php echo $row->ApePatRespEmpr ?> <?php echo $row->ApeMatRespEmpr ?></em></h3>
                                    <ul class="tag clearfix">
                                        <li class="btn"><h5 href="#"><?php echo $row->GiroEmpres ?></h5></li>
                                    </ul>
                                    <h4>Dirección: <em><?php echo $row->CalleEmpr ?></em>, n&uacute;mero exterior <em><?php echo $row->NumExtEmpr ?></em>, 
                                        n&uacute;mero interior: <em><?php echo $row->NumIntEmpr ?></em> , colonia <em><?php echo $row->ColEmpr ?></em>. 
                                        Código postal: <em><?php echo $row->CodPostEmpr ?></em>, <em><?php echo $row->CiudadEmpr ?></em>, <em><?php echo $row->EdoEmpr ?></em>.</h4>
                                    <h4>Teléfonos: <em><?php echo $row->TelefEmpr ?></em>, <em><?php echo $row->TelefRespEmpr ?>.</em></h4>
                                    <a href=<?php echo site_url("empresasview/datos/".$row->AidiEmpr) ?> class="btn-primary">M&aacute;s informaci&oacute;n</a>
                                </div>
                            </div> 
                        <?php endforeach;?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    
        <div class="container">
            <div class="pull-right">
                <h3><?=$this->pagination->create_links(); ?></h3>
            </div>
        </div>
    </div>

</section>