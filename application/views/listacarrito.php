<div id="content">

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
                <input type="text" id="elimin"  hidden="true" value="<?=$i->id_carrito?>"/>
                <td><a   class='btn_eliminar'  href="<?=base_url()?>Controlador/eliminarproC"  onclick="cargaralmacen()"  id="btneliminarC" >x</a></td>
                </tr>
            
            <?php }?>
                 
        </tr>  
    </table>
 
</div>
