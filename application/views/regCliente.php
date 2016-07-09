<form method="post" action="<?= base_url() ?>Controlador/registrarCliente">
    <div id="form">

        <h3 class="textoregistrarcliente">Registrar Cliente</h3>
        <h5>Los campos marcados en <h10 class="campoenrojo">*</h10> son obligatorios</h5>
        <br/>
        <h10 class="campoenrojo">*
        </h10>Nombre: <input type="text" name="nombreCli" required="true"
                             style="
                             color:black;
                             margin-left: 10%;
                             margin-bottom:2%; 
                             width: 45%;
                             border-radius: 6px"/>
        <br/>
        <h10 class="campoenrojo">*
        </h10>Apellido: <input type="text"  name="apellidoCli" required="true"
                               style="
                               color:black;
                               margin-left: 10%;
                               margin-bottom:2%; 
                               width: 45%;
                               border-radius: 6px"/>
        <br/>
        <h10 class="campoenrojo">*
        </h10>Direccion del local: <input  type="text" name="direccionCli" required="true"
                                           style="
                                           color:black;
                                           margin-bottom:2%; 
                                           width: 45%;
                                           border-radius: 6px"/>
        <br/>
        <h10 class="campoenrojo">*
        </h10>Teléfono: <input type="text" name="telefonoCli" required="true"
                         style="
                               color:black;
                               margin-left: 9%;
                               margin-bottom:2%; 
                               width: 45%;
                               border-radius: 6px"/>
        <br/>
        <h10 class="campoenrojo">*
        </h10>Ciudad: <input type="text"  name="ciudadCli" class="inRegCli"
                       style="
                               color:black;
                               margin-left: 11%;
                               margin-bottom:2%; 
                               width: 45%;
                               border-radius: 6px"/>
        <br/>
        <h10 class="campoenrojo">*
        </h10>Rut: <input type="text" name="rutCli" 
                          style="color:black;
                          margin-left: 14%;
                          margin-bottom:2%;
                          width: 32%;
                          border-radius: 6px"/>
        <input type="text"  name="digitoCli" 
               style="color:black;
               margin-left: 4%;
               margin-bottom:2%;
               width: 8%;
               border-radius: 6px" />
        <br/>
        <h10 class="campoenrojo">*
        </h10>Rol del local: <input type="id" name="rolCli" required="true"
                             style="
                               color:black;
                               margin-left: 6%;
                               margin-bottom:2%; 
                               width: 45%;
                               border-radius: 6px"/>
        <br/>
        <h10 class="campoenrojo">*
        </h10>Nickname: <input type="text" name="nicknameCli" required="true"
                        style="
                               color:black;
                               margin-left: 8%;
                               margin-bottom:2%; 
                               width: 45%;
                               border-radius: 6px"/>
        <br/>
        <h10 class="campoenrojo">*
        </h10>Password: <input type="text"  name="passwordCli" required="true"
                        style="
                               color:black;
                               margin-left: 9%;
                               margin-bottom:2%; 
                               width: 45%;
                               border-radius: 6px"/>
        <br/>

        <h10 class="campoenrojo">*
        </h10>Correo: <input type="text" name="correoCli" required="true"
                      style="
                               color:black;
                               margin-left: 11%;
                               margin-bottom:2%; 
                               width: 45%;
                               border-radius: 6px"/>
        <br/>
        <br>
        <button class="btn btn-succes" style="margin-top: 5%; border: 1px black solid" id="guardarCli">Guardar</button>


    </div>
</form>
