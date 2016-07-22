<form method="post" action="<?=base_url()?>Controlador/editarCarrito/<?=$id_carrito?>">
<div id="form">
    
    <h3 class="textoregistrarcliente">Editar Carrito</h3>
    <h5>Los campos marcados en <h10 class="campoenrojo">*</h10> son obligatorios</h5>
    <br/>
    
    
    <br/>
    <h10 class="campoenrojo">*</h10>Cantidad: <input type="text" style="color:black;margin-left: 15%; margin-bottom:2%; width: 35%;border-radius: 6px" name="cantidadCar" value="<?=$cantidad?>" class="input" required="true" />
   
 
    <br/>
    <button id="editarPro" class="btn btn-succes">Editar</button>
    
    <a href="<?=base_url()?>Controlador/cargarPedido" id="cancelarPro" class="btn btn-succes" style="background-color: red; color: black">Cancelar</a>
    
    
</div>
</form>

