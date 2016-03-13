<div id="main">
        <div class="header">
            <h1>Iglesias</h1>
            <h2>En este apartado podr&aacute;s administrar las iglesias</h2>
        </div>

        <div class="content">
            <section>
                <h2>Instrucciones</h2>
                <p>Si desea <strong><em>registrar una iglesia</em></strong> entonces haga clic en <strong><em>"Registrar una iglesia"</em></strong> para entrar al formulario e <strong><em>ingresar los datos</em></strong>.</p>
                <p>Si desea <strong><em>editar los datos de una iglesia</em></strong> entonces haga clic en <strong><em>"Editar"</em></strong> para entrar al formulario y <strong><em>modificar los datos deseados</em></strong>.</p>
                <p>Si desea <strong><em>eliminar una iglesia</em></strong> registrada, entonces haga clic en <strong><em>"Eliminar"</em></strong> para <strong><em>eliminarla del sistema</em></strong>.</p>
            </section>
             <section class="acciones">
                <p class="pure-u-1-3"><a href="<?php echo site_url('iglesia/regiglesia')?>">Registrar una iglesia</a></p>
                <p class="pure-u-1-3"><a href="<?php echo site_url('iglesiasview')?>">Ir al apartado de iglesias</a></p>
            </section>
        </div>
        <div class="tablas">
            <section>
                <div>
                    <table class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
                        <thead>
                            <th>Iglesia</th>
                            <th>Pastor</th>
                            <th>Calle</th>
                            <th>N&uacute;mero</th>
                            <th>Colonia</th>
                            <th>Ciudad</th>
                            <th>Estado</th>
                            <th>Tel&eacute;fono</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($this->my_model->get() as $row) {
                                    echo "<tr>
                                            <td>$row->nomIgle</td>
                                            <td>$row->pasIgle</td>
                                            <td>$row->calleIgle</td>
                                            <td>$row->numExtIgle</td>
                                            <td>$row->coloIgle</td>
                                            <td>$row->ciudadIgle</td>
                                            <td>$row->edoIgle</td>
                                            <td>$row->telIgle</td>
                                            <td><a href='".site_url('iglesia/editar/'.$row->idIgle)."'>Editar</a></td> 
                                            <td><a href='".site_url('iglesia/eliminar/'.$row->idIgle)."'>Eliminar</a></td>
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