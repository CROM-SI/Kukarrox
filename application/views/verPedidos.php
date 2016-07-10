<div id="form2">
    
    <h3 class="textoregistrarcliente">Pedidos</h3><br/>
    <table id="table" align="center" border="2" width="300">
        <tr>
            <td align="center"><h5>Nombre producto</h5></td>
            <td align="center"><h5>Precio</h5></td>
            <td align="center"><h5>Cantidad</h5></td>
            <td align="center"><h5>Estado</h5></td>
             
            <td align="center"><h5>Accion</h5></td>
        </tr>
        <?php
        foreach ($arrPedidos->result() as $row){
            echo "<tr>";
                echo "<td>".$row->nombre_producto."</td>";
                echo "<td>".$row->precio_por_unidad."</td>";
                echo "<td>".$row->cantidad."</td>";
                echo "<td>".$row->estado."</td>";
                
                echo "<td><a class='btn_editar' href=".base_url()."Controlador//".$row->id_pedido.">Editar</a> | " ;
                echo "<a class='btn_eliminar' href=".base_url()."Controlador//".$row->id_pedido.">x</a></td>";
            echo "</tr>";
        }
        
        ?>
    </table>
    
    

</div>    

