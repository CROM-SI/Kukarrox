<div id="form2">
    
    <table id="table" align="center" border="2" width="300">
        <caption>Pedidos</caption>
        <tr>
            <th style="text-align:center"><h5>Cliente</h5></th>
            <th style="text-align:center"><h5>Nombre producto</h5></th>
            <th style="text-align:center"><h5>Precio</h5></th>
            <th style="text-align:center"><h5>Cantidad</h5></th>
            <th style="text-align:center"><h5>Estado</h5></th>
            <th style="text-align:center"><h5>Fecha</h5></th>
            <th style="text-align:center"><h5>Accion</h5></th>
        </tr>
        <?php
        foreach ($arrPedidos->result() as $row){
            echo "<tr>";
                echo "<td>".$row->nombre_us."</td>";
                echo "<td>".$row->nombre_producto."</td>";
                echo "<td>".$row->precio_por_unidad."</td>";
                echo "<td>".$row->cantidad."</td>";
                echo "<td>".$row->estado."</td>";
                echo "<td>".$row->fecha."</td>";
                
                echo "<td>";
                echo "<a class='btn_eliminar' href=".base_url()."Controlador/eliminarPedido/".$row->id_carrito."><span class='glyphicon glyphicon-ok' aria-hidden='true'></span></a></td>";
            echo "</tr>";
        }
        
        ?>
    </table>
    
    

</div>    

