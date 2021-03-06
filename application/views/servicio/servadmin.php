<div id="main">
        <div class="header">
            <h1>Servicios</h1>
            <h2>En este apartado podr&aacute;s administrar los servicios</h2>
        </div>

        <div class="content">
            <section>
                <h2>Instrucciones</h2>
                <p>Si desea <strong><em>registrar un nuevo servicio</em></strong> entonces haga clic en <strong><em>"Registrar un servicio"</em></strong> para entrar al formulario e <strong><em>ingresar los datos</em></strong>.</p>
                <p>Si desea <strong><em>editar los datos de un servicio</em></strong> entonces haga clic en <strong><em>"Editar"</em></strong> en la columna del servicio que quiera editar para entrar al formulario y <strong><em>modificar los datos deseados</em></strong>.</p>
                <p>Si desea <strong><em>eliminar un servicio</em></strong> registrado, entonces haga clic en <strong><em>"Eliminar"</em></strong> en la columna del servicio que quiera eliminar para <strong><em>eliminarlo del sistema</em></strong>.</p>
                <p>Al <strong><em>dar de alta un servicio</em></strong>, es necesario <strong><em>registrar la foto</em></strong> del responsable del prestador de servicios. De clic en <strong><em>Registrar un logo</em></strong> para ingresar al formulario</p>
                <p>Si no se cuenta con la foto del responsable entonces descargue <a href="<?=base_url('')."nofoto.jpg"?>" download="nofotoservidor">aqu&iacute;</a> la imagen por defecto para poder subirla como foto</p>
            </section>
            <section class="acciones">
                <p class="pure-u-1-3"><a href="<?php echo site_url('servicio/regservicio')?>">Registrar un servicio</a></p>
                <p class="pure-u-1-3"><a onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" href="<?php echo site_url('serviciosview')?>">Ir al apartado de servicios</a></p>
            </section>
        </div>
        <div>
            <div class="content">
            <section>
                <div>
                    <table class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
                        <thead>
                            <th>Nombre</th>
                            <th>Apellido</th>
                            <th></th>
                            <th>Servicio</th>
                            <th>Calle</th>
                            <th>N&uacute;mero</th>
                            <th>Colonia</th>
                            <th>Tel&eacute;fono</th>
                            <th></th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($this->my_model->get() as $row) {
                                    echo "<tr>
                                            <td>$row->NamePrestServ</td>
                                            <td>$row->ApePatPrestServ</td>
                                            <td>$row->ApeMatPrestServ</td>
                                            <td>$row->ServOfrecido</td>
                                            <td>$row->CalleServ</td>
                                            <td>$row->NumExtSer</td>
                                            <td>$row->ColServ</td>
                                            <td>$row->TelefServ</td>
                                            <td><a href='".site_url('servicio/editar/'.$row->AidiServi)."'>Editar</a></td> 
                                            <td><a href='".site_url('servicio/eliminar/'.$row->AidiServi)."'>Eliminar</a></td>
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
                <p class="pure-u-1-3"><a href="<?php echo site_url('servicio/regimg')?>">Registrar una foto</a></p>
            </section>
        </div>
        <div class="content">
            <section>
                <div>
                    <table  class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
                        <thead>
                            <th>Nombre</th>
                            <th>Servicio</th>
                            <th>Foto del servidor</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                                    foreach ($this->my_model->getAll() as $item) {
                                        echo "<tr>
                                                <td>$item->NamePrestServ $item->ApePatPrestServ $item->ApeMatPrestServ</td>
                                                <td>$item->ServOfrecido</td>
                                                <td><img class='".'media-object'."' src='".base_url('')."".'assets/servicio/'."".$item->imgServ."'></td>
                                                <td><a href='".site_url('servicio/editarImg/'.$item->idimgServ)."'>Editar foto</a></td> 
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