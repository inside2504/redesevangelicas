<div id="main">
        <div class="header">
            <h1>Localidad</h1>
            <h2>En este apartado podr&aacute;s administrar las localidades</h2>
        </div>
        <div class="content">
            <section>
                <h2>Instrucciones</h2>
                <p>Si desea <strong><em>registrar una localidad</em></strong> entonces haga clic en <strong><em>"Registrar una localidad"</em></strong> para entrar al formulario e <strong><em>ingresar los datos</em></strong>.</p>
                <p>Si desea <strong><em>editar el nombre de la localidad</em></strong> entonces haga clic en <strong><em>"Editar"</em></strong> en la columna de la localidad que quiera editar para entrar al formulario y <strong><em>modificar los datos deseados</em></strong>.</p>
                <p>Si desea <strong><em>eliminar una localidad</em></strong> registrada, entonces haga clic en <strong><em>"Eliminar"</em></strong> en la columna de la localidad que quiera eliminar para <strong><em>eliminarla del sistema</em></strong>.</p>
            </section>
            <section class="acciones">
                <p class="pure-u-1-3"><a href="<?php echo site_url('localidad/reglocal')?>">Registrar una localidad</a></p>
            </section>
        </div>
        <div class="content">
            <section>
                <div>
                    <table class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
                        <thead>
                            <th>Nombre de la localidad</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($this->my_model->get() as $row) {
                                    echo "<tr>
                                            <td>$row->nombreLocalidad</td>
                                            <td><a href='".site_url('localidad/editar/'.$row->idlocalidad)."'>Editar</a></td> 
                                            <td><a href='".site_url('localidad/eliminar/'.$row->idlocalidad)."'>Eliminar</a></td>
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