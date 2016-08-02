<div id="main">
        <div class="header">
            <h1>Bolsa de trabajo</h1>
            <h2>En este apartado podr&aacute;s administrar las ofertas de la bolsa de trabajo</h2>
            <span><?php echo validation_errors(); ?></span>
        </div>
        <div class="content">
            <section>
                <h2>Instrucciones</h2>
                <p>Si desea <strong><em>registrar una oferta laboral</em></strong> entonces haga clic en <strong><em>"Registrar una oferta"</em></strong> para entrar al formulario e <strong><em>ingresar los datos</em></strong>.</p>
                <p>Si desea <strong><em>editar los datos de una oferta</em></strong> entonces haga clic en <strong><em>"Editar"</em></strong> en la columna de la oferta que quiera editar para entrar al formulario y <strong><em>modificar los datos deseados</em></strong>.</p>
                <p>Si desea <strong><em>eliminar una oferta</em></strong> registrada, entonces haga clic en <strong><em>"Eliminar"</em></strong> en la columna de la oferta que quiera eliminar para <strong><em>eliminarla del sistema</em></strong>.</p>
            </section>
            <section class="acciones">
                <p class="pure-u-1-3"><a href="<?php echo site_url('bolsa/regoferta')?>">Registrar una oferta</a></p>
                <p class="pure-u-1-3"><a onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" href="<?php echo site_url('bolsaview')?>">Ir al apartado de oferta</a></p>
            </section>
        </div>
        <div class="content">
            <section>
                <div>
                    <table class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
                        <thead>
                            <th>Puesto</th>
                            <th>Solicitante</th>
                            <th>Descripci&oacute;n</th>
                            <th>Sueldo</th>
                            <th>Ubicaci&oacute;n</th>
                            <th>Contacto</th>
                            <th colspan="2"></th>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($this->my_model->getBolsa() as $row) {
                                    echo "<tr>
                                            <td>$row->tituloOferta</td>
                                            <td>$row->solicitanteOferta</td>
                                            <td>$row->descripOferta</td>
                                            <td>$row->salarioOferta</td>
                                            <td>$row->ubicacionOferta</td>
                                            <td>$row->correoContacto</td>
                                            <td><a href='".site_url('bolsa/editar/'.$row->idbolsaTrab)."'>Editar</a></td> 
                                            <td><a href='".site_url('bolsa/eliminar/'.$row->idbolsaTrab)."'>Eliminar</a></td>
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