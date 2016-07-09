<div id="form2">
    
    <h3 class="textoregistrarcliente">Solicitud de registro</h3><br/>
    <table id="table" align="center" border="2" width="650">
        <tr>
            <td align="center"><h5>Nombre</h5></td>
            <td align="center"><h5>Apellido</h5></td>
            <td align="center"><h5>Direccion del local</h5></td>
            <td align="center"><h5>Telefono</h5></td>
            <td align="center"><h5>Ciudad</h5></td>
            <td align="center"><h5>Rut del cliente</h5></td>
            <td align="center"><h5>Rol de la empresa</h5></td>
            <td align="center"><h5>Correo</h5></td>
        </tr>
        <?php
        foreach ($arrSolicitud->result() as $row){
            echo "<tr>";
                echo "<td>".$row->nombre_cliente."</td>";
                echo "<td>".$row->apellido_cliente."</td>";
                echo "<td>".$row->direccion_local."</td>";
                echo "<td>".$row->telefono."</td>";
                echo "<td>".$row->ciudad."</td>";
                echo "<td>".$row->rut_cliente."</td>";
                echo "<td>".$row->rol_local."</td>";
                echo "<td>".$row->correo."</td>";
                
            echo "</tr>";
        }
        
        ?>
    </table>
    
    

</div>
