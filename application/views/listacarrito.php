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
                 <td><a class='btn_eliminar' href="<?=base_url()?>Controlador/eliminarBod">x</a></td>
                </tr>
            
            <?php }?>
        </tr>  
    </table>
 
</div>
