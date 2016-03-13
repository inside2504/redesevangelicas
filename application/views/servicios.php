<section id="title">
    <div class="center">
        <h2>Servicios</h2>
        <p class="lead">Bienvenido al apartado de servicios, aqu&iacute; podr&aacute;s encontrar el cat&aacute;logo de los prestadores de servicios profesionales que se encuentran afiliados a Redes evang&eacute;licas.<br>
        Revisa la informaci&oacute;n de los prestadores de servicios profesionales para encontrar el servicio que buscas.</p>
    </div>
</section>

<?php if ($this->my_model->get() !=0):?>
    <?php foreach ($this->my_model->get() as $row): ?>
        <section id="about-us">
            <div class="team">
                <div class="row clearfix">
                    <div class="col-md-10 col-sm-6 col-md-offset-1"> 
                        <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="media">
                                <div class="pull-left">
                                    <img class="media-object" src="<?=base_url('')."assets/uploads/"."$row->ImgPrestServ".".jpg"?>">
                                </div>
                                <div class="media-body">
                                    <h4><?php echo $row->NamePrestServ ?> <?php echo $row->ApePatPrestServ ?> <?php echo $row->ApeMatPrestServ ?></h4>
                                    <h5><strong><em><?php echo $row->ServOfrecido ?></em></strong></h5>
                                    <h5><strong><em><?php echo $row->EslogServ ?></em></strong></h5>
                                    <ul class="tag clearfix">
                                        <li class="btn"><a href="#"><?php echo $row->ServOfrecido ?></a></li>
                                    </ul>
                                    <ul class="social_icons">
                                        <li><a href="<?php echo $row->FbServ ?>" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li> 
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                    
                                </div>
                            </div><!--/.media -->
                        <p class="lead"><?php echo $row->DescServi ?></p>
                        <p class="lead">Recomendado por <strong><em><?php echo $row->IglePert ?></em></strong>.</p>
                        <p class="lead">Direcci&oacute;n: <strong><em><?php echo $row->CalleServ ?></em></strong> n&uacute;mero exterior <strong><em><?php echo $row->NumExtSer ?></em></strong>, n&uacute;mero interior <strong><em><?php echo $row->NumIntServ ?></em></strong>, colonia <strong><em><?php echo $row->ColServ ?></em></strong>, C&oacute;digo postal <strong><em><?php echo $row->CodPostServ ?></em></strong>, <strong><em><?php echo $row->CiudadServ ?></em></strong>, <strong><em><?php echo $row->EdoServ ?></em></strong>.</p>
                        <p class="lead">Tel&eacute;fonos: <strong><em><?php echo $row->TelefServ ?></em></strong> y <strong><em><?php echo $row->telCelServ ?></em></strong>.</p>
                        <a href="#" class="btn-primary">M&aacute;s informaci&oacute;n</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach;?>
<?php endif;?>