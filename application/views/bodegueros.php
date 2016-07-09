<div id="form2">
    
    <h3 class="textoregistrarcliente">Encargados de bodega actuales</h3><br/>
    <table id="table" align="center" border="2" width="300">
        <tr>
            <td align="center"><h5>Nombre</h5></td>
            <td align="center"><h5>Apellido</h5></td>
            <td align="center"><h5>Rut</h5></td>
            <td align="center"><h5>Accion</h5></td>
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