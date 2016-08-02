<div id="main">
        <div class="header">
            <h1>Librer&iacute;a</h1>
            <h2>En este apartado podr&aacute;s administrar los articulos del librer&iacute;a</h2>
            <span><?php echo validation_errors(); ?></span>
        </div>
        <div class="content">
            <section>
                <h2>Instrucciones</h2>
                <p>Si desea <strong><em>registrar una librer&iacute;a</em></strong> entonces haga clic en <strong><em>"Registrar una librer&iacute;a"</em></strong> para entrar al formulario e <strong><em>ingresar los datos</em></strong>.</p>
                <p>Si desea <strong><em>editar los datos de una librer&iacute;a</em></strong> entonces haga clic en <strong><em>"Editar"</em></strong> en la columna de la librer&iacute;a que quiera editar para entrar al formulario y <strong><em>modificar los datos deseados</em></strong>.</p>
                <p>Si desea <strong><em>eliminar una librer&iacute;a</em></strong> registrada, entonces haga clic en <strong><em>"Eliminar"</em></strong> en la columna de la librer&iacute;a que quiera eliminar para <strong><em>eliminarla del sistema</em></strong>.</p>
                <p>Si desea <strong><em>registrar un producto</em></strong> entonces haga clic en <strong><em>"Registrar producto"</em></strong> para entrar al formulario e <strong><em>ingresar los datos</em></strong>.</p>
                <p>Si desea <strong><em>eliminar un producto</em></strong> registrada, entonces haga clic en <strong><em>"Eliminar"</em></strong> en la columna del producto que quiera eliminar para <strong><em>eliminarlo del sistema</em></strong>.</p>   </section>
                <p>*Tenga en cuenta que si elimina una librer&iacute;a tambi&eacute;n eliminar&aacute; todos los productos de esa librer&iacute;a.</p>
                <p>Si no se cuenta con la foto producto entonces descargue <a href="<?=base_url('')."nocover.jpg"?>" download="nocoverproducto">aqu&iacute;</a> la imagen por defecto para poder subirla como car&aacute;tula</p>
            <section class="acciones">
                <p class="pure-u-1-3"><a href="<?php echo site_url('libreria/reglibreria')?>">Registrar una librer&iacute;a</a></p>
                <p class="pure-u-1-3"><a onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" href="<?php echo site_url('libreriaview')?>">Ir al apartado de Librer&iacute;a</a></p>
            </section>
        </div>
        <div class="content">
            <section>
                <div>
                    <table class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
                        <thead>
                            <th>Iglesia</th>
                            <th>Librer&iacute;a</th>
                            <th>Calle</th>
                            <th>N&uacute;mero</th>
                            <th>Ciudad</th>
                            <th>Tel&eacute;fono</th>
                            <th colspan="2"></th>
                        </thead>
                        <tbody>
                            <?php
                                foreach ($this->my_model->getLib() as $row) {
                                    echo "<tr>
                                            <td>$row->nombIgleProd</td>
                                            <td>$row->nombLibProd</td>
                                            <td>$row->calleLibProd</td>
                                            <td>$row->numExtLibProd</td>
                                            <td>$row->ciuLibrProd</td>
                                            <td>$row->telefLibProd</td>
                                            <td><a href='".site_url('libreria/editar/'.$row->idLibreria)."'>Editar</a></td> 
                                            <td><a href='".site_url('libreria/eliminar/'.$row->idLibreria)."'>Eliminar</a></td>
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
                <p class="pure-u-1-3"><a href="<?php echo site_url('libreria/regproducto')?>">Registrar producto</a></p>
            </section>
        </div>
        <div class="content">
            <section>
                <div>
                    <table  class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
                        <thead>
                            <th>Librer&iacute;a</th>
                            <th>Nombre</th>
                            <th>Autor</th>
                            <th>Imagen</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                                    foreach ($this->my_model->getAll() as $item) {
                                        echo "<tr>
                                                <td>$item->nombLibProd</td>
                                                <td>$item->nombProd</td>
                                                <td>$item->autoProd</td>
                                                <td><img class='".'media-object'."' src='".base_url('')."".'assets/libreria/'."".$item->imgProd."'></td>
                                                <td><a href='".site_url('libreria/dele/'.$item->idProd)."'>Eliminar producto</a></td> 
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