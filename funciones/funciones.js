/*function comprobarUsuario() {
 $("#errorvacio2").hide();
 let usuario = $("#usuario").val();
 if (!usuario) {
 $("#errorvacio1").show();
 } else {
 $("#errorvacio1").hide();
 return true;
 }
 }
 
 function comprobarContraseña() {
 $("#errorvacio1").hide();
 let clave = $("#password").val();
 if (clave.length < 6 || clave.length > 8) {
 $("#errorvacio2").show();
 } else {
 $("#errorvacio2").hide();
 return true;
 }
 }
 
 function seguir() {
 $("#errorvacio1").show();
 $("#errorvacio2").show();
 let usuario = $("#usuario").val();
 let clave = $("#password").val();
 if (comprobarContraseña()) {
 if (comprobarUsuario()) {
 $.ajax({
 url: "funciones/combruebaUsuario.php",
 data: {user: usuario, password: clave},
 type: 'POST',
 success: function (response) {
 if (response == 0) {
 $("#errorvacio17").show();
 } else {
 $('#usuario').prop("disabled", true);
 $('#password').prop("disabled", true);
 $("#errorvacio17").hide();
 $("#datos").show();
 $("#continuar").hide();
 }
 }
 });
 }
 }
 }
 */
/*
 function enviaCorreo() {
 let nombre = $('#nombre').val;
 let telefono = $('#telefono').val;
 let mail = $('#mail').val;
 let mensaje = $('#mensaje').val;
 $.ajax({
 url: "funciones/correo.php",
 data: {nombre: nombre,telefono: telefono, mail:mail, mensaje:mensaje},
 type: 'POST',
 success: function (response) {
 if (response == 1) {
 $("#cuentaOk").show();
 } else {
 $("#cuentaNoOk").show();
 }
 }
 });
 }
 */
