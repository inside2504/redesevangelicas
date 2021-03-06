<div id="main">
    <div class="header">
        <h1>Libreria</h1>
        <h2>En este apartado podr&aacute;s administrar los articulos del tianguis</h2>
        <span><?php echo validation_errors(); ?></span>
    </div>
    <div class="content">
        <section>
            <h2>Instrucciones</h2>
            <p>Si desea <strong><em>registrar un producto</em></strong> entonces haga clic en <strong><em>"Registrar un producto"</em></strong> para entrar al formulario e <strong><em>ingresar los datos</em></strong>.</p>
            <p>Si desea <strong><em>editar los datos de un producto</em></strong> entonces haga clic en <strong><em>"Editar un producto"</em></strong> para entrar al formulario y <strong><em>modificar los datos deseados</em></strong>.</p>
            <p>Si desea <strong><em>eliminar un producto</em></strong> registrada, entonces haga clic en <strong><em>"Eliminar un producto"</em></strong> para <strong><em>eliminarlo del sistema</em></strong>.</p>
            <p>Si no se cuenta con la imagen del producto entonces descargue <a href="<?=base_url('')."nocover.jpg"?>" download="nocoverproducto">aqu&iacute;</a> la imagen por defecto para poder subirla como car&aacute;tula</p>
        </section>
        <section class="acciones">
            <p class="pure-u-1-3"><a href="<?php echo site_url('tianguis/regproducto')?>">Registrar producto</a></p>
            <p class="pure-u-1-3"><a onclick="window.open(this.href); return false;" onkeypress="window.open(this.href); return false;" href="<?php echo site_url('tianguisview')?>">Ir al apartado de Librer&iacute;a</a></p>
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
                                        <td><img class='".'media-object'."' src='".base_url('')."".'assets/tianguis/'."".$item->imgProd."'></td>
                                        <td><a href='".site_url('tianguis/dele/'.$item->idProd)."'>Eliminar producto</a></td> 
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