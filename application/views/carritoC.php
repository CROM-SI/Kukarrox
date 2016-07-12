
<div id="content">
    

    <center>
        
        <h1><span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></h1>
         
    </center>
   
        <div>
            <center >
               <?php foreach ($producto as $i): ?> 
                <form method="POST" action="<?=base_url()?>Controlador/almacencarrito">                
                <div style="border:2px solid chartreuse ;margin-bottom:5%; width: 50% ; border-radius: 5%;" >
                   
                    <p >Nombre Producto :<?= $i->nombre_producto  ?></p>
                    <input type="text" name="nombreC" hidden="true" value="<?= $i->nombre_producto ?>"/>
                    <p >Precio : <?= $i->precio_por_unidad  ?></p> 
                    <input type="text" name="precioC" hidden="true" value="<?= $i->precio_por_unidad ?>"/>
                
                   <br><br>
                
                   Cantidad:  <select id="cantidad" name="cantidadC" > 
                   <option disabled selected value="0">Seleccione</option> 
                 
                   <?php for($x=0; $x<=$i->stok_producto;$x++){?> 
                 
                     <option value="<?= $x; ?>"><?= $x; ?></option> 
                     
                   <?php }?>
                   </select> 
                   <br><br>
                   <button  name="nombreCl"  style="margin-left: 5%;margin-bottom:5%;" class='btn btn-succes' value="<?=$usuario?>">Agregar a carrito</button> 
                   </div>
                     </form> 
                   <?php endforeach; ?>
            
            </center>
            
            
        </div>
       
            
       
 
       
        

    
   <a id="salirCliente" style="margin-left:10%; color: white;" class="btn btn-succes" href="<?=base_url()?>Controlador/volver2">Salir</a>
</div>

