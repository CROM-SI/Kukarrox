$(document).ready(function () {
    $("#header").accordion({
        collapsible: true,
        heightStyle: "content"
    });
    $("#header2").accordion({
        collapsible: true,
        heightStyle: "content"
    });



    $("#mensaje").dialog({
        autoOpen: false,
        modal: true,
        buttons: {
            Ok: function () {
                $(this).dialog("close");
            }
        }
    });


    $("#mensajeError").dialog({
        autoOpen: false,
        modal: true,
        buttons: {
            Ok: function () {
                $(this).dialog("close");
            }
        }
    });

    $("#ventanaEli").dialog({
        autoOpen: false,
        modal: true,
        buttons: {
            Ok: function () {
                $(this).dialog("close");
            }
        }
    });
    $("#mensaje2").dialog({
        autoOpen: false,
        modal: true,
        buttons: {
            Ok: function () {
                $(this).dialog("close");
            }
        }
    });
    cargarContent();
    cargarContent2();
});
function cargarContent() {
    $.post(
            base_url + "Controlador/cargarContent", {},
            function (pagina) {
                $("#paginaLogin").html(pagina);
                $("#btn_login").button().click(function () {
                    botonLogin();
                });
                $("#btn_regCli").button();
                $("#btn_regBod").button();
                $("#btn_Prod").button();
                $("#salirAdm").button();
                $("#guardarCli").button();
                $("#btn_verBod").button();
                $("#btn_VerPro").button();
                $("#btn_sol").button();

            }
    );
}

function cargarContent2() {
    $.post(
            base_url + "Controlador/cargarContent2", {},
            function (pagina) {
                $("#paginaLogin2").html(pagina);
                $("#btn_login2").button().click(function () {
                    botonLogin2();


                });
            }
    );
}


function botonLogin() {
    $.post(
            base_url + "Controlador/validaLogin",
            {
                usuario: $("#nickname").val(),
                clave: $("#password").val()
            },
            function (vector) {
                if (vector.valido === false) {
                    $("#mensaje").html("<p>" + vector.mensaje + "</p>");
                    $("#mensaje").dialog("open");
                } else {
                    $("#tablaUsuario").html('');
                }
                cargarContent();
            },
            'json'
            );
}
function botonLogin2() {
    $.post(
            base_url + "Controlador/validaLogin2",
            {
                usuario: $("#nickname2").val(),
                clave: $("#password2").val()
            },
            function (vector) {
                if (vector.valido === false) {
                    $("#mensaje2").html("<p>" + vector.mensaje + "</p>");
                    $("#mensaje2").dialog("open");
                } else {
                    $("#tablaUsuario").html('');
                }
                cargarContent2();
            },
            'json'
            );
}

function cargarRegistroCli() {

    $.post(
            base_url + "Controlador/cargarRegCli",
            {
            },
            function (pagina) {
                $("#menuAdm").hide();
                $("#menuAdm").html(pagina);
                $("#menuAdm").show('fast');
                $("#btn_regCli").click(
                        function () {

                        }

                );
            }
    )
}

function cargarIngresaPro() {

    $.post(
            base_url + "Controlador/cargarIngresarPro",
            {
            },
            function (pagina) {
                $("#menuAdm").hide();
                $("#menuAdm").html(pagina);
                $("#menuAdm").show('fast');
                $("#ingresarPro").click(
                        function () {
                            registrarProducto();
                            $("#nombrePro").val('');
                            $("#precioPro").val('');
                            $("#stockPro").val('');
                            $("#categoria").val('0');
                            $("#nombrePro").focus();

                        }

                );
            }
    );
}

function registrarProducto(){
    
     var nombre = $("#nombrePro").val();
    var precio = $("#precioPro").val();
    var stock = $("#stockPro").val();
    var categ = $("#categoria").val();


    var error = false;

    if (!error && nombre.trim().length <= 0) {
        $("#mensajeError").html("<p>Nombre no ingresado o Erroneo</p>");
        error = true;
    }
    if (!error && precio.trim().length <= 0) {
        $("#mensajeError").html("<p>Precio no ingresado o Erroneo</p>");
        error = true;
    }
    if (!error && stock.trim().length <= 0) {
        $("#mensajeError").html("<p>Stock no ingresado o Erroneo</p>");
        error = true;
    }
    if (!error && categ.trim().length <= 0) {
        $("#mensajeError").html("<p>Categoria no seleccionada</p>");
        error = true;
    }
   

    if (error) {
        $("#mensajeError").dialog("open");

    } else {
        $.post(
                base_url + "Controlador/ingresarProducto",
                {
                    nombre: nombre,
                    precio: precio,
                    stock: stock,
                    categ: categ

                },
                function () {
                    $("#mensajeError").html("<p>Producto Ingresado Exitosamente</p>");
                    $("#mensajeError").dialog("open");
                });
    }
    
}


