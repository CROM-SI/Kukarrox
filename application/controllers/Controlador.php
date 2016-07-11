<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Controlador extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model("modelo");
    }

    public function index() {
        $this->load->view("header");
        $this->load->view("inicio");
        $this->load->view("footer");
    }

    function cargarContent() {
        if ($this->session->userdata('login') == true) {
            $data['usuario'] = $this->session->userdata("usuario");
            if ($this->session->userdata('perfil') == 1) {
                $data['activo'] = 0;
                $this->load->view("Administrador", $data);
            } else {

                $data['activo'] = 0;
                $this->load->view("Bodega", $data);
            }
        } else {
            $data['activo'] = 1;
            $this->load->view("contenido", $data);
        }
    }

    function cargarContent2() {
        if ($this->session->userdata('login2') == true) {
            $data['producto'] = $this->modelo->consultaproducto()->result();
            $data['usuario'] = $this->session->userdata("usuario");

            $data['activo'] = 0;
            $this->load->view("Cliente", $data);
        } else {
            $data['activo'] = 1;
            $this->load->view("contenido2", $data);
        }
    }

    function validaLogin() {
        $usuario = $this->input->post("usuario");
        $clave = $this->input->post("clave");
        $resultado = $this->modelo->validarLogin($usuario, $clave);
        if ($resultado == true) {
            $perfil = $this->modelo->consultaPerfil($usuario);
            $data['mensaje'] = "Usuario Válido";
            $data['valido'] = true;
            $arreglo = array(
                "usuario" => $usuario,
                "login" => true,
                "perfil" => $perfil
            );
        } else {
            $data['mensaje'] = "Usuario No Válido";
            $data['valido'] = false;
            $arreglo = array(
                "usuario" => "",
                "login" => false,
                "perfil" => "");
        }
        $this->session->set_userdata($arreglo);
        echo json_encode($data);
    }

    function validaLogin2() {
        $usuario = $this->input->post("usuario");
        $clave = $this->input->post("clave");
        $resultado = $this->modelo->validarLogin2($usuario, $clave);
        if ($resultado == true) {

            $data['mensaje'] = "Usuario Válido";
            $data['valido'] = true;
            $arreglo = array(
                "usuario" => $usuario,
                "login2" => true
            );
        } else {
            $data['mensaje'] = "Usuario No Válido";
            $data['valido'] = false;
            $arreglo = array(
                "usuario" => "",
                "login" => false);
        }
        $this->session->set_userdata($arreglo);
        echo json_encode($data);
    }

    function salir2() {
        $this->session->sess_destroy();
        $this->load->view("header");
        $this->load->view("pedido");
        $this->load->view("footer");
    }

    function salir() {
        $this->session->sess_destroy();
        $this->load->view("header");
        $this->load->view("intranet");
        $this->load->view("footer");
    }

    function volver() {
        $this->load->view("header");
        $this->load->view("intranet");
        $this->load->view("footer");
    }

    function redCliente() {
        $this->load->view("Cliente");
    }

    function intranet() {
        $this->load->view("header");
        $this->load->view("intranet");
        $this->load->view("footer");
    }

    function cargarInicio() {
        $this->load->view("header");
        $this->load->view("inicio");
        $this->load->view("footer");
    }

    function cargarPedido() {
        $this->load->view("header");
        $this->load->view("pedido");
        $this->load->view("footer");
    }

    function cargarUbicacion() {
        $this->load->view("header");
        $this->load->view("ubicacion");
        $this->load->view("footer");
    }

    function cargarHistoria() {
        $this->load->view("header");
        $this->load->view("historia");
        $this->load->view("footer");
    }

    function cargarQuienesSomos() {
        $this->load->view("header");
        $this->load->view("quienesomos");
        $this->load->view("footer");
    }

    function cargarRegCli() {

        $this->load->view("regCliente");
    }

    function registrarCliente() {
        $nombre = $this->input->post("nombreCli");
        $apellido = $this->input->post("apellidoCli");
        $rut = $this->input->post("rutCli");
        $telefono = $this->input->post("telefonoCli");
        $ciudad = $this->input->post("cuidadCli");
        $correo = $this->input->post("correoCli");
        $rol = $this->input->post("rolCli");
        $nickname = $this->input->post("nicknameCli");
        $password = $this->input->post("passwordCli");
        $direccion = $this->input->post("direccionCli");


        $data = array('nombre_cliente' => $nombre,
            'apellido_cliente' => $apellido,
            'direccion_local' => $direccion,
            'telefono' => $telefono,
            'ciudad' => $ciudad,
            'rut_cliente' => $rut,
            'rol_local' => $rol,
            'nickname' => $nickname,
            'password' => md5($password),
            'id_rol' => 2,
            'correo' => $correo
        );


        $this->db->insert('cliente', $data);

        $this->load->view("header");
        $this->load->view("intranet");
        $this->load->view("footer");
    }

    function cargarIngresarPro() {

        $dato['arrCategorias'] = $this->modelo->consultaCategoria();
        $this->load->view("ingresarProducto", $dato);
    }

    function cargaralmacen() {

        $this->load->view("almacen");
    }

    function ingresarProducto() {
        $nombre = $this->input->post("nombre");
        $precio = $this->input->post("precio");
        $stock = $this->input->post("stock");
        $categoria = $this->input->post("categ");

        $data = array('nombre_producto' => $nombre,
            'precio_por_unidad' => $precio,
            'stok_producto' => $stock,
            'id_categoria' => $categoria
        );

        $this->modelo->regProducto($data);
    }

    function cargarNuevoBodeguero() {
        $this->load->view("nuevoBodeguero");
    }

    function registrarBod() {

        $nombre = $this->input->post("nombre");
        $apellido = $this->input->post("apellido");
        $rut = $this->input->post("rut");
        $dig = strtoupper($this->input->post("dig"));
        $nick = $this->input->post("nick");
        $pass = $this->input->post("pass");

        if ($this->rutValido($rut) == $dig) {
            $rutFin = $rut . "-" . $dig;
            $data = array(
                'nombre_usuario' => $nombre,
                'apellido_usuario' => $apellido,
                'rut' => $rutFin,
                'id_rol' => 3,
                'nickname' => $nick,
                'password' => md5($pass)
            );

            $this->modelo->regBodeguero($data);
        } else {
            //esta wea la puse para ver si me mandaba a otro lado con el error
            $this->load->view("historia");
        }
    }

    function mostrarPro() {
        $datos['arrProductos'] = $this->modelo->mostrarProductos();
        $this->load->view("productos", $datos);
    }

    function mostrarBod() {
        $datos['arrBodegueros'] = $this->modelo->mostrarBodegueros();
        $this->load->view("bodegueros", $datos);
    }

    function mostrarSolicitud() {
        $datos['arrSolicitud'] = $this->modelo->mostrarSolicitud();
        $this->load->view("solicitudes", $datos);
    }

    function eliminarBod() {
        $id = $this->uri->segment(3);
        $this->modelo->eliminarBodeguero($id);


        $this->load->view("header");
        $this->load->view("intranet");
        $this->load->view("footer");
    }
    function eliminarproC() {
        $id = $this->input->post("id");
        $this->modelo->eliminarproductoC($id);

        
        $this->load->view("header");
        $this->load->view("pedido");
        $this->load->view("footer");

    }

    function eliminarPro() {
        $id = $this->uri->segment(3);
        $this->modelo->eliminarProducto($id);


        $this->load->view("header");
        $this->load->view("intranet");
        $this->load->view("footer");
    }

    function cargarEditarBod() {

        $id = $this->uri->segment(3);
        $obtenerNombre = $this->modelo->obtenerNombre($id);

        if ($obtenerNombre != FALSE) {
            foreach ($obtenerNombre->result() as $row) {
                $nombre = $row->nombre_usuario;
                $apellido = $row->apellido_usuario;
                $rut = $row->rut;
                $nickname = $row->nickname;
            }

            $data = array('id_usuario' => $id,
                'nombre_usuario' => $nombre,
                'apellido_usuario' => $apellido,
                'rut' => $rut,
                'nickname' => $nickname,
            );
        } else {
            $data = "";
            return FALSE;
        }

        $this->load->view("header");
        $this->load->view("editarBod", $data);
        $this->load->view("footer");
    }

    function cargarEditarPro() {

        $id = $this->uri->segment(3);
        $obtenerProducto = $this->modelo->obtenerProducto($id);

        if ($obtenerProducto != FALSE) {
            foreach ($obtenerProducto->result() as $row) {
                $nombre = $row->nombre_producto;
                $precio = $row->precio_por_unidad;
                $stock = $row->stok_producto;
                $categoria = $row->id_categoria;
            }

            $data = array('id_producto' => $id,
                'nombre_producto' => $nombre,
                'precio_por_unidad' => $precio,
                'stok_producto' => $stock,
                'id_categoria' => $categoria,
            );
        } else {
            $data = "";
            return FALSE;
        }

        $this->load->view("header");
        $this->load->view("editarPro", $data);
        $this->load->view("footer");
    }

    function editarBod() {
        $id = $this->uri->segment(3);
        $data = array(
            'nombre_usuario' => $this->input->post("nombreBodE"),
            'apellido_usuario' => $this->input->post("apellidoBodE"),
            'rut' => $this->input->post("rutBodE"),
            'nickname' => $this->input->post("nicknameBodE")
        );

        $this->modelo->editarBodeguero($id, $data);

        $this->load->view("header");
        $this->load->view("intranet");
        $this->load->view("footer");
    }

    function editarPro() {
        $id = $this->uri->segment(3);
        $data = array(
            'nombre_producto' => $this->input->post("nombrePro"),
            'precio_por_unidad' => $this->input->post("precioPro"),
            'stok_producto' => $this->input->post("stock"),
            'id_categoria' => $this->input->post("categoria")
        );

        $this->modelo->editarProducto($id, $data);

        $this->load->view("header");
        $this->load->view("intranet");
        $this->load->view("footer");
    }

    function rutValido($r) {
        $s = 1;
        for ($m = 0; $r != 0; $r/=10)
            $s = ($s + $r % 10 * (9 - $m++ % 6)) % 11;
        return chr($s ? $s + 47 : 75);
    }
    
    function cargarSolicitud() {
        $this->load->view("header");
        $this->load->view("enviarSolicitud");
        $this->load->view("footer");
    }
    
    function enviarSolicitud() {
        $nombre = $this->input->post("nombreCliSo");
        $apellido = $this->input->post("apellidoCliSo");
        $rut = $this->input->post("rutCliSo");
        $telefono = $this->input->post("telefonoCliSo");
        $ciudad = $this->input->post("cuidadCliSo");
        $correo = $this->input->post("correoCliSo");
        $rol = $this->input->post("rolCliSo");
        $direccion = $this->input->post("direccionCliSo");
        


        $data = array('nombre_cliente' => $nombre,
            'apellido_cliente' => $apellido,
            'direccion_local' => $direccion,
            'telefono' => $telefono,
            'ciudad' => $ciudad,
            'rut_cliente' => $rut,
            'rol_local' => $rol,
            'correo' => $correo
        );
        
        $this->db->insert("solicitud",$data);
        
        $this->load->view("header");
        $this->load->view("enviarSolicitud");
        $this->load->view("footer");
        
    }
    
    function cargarCarrito() {
        
        $data['producto'] = $this->modelo->consultaproducto()->result();
        
        $data['usuario'] = $this->session->userdata("usuario");
       
        
      
       $this->load->view("carritoC",$data);
    
        
        
    }
    function cargarlistacarrito() {
        $nombre = $this->input->post("nombreC");
        $data['carrito'] = $this->modelo->mostrarcarrito($nombre)->result();
        
        $this->load->view("listacarrito",$data);
        
    }
    
    
    function volver2() {
        $this->load->view("header");
        $this->load->view("pedido");
        $this->load->view("footer");
    }
    
    function cambiarPassBod(){
        
        $this->load->view("passBod");
    }
    
    

    function almacencarrito(){
     
//     $datos = $this->modelo->consultaproducto()->result();
     if ($this->session->userdata('login2') == true) {
         $nomb = $this->input->post("nombreC");
         $pre = $this->input->post("precioC");
         $x  = $this->input->post("cantidadC");
         $nombre =$this->input->post("nombreCl");
         
         if($x > 0){
            $data = 
         array(
           'nombre_producto' => $nomb,
           'precio_por_unidad' => $pre,
           'cantidad' => $x,
           'nombre_us'=>$nombre
              
           );
          
         $this->modelo->regcarrito($data); 
         $data['usuario'] = $this->session->userdata("usuario");
         $data['producto'] = $this->modelo->consultaproducto()->result();
          
          $this->load->view("carritoC",$data);
          
          redirect(base_url("Controlador/volver2"));
         }else{
          $data['usuario'] = $this->session->userdata("usuario");
          $data['producto'] = $this->modelo->consultaproducto()->result();
          $this->load->view("header");
          $this->load->view("carritoC",$data);
          $this->load->view("footer"); 
             
         }
         
         
         
        
         
     }
    }
    
    function cargarPedidos(){
        $datos['arrPedidos'] = $this->modelo->mostrarPedido();
        $this->load->view("verPedidos",$datos);
    }
    
    function cargarPdf(){
        $this->load->view("vista_pdf");
    }
    
    public function generar() {
        $this->load->library('Pdf');
        $pdf = new Pdf('P', 'mm', 'A4', true, 'UTF-8', false);
        $pdf->SetCreator(PDF_CREATOR);
        $pdf->SetAuthor('');
        $pdf->SetTitle('');
        $pdf->SetSubject('');
        $pdf->SetKeywords('');
 
// datos por defecto de cabecera, se pueden modificar en el archivo tcpdf_config_alt.php de libraries/config
        $pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE . ' ', PDF_HEADER_STRING, array(0, 64, 255), array(0, 64, 128));
        $pdf->setFooterData($tc = array(0, 64, 0));
 
