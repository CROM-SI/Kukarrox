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

}
