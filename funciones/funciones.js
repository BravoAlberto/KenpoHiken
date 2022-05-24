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
            if (document.getElementById("enviar") != null){
                $("#enviar").on("click",function(event){
                    event.preventDefault();
                    enviaDatos();
                }); 
            }
            if (document.getElementById("acceder") != null){
                $("#acceder").on("click",function(event){
                    event.preventDefault();
                    acceso();
                });                
            }
            if (document.getElementById("usuarioAcceso") != null)
                document.getElementById("usuarioAcceso").addEventListener("blur", comprobarUsuAcc, false);
            if (document.getElementById("passwordAcceso") != null)
                document.getElementById("passwordAcceso").addEventListener("blur", comprobarContAcc, false);
            if (document.getElementById("correo") != null){
                $("#correo").on("click",function(event){
                    event.preventDefault();
                    enviamail();
                }); 
            }
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

    //Función para comprobar la existencia del campo usuario en página registro.php
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
    //Función para comprobar la existencia del campo password y su longitud en página registro.php
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

    /*Llamamos a las funciones anteriores (comprobarUsuario() & comprobarContraseña()
     para luego con Jquery llamar a la página combruebaUsuario.php y hacer petición a la BBDD
     con objeto de comprobar que el usuario existe*/
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

    //Función para comprobar con una Expresión relativa los campos del documentos
    function comprobarDocumento() {
        let documento = $("#documento").val();
        let expreg = /^[A-Z][0-9]{7}[A-Z]$|^[0-9]{8}[A-Z]$/gi; //para el DNI y el NIE
        if (!expreg.test(documento)) {
            $('#errordn1').show();
        } else {
            $('#errordn1').hide();
        }
    }
    /*
     Función para enviar de la página registro.php todos los datos introducidos a la página del lado del servidor 
     guardarficha.php y así grabar los datos en 2 tablas,
     1. Usuario y contraseña en la tabla usuario.
     2. Resto de datos en la tabla ficha.
     */
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
            },
            type: 'POST',
            success: function (response) {
                alert(response);
                if (response == 1) {
                    alert('paso 1');
                    $("#cuentaOk").show();
                    $('#ficha').hide();
                    $('#condiciones').hide();
                } else if (response == 0) {
                    alert('paso 0');
                    $('#datos').hide();
                    $('#condiciones').hide();
                    $("#cuentaNoOk").show();
                    $("#continuar").show();
                    $('#usuario').removeAttr("disabled");
                    $('#password').removeAttr("disabled");
                } else {
                    alert('faltan datos');
                }
            }
        });
    }

    /*Función para recoger los datos del usuario y enviarlos a la página del servidor correo.php
     y así poder enviar consultas reales por email.
     */

    function enviamail() {
        let nombre = $("#nombreMail").val();
        let telefono = $("#telefonoMail").val();
        let correo = $("#emailMail").val();
        let mensaje = $("#mensajeMail").val();
        if(nombre==""|| telefono=="" || correo=="" || mensaje==""){
            alert("No puedes dejar los campos vacios");
        }else{
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
    }

    //Función para comprobar la existencia del campo usuarioAcceso en página incio.php
    function comprobarUsuAcc() {
        $("#ErrorClave").hide();
        let usuario = $("#usuarioAcceso").val();
        if (!usuario) {
            $("#errorUsu").show();
        } else {
            $("#errorUsu").hide();
            return true;
        }
    }

    //Función para comprobar la existencia del campo passwordAcceso y su longitud en página incio.php
    function comprobarContAcc() {
        $("#errorUsu").hide();
        let clave = $("#passwordAcceso").val();
        if (clave.length < 6 || clave.length > 8) {
            $("#ErrorClave").show();
        } else {
            $("#ErrorClave").hide();
            return true;
        }
    }
    /*Llamamos a las funciones anteriores (comprobarUsuAcc() & comprobarContAcc()
     para luego con Jquery llamar a la página accesoUsuario.php y hacer petición a la BBDD
     con objeto de comprobar los usuarios inbtroducidos y redirigirlos a las URLs
     correspondientes según existan o el tipo de usuario introducido*/
    function acceso() {
        let nombre = $("#usuarioAcceso").val();
        let clave = $("#passwordAcceso").val();
        if (comprobarContAcc()) {
            if (comprobarUsuAcc()) {
                $("#acceder").hide();
                $("#spinnerAcceso").show();
                $.ajax({
                    url: "funciones/accesoUsuario.php",
                    data: {user: nombre, password: clave},
                    type: 'POST',
                    success: function (response) {
                         if (response == 0) {
                         window.location.href = 'administrador.php';
                         } else if (response == 1) {
                         window.location.href = 'formularios.php';
                         } else {
                         $("#errorRegistro").show();
                         }
                    }
                });
            }
        }
    }

    /*Función para mostrar el formulario de la ficha en la página formularios.php y a su vez 
     para poder llamar a la página del servidor traeFicha.php y traer todos los campos de loa
     tabla ficha y grabarlos en los campos de este formulario al cargarlo.
     */
    function mostrarForm1() {
        $("#form22").hide();
        $("#form33").hide();
        $("#form44").hide();
        $("#form11").show();
        let usuario = $("#useroculto").val();
        $.ajax({
            url: "funciones/traeFicha.php",
            data: {user: usuario},
            type: 'POST',
            success: function (response) {
                if (response != 0) {
                    datosFicha = JSON.parse(response);
                    $('#nombreFi').val(datosFicha.nombre);
                    $('#apellidoFi1').val(datosFicha.apellido1);
                    $('#apellidoFi2').val(datosFicha.apellido2);
                    $('#tipoFi').val(datosFicha.tipo);
                    $('#documentoFi').val(datosFicha.documento);
                    $('#nacimientoFi').val(datosFicha.nacimiento);
                    $('#lugarNacFi').val(datosFicha.lugarnacim);
                    $('#paisFi').val(datosFicha.nacionalidad);
                    $('#addressFi').val(datosFicha.direccion);
                    $('#ciudadFi').val(datosFicha.ciudad);
                    $('#provinciaFi').val(datosFicha.provincia);
                    $('#CPFi').val(datosFicha.codpostal);
                    $('#telefonoFi').val(datosFicha.telefono);
                    $('#mailFi').val(datosFicha.mail);
                    $('#dolenciaFi').val(datosFicha.enfermedad);
                    $('#mensajeFi').val(datosFicha.mensaje);
                    $('#ciudadFi').val(datosFicha.ciudad);
                }
            }
        });
    }

    /*Función para mostrar el formulario de la autorización de las imágenes en la página formularios.php
     y a su vez para poder llamar a la página del servidor traeFicha.php y traer todos los campos de la
     tabla ficha y grabarlos en los campos de este formulario al cargarlo.
     */
    function mostrarForm2() {
        $("#form11").hide();
        $("#form33").hide();
        $("#form44").hide();
        $("#form22").show();
        let usuario = $("#useroculto").val();
        $.ajax({
            url: "funciones/traeMandatoMen.php",
            data: {user: usuario},
            type: 'POST',
            success: function (response) {
                alert(reponse);
                if (response != 0) {
                    datosFicha = JSON.parse(response);
                    $('#nombreManMen').val(datosFicha.nombre);
                    $('#apellidoManMen').val(datosFicha.apellido1);
                    $('#apellidoManMen2').val(datosFicha.apellido2);
                    $('#documentoManMen').val(datosFicha.documento);
                    $('#domicilioManMen').val(datosFicha.direccion);
                    $('#localidadManMen').val(datosFicha.ciudad);
                    $('#telefonoManMen').val(datosFicha.telefono);
                    $('#localidadManMen').val(datosFicha.ciudad);
                    /*Faltarían los datos del tutor pero dudo de como condicionarlo
                    al poder haberse guardado o no.
                    */
                }
            }
        });
    }

    /*Función para mostrar el formulario del mandato a <18 años en la página formularios.php y a su vez 
     para poder llamar a la página del servidor traeFicha.php y traer todos los campos de loa
     tabla ficha y grabarlos en los campos de este formulario al cargarlo.
     */
    function mostrarForm3() {
        $("#form11").hide();
        $("#form22").hide();
        $("#form44").hide();
        $("#form33").show();
    let usuario = $("#useroculto").val();
        $.ajax({
            url: "funciones/traeMandato.php",
            data: {user: usuario},
            type: 'POST',
            success: function (response) {
                alert(reponse);
                if (response != 0) {
                    datosFicha = JSON.parse(response);
                    $('#nombreManMen').val(datosFicha.nombre);
                    $('#apellidoManMen').val(datosFicha.apellido1);
                    $('#apellidoManMen').val(datosFicha.apellido2);
                    $('#tipoFi').val(datosFicha.tipo);
                    $('#documentoFi').val(datosFicha.documento);
                    $('#nacimientoFi').val(datosFicha.nacimiento);
                    $('#lugarNacFi').val(datosFicha.lugarnacim);
                    $('#paisFi').val(datosFicha.nacionalidad);
                    $('#addressFi').val(datosFicha.direccion);
                    $('#ciudadFi').val(datosFicha.ciudad);
                    $('#provinciaFi').val(datosFicha.provincia);
                    $('#CPFi').val(datosFicha.codpostal);
                    $('#telefonoFi').val(datosFicha.telefono);
                    $('#mailFi').val(datosFicha.mail);
                    $('#dolenciaFi').val(datosFicha.enfermedad);
                    $('#mensajeFi').val(datosFicha.mensaje);
                    $('#ciudadFi').val(datosFicha.ciudad);
                }
            }
        });
    }

    /*Función para mostrar el formulario del mandato a >18 años en la página formularios.php y a su vez 
     para poder llamar a la página del servidor traeFicha.php y traer todos los campos de loa
     tabla ficha y grabarlos en los campos de este formulario al cargarlo.
     */
    function mostrarForm4() {
        $("#form11").hide();
        $("#form22").hide();
        $("#form33").hide();
        $("#form44").show();
    let usuario = $("#useroculto").val();
        $.ajax({
            url: "funciones/traeMandatoMen.php",
            data: {user: usuario},
            type: 'POST',
            success: function (response) {
                alert(reponse);
                if (response != 0) {
                    datosFicha = JSON.parse(response);
                    $('#nombreManMen').val(datosFicha.nombre);
                    $('#apellidoManMen').val(datosFicha.apellido1);
                    $('#apellidoManMen').val(datosFicha.apellido2);
                    $('#tipoFi').val(datosFicha.tipo);
                    $('#documentoFi').val(datosFicha.documento);
                    $('#nacimientoFi').val(datosFicha.nacimiento);
                    $('#lugarNacFi').val(datosFicha.lugarnacim);
                    $('#paisFi').val(datosFicha.nacionalidad);
                    $('#addressFi').val(datosFicha.direccion);
                    $('#ciudadFi').val(datosFicha.ciudad);
                    $('#provinciaFi').val(datosFicha.provincia);
                    $('#CPFi').val(datosFicha.codpostal);
                    $('#telefonoFi').val(datosFicha.telefono);
                    $('#mailFi').val(datosFicha.mail);
                    $('#dolenciaFi').val(datosFicha.enfermedad);
                    $('#mensajeFi').val(datosFicha.mensaje);
                    $('#ciudadFi').val(datosFicha.ciudad);
                }
            }
        });
    }

    /*Con estas funciones se podran grabar los datos nuevos o actualizar los que modifique el usuario.
     Para grabar los datos de los tutores será necesario grabar también el dato del usuario que va incorporado
     en un campo oculto al inicio de la página formularios.php con el #useroculto
     */
    function grabarForm1() {}
    function grabarForm2() {}
    function grabarForm3() {}
    function grabarForm4() {}

}