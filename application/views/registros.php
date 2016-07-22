<div id="form2">
    
    <table id="table" align="center" border="2" width="400">
        <caption>Registro de pedidos</caption>
        <tr>
            <th style="text-align:center"><h5>Fecha</h5></th>
            <th style="text-align:center"><h5>Nombre producto</h5></th>
            <th style="text-align:center"><h5>cantidad</h5></th>
            <th style="text-align:center"><h5>precio unitario</h5></th>
            <th style="text-align:center"><h5>estado</h5></th>
        </tr>
        <?php
        foreach ($arrRegistros->result() as $row){
            echo "<tr>";
                echo "<td>".$row->fecha."</td>";
                echo "<td>".$row->nombre_producto."</td>";
                echo "<td>".$row->cantidad."</td>";
                echo "<td>".$row->precio_por_unidad."</td>";
                echo "<td>".$row->estado."</td>";
                
            echo "</tr>";
        }
        
        ?>
    </table>
    
    

</div>  