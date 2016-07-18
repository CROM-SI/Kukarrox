<form method="post" action="<?=base_url()?>Controlador/editarCate/<?=$id_categoria?>">
<div id="form">
    
    <h3 class="textoregistrarcliente">Editar Categoria</h3>
    <h5>Los campos marcados en <h10 class="campoenrojo">*</h10> son obligatorios</h5>
    <br/>
    
    <br/>
    <h10 class="campoenrojo">*</h10>Producto: <input value="<?=$nombre_categoria?>" style="color:black;margin-left: 15%; margin-bottom:2%; width: 36%;border-radius: 6px" type="text" name="nombreCate" class="input" required="true" maxlength="30" />
    
   
 
    <br/>
    <button id="editarPro" class="btn btn-succes">Editar</button>
    
    <a href="<?=base_url()?>Controlador/volver" id="cancelarPro" class="btn btn-succes" style="background-color: red; color: black">Cancelar</a>
    
    
</div>
</form>