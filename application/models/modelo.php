<?php
class Modelo extends CI_Model{
    function validarLogin($nick, $clave){
        /*$consulta = "select * from usuario 
                    where nickname='".$nick."' and 
                    password ='".md5($clave)."'";
         $resultado = $this->db->query($consulta);
         */
        $this->db->select("*");
        $this->db->where('nickname',$nick);
        $this->db->where('password',md5($clave));
        $resultado = $this->db->get('usuario');
        if($resultado->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    
    function idusuario($dato){
        $this->db->select("id_cliente");
        $this->db->where('nickname',$dato);
        
        $this->db->from("cliente");
         $data = $this->db->get();
        return $data;
        
    }
    
    
    
    function validarLogin2($nick, $clave){
        
        $this->db->select("*");
        $this->db->where('nickname',$nick);
        $this->db->where('password',md5($clave));
        $resultado = $this->db->get('cliente');
        if($resultado->num_rows()>0){
            return true;
        }else{
            return false;
        }
    }
    
    function consultaPerfil($usuario) {
        $this->db->select("id_rol");
        $this->db->where('nickname', $usuario);
        $respuesta = $this->db->get("usuario");
        foreach ($respuesta->result() as $valor) {
            $perfil = $valor->id_rol;
        }
        return $perfil;
    }
    function consultanarnickname($nick){
        $this->db->select("id_cliente");
        $this->db->where('nickname', $nick);
        $idcl = $this->db->get("cliente");
        foreach ($idcl->result() as $valor) {
            $idcl = $valor->id_cliente;
        }
        return $idcl;
    }
   
    
    //    consultar los productos 
    function consultaproducto($dato){
       $this->db->select('nombre_producto,precio_por_unidad,id_producto,stok_producto,id_categoria');
       $this->db->where('id_categoria', $dato);
       $this->db->from("producto");
         $data = $this->db->get();
        return $data;
    }
    

    
    function mostrarBodegueros(){
       $this->db->select("*");
       $this->db->where("id_rol",3);
       $res = $this->db->get('usuario');
        if($res->num_rows()>0){
            return $res;
        }else{
            return false;
        }
    }
    
    function mostrarProductos(){
       $this->db->select("*");
       $res = $this->db->get('producto');
        if($res->num_rows()>0){
            return $res;
        }else{
            return false;
        }
    }
    
    function mostrarSolicitud(){
       $this->db->select("*");
       $res = $this->db->get('solicitud');
        if($res->num_rows()>0){
            return $res;
        }else{
            return false;
        }
    }
    function mostrarcategoria(){
       $this->db->select('nombre_categoria,id_categoria'); 
        $res = $this->db->get('categoria');
        
            return $res;
    }
            
    function eliminarBodeguero($id){
        $this->db->where('id_usuario',$id);
        $this->db->delete('usuario');
    }
    function eliminarproductoC($id){
        $this->db->where('id_carrito',$id);
        $this->db->delete('carrito');
    }
    
    
    function eliminarProducto($id){
        $this->db->where('id_producto',$id);
        $this->db->delete('producto');
    }
    
    function obtenerProducto($id){
        $this->db->where('id_producto',$id);
        $res = $this->db->get('producto');
        if($res->num_rows()>0){
            return $res;
        }else{
            return false;
        }
    }
    
    function obtenerNombre($id){
        $this->db->where('id_usuario',$id);
        $this->db->where('id_rol',3);
        $res = $this->db->get('usuario');
        if($res->num_rows()>0){
            return $res;
        }else{
            return false;
        }
    }
   
            
    function editarBodeguero($id,$data){
        $this->db->where('id_usuario',$id);
        $this->db->update('usuario',$data);
    }
    
    function editarProducto($id,$data){
        $this->db->where('id_producto',$id);
        $this->db->update('producto',$data);
    }
    
    function consultaCategoria() {

        $this->db->order_by('nombre_categoria', 'asc');
        $categoria = $this->db->get("categoria");
        if ($categoria->num_rows() > 0) {
            return $categoria->result();
        }
    }
    
     function regBodeguero($data) {
        $this->db->insert('usuario', $data);
    }
     function regcarrito($data) {
        $this->db->insert('carrito', $data);
    }
    
    
     function regProducto($data) {
        $this->db->insert('producto', $data);
    }
    
    function mostrarPedido(){
       
       $consulta = "select * from carrito;";
        
        $res = $this->db->query($consulta);
        if($res->num_rows()>0){
            return $res;
        }else{
            return false;
        }
        
        
    }
    
    function pdf($nombreU){
         $consulta = "select * from carrito where nombre_us = '".$nombreU."';";
        
        $res = $this->db->query($consulta);
        if($res->num_rows()>0){
            return $res;
        }else{
            return false;
        }
    }
    
    function eliminarPedido($id){
        $this->db->where('id_carrito',$id);
        $this->db->delete('carrito');
        
    }
    
    function consultarNombreProCarr(){
        $consulta = "select * from carrito;";
        
        $res = $this->db->query($consulta);
        if($res->num_rows()>0){
            return $res;
        }else{
            return false;
        }
    }
    
    function consultarNombrePro(){
        $consulta = "select * from producto;";
        
        $res = $this->db->query($consulta);
        if($res->num_rows()>0){
            return $res;
        }else{
            return false;
        }
    }
  
    function obtenerCarrito($id){
        $this->db->where('id_carrito',$id);
        $res = $this->db->get('carrito');
        if($res->num_rows()>0){
            return $res;
        }else{
            return false;
        }
    }
    
    function mostrarReg(){
        $consulta = "select * from registro_pedido;";
        
        $res = $this->db->query($consulta);
        if($res->num_rows()>0){
            return $res;
        }else{
            return false;
        }
    }
    
    function eliminarProCarrito($id){
        
        $this->db->where('id_carrito',$id);
        $this->db->delete('carrito');
      
    }
    
    function obtenerProCarri($id){
        $this->db->where('id_carrito',$id);
        $res = $this->db->get('carrito');
        if($res->num_rows()>0){
            return $res;
        }else{
            return false;
        }
    }
    
    function editarCarrito($id, $data){
        $this->db->where('id_carrito',$id);
        $this->db->update('carrito',$data);
    }
    
    function regCategoria($data){
        $this->db->insert('categoria',$data);
    }
    
    function categoria(){
         $consulta = "select * from categoria;";
        
        $res = $this->db->query($consulta);
        if($res->num_rows()>0){
            return $res;
        }else{
            return false;
        }
    }
    
    function cargarCate($id){
        $this->db->where('id_categoria',$id);
        $res = $this->db->get('categoria');
        if($res->num_rows()>0){
            return $res;
        }else{
            return false;
        }
    }
    
    function editarCate($id, $data){
        $this->db->where('id_categoria',$id);
        $this->db->update('categoria',$data);
    }
    
}
?>
