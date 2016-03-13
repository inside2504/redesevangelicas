<section id="title">
    <div class="center">
        <h2>Empresas</h2>
        <p class="lead">Bienvenido al apartado de empresas, aqu&iacute; podr&aacute;s encontrar el cat&aacute;logo de las empresas que se encuentran afiliadas a Redes evang&eacute;licas.</p>
    </div>
</section>

<?php  if ($this->my_model->get() !=0):?>
    <?php foreach ($this->my_model->get() as $row): ?>
        <section id="about-us">
            <div class="team">
                <div class="row clearfix">
                    <div class="col-md-10 col-sm-6 col-md-offset-1"> 
                        <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                            <div class="media">
                                <div class="pull-left">
                                    <img class="media-object" src="<?=base_url('')."assets/uploads/"."$row->LogoEmpr".".jpg"?>" alt="">
                                </div>
                                <div class="media-body">  
                                    <h4><?php echo $row->NameEmpr ?></h4>
                                    <h5>Responsable de la empresa: <strong><em><?php echo $row->NombRespEmpr ?> <?php echo $row->ApePatRespEmpr ?> <?php echo $row->ApeMatRespEmpr ?></em></strong></h5>
                                    <ul class="tag clearfix">
                                        <li class="btn"><a href="#"><?php echo $row->GiroEmpres ?></a></li>
                                    </ul>
                                    <ul class="social_icons">
                                        <li><a href="<?php echo $row->FbEmpr;?>" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false"><i class="fa fa-twitter"></i></a></li> 
                                        <li><a href="#" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false"><i class="fa fa-google-plus"></i></a></li>
                                    </ul>
                                </div>
                            </div><!--/.media -->
                        <p class="lead"><?php echo $row->DescrEmpr ?></p>
                        <p class="lead">Recomendado por el pastor <strong><em><?php echo $row->PastRecEmpr ?></em></strong> de la iglesia <em><strong><?php echo $row->IglePertEmpr ?></em></strong></p>
                        <p class="lead">Dirección: <strong><em><?php echo $row->CalleEmpr ?></em></strong>, n&uacute;mero exterior <strong><em><?php echo $row->NumExtEmpr ?></em></strong>, n&uacute;mero interior: <strong><em><?php echo $row->NumIntEmpr ?></em></strong> , colonia <strong><em><?php echo $row->ColEmpr ?></em></strong>. Código postal: <strong><em><?php echo $row->CodPostEmpr ?></em></strong>, <strong><em><?php echo $row->CiudadEmpr ?></em></strong>, <strong><em><?php echo $row->EdoEmpr ?></em></strong>.</p>
                        <p class="lead">Teléfonos: <strong><em><?php echo $row->TelefEmpr ?></em></strong>, <strong><em><?php echo $row->TelefRespEmpr ?>.</em></strong></p>
                        <p class="lead">Correo electrónico: <strong><em><?php echo $row->CorreElectEmpr ?></em></strong></p>
                        <a href="#" class="btn-primary">M&aacute;s informaci&oacute;n</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php endforeach;?>
<?php endif;?>