<section id="taxi">
        <div class="center">
            <h1>Taxi</h1>
            <p class="lead">Bienvenido al apartado de Taxis. Aqu&iacute; encontrar&aacute;s el listado de los prestadores de servicio de transporte p&uacute;blico (Taxi) para que viajes m&aacute;s seguro.</p>
        </div>

    <section>
    <?php if ($this->my_model->get() !=0):?>
        <section>
            <div class="elementos">
                <div class="container">
                    <div class="row clearfix">
                        <?php foreach ($results as $row): ?>
                            <div class="col-md-3 col-sm-6">  
                                <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="600ms">
                                    <div class="media">
                                        <div class="pull-left">
                                            <img src="<?= base_url('').'assets/taxi/'.$this->my_model->getImg($row->AidiTaxi) ?>" class="media-object">
                                        </div>
                                    </div>
                                    <h3><div class="<?php echo $row->tipoRec; ?>">Esta taxista es de tipo <?php echo $row->tipoRec?></div></h3>
                                    <h3><?php echo $row->NombTaxista ?> <?php echo $row->ApePatTaxista ?> <?php echo $row->ApeMatTaxista ?></p>
                                    <h3>Pertenece</em></strong> a la iglesia <strong><em><?php echo $row->IglePerTaxi ?></em></strong></p>
                                    <h3>N&uacute;mero econ&oacute;mico <strong><em><?php echo $row->NumEcoTaxi ?></em></strong></p>
                                    <h3>Placa <strong><em><?php echo $row->PlacaNumTaxi ?></em></strong></p>
                                    <h3>Horario <strong><em><?php echo $row->HorarioTaxi ?></em></strong></p>
                                    <h3>Teléfono: <strong><em><?php echo $row->TelefTaxi ?></em></strong>.</p>
                                </div>
                            </div>
                        <?php endforeach;?>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="pull-right">
                    <h2><?=$this->pagination->create_links(); ?></h2>
                </div>
            </div>
        </section>
    <?php endif;?>
    </section>
</section>