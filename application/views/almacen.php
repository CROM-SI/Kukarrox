<div id="carrito">
    <div class="row">
       
        <h2 style="text-align: center">Elije tus productos : <?php $usuario ?></h2><br/>
        
        <div class="producto" >
            <center >
               <?php foreach ($producto as $i): ?> 
                <form method="POST" action="<?=base_url()?>Controlador/almacencarrito">
                <div style="border:2px solid #CF3 ;margin-bottom:5% " >
                   
                   
                    
                     <p>Nombre Producto :<?= $i->nombre_producto  ?></p>
                     <input type="text" id="nombreC" name="nombreC" hidden="true" value="<?= $i->nombre_producto ?>"/>
             
                     <p>Precio : <?= $i->precio_por_unidad  ?></p> 
                     <input type="text" id="precioC" name="precioC"  hidden="true" value="<?= $i->precio_por_unidad ?>"/>
                
                     <br><br>
                
                     Cantidad:  <select id="cantidad" name="cantidadC" > 
                     <option disabled selected value="0">Seleccione</option> 
                 
                     <?php for($x=0; $x<=$i->stok_producto;$x++){?> 
                 
                     <option value="<?= $x; ?>"><?= $x; ?></option> 
                     
                     <?php }?>
                 </select> 
                
                 <br><br>
<!--                 <input type="text" id="agregarCl"  hidden="true" />-->
                 <button  name="nombreCl" style="margin-left: 5%;margin-bottom:5%;" class='btn btn-succes' >Agregar a carrito</button> 
                 </div>
               </form>
            <?php endforeach; ?>
            
            </center>
            
            <a id="salirCliente" style="margin-left:10%; color: white;" class="btn btn-succes" href="<?=base_url()?>Controlador/volver2">Salir</a>
        </div>
        
        
        
    </div>
</div>