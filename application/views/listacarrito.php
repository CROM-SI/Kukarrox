<div id="content" style=" margin-top: 5%">

        <table id="table" align="center" border="2" width="400">
        <caption>Encargados actuales de Bodega</caption>
        <tr>
            <th style="text-align:center"><h5>Produco</h5></th>
            <th style="text-align:center"><h5>Precio</h5></th>
            <th style="text-align:center"><h5>Cantidad</h5></th>
            <th style="text-align:center"><h5>Accion</h5></th>
        </tr>
        <?php
        foreach ($carrito->result() as $row){
            echo "<tr>";
                echo "<td>".$row->nombre_producto."</td>";
                echo "<td>".$row->precio_por_unidad."</td>";
                echo "<td>".$row->cantidad."</td>";
                echo "<td><a class='btn_editar' href=".base_url()."Controlador/cargarEditarProCarrito/".$row->id_carrito.">Editar</a> | " ;
                echo "<a class='btn_eliminar' href=".base_url()."Controlador/eliminarProCarrito/".$row->id_carrito.">Eliminar</a></td>";
            echo "</tr>";
        }
        
        ?>
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

    


</div>
