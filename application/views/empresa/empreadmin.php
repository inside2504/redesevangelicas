<div id="main">
        <div class="header">
            <h1>Empresas</h1>
            <h2>En este apartado podr&aacute;s administrar las empresas</h2>
        </div>
        <div class="content">
            <section>
                <h2>Instrucciones</h2>
                <p>Si desea <strong><em>registrar una empresa</em></strong> entonces haga clic en <strong><em>"Registrar una empresa"</em></strong> para entrar al formulario e <strong><em>ingresar los datos</em></strong>.</p>
                <p>Si desea <strong><em>editar los datos de una empresa</em></strong> entonces haga clic en <strong><em>"Editar"</em></strong> en la columna de la empresa que quiera editar para entrar al formulario y <strong><em>modificar los datos deseados</em></strong>.</p>
                <p>Si desea <strong><em>eliminar una empresa</em></strong> registrada, entonces haga clic en <strong><em>"Eliminar"</em></strong> en la columna de la empresa que quiera eliminar para <strong><em>eliminarla del sistema</em></strong>.</p>
                <p>Al <strong><em>dar de alta una empresa</em></strong>, es necesario <strong><em>registrar el logo</em></strong> correspondiente. De clic en <strong><em>Registrar un logo</em></strong> para ingresar al formulario</p>
                <p>As&iacute; mismo, al <strong><em>dar de alta una empresa</em></strong>, es necesario <strong><em>registrar la foto</em></strong> del responsable de la empresa correspondiente. De clic en <strong><em>Registrar un logo</em></strong> para ingresar al formulario</p>
                <p>Si la empresa no cuenta con logo entonces descargue <a href="<?=base_url('')."nologo.jpg"?>" download="nologoempresa">aqu&iacute;</a> la imagen por defecto para poder subirla como logo.</p>
                <p>Si no se cuenta con la foto del responsable entonces descargue <a href="<?=base_url('')."nofoto.jpg"?>" download="nofotoresponsable">aqu&iacute;</a> la imagen por defecto para poder subirla como foto</p>
            </section>
            <section class="acciones">
                <p class="pure-u-1-3"><a href="<?php echo site_url('empresa/regempresa')?>">Registrar una empresa</a></p>
                <p class="pure-u-1-3"><a onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" href="<?php echo site_url('empresasview')?>">Ir al apartado de empresas</a></p>
            </section>
        </div>
        <div class="content">
            <section>
                <div>
                    <table class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
                        <thead>
                            <th>Empresa</th>
                            <th>Iglesia</th>
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
                                            <td>$row->NameEmpr</td>
                                            <td>$row->IglePertEmpr</td>
                                            <td>$row->CalleEmpr</td>
                                            <td>$row->NumExtEmpr</td>
                                            <td>$row->ColEmpr</td>
                                            <td>$row->CiudadEmpr</td>
                                            <td>$row->EdoEmpr</td>
                                            <td>$row->TelefEmpr</td>
                                            <td><a href='".site_url('empresa/editar/'.$row->AidiEmpr)."'>Editar</a></td> 
                                            <td><a href='".site_url('empresa/eliminar/'.$row->AidiEmpr)."'>Eliminar</a></td>
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
                <p class="pure-u-1-3"><a href="<?php echo site_url('empresa/reglogo')?>">Registrar un logo</a></p>
            </section>
        </div>
        <div class="content">
            <section>
                <div>
                    <table  class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
                        <thead>
                            <th>Empresa</th>
                            <th>Logo de la empresa</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                                    foreach ($this->my_model->getAllLogo() as $col) {
                                        echo "<tr>
                                                <td>$col->NameEmpr</td>
                                                <td><img class='".'media-object'."' src='".base_url('')."".'assets/empresa/'."".$col->logoEmpr."'></td>
                                                <td><a href='".site_url('empresa/editarLogo/'.$col->idLogoEmpr)."'>Editar logo</a></td> 
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
                <p class="pure-u-1-3"><a href="<?php echo site_url('empresa/regimg')?>">Registrar una foto</a></p>
            </section>
        </div>
        <div class="content">
            <section>
                <div>
                    <table  class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
                        <thead>
                            <th>Nombre</th>
                            <th>Empresa</th>
                            <th>Foto del responsable</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                                    foreach ($this->my_model->getAllFoto() as $item) {
                                        echo "<tr>
                                                <td>$item->NombRespEmpr $item->ApePatRespEmpr $item->ApeMatRespEmpr </td>
                                                <td>$item->NameEmpr</td>
                                                <td><img class='".'media-object'."' src='".base_url('')."".'assets/empresa/'."".$item->fotoResp."'></td>
                                                <td><a href='".site_url('empresa/editarImg/'.$item->idFotoResp)."'>Editar foto</a></td> 
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