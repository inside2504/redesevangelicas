<section class="serv-back">
    <div class="container">
        <div class="center">
            <h1>Servicios</h1>
            <p class="lead">Bienvenido al apartado de servicios, aqu&iacute; podr&aacute;s encontrar el cat&aacute;logo de los prestadores de servicios profesionales que se encuentran afiliados a Redes evang&eacute;licas.<br>
            Revisa la informaci&oacute;n de los prestadores de servicios profesionales para encontrar el servicio que buscas.</p>
        </div>
    </div>
    <section class="container">
        <div class="pull-right">
            <form action="<?php echo base_url('index.php/serviciosview/buscar');?>" method="GET" >
                <fieldset>
                    <h3>Filtrar por tipo de servicio 
                            <select type="text" autocomplete="off" name="buscar">
                                <?php foreach ($this->my_model->getDistinct() as $total): ?>
                                <option value="<?php echo $total->ServOfrecido ?>"><?php echo $total->ServOfrecido ?></option>
                                <?php endforeach;?>
                            </select>
                         <button class="btn-primary" type="submit" value="Buscar">Buscar</button>
                     </h3>
                </fielfset>
            </form>
        </div>
    </section>

    <div class="divisores">
        <div class="container">
            <div class="divisores">
                <div class="row clearfix">
                    <?php if ($this->my_model->get() !=0):?>
                        <?php foreach ($results as $row): ?>
                            <div class="col-md-4 col-sm-6"> 
                                <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img src="<?= base_url('').'assets/servicio/'.$this->my_model->getImg($row->AidiServi) ?>" class="media-object">
                                        </div>
                                        <div class="media-body">
                                            
                                            
                                        </div>
                                    </div><!--/.media -->
                                    <h3><div class="<?php echo $row->tipoRec; ?>">Esta usuario es de tipo <?php echo $row->tipoRec?></div></h3>
                                    <h3><?php echo $row->NamePrestServ ?> <?php echo $row->ApePatPrestServ ?> <?php echo $row->ApeMatPrestServ ?></h3>
                                    <h3><em><?php echo $row->ServOfrecido ?></em></h3>
                                    <ul class="tag clearfix">
                                        <li><h4 href="#"><?php echo $row->ServOfrecido ?></h4></li>
                                    </ul>
                                    <h4>Direcci&oacute;n: <em><?php echo $row->CalleServ ?></em> n&uacute;mero exterior <em><?php echo $row->NumExtSer ?></em>,
                                        n&uacute;mero interior <em><?php echo $row->NumIntServ ?></em>, colonia <em><?php echo $row->ColServ ?></em>,
                                        C&oacute;digo postal <em><?php echo $row->CodPostServ ?></em>, <em><?php echo $row->CiudadServ ?></em>, 
                                        <em><?php echo $row->EdoServ ?></em>.</h4>
                                    <h4>Tel&eacute;fonos: <em><?php echo $row->TelefServ ?></em> y <em><?php echo $row->telCelServ ?></em>.</h4>
                                    <a href=<?php echo site_url("serviciosview/datos/".$row->AidiServi) ?> class="btn-primary">M&aacute;s informaci&oacute;n</a>
                                </div>
                            </div>
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
    </div>

</section>