<div id="content" style=" margin-top: 5%">


    <form method="POST" action="<?= base_url() ?>Controlador/eliminarproC">



        <table id="table"  border="2" width="500" style="margin-left: 19%;margin-bottom: 10%;margin-top: -0%">
            <caption>Mis Productos</caption>
            <tr>
                <th style="text-align:center"><h5>Producto</h5></th>
                <th style="text-align:center"><h5>Precio</h5></th>
                <th style="text-align:center"><h5>Cantidad</h5></th>
            </tr> 

            <tr>
                <?php foreach ($carrito as $i) { ?>
                <tr>

                    <td> <?= $i->nombre_producto ?> </td>

                    <td> <?= $i->precio_por_unidad ?></td>

                    <td> <?= $i->cantidad ?></td>


                    <td><button id="btneliminarC" name="id" value="<?= $i->id_carrito ?>" class="btn btn-succes"  >Eliminar</button></td>

                    <td> <input type="text" hidden="true"  name=""  value="<?= $i->id_carrito ?>"/></td>
                </tr>

            <?php } ?>

            </tr>  
        </table>
        <br> <br>
        <div class="row" >
            <div class="col-md-4"></div>

            <div class="col-md-4">
                <a href="<?= base_url() ?>Controlador/generar" id="generarPedido"  class="myButtons" >Generar Pedido</a>
            </div>

            <div class="col-md-4">
                <a href="<?= base_url() ?>Controlador/cargarPedido" class="myButton" id="volLista">Volver</a>
            </div>
        </div>

    </form>


</div>
