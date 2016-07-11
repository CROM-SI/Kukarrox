<!DOCTYPE html>
<html lang="es">
    <head>
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/jquery-ui.css">
        <link rel="stylesheet" type="text/css" href="<?= base_url() ?>/css/micss.css">
        <script type="text/javascript" src="<?= base_url() ?>/js/jquery.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>/js/jquery-ui.js"></script>
        <script type="text/javascript" src="<?= base_url() ?>/js/funciones.js"></script>
        <script type="text/javascript">
            var base_url = '<?= base_url() ?>';
        </script>
        <script type="text/javascript" src="jquery.js"></script>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" 
              integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
              crossorigin="anonymous">
       
    </head>
    <body>

        <h1 id="logo">kuka</h1>




        
        <ul  >
            <li > <a href="<?= base_url() ?>Controlador/cargarInicio" >Inicio</a></li>

            <li> <a href="<?= base_url() ?>Controlador/cargarUbicacion" >Ubicación</a></li>
           
            <li><a href="<?= base_url() ?>Controlador/cargarQuienesSomos">Quienes Somos</a></li>

            <li>  <a href="<?= base_url() ?>Controlador/cargarHistoria">Cobertura</a> </li>
            
           <li id="soli">  <a href="<?= base_url() ?>Controlador/cargarSolicitud">Solicitud</a> </li>
            <div  id="menuser">
            <li> <a href="<?= base_url() ?>Controlador/cargarPedido" >Clientes</a></li>
            <li> <a href="<?= base_url() ?>Controlador/intranet" >Empresa</a></li>
            </div>
        </ul>  

        <br/>
<div id="probando">
            
       
