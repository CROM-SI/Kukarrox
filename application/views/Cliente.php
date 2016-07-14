<h3 style="text-align: center">Bienvenido Cliente: <?= $usuario ?></h3>

<div id="menuLateral">


    <ul>
        <input type="id" id="nombreCc"  hidden="true" value="<?= $usuario ?>"/>
        <li> <a href="#" style="font-size: 11px; letter-spacing: 3px;width: 143px"  onclick="cargarCarrito()"  id="btn_carrito" hidden="true" >Carrito <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>

        <li> <a href="#" style="font-size: 11px; letter-spacing: 3px;" onclick=" cargaralmacen()" id="btn_verPed"  >Mis pedidos</a></li>
        
        <li> <a id="salirCli" style="font-size: 10px; letter-spacing: 2px; margin-top: 10px"  href="<?= base_url() ?>Controlador/salir2">Cerrar Sesión</a></li>

    </ul>
</div>

<div id="menuCliente"></div>
<div id="mensajecarrito"></div>
