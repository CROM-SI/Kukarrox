<div id="content">
    <h2 style="text-align: center">Bienvenido Cliente: <?=$usuario?></h2>
    <input type="id" id="nombreCc"  hidden="true" value="<?=$usuario?>"/>
    <br>
    <br>
    
    <a href="#" onclick="cargarCarrito()"  id="btn_carrito">Carrito</a>
    <br/><br/>
    <a href="#" onclick=" cargaralmacen()" id="btn_verPed"  >Ver mis pedido</a>
    <br/><br/>
    <a href="#" id="btn_camPass" onclick="">Cambiar contraseña</a>
    <br/><br/>
    
    <a id="salirCli"  href="<?=base_url()?>Controlador/salir2">Salir</a>
</div>

<div id="menuCliente"></div>

