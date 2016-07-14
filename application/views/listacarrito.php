<div id="content" style="padding-right: 23%; margin-top: 5%">
<form method="POST" action="<?=base_url()?>Controlador/eliminarproC">
    <table id="table"  border="2" width="500">
        <caption>Mis Productos</caption>
        <tr>
            <th style="text-align:center"><h5>Producto</h5></th>
            <th style="text-align:center"><h5>Precio</h5></th>
            <th style="text-align:center"><h5>Cantidad</h5></th>
            
        </tr>  
        <tr>
            
            <?php foreach ($carrito as $i){ ?>
        
                <tr>
                <td> <?=$i->nombre_producto?> </td>
               
                <td> <?=$i->precio_por_unidad?></td>
               
                <td> <?=$i->cantidad?></td>
              
                
                <td><button id="btneliminarC" name="id" value="<?=$i->id_carrito?>" class="btn btn-succes"  >Eliminar</button></td>
                <td><button id="btneliminarC" name="id" value="<?=$i->id_carrito?>" class="btn btn-succes"  >editar</button></td>
                <td> <input type="text" hidden="true"  name=""  value="<?=$i->id_carrito?>"/></td>
                </tr>
       
            <?php }?>
                 
        </tr>  
    </table>
    <br> <br>
    <div >
        <center>
            
               <a href="<?=base_url()?>Controlador/generar" id="generarPedido"  class="btn btn-succes" 
                  style="background-color: red; color: black; margin-right: 135% ; margin-bottom: 10%" 
                  >Generar Pedido</a>
 
        </center>
        
        <a href="<?=base_url()?>Controlador/cargarPedido" class="btn" id="volLista">Volver</a>
    </div>

 </form>
   
</div>
