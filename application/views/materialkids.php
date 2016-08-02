<div class="blog">
    <div class="tit">
        <span id="publish_date"><h1>Materiales KIDS</h1></span>
    </div>
    <div id="kidsBackground">
        <div class="container">
            <div class="advice">
                <h2 class="center">Bienvenido a Materiales Kids, en esta zona encontrar&aacute;s cosas que te ayudar&aacute;n a aprender
                    de una manera divertida, podr&aacute;s descargar los materiales para imprimirlos y comenzar con la diversi&oacute;n</h2>
            </div>
            <?php  if ($this->my_model->getAll() !=0):?>
                <?php foreach ($results as $row): ?>
                    <div class="col-md-4 col-sm-6"> 
                        <div class="kidsbox">
                            <div>
                                <img class="imgkids" src="<?= base_url('').'assets/materialkids/'.$this->my_model->findLogo($row->idMaterialesKids) ?>">
                            </div>
                            <div class="advice">
                                <h4><?php echo $row->nombreMateKids ?></h4>
                                <h4><?php echo $row->descripcionMateKids ?></h4>
                            </div>
                            <a class="btn-primary" onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" href="<?php echo $row->linkDescarga ?>">Descargar</a>
                        </div>
                    </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
        <div class="container">
            <div class="pull-right">
                <h2><?=$this->pagination->create_links(); ?></h2>
            </div>
        </div>
    </div>
</div>