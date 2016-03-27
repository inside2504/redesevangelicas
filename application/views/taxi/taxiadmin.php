<div id="main">
        <div class="header">
            <h1>Taxi</h1>
            <h2>En este apartado podr&aacute;s administrar los datos de los taxistas afiliados</h2>
        </div>

        <div class="content">
            <section>
                <h2>Instrucciones</h2>
                <p>Si desea <strong><em>registrar a un taxista</em></strong> entonces haga clic en <strong><em>"Registrar un taxista"</em></strong> para entrar al formulario e <strong><em>ingresar los datos</em></strong>.</p>
                <p>Si desea <strong><em>editar los datos de un taxista</em></strong> entonces haga clic en <strong><em>"Editar"</em></strong> en la columna del taxi que quiera editar para entrar al formulario y <strong><em>modificar los datos deseados</em></strong>.</p>
                <p>Si desea <strong><em>eliminar un taxista</em></strong> registrada, entonces haga clic en <strong><em>"Eliminar"</em></strong> en la columna del taxi que quiera eliminar para <strong><em>eliminarlo del sistema</em></strong>.</p>
                <p>Al <strong><em>dar de alta un taxista</em></strong>, es necesario <strong><em>registrar la foto</em></strong> del taxista correspondiente. De clic en <strong><em>Registrar foto</em></strong> para ingresar al formulario</p>
                <p>Si no se cuenta con la foto del taxista entonces descargue <a href="<?=base_url('')."nofoto.jpg"?>" download="nofototaxista">aqu&iacute;</a> la imagen por defecto para poder subirla como foto</p>
            </section>
             <section class="acciones">
                <p class="pure-u-1-3"><a href="<?php echo site_url('taxi/regtaxi')?>">Registrar un taxista</a></p>
                <p class="pure-u-1-3"><a onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" href="<?php echo site_url('taxiview')?>">Ir al apartado de Taxi</a></p>
            </section>
        </div>
        <div class="content">
            <section>
                <div>
                    <table class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
                        <thead>
                            <th>N&uacute;mero</th>
                            <th>Nombre</th>
                            <th>Iglesia</th>
                            <th>Pastor</th>
                            <th>N&uacute;mero</th>
                            <th>Placa</th>
                            <th>Horario</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($this->my_model->get() as $row) {
                                    echo "<tr>
                                            <td>$row->AidiTaxi</td>
                                            <td>$row->NombTaxista $row->ApePatTaxista $row->ApeMatTaxista</td>
                                            <td>$row->IglePerTaxi</td>
                                            <td>$row->PastIgleTaxi</td>
                                            <td>$row->NumEcoTaxi</td>
                                            <td>$row->PlacaNumTaxi</td>
                                            <td>$row->HorarioTaxi</td>
                                            <td><a href='".site_url('taxi/editar/'.$row->AidiTaxi)."'>Editar</a></td> 
                                            <td><a href='".site_url('taxi/eliminar/'.$row->AidiTaxi)."'>Eliminar</a></td>
                                        </tr>
                                    ";
                                }
                            ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
        <div class="content">
            <section class="acciones">
                <p class="pure-u-1-3"><a href="<?php echo site_url('taxi/regimg')?>">Registrar foto</a></p>
            </section>
        </div>
        <div class="content">
            <section>
                <div>
                    <table  class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
                        <thead>
                            <th>N&uacute;mero</th>
                            <th>Placa</th>
                            <th>Foto</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                                    foreach ($this->my_model->getAll() as $item) {
                                        echo "<tr>
                                                <td>$item->NombTaxista $item->ApePatTaxista $item->ApeMatTaxista</td>
                                                <td>$item->PlacaNumTaxi</td>
                                                <td><img class='".'media-object'."' src='".base_url('')."".'assets/taxi/'."".$item->fotoTaxi."'></td>
                                                <td><a href='".site_url('taxi/editarImg/'.$item->idfotoTaxi)."'>Editar foto</a></td> 
                                            </tr>
                                        ";
                                    }
                                ?>
                        </tbody>
                    </table>
                </div>
            </section>
        </div>
</div>