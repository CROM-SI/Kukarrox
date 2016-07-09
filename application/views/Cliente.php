<div id="content">
    <head>
    <center>
        
       <h3>Bienvenido Cliente: <?=$usuario?> </h3>
         
    </center>
    <br><br>
    <h4><a href="<?=base_url()?>Controlador/cargaralmacen" >Mi carro <span class="glyphicon glyphicon-shopping-cart"></span></a></h4>
    <br><br>
    </head>
    <body>
       
        <div class="producto" >
            <center >
               <?php foreach ($producto as $i): ?> 

                <div style="border:2px solid #CF3 ;margin-bottom:5% " >
                   
                   
                    
                    <p>Nombre Producto :<?= $i->nombre_producto  ?></p>

             
                <p>Precio : <?= $i->precio_por_unidad  ?></p> 
                
                <br><br>
                
                 Cantidad:  <select id="cantidad" > 
                 <option disabled selected value="0">Seleccione</option> 
                 
                 <?php for($x=0; $x<=$i->stok_producto;$x++){?> 
                 
                     <option value="<?= $x; ?>"><?= $x; ?></option> 
                     
                 <?php }?>
                 
<!--                 <option value="<?= $i->id_producto; ?>"><?= $i->stok_producto; ?></option> -->
                
                 </select> 
                
                 <br><br>
                 <button id="agregarC" style="margin-left: 5%;margin-bottom:5%;" class='btn btn-succes' value="<?=$i->id_producto?>">Agregar a carrito</button> 
                 </div>
               
            <?php endforeach; ?>
            
            </center>
        </div>
                
            
       
      
       
        
    </body>
    
    <a id="salirCliente" class="btn btn-succes" style="color: white; " href="<?=base_url()?>Controlador/salir2"><b>Salir</b></a>
</div>

