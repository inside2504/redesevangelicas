<div id="main">
    <div class="header">
        <h1>Materiales KIDS</h1>
        <h2>En este apartado podr&aacute;s administrar los materiales de Kids.</h2>
    </div>
    <div class="content">
        <section>
            <h2>Instrucciones</h2>
            <p>Si desea <strong><em>registrar un nuevo material</em></strong> entonces haga clic en <strong><em>"Registrar material"</em></strong> para entrar al formulario e <strong><em>ingresar los datos</em></strong>.</p>
            <p>Si desea <strong><em>editar un material</em></strong> entonces haga clic en <strong><em>"Editar"</em></strong> en la entrada deseada para entrar al formulario y <strong><em>modificar los datos deseados</em></strong>.</p>
            <p>Si desea <strong><em>eliminar un material</em></strong> registrado, entonces haga clic en <strong><em>"Eliminar"</em></strong> para <strong><em>eliminarlo del sistema</em></strong>.</p>
        </section>
        <div class="content">
            <section class="acciones">
                <p class="pure-u-1-3"><a href="<?php echo site_url('materialkids/regmatekids')?>">Registrar un material</a></p>
                <p class="pure-u-1-3"><a onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" href="<?php echo site_url('materialkidsview')?>">Ir al apartado de materiales Kids</a></p>
            </section>
        </div>
    </div>
    <div class="content">
        <section>
            <div>
                <table class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
                    <thead>
                        <th>T&iacute;tulo</th>
                        <th>Descripci&oacute;n</th>
                        <th></th>
                        <th></th>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($this->my_model->get() as $row) {
                                echo "<tr>
                                        <td>$row->nombreMateKids</td>
                                        <td>$row->descripcionMateKids</td>
                                        <td><a href='".site_url('materialkids/editar/'.$row->idMaterialesKids)."'>Editar</a></td> 
                                        <td><a href='".site_url('materialkids/eliminar/'.$row->idMaterialesKids)."'>Eliminar</a></td>
                                    </tr>
                                ";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
        <section class="acciones">
                <p class="pure-u-1-3"><a href="<?php echo site_url('materialkids/regimg')?>">Registrar una imagen</a></p>
        </section>
   
        <div class="content">
            <section>
                <div>
                    <table  class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
                        <thead>
                            <th>Material</th>
                            <th>Imagen</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                                    foreach ($this->my_model->getAll() as $item) {
                                        echo "<tr>
                                                <td>$item->nombreMateKids</td>
                                                <td><img class='".'media-object'."' src='".base_url('')."".'assets/materialkids/'."".$item->imagen."'></td>
                                                <td><a href='".site_url('materialkids/editarImg/'.$item->idLogoMaterialKids)."'>Editar logo</a></td> 
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