// datos por defecto de cabecera, se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
        $pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
 
// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
 
// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
        $pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
        $pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
 
// se pueden modificar en el archivo tcpdf_config.php de libraries/config
        $pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
 
//relación utilizada para ajustar la conversión de los píxeles
        $pdf->setImageScale(PDF_IMAGE_SCALE_RATIO);
 
 
// ---------------------------------------------------------
// establecer el modo de fuente por defecto
        $pdf->setFontSubsetting(true);
 
// Establecer el tipo de letra
 
//Si tienes que imprimir carácteres ASCII estándar, puede utilizar las fuentes básicas como
// Helvetica para reducir el tamaño del archivo.
        $pdf->SetFont('freemono', '', 14, '', true);
 
// Añadir una página
// Este método tiene varias opciones, consulta la documentación para más información.
        $pdf->AddPage();
 
//fijar efecto de sombra en el texto
        $pdf->setTextShadow(array('enabled' => true, 'depth_w' => 0.2, 'depth_h' => 0.2, 'color' => array(196, 196, 196), 'opacity' => 1, 'blend_mode' => 'Normal'));
 
// Establecemos el contenido para imprimir
        
        $pedido = $this->modelo->mostrarPedido();
        
        //preparamos y maquetamos el contenido a crear
        $html = '';
        $html .= "<style type=text/css>";
        $html .= "th{color: #fff; font-weight: bold; background-color: #222}";
        $html .= "h1{text-align: center;}";
        $html .= "h2{margin-top: 10%;}";
        $html .= "table{font-size: 12px; margin-top: 8%; width: 100%; text-align: center;  
                    border-collapse: collapse;
                    margin-left: 50%;}";
        $html .= "td{background-color: #AAC7E3; color: #fff}";
        $html .= "</style>";
        $html .= "<h1> Comprobante de pedido</h1><br/>";
        $html .= "<h2>Detalle del pedido</h2>";
        $html .= "<table width='100%'>";
        $html .= "<tr><th>Nombre del producto</th><th>Cantidad</th><th>Precio por unidad</th><th>Total</th></tr>";
        foreach ($pedido->result() as $row) 
        {
            
            $html.= "<tr>";
            $html.=  "<td>".$row->nombre_producto."</td>";
            $html.=  "<td>".$row->cantidad."</td>";
            $html.=  "<td>".$row->precio_por_unidad."</td>";
            
            $html.= "</tr>";
            
        }
        $html .= "</table>";
       
        
        //provincias es la respuesta de la función getProvinciasSeleccionadas($provincia) del modelo
        
 
// Imprimimos el texto con writeHTMLCell()
        $pdf->writeHTMLCell($w = 0, $h = 0, $x = '', $y = '', $html, $border = 0, $ln = 1, $fill = 0, $reseth = true, $align = '', $autopadding = true);
 
// ---------------------------------------------------------
// Cerrar el documento PDF y preparamos la salida
// Este método tiene varias opciones, consulte la documentación para más información.
        $nombre_archivo = utf8_decode("Pedido.pdf");
        $pdf->Output($nombre_archivo, 'I');
    }
    
}