document.addEventListener("readystatechange", cargarEventos, false);
function cargarEventos() {
    if (document.readyState == "interactive") {
        if (document.readyState == "interactive") {
            if (document.getElementById("usuario") != null)
                document.getElementById("usuario").addEventListener("blur", comprobarUsuario, false);
            if (document.getElementById("password") != null)
                document.getElementById("password").addEventListener("blur", comprobarContraseña, false);
            if (document.getElementById("continuar") != null)
                document.getElementById("continuar").addEventListener("click", seguir, false);
            if (document.getElementById("documento") != null)
                document.getElementById("documento").addEventListener("blur", comprobarDocumento, false);
            if (document.getElementById("enviar") != null)
                document.getElementById("enviar").addEventListener("click", enviaDatos, false);
            if (document.getElementById("acceder") != null)
                document.getElementById("acceder").addEventListener("click", acceso, false);
            if (document.getElementById("correo") != null)
                document.getElementById("correo").addEventListener("click", enviamail, false);
            if (document.getElementById("form1") != null)
                document.getElementById("form1").addEventListener("click", mostrarForm1, false);
            if (document.getElementById("form2") != null)
                document.getElementById("form2").addEventListener("click", mostrarForm2, false);
            if (document.getElementById("form3") != null)
                document.getElementById("form3").addEventListener("click", mostrarForm3, false);
            if (document.getElementById("form4") != null)
                document.getElementById("form4").addEventListener("click", mostrarForm4, false);
        }
    }
    function comprobarUsuario() {
        $("#errorvacio17").hide();
        $("#errorvacio2").hide();
        let usuario = $("#usuario").val();
        if (!usuario) {
            $("#errorvacio1").show();
        } else {
            $("#errorvacio1").hide();
            return true;
        }
    }

    function comprobarContraseña() {
        $("#errorvacio17").hide();
        $("#errorvacio1").hide();
        let clave = $("#password").val();
        if (clave.length < 6 || clave.length > 8) {
            $("#errorvacio2").show();
        } else {
            $("#errorvacio2").hide();
            return true;
        }
    }

    function seguir() {
        $("#errorvacio1").show();
        $("#errorvacio2").show();
        let usuario = $("#usuario").val();
        let clave = $("#password").val();
        /*Aquí comprobamos si el usuario ya existe en la base de datos*/
        if (comprobarContraseña()) {
            if (comprobarUsuario()) {
                $("#continuar").hide();
                $("#spinner").show();
                $("#cuentaNoOk").hide();
                $.ajax({
                    url: "funciones/combruebaUsuario.php",
                    data: {user: usuario, password: clave},
                    type: 'POST',
                    success: function (response) {
                        if (response == 0) {//Esto significa que el usuario existe
                            $("#errorvacio17").show();
                            $("#spinner").hide();
                            $("#continuar").show();
                        } else {
                            $('#usuario').prop("disabled", true);
                            $('#password').prop("disabled", true);
                            $("#errorvacio17").hide();
                            $("#datos").show();
                            $("#continuar").hide();
                            $("#spinner").hide();
                        }
                    }
                });
            }
        }
    }

    function comprobarDocumento() {
        let documento = $("#documento").val();
        let expreg = /^[A-Z][0-9]{7}[A-Z]$|^[0-9]{8}[A-Z]$/gi; //para el DNI y el NIE
        if (!expreg.test(documento)) {
            $('#errordn1').show();
        } else {
            $('#errordn1').hide();
        }
    }

    function enviaDatos() {
        let usuario = $("#usuario").val();
        let clave = $("#password").val();
        let nombre = $("#nombre").val();
        let apellido1 = $("#apellido1").val();
        let apellido2 = $("#apellido2").val();
        let tipo = $("#tipo").val();
        let documento = $("#documento").val();
        let nacimiento = $("#nacimiento").val();
        let lugarnacim = $("#lugarNac").val();
        let nacionalidad = $("#pais").val();
        let direccion = $("#address").val();
        let ciudad = $("#ciudad").val();
        let provincia = $("#provincia").val();
        let codpostal = $("#CP").val();
        let telefono = $("#telefono").val();
        let mail = $("#mail").val();
        let enfermedad = $("#dolencia").val();
        let mensaje = $("#mensaje").val();
        let conformidad = $("#conformidad").val();
        /*Aquí grabamos el usuario y la contraseña junto con los datos del deportista en la base de datos*/
        $.ajax({
            url: "funciones/guardarficha.php",
            data: {usuario: usuario,
                clave: clave,
                nombre: nombre,
                apellido1: apellido1,
                apellido2: apellido2,
                tipo: tipo,
                documento: documento,
                nacimiento: nacimiento,
                lugarnacim: lugarnacim,
                nacionalidad: nacionalidad,
                direccion: direccion,
                ciudad: ciudad,
                provincia: provincia,
                codpostal: codpostal,
                telefono: telefono,
                mail: mail,
                enfermedad: enfermedad,
                mensaje: mensaje,
                conformidad: conformidad
            },
            type: 'GET',
            success: function (response) {
                if (response == 0) {
                    $('#datos').hide();
                    $('#condiciones').hide();
                    $("#cuentaNoOk").show();
                    $("#continuar").show();
                    $('#usuario').removeAttr("disabled");
                    $('#password').removeAttr("disabled");

                } else {
                    $("#cuentaOk").show();
                    $('#ficha').hide();
                    $('#condiciones').hide();
                }
            }
        });
    }

    function enviamail() {
        let nombre = $("#nombre").val();
        let telefono = $("#telefono").val();
        let correo = $("#correo").val();
        let mensaje = $("#mensaje").val();
        $.ajax({
            url: "funciones/correo.php",
            data: {name: nombre,
                phone: telefono,
                correoel: correo,
                text: mensaje
            },
            type: 'POST',
            success: function (response) {
                alert(response);
            }
        });
    }

    function acceso() {
        let nombre = $("#usuario").val();
        let clave = $("#password").val();
        $.ajax({
            url: "funciones/accesoUsuario.php",
            data: {user: nombre, password: clave},
            type: 'POST',
            success: function (response) {
                if (response == 1) {
                    $(location).attr('href','../formulario.php');
                } else {
                    $("#errorregistro").show();
                }
            }
        });
    }

    function mostrarForm1() {
        $("#form22").hide();
        $("#form33").hide();
        $("#form44").hide();
        $("#form11").show();
    }

    function mostrarForm2() {
        $("#form11").hide();
        $("#form33").hide();
        $("#form44").hide();
        $("#form22").show();
    }

    function mostrarForm3() {
        $("#form11").hide();
        $("#form22").hide();
        $("#form44").hide();
        $("#form33").show();
    }

    function mostrarForm4() {
        $("#form11").hide();
        $("#form22").hide();
        $("#form33").hide();
        $("#form44").show();
    }

}