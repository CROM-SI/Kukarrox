<div id="form2">
    
    <table id="table" align="center" border="2" width="400">
        <caption>Productos en bodega</caption>
        <tr>
            <th style="text-align:center"><h5>Nombre</h5></th>
            <th style="text-align:center"><h5>Precio</h5></th>
            <th style="text-align:center"><h5>Stock</h5></th>
            <th style="text-align:center"><h5>Acción</h5></th>
        </tr>
        <?php
        foreach ($arrProductos->result() as $row){
            echo "<tr>";
                echo "<td>".$row->nombre_producto."</td>";
                echo "<td>".$row->precio_por_unidad."</td>";
                echo "<td>".$row->stok_producto."</td>";
                echo "<td><a class='btn_editar' href=".base_url()."Controlador/cargarEditarPro/".$row->id_producto.">Editar</a> | " ;
                echo "<a class='btn_eliminar' href=".base_url()."Controlador/eliminarPro/".$row->id_producto.">x</a></td>";
            echo "</tr>";
        }
        
        ?>
    </table>
    
    

</div> 

