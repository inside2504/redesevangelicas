<div id="main">
        <div class="header">
            <h1>Regiones</h1>
            <h2>En este apartado podr&aacute;s administrar los mapas de las regiones que se encuentran afiliadas.</h2>
        </div>

        <div class="content">
            <section>
                <h2>Instrucciones</h2>
                <p>Si desea <strong><em>registrar una iglesia</em></strong> entonces haga clic en <strong><em>"Registrar una iglesia"</em></strong> para entrar al formulario e <strong><em>ingresar los datos</em></strong>.</p>
                <p>Si desea <strong><em>editar los datos de una iglesia</em></strong> entonces haga clic en <strong><em>"Editar"</em></strong> en la columna de la iglesia que quiera editar para entrar al formulario y <strong><em>modificar los datos deseados</em></strong>.</p>
                <p>Si desea <strong><em>eliminar una iglesia</em></strong> registrada, entonces haga clic en <strong><em>"Eliminar"</em></strong> en la columna de la iglesia que quiera eliminar para <strong><em>eliminarla del sistema</em></strong>.</p>
            </section>
            <section class="acciones">
                <p class="pure-u-1-3"><a href="<?php echo site_url('regiones/regregiones')?>">Registrar un mapa</a></p>
                <p class="pure-u-1-3"><a onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" href="<?php echo site_url('regionesview')?>">Ir al apartado de regiones</a></p>
            </section>
        </div>
        <div class="content">
            <section>
                <div>
                    <table class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
                        <thead>
                            <th>Regi&oacute;n</th>
                            <th>Link</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($this->my_model->get() as $row) {
                                    echo "<tr>
                                            <td>$row->localidad</td>
                                            <td>$row->linkMapa</td>
                                            <td><a href='".site_url('regiones/editar/'.$row->idRegiones)."'>Editar</a></td> 
                                            <td><a href='".site_url('regiones/eliminar/'.$row->idRegiones)."'>Eliminar</a></td>
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