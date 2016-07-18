<div id="form">
    
    
    
    <h3 class="textoregistrarcliente">Ingresar Categorias</h3>
    <h5>Los campos marcados en <h10 class="campoenrojo">*</h10> son obligatorios</h5>
    <br/>
    
    <br/>
    <h10 class="campoenrojo">*</h10>
    Nombre de la categoria: <input type="text" id="nombreCate"required="true"
                                   maxlength="30" name="nombreCate"
                   style="
                               color:black;
                               margin-left: 9%;
                               margin-bottom:2%; 
                               width: 45%;
                               border-radius: 6px"
                               
                               
                               />
    
   
    <br/>
    <button id="btn_botCat" style="margin-top: 5%; border: 1px black solid" class="btn btn-succes">Guardar</button>
    <br/>
    <div>
        <table id="table" align="center" border="2" width="400">
        <caption>Categorias</caption>
        <tr>
            <th style="text-align:center"><h5>Categoria</h5></th>
            
            <th style="text-align:center"><h5>Accion</h5></th>
        </tr>
        <?php
        foreach ($arrCate->result() as $row){
            echo "<tr>";
                echo "<td>".$row->nombre_categoria."</td>";
                
                echo "<td><a class='btn_editar' href=".base_url()."Controlador/cargarCate/".$row->id_categoria.">Editar</a>" ;
                echo "</td>";
            echo "</tr>";
        }
        
        ?>
    </table>
    </div>
    
</div>


