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
            if (document.getElementById("enviar") != null)
                document.getElementById("enviar").addEventListener("click", enviar, false);
            if (document.getElementById("acceder") != null)
                document.getElementById("acceder").addEventListener("click", acceder, false);
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

    function enviar() {
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
        let expreg = /^[A-Z][0-9]{7}[A-Z]$|^[0-9]{8}[A-Z]$/gi; //para el DNI y el NIE
        if (!expreg.test(dni)) {
            $('#errordn1').show();
        }
        /*Aquí grabamos el usuario y la contraseña junto con los datos del deportista en la base de datos*/
        $.ajax({
            url: "funciones/guardarDatos.php",
            data: {user: usuario,
                password: clave,
                usuario: usuario,
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
            type: 'POST',
            success: function () {

            }
        });
    }

    function acceder() {
        let nombre = $("#usuario1").val();
        let clave = $("#password1").val();
        let usuarioE = {user: nombre, password: clave};
        $.ajax({
            url: "funciones/accesoUsuario.php",
            data: {usuarioE: usuarioE},
            type: 'POST',
            success: function (response) {
                alert(response);
                $('#usuario1').prop("disabled", true);
                $('#password1').prop("disabled", true);
            }
        });
    }
    /*
     function validaDni() {
     let dni = $('#dni1').val();
     $("#dni1p4").val(dni);
     let expreg = /^[A-Z][0-9]{7}[A-Z]$|^[0-9]{8}[A-Z]$/gi; //para el DNI y el NIE
     if (!expreg.test(dni)) {
     $('#errordn1').show();
     $('#errordn1').text('el DNI no es correcto, revíselo');
     } else {
     $('#errordn1').hide();
     $.ajax({
     url: "../functions/dniValidator.php",
     data: {dni: dni},
     type: 'POST',
     success: function (response) {
     if (response != 'Este DNI no existe') {
     datos = JSON.parse(response);
     $('#dni1').prop("disabled", true);
     
     } else {
     $('#').prop("disabled", true);
     }
     }
     });
     
     }
     }*/
}