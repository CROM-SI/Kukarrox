<div id="form2">
    
    <table id="table" align="center" border="2" width="300">
        <caption>Pedidos</caption>
        <tr>
            <th style="text-align:center"><h5>Nombre producto</h5></th>
            <th style="text-align:center"><h5>Precio</h5></th>
            <th style="text-align:center"><h5>Cantidad</h5></th>
            <th style="text-align:center"><h5>Estado</h5></th>
            <th style="text-align:center"><h5>Accion</h5></th>
        </tr>
        <?php
        foreach ($arrPedidos->result() as $row){
            echo "<tr>";
                echo "<td>".$row->nombre_producto."</td>";
                echo "<td>".$row->precio_por_unidad."</td>";
                echo "<td>".$row->cantidad."</td>";
                echo "<td>".$row->estado."</td>";
                
                echo "<td>";
                echo "<a class='btn_eliminarPedido' href=".base_url()."Controlador/eliminarPedido/".$row->id_carrito.">Eliminar</a></td>";
            echo "</tr>";
        }
        
        ?>
    </table>
    
    

</div>    

