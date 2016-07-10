<div id="content">
    <h2 style="text-align: center">Bienvenido Cliente: <?=$usuario?></h2>

    <br>
    <br>
    <a href="<?=base_url()?>Controlador/cargarCarrito" onclick="cargarCarrito()" id="btn_carrito">Carrito</a>
    <br/><br/>
    <a href="#" id="btn_verPed" onclick="">Ver mis pedido</a>
    <br/><br/>
    <a href="#" id="btn_camPass" onclick="">Cambiar contraseña</a>
    <br/><br/>
    
    <a id="salirCli"  href="<?=base_url()?>Controlador/salir2">Salir</a>
</div>

<div id="menuCliente"></div>

