<h2 style="text-align: center">Bienvenido Adminstrador</h2>
<div id="menuBotonesAdm" >


    <ul>
        <li><a href="#"  id="btn_sol" onclick="cargarSolicitud()">Solicitudes Pendientes</a></li>
        <li> <a href="#"  id="btn_verPedAdm" onclick="cargarPedidoAdm()">Pedidos Realizados</a></li>
        <li>  <a href="#"  id="btn_VerPro" onclick="cargarVerPro()">Productos en Stock </a></li>
        <br>
        <li> <a href="#" id="btn_regBod" onclick="cargarRegistroBod()">Registrar Encargado de bodega </a></li>
        <li>  <a href="#" id="btn_verBod" onclick="cargarVerBod()">Encargados de bodega </a></li>
        <li>  <a href="#" id="btn_regCli" onclick="cargarRegistroCli()" >Registrar Cliente</a></li>
        <li>  <a href="#" id="btn_Prod" onclick="cargarIngresaPro()">Ingresar Productos </a></li>

        <li>  <a href="#" id="btn_carRegAdm" onclick="cargarRegAdm()">Registro de pedidos </a></li>
        <a style="color:#666">.                     .</a>
        <li>  <a id="salirAdm" style="font-size: 10px; letter-spacing: 3px;"  href="<?= base_url() ?>Controlador/salir">Cerrar Sesión</a></li>
    </ul> 

</div>

<div id="menuAdm"></div>