function cargarRegistroBod() {

    $.post(
            base_url + "Controlador/cargarNuevoBodeguero",
            {
            },
            function (pagina) {
                $("#menuAdm").hide();
                $("#menuAdm").html(pagina);
                $("#menuAdm").show('fast');
                $("#btn_botReg").click(
                        function () {

                            regBodega();
                            $("#nombreBod").val('');
                            $("#apellidoBod").val('');
                            $("#rutBod").val('');
                            $("#digitoBod").val('');
                            $("#nicknameBod").val('');
                            $("#passwordBod").val('');
                            $("#nombreBod").focus();
                        }

                );
            }
    );
}

function regBodega() {
    var nombre = $("#nombreBod").val();
    var apellido = $("#apellidoBod").val();
    var rut = $("#rutBod").val();
    var dig = $("#digitoBod").val();
    var nick = $("#nicknameBod").val();
    var pass = $("#passwordBod").val();


    var error = false;

    if (!error && nombre.trim().length <= 0) {
        $("#mensajeError").html("<p>Nombre no ingresado o Erroneo</p>");
        error = true;
    }
    if (!error && apellido.trim().length <= 0) {
        $("#mensajeError").html("<p>Apellido no ingresado o Erroneo</p>");
        error = true;
    }
    if (!error && rut.trim().length <= 0) {
        $("#mensajeError").html("<p>Rut no ingresado o Erroneo</p>");
        error = true;
    }
    if (!error && dig.trim().length <= 0) {
        $("#mensajeError").html("<p>Digito no ingresado o Erroneo</p>");
        error = true;
    }
    if (!error && nick.trim().length <= 0) {
        $("#mensajeError").html("<p>Nickname no ingresado o Erroneo</p>");
        error = true;
    }
    if (!error && pass.trim().length <= 0) {
        $("#mensajeError").html("<p>Password no ingresada o Erronea</p>");
        error = true;
    }

    if (error) {
        $("#mensajeError").dialog("open");

    } else {
        $.post(
                base_url + "Controlador/registrarBod",
                {
                    nombre: nombre,
                    apellido: apellido,
                    rut: rut,
                    dig: dig,
                    nick: nick,
                    pass: pass

                },
                function () {
                    $("#mensajeError").html("<p>Bedeguero Registrado Exitosamente</p>");
                    $("#mensajeError").dialog("open");
                });
    }

}

function cargarVerBod() {

    $.post(
            base_url + "Controlador/mostrarBod",
            {
            },
            function (pagina) {
                $("#menuAdm").hide();
                $("#menuAdm").html(pagina);
                $("#menuAdm").show('fast');
                $("#btn_verBod").click(
                        function () {

                        }

                );

                $(".btn_eliminar").button();
                $(".btn_editar").button();



            }
    )
}

function cargarVerPro() {

    $.post(
            base_url + "Controlador/mostrarPro",
            {
            },
            function (pagina) {
                $("#menuAdm").hide();
                $("#menuAdm").html(pagina);
                $("#menuAdm").show('fast');
                $("#btn_VerPro").click(
                        function () {

                        }

                );

                $(".btn_eliminar").button();
                $(".btn_editar").button();



            }
    )
}

function cargarSolicitud() {

    $.post(
            base_url + "Controlador/mostrarSolicitud",
            {
            },
            function (pagina) {
                $("#menuAdm").hide();
                $("#menuAdm").html(pagina);
                $("#menuAdm").show('fast');
                $("#btn_sol").click(
                        function () {

                        }

                );

                $(".btn_eliminar").button();
                $(".btn_editar").button();



            }
    )
}

function cargarEditar() {

    $.post(
            base_url + "Controlador/cargarEditar",
            {
            },
            function (pagina) {
                $("#menuAdm").hide();
                $("#menuAdm").html(pagina);
                $("#menuAdm").show('fast');
                $("#btn_editarBod").click(
                        function () {

                        }

                );
            }
    )
}



