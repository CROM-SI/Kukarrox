
<div id="content">
   
   
 

<h3 style="text-align: center">Bienvenido Cliente: <?= $usuario ?></h3>

<div id="menuLateral" style="margin-left: -23%">


    <ul>
        <input type="id" id="nombreCc"  hidden="true" value="<?= $usuario ?>"/>
       
        <li style="width: 43%; margin-top: 5%"><p style="  margin-left: 4%"> Categoria Producto:</p>  <select  id="categoria" style="width: 150%" name="categoria"  > 
                   <option disabled selected value="0">Seleccione</option> 
                 
                   <?php foreach ($categoria as $i) : ?>
                   <option  value="<?= $i->id_categoria; ?>"><?= $i->nombre_categoria; ?></option>
                   
                <?php endforeach; ?>
                   
            </select><a style="position: absolute; left: 191px; top: 462px;background: green" id="btn_buscar" onclick="cargarCarrito()"><span class='glyphicon glyphicon-search' class="btn btn-default btn-lg" ></span></a>
            
       </li>
     
    

        <li style="width: 60%"> <a href="#" style="font-size: 11px; letter-spacing: 3px" onclick=" cargaralmacen()" id="btn_verPed"  >Mis pedidos</a></li>
        
        <li style="width: 60%; margin-bottom: 5%"> <a id="salirCli" style="font-size: 10px; letter-spacing: 1px; margin-top: 10px"  href="<?= base_url() ?>Controlador/salir2">Cerrar Sesión</a></li>
      
    </ul>

</div>

<div id="menuCliente"></div>
<div id="mensajecarrito"></div>
