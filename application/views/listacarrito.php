<div id="content">
<form method="POST" action="<?=base_url()?>Controlador/eliminarproC">
    <table>
        <tr>
            <td align="center"><h5>Producto</h5></td>
            <td align="center"><h5>Precio</h5></td>
            <td align="center"><h5>Cantidad</h5></td>
        </tr>  
        <tr>
            
            <?php foreach ($carrito as $i){ ?>
        
                <tr>
                <td> <?=$i->nombre_producto?> </td>
               
                <td> <?=$i->precio_por_unidad?></td>
               
                <td> <?=$i->cantidad?></td>
              
                <td> <input type="text" hidden="true"  name="id"  value="<?=$i->id_carrito?>"/></td>
                <td><button id="btneliminarC"  class="btn btn-succes"  >X</button></td>
                         
                </tr>
       
            <?php }?>
                 
        </tr>  
    </table>
 </form>
</div>
