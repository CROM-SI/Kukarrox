<form method="post" action="<?=base_url()?>Controlador/cambiarPassBodeguero">
<div id="form">
    
    <h3 class="textoregistrarcliente">Cambiar contraseña</h3>
    <h5>Los campos marcados en <h10 class="campoenrojo">*</h10> son obligatorios</h5>
    <br/>
    
    <br/>
    <h10 class="campoenrojo">*</h10>
    Contraseña nueva: <input type="text" id="pass1" name="pass1"required="true"
                   maxlength="20"
                   style="
                               color:black;
                               margin-left: 9%;
                               margin-bottom:2%; 
                               width: 45%;
                               border-radius: 6px"/>
    <br/>
    <h10 class="campoenrojo">*</h10>
    Repita la contraseña nueva: <input type="text" id="pass2" name="pass2" required="true" maxlength="20"
                     style="
                               color:black;
                               margin-left: 9%;
                               margin-bottom:2%; 
                               width: 45%;
                               border-radius: 6px"/>
    <br/>
    
    <button id="btn_guardarPassBod" style="margin-top: 5%; border: 1px black solid" class="btn btn-succes">Cambiar</button>
    
    
</div>

</form>
