<form method="post" action="<?=base_url()?>Controlador/editarBod/<?=$id_usuario?>">
<div id="form">
    
    <h3 class="textoregistrarcliente">Editar encargado de bodega</h3>
    <h5>Los campos marcados en <h10 class="campoenrojo">*</h10> son obligatorios</h5>
    <br/>
    
    <br/>
    <h10 class="campoenrojo">*</h10>Nombre: <input value="<?=$nombre_usuario?>" style="color:black;margin-left: 15%; margin-bottom:2%; width: 36%;border-radius: 6px" type="text" name="nombreBodE" class="input" required="true" />
    <br/>
    <h10 class="campoenrojo">*</h10>Apellido: <input type="text" style="color:black;margin-left: 15%; margin-bottom:1%; width: 39%;border-radius: 6px" name="apellidoBodE" value="<?=$apellido_usuario?>" class="input" required="true" />
    <br/>
    <h10 class="campoenrojo">*</h10>Rut: <input type="text" style="color:black;margin-left: 15%; margin-bottom:2%; width: 35%;border-radius: 6px" name="rutBodE" value="<?=$rut?>" class="input" required="true" />
    <br/>
    <h10 class="campoenrojo">*</h10>Nickname: <input type="text" style="color:black;margin-left: 15%; margin-bottom:2%; width: 36%;border-radius: 6px" name="nicknameBodE" value="<?=$nickname?>" class="input" required="true" />
 
    <br/>
    <button id="editarBod" class="btn btn-succes">Editar</button>
    
    <a href="<?=base_url()?>Controlador/volver" id="cancelarEdi" class="btn btn-succes" style="background-color: red; color: black">Cancelar</a>
    
    
</div>
</form>

