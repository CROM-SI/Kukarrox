<form method="post" action="<?=base_url()?>Controlador/editarPro/<?=$id_producto?>">
<div id="form">
    
    <h3 class="textoregistrarcliente">Editar Producto</h3>
    <h5>Los campos marcados en <h10 class="campoenrojo">*</h10> son obligatorios</h5>
    <br/>
    
    <br/>
    <h10 class="campoenrojo">*</h10>Nombre: <input value="<?=$nombre_producto?>" style="color:black;margin-left: 15%; margin-bottom:2%; width: 36%;border-radius: 6px" type="text" name="nombrePro" class="input" required="true" />
    <br/>
    <h10 class="campoenrojo">*</h10>Precio: <input type="text" style="color:black;margin-left: 15%; margin-bottom:1%; width: 39%;border-radius: 6px" name="precioPro" value="<?=$precio_por_unidad?>" class="input" required="true" />
    <br/>
    <h10 class="campoenrojo">*</h10>Stock: <input type="text" style="color:black;margin-left: 15%; margin-bottom:2%; width: 35%;border-radius: 6px" name="stock" value="<?=$stok_producto?>" class="input" required="true" />
    <br/>
    <h10 class="campoenrojo">*</h10>Categoria: <input type="text" style="color:black;margin-left: 15%; margin-bottom:2%; width: 36%;border-radius: 6px" name="categoria" value="<?=$id_categoria?>" class="input" required="true" />
 
    <br/>
    <button id="editarPro" class="btn btn-succes">Editar</button>
    
    <a href="<?=base_url()?>Controlador/volver" id="cancelarPro" class="btn btn-succes" style="background-color: red; color: black">Cancelar</a>
    
    
</div>
</form>