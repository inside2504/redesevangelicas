<div id="main">
        <div class="header">
            <h1>Tianguis</h1>
            <h2>En este apartado podr&aacute;s administrar los articulos del tianguis</h2>
            <span><?php echo validation_errors(); ?></span>
        </div>
        <div class="content">
            <section>
                <h2>Instrucciones</h2>
                <p>Si desea <strong><em>registrar un producto del tianguis</em></strong> entonces haga clic en <strong><em>"Registrar un anuncio"</em></strong> para entrar al formulario e <strong><em>ingresar los datos</em></strong>.</p>
                <p>Si desea <strong><em>eliminar un producto del tianguis</em></strong> registrado, entonces haga clic en <strong><em>"Eliminar"</em></strong> en la columna del productoque quiera eliminar para <strong><em>eliminarla del sistema</em></strong>.</p>
                <p>Si no se cuenta con la foto del producto entonces descargue <a href="<?=base_url('')."nocover.jpg"?>" download="nocoverproducto">aqu&iacute;</a> la imagen por defecto para poder subirla.</p>
            <section class="acciones">
                <p class="pure-u-1-3"><a href="<?php echo site_url('tianguis/regproducto')?>">Registrar un anuncio</a></p>
                <p class="pure-u-1-3"><a href="<?php echo site_url('tianguis/regvendedor')?>">Registrar una foto de vendedor</a></p>
                <p class="pure-u-1-3"><a onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" href="<?php echo site_url('tianguisview')?>">Ir al apartado de tianguis</a></p>
            </section>
        </div>
        <div class="content">
            <section>
                <div>
                    <table  class="pure-table pure-table-bordered" cellpadding=0 cellspacing=10>
                        <thead>
                            <th>Vendedor</th>
                            <th>Producto</th>
                            <th>Iglesia</th>
                            <th>Imagen</th>
                            <th>Vendedor</th>
                            <th></th>
                        </thead>
                        <tbody>
                            <?php
                                    foreach ($this->my_model->getAll() as $item) {
                                        echo "<tr>
                                                <td>$item->nombreVendedor</td>
                                                <td>$item->nombreProducto</td>
                                                <td>$item->nombreIglesia</td>
                                                <td><img class='".'presimg'."' src='".base_url('')."".'assets/tianguis/'."".$item->imgProducto."'></td>
                                                <td><img class='".'tianadminimg'."' src='".base_url('')."".'assets/tianguis/'."".$item->imgVendedor."'></td>
                                                <td><a href='".site_url('tianguis/delete/'.$item->idTianguis)."'>Eliminar producto</a></td> 
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