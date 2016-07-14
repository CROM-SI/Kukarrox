<h3 style="text-align: center">Bienvenido Cliente: <?= $usuario ?></h3>

<div id="menuLateral">

    <input type="id" id="nombreCc"  hidden="true" value="<?= $usuario ?>"/>
    <ul>
    <li> <a href="#" onclick="cargarCarrito()"  id="btn_carrito" hidden="true" >Carrito <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span></a></li>

    <li> <a href="#" onclick=" cargaralmacen()" id="btn_verPed"  >Ver mis pedido</a></li>
    <a style="color:#666">.                     .</a>
    <li> <a id="salirCli"  href="<?= base_url() ?>Controlador/salir2">Salir</a></li>

    </ul>
</div>

<div id="menuCliente"></div>
<div id="mensajecarrito"></div>
