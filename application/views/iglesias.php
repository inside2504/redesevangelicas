<section class="igle-back">
    <div class="center">
        <h1>Iglesias y Ministerios</h1>
        <p class="lead">Bienvenido al apartado de iglesias y ministerios, aqu&iacute; podr&aacute;s encontrar el cat&aacute;logo de las iglesias que se encuentran afiliadas a Redes evang&eacute;licas.<br>
        Tambi&eacute;n encontrar&aacute;s los datos por si est&aacute;s buscando d&oacute;nde congregarte.</p>
    </div>
    <section class="container">
        <div class="pull-right">
            <form action="<?php echo base_url('index.php/iglesiasview/buscar');?>" method="GET" >
                <fieldset>
                    <h3>Filtrar por Iglesia
                            <select type="text" autocomplete="off" name="buscar">
                                <?php foreach ($this->my_model->get() as $total): ?>
                                <option value="<?php echo $total->nomIgle ?>"><?php echo $total->nomIgle ?></option>
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
                    <?php if ($results !=0):?>
                        <?php foreach ($results as $row): ?>
                            <div class="col-md-4 col-sm-6"> 
                                <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img src="<?= base_url('').'assets/iglesias/'.$this->my_model->getImg($row->idIgle) ?>" class="presigle">
                                        </div>
                                    </div><!--/.media -->
                                    <h3><?php echo $row->nomIgle ?></h3>
                                    <h3>Pastor <em><?php echo $row->pasIgle ?></em></h3>
                                    <h3><em><?php echo $row->eslogIgle ?></em></h3>
                                    <h4>Direcci&oacute;n: <em><?php echo $row->calleIgle ?></em> n&uacute;mero exterior: <em><?php echo $row->numExtIgle ?></em>, n&uacute;mero interior: <em><?php echo $row->numInteIgle ?></em>,
                                     c&oacute;digo postal: <em><?php echo $row->codPostIgle ?></em>, <em><?php echo $row->ciudadIgle ?></em>, <em><?php echo $row->edoIgle ?></em>.</h4>
                                    <h4>Teléfonos: <em><?php echo $row->telIgle ?></em>.</h4>
                                    <h4>Correo electrónico: <em><?php echo $row->correEleIgle ?></em></h4>
                                <a href=<?php echo site_url("iglesiasview/datos/".$row->idIgle) ?> class="btn-primary">M&aacute;s informaci&oacute;n</a>
                                </div>
                            </div>
                        <?php endforeach;?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
    
    <div class="container">
        <div class="pull-right">
            <h3><?=$this->pagination->create_links(); ?></h3>
        </div>
    </div>    
</section>