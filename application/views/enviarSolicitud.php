
<form method="post" action="<?= base_url() ?>Controlador/enviarSolicitud">
    <div class="row" style=" width: 90%;margin-left: 5%">
        <div id="form3">

        <h3 class="textoregistrarcliente">Solicitud de registro</h3>
        <h5>Los campos marcados en <h10 class="campoenrojo">*</h10> son obligatorios</h5>
        <br/>
        <h10 class="campoenrojo">*
        </h10>Nombre: <input type="text" name="nombreCliSo" id="nombreCliSo" 
                      required="true" maxlength="15" pattern="^[a-zA-Z]{3,15}"
                             style="
                             color:black;
                             margin-left: 12%;
                             margin-bottom:2%; 
                             width: 45%;
                             border-radius: 6px"/>
        <br/>
        <h10 class="campoenrojo">*
        </h10>Apellido: <input type="text"  name="apellidoCliSo" 
                        id="apellidoCliSo" required="true" maxlength="15"
                             pattern="^[a-zA-Z]{3,15}"
                        style="
                               color:black;
                               margin-left: 12%;
                               margin-bottom:2%; 
                               width: 45%;
                               border-radius: 6px"
                               
                               />
        <br/>
        <h10 class="campoenrojo">*
        </h10>Direccion del local: <input  type="text" name="direccionCliSo"
                                    id="direccionCliSo" required="true" 
                                    maxlength="40"  pattern="^[a-zA-Z]{3,32} [#]{1}[0-9]{1,5}"
                                           style="
                                           margin-left: 20px;
                                           color:black;
                                           margin-bottom:2%; 
                                           width: 45%;
                                           border-radius: 6px"/>
        <br/>
        <h10 class="campoenrojo">*
        </h10>Teléfono: <input type="text" name="telefonoCliSo" id="telefonoCliSo"
                        required="true" maxlength="9"pattern="[0-9]{9}"
                         style="
                               color:black;
                               margin-left: 11%;
                               margin-bottom:2%; 
                               width: 45%;
                               border-radius: 6px"/>
        <br/>
        <h10 class="campoenrojo">*
        </h10>Ciudad: <input type="text"  name="ciudadCliSo" class="inRegCliSo" 
                      id="inRegCliSo" required="true" maxlength="25"pattern="[a-zA-Z]{3,25}"
                       style="
                               color:black;
                               margin-left: 12%;
                               margin-bottom:2%; 
                               width: 45%;
                               border-radius: 6px"/>
        <br/>
        <h10 class="campoenrojo">*
        </h10>Rut: <input type="text" name="rutCliSo" id="rutCliSo" required="true"
                   maxlength="8" pattern="[0-9]{8}"
                          style="color:black;
                          margin-left: 109px;
                          margin-bottom:2%;
                          width: 31%;
                          border-radius: 6px"/>
        <input type="text"  name="digitoCliSo" id="digitoCliSo" required="true" maxlength="1"
               style="color:black;
               margin-left: 5%;
               margin-bottom:2%;
               width: 8%;
               border-radius: 6px" />
        <br/>
        <h10 class="campoenrojo">*
        </h10>Rol del local: <input type="id" name="rolCliSo" id="rolCliSo" required="true" 
                             pattern="[0-9]{3,20}" maxlength="20"
                             style="
                               color:black;
                               margin-left: 8%;
                               margin-bottom:2%; 
                               width: 45%;
                               border-radius: 6px"/>
        <br/>
        

        <h10 class="campoenrojo">*
        </h10>Correo: <input type="email" name="correoCliSo" id="correoCliSo" required="true" maxlength="45"
                      style="
                               color:black;
                               margin-left: 12%;
                               margin-bottom:2%; 
                               width: 45%;
                               border-radius: 6px"/>
        <br/>
        <br>
        <button class="btn btn-succes" id="guardarSoli">Guardar</button>

        </div>
    </div>
</form>

