<h2 style="text-align: center">Bienvenido Bodeguero: <?= $usuario ?></h2>
<div id="menuLateral">

    <ul>

        <li> <a href="#" id="btn_pedido" onclick="cargarPedidos()">Pedidos Pendientes</a> </li>


        <li> <a href="#" id="btn_carReg" onclick="cargarReg()">Registro de pedidos</a></li>

        <a style="color:#666">.                     .</a>
        <li> <a id="salirBod" style="font-size: 10px; letter-spacing: 4px;"  href="<?= base_url() ?>Controlador/salir">Cerrar Sesión</a></li>
    </ul>
</div>

<div id="menuBod"></div>