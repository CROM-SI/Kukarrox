<div id="content">
    <h2 style="text-align: center">Bienvenido encargado de bodega: <?=$usuario?></h2>

    <br>
    <br>
    <a href="#" id="btn_pedido" onclick="cargarPedidos()">Ver pedidos</a>
    <br/><br/>
    <a href="#" id="btn_pdf" onclick="cargarVistaPdf()">pdf</a>
    
    <br/><br/>
    <a href="#" id="btn_camPassBod" onclick="cargarCamPassBod()">Cambiar contraseña</a>
    <br/><br/>
    
    <a id="salirBod"  href="<?=base_url()?>Controlador/salir">Salir</a>
</div>

<div id="menuBod"></div>