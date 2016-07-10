<div id="form2">
    
  
    
    <table id="table" align="center" border="2" width="400">
        <caption>Encargados actuales de Bodega</caption>
        <tr>
            <th align="center"><h5>Nombre</h5></th>
            <th align="center"><h5>Apellido</h5></th>
            <th align="center"><h5>Rut</h5></th>
            <th align="center"><h5>Accion</h5></th>
        </tr>
        <?php
        foreach ($arrBodegueros->result() as $row){
            echo "<tr>";
                echo "<td>".$row->nombre_usuario."</td>";
                echo "<td>".$row->apellido_usuario."</td>";
                echo "<td>".$row->rut."</td>";
                echo "<td><a class='btn_editar' href=".base_url()."Controlador/cargarEditarBod/".$row->id_usuario.">Editar</a> | " ;
                echo "<a class='btn_eliminar' href=".base_url()."Controlador/eliminarBod/".$row->id_usuario.">x</a></td>";
            echo "</tr>";
        }
        
        ?>
    </table>
    
    

</div>    