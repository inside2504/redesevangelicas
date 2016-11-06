<section class="igle-back">
    <div class="center">
        <h1>Regiones</h1>
        <p class="lead">En esta secci&oacute;n encontrar&aacute;s los mapas de las regiones que se encuentran afiliadas a Redes evang&eacute;licas.<br>
            Al dar clic sobre una regi&oacute;n se mostrar&aacute;n la localizaci&oacute;n de las iglesias y empresas de esa regi&oacute;n.</p>
    </div>
    
    <div class="divisores">
        <div class="container">
            <div class="divisores">
                <div class="row clearfix">
                    <?php if ($results !=0):?>
                        <?php foreach ($results as $row): ?>
                            <div class="col-md-4 col-sm-6"> 
                                <div class="single-profile-bottom wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="300ms">
                                    <?php foreach ($this->my_model->get() as $item): ?>
                                        <div>
                                            <button class="btn-primary" data-url="<?php echo $item->linkMapa ?>"><?php echo $item->localidad ?></button>
                                        </div>
                                    <?php endforeach;?>
                                </div>
                            </div>
                            <div>
                                <div class="col-md-8 col-sm-6">
                                    <div class="map-responsive">
                                        <iframe id="mapa" class="encap" src="<?php echo $row->linkMapa ?>" allowfullscreen><?php echo $row->linkMapa ?></iframe>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach;?>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </div>
    <script>
    var $$ = function(e) { 
        return document.querySelector(e); 
    }
    $(function(){
        $('button').click(function(e) {
        e.preventDefault();
        $$("#mapa").src =  $(this).attr('data-url') ;
        });
    });
    </script>
    
    <div class="container">
        <div class="pull-right">
            <h3><?=$this->pagination->create_links(); ?></h3>
        </div>
    </div>    
</section>