//@author Alberto Bravo 
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
            if (document.getElementById("documentoCesImTu") != null)
                document.getElementById("documentoCesImTu").addEventListener("blur", comprobarDocumento2, false);
            if (document.getElementById("mail") != null)
                document.getElementById("mail").addEventListener("blur", comprobarEmail, false);
            if (document.getElementById("telefono") != null)
                document.getElementById("telefono").addEventListener("blur", comprobarTelefono, false);
            if (document.getElementById("CP") != null)
                document.getElementById("CP").addEventListener("blur", comprobarCP, false);
            if (document.getElementById("telefonoMail") != null)
                document.getElementById("telefonoMail").addEventListener("blur", comprobarTelefono2, false);
            if (document.getElementById("emailMail") != null)
                document.getElementById("emailMail").addEventListener("blur", comprobarEmail2, false);
            if (document.getElementById("nacimiento") != null)
                document.getElementById("nacimiento").addEventListener("blur", comprobarFecha, false);
            if (document.getElementById("enviar") != null) {
                $("#enviar").on("click", function (event) {
                    event.preventDefault();
                    enviaDatos();
                });
            }
            if (document.getElementById("acceder") != null) {
                $("#acceder").on("click", function (event) {
                    event.preventDefault();
                    acceso();
                });
            }
            if (document.getElementById("usuarioAcceso") != null)
                document.getElementById("usuarioAcceso").addEventListener("blur", comprobarUsuAcc, false);
            if (document.getElementById("passwordAcceso") != null)
                document.getElementById("passwordAcceso").addEventListener("blur", comprobarContAcc, false);
            if (document.getElementById("correo") != null) {
                $("#correo").on("click", function (event) {
                    event.preventDefault();
                    enviamail();
                });
            }
            if (document.getElementById("form1") != null)
                document.getElementById("form1").addEventListener("click", mostrarForm1, false);
            if (document.getElementById("form3") != null)
                document.getElementById("form3").addEventListener("click", mostrarForm3, false);
            if (document.getElementById("form4") != null) {
                $("#form4").on("click", function (event) {
                    event.preventDefault();
                    mostrarForm4();
                });
            }
            if (document.getElementById("aceptacionFicha") != null)
                document.getElementById("aceptacionFicha").addEventListener("click", aceptacionForm1, false);
            if (document.getElementById("aceptacionCondicionesImg") != null)
                document.getElementById("aceptacionCondicionesImg").addEventListener("click", aceptacionForm3, false);
            if (document.getElementById("aceptacionMandatoMay") != null)
                document.getElementById("aceptacionMandatoMay").addEventListener("click", aceptacionForm4, false);
            if (document.getElementById("enviopdf11") != null) {
                $("#enviopdf11").on("click", function (event) {
                    event.preventDefault();
                    grabarForm1();
                });
            }
            if (document.getElementById("enviopdf22") != null) {
                $("#enviopdf22").on("click", function (event) {
                    event.preventDefault();
                    grabarForm2();
                });
            }
            if (document.getElementById("enviopdf33") != null) {
                $("#enviopdf33").on("click", function (event) {
                    event.preventDefault();
                    grabarForm3();
                });
            }
            if (document.getElementById("enviopdf33") != null) {
                $("#enviopdf44").on("click", function (event) {
                    event.preventDefault();
                    grabarForm4();
                });
            }
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
     para luego con Jquery llamar a la página compruebaUsuario.php y hacer petición a la BBDD
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

    function comprobarDocumento2() {
        let documento = $("#documentoCesImTu").val();
        let expreg = /^[A-Z][0-9]{7}[A-Z]$|^[0-9]{8}[A-Z]$/gi; //para el DNI y el NIE
        if (!expreg.test(documento)) {
            $('#errordnForm').show();
        } else {
            $('#errordnForm').hide();
        }
    }

    function comprobarEmail() {
        let email = $("#mail").val();
        let expreg = /^[\w\.]{1,50}@[\w]{1,50}\.[a-z]{1,6}$/gi; //para la correcta estructura de un email
        if (!expreg.test(email)) {
            $('#errormail').show();
        } else {
            $('#errormail').hide();
        }
    }

    function comprobarEmail2() {
        let email = $("#emailMail").val();
        let expreg = /^[\w\.]{1,50}@[\w]{1,50}\.[a-z]{1,6}$/gi; //para la correcta estructura de un email
        if (!expreg.test(email)) {
            $('#errormailMail').show();
        } else {
            $('#errormailMail').hide();
        }
    }

    function comprobarTelefono() {
        let telefono = $("#telefono").val();
        let expreg = /^[0-9]{9}$/g; //para la correcta estructura de un email
        if (!expreg.test(telefono)) {
            $('#errorTelefono').show();
        } else {
            $('#errorTelefono').hide();
        }
    }

    function comprobarTelefono2() {
        let telefono = $("#telefonoMail").val();
        let expreg = /^[0-9]{9}$/g; //para la correcta estructura de un email
        if (!expreg.test(telefono)) {
            $('#errorTelefonoMail').show();
        } else {
            $('#errorTelefonoMail').hide();
        }
    }
    function comprobarCP() {
        let CP = $("#CP").val();
        let expreg = /^[0-9]{5}$/g; //para la correcta estructura de un email
        if (!expreg.test(CP)) {
            $('#errorCP').show();
        } else {
            $('#errorCP').hide();
        }
    }

    function comprobarFecha() {
        let nacimiento = $("#nacimiento").val();
        let hoy = new Date();
        let fecha = new Date(nacimiento);
        if (fecha > hoy) {
            $('#errorFecha').show();
        } else {
            $('#errorFecha').hide();
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
        if (nombre == "" || apellido1 == "" || tipo == "" || documento == "" || nacimiento == "" || lugarnacim == "" || nacionalidad == "" || direccion == "" || ciudad == "" || provincia == "" || codpostal == "" || telefono == "" || mail == "" || enfermedad == "") {
            $("#camposVacios").show();
            //Para ocultar el aviso a los 5 segundos.
            setInterval('$("#camposVacios").hide();', 5000);
        } else {
            $("#spinnerEnviar").show();
            $("#enviar").hide();
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
                    if (response == 1) {
                        $("#cuentaOk").show();
                        $('#ficha').hide();
                        $('#condiciones').hide();
                        $("#enviar").show();
                        $("#spinnerEnviar").hide();
                    } else if (response == 0) {
                        $('#datos').hide();
                        $('#condiciones').hide();
                        $("#cuentaNoOk").show();
                        $("#continuar").show();
                        $('#usuario').removeAttr("disabled");
                        $('#password').removeAttr("disabled");
                        $("#enviar").show();
                        $("#spinnerEnviar").hide();
                    } else {
                        $("#camposVacios").show();
                        $("#enviar").show();
                        $("#spinnerEnviar").hide();
                    }
                }
            });
        }
    }


    /*Función para recoger los datos del usuario y enviarlos a la página del servidor correo.php
     y así poder enviar consultas reales por email.
     */

    function enviamail() {
        let nombre = $("#nombreMail").val();
        let telefono = $("#telefonoMail").val();
        let correo = $("#emailMail").val();
        let mensaje = $("#mensajeMail").val();
        if (nombre == "" || telefono == "" || correo == "" || mensaje == "") {
            $("#camposVaciosContacto").show();
            setInterval('$("#camposVaciosContacto").hide();', 7000);
        } else {
            $.ajax({
                url: "funciones/correo.php",
                data: {name: nombre,
                    phone: telefono,
                    correoel: correo,
                    text: mensaje
                },
                type: 'POST',
                success: function (response) {
                    if (response == 0) {
                        $("#camposVaciosContacto").hide();
                        $("#mailNoOk").show();
                        $("#mailOk").hide();
                    } else {
                        $("#camposVaciosContacto").hide();
                        $("#mailOk").show();
                        $("#mailNoOk").hide();
                    }
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
                            setTimeout('$("#errorRegistro").hide();', 3000);
                            $("#spinnerAcceso").hide();
                            $("#acceder").show();
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
        $("#downloadOK11").hide();
        $("#form22").hide();
        $("#form33").hide();
        $("#form44").hide();
        $("#form11").show();
        let hoy = new Date();
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
                    $('#ciudad2').val(datosFicha.ciudad);
                    $('#fecha2').val(hoy.getDate() + "/" + (hoy.getMonth() + 1) + "/" + hoy.getFullYear());
                    $('#nombreFi').prop("disabled", true);
                    $('#apellidoFi1').prop("disabled", true);
                    $('#apellidoFi2').prop("disabled", true);
                    $('#tipoFi').prop("disabled", true);
                    $('#documentoFi').prop("disabled", true);
                    $('#nacimientoFi').prop("disabled", true);
                    $('#lugarNacFi').prop("disabled", true);
                    $('#paisFi').prop("disabled", true);
                    $('#addressFi').prop("disabled", true);
                    $('#ciudadFi').prop("disabled", true);
                    $('#provinciaFi').prop("disabled", true);
                    $('#CPFi').prop("disabled", true);
                    $('#telefonoFi').prop("disabled", true);
                    $('#mailFi').prop("disabled", true);
                    $('#dolenciaFi').prop("disabled", true);
                    $('#mensajeFi').prop("disabled", true);
                    $('#ciudad2').prop("disabled", true);
                    $('#fecha2').prop("disabled", true);
                }
            }
        });
    }

    /*Función para mostrar el formulario de la autorización de las imágenes en la página formularios.php
     y a su vez para poder llamar a la página del servidor traeFicha.php y traer todos los campos de la
     tabla ficha y grabarlos en los campos de este formulario al cargarlo.
     */
    //DESABILITADO
    /*
     function mostrarForm2() {
     $("#downloadOK22").hide();
     $("#form11").hide();
     $("#form33").hide();
     $("#form44").hide();
     $("#form22").show();
     let hoy = new Date();
     let usuario = $("#useroculto").val();
     $.ajax({
     url: "funciones/traeMandatoMen.php",
     data: {user: usuario},
     type: 'POST',
     success: function (response) {
     if (response != 0) {
     datosFicha = JSON.parse(response);
     $('#nombreManMen').val(datosFicha.nombre);
     $('#apellidoManMen').val(datosFicha.apellido1);
     $('#apellidoManMen2').val(datosFicha.apellido2);
     $('#documentoManMen').val(datosFicha.documento);
     $('#domicilioManMen').val(datosFicha.direccion);
     $('#CPManMen').val(datosFicha.codpostal);
     $('#localidadManMen').val(datosFicha.ciudad);
     $('#ciudad3').val(datosFicha.ciudad);
     $('#fecha3').val(hoy.getDate() + "/" + (hoy.getMonth() + 1) + "/" + hoy.getFullYear());
     $('#nombreManMen').prop("disabled", true);
     $('#apellidoManMen').prop("disabled", true);
     $('#apellidoManMen2').prop("disabled", true);
     $('#documentoManMen').prop("disabled", true);
     $('#domicilioManMen').prop("disabled", true);
     $('#CPManMen').prop("disabled", true);
     $('#localidadManMen').prop("disabled", true);
     $('#ciudad3').prop("disabled", true);
     $('#fecha3').prop("disabled", true);
     }
     }
     });
     }*/

    /*Función para mostrar el formulario de lla cesión de imágenes en la página formularios.php y a su vez 
     para poder llamar a la página del servidor traeFicha.php y traeTutores.php para traer todos los campos de loa
     tablas y grabarlos en los campos de este formulario al cargarlo.
     Si no hay tutores no grabará los campos
     */
    function mostrarForm3() {
        $("#downloadOK33").hide();
        $("#form11").hide();
        $("#form22").hide();
        $("#form44").hide();
        $("#form33").show();
        let hoy = new Date();
        let usuario = $("#useroculto").val();
        $.ajax({
            url: "funciones/traeFicha.php",
            data: {user: usuario},
            type: 'POST',
            success: function (response) {
                if (response != 0) {
                    datosFicha = JSON.parse(response);
                    $('#nombreCesIm').val(datosFicha.nombre);
                    $('#apellidoCesIm').val(datosFicha.apellido1);
                    $('#ciudad4').val(datosFicha.ciudad);
                    $('#fecha4').val(hoy.getDate() + "/" + (hoy.getMonth() + 1) + "/" + hoy.getFullYear());
                    $.ajax({
                        url: "funciones/traeTutores.php",
                        data: {user: usuario},
                        type: 'POST',
                        success: function (response) {
                            if (response != 0) {
                                datosTutor = JSON.parse(response);
                                $('#nombreCesImTu').val(datosTutor.nombre);
                                $('#apellidoCesImTu').val(datosTutor.apellido1);
                                $('#apellidoCesImTu2').val(datosTutor.apellido2);
                                $('#documentoCesImTu').val(datosTutor.documento);
                                $('#nombreCesIm').prop("disabled", true);
                                $('#apellidoCesIm').prop("disabled", true);
                                $('#ciudad4').prop("disabled", true);
                                $('#fecha4').prop("disabled", true);
                                $('#nombreCesImTu').prop("disabled", true);
                                $('#apellidoCesImTu').prop("disabled", true);
                                $('#apellidoCesImTu2').prop("disabled", true);
                                $('#documentoCesImTu').prop("disabled", true);
                            } else {
                                $('#nombreCesIm').prop("disabled", true);
                                $('#apellidoCesIm').prop("disabled", true);
                                $('#ciudad4').prop("disabled", true);
                                $('#fecha4').prop("disabled", true);
                            }
                        }
                    });
                } else {
                    alert("Se ha producido un error");
                }
            }
        });
        /*
         success: function (response) {
         if (response != 0) {
         datosFicha = JSON.parse(response);
         $('#nombreCesIm').val(datosFicha[0].nombre);
         $('#apellidoCesIm').val(datosFicha[0].apellido1);
         $('#ciudad4').val(datosFicha[0].ciudad);
         $('#fecha4').val(hoy.getDate() + "/" + (hoy.getMonth() + 1) + "/" + hoy.getFullYear());
         $('#nombreCesImTu').val(datosFicha[1].nombre);
         $('#apellidoCesImTu').val(datosFicha[1].apellido1);
         $('#apellidoCesImTu2').val(datosFicha[1].apellido2);
         $('#documentoCesImTu').val(datosFicha[1].documento);
         $('#nombreCesIm').prop("disabled", true);
         $('#apellidoCesIm').prop("disabled", true);
         $('#nombreCesImTu').prop("disabled", true);
         $('#apellidoCesImTu').prop("disabled", true);
         $('#apellidoCesImTu2').prop("disabled", true);
         $('#documentoCesImTu').prop("disabled", true);
         $('#ciudad4').prop("disabled", true);
         $('#fecha4').prop("disabled", true);
         }
         }
         });*/
    }

    /*Función para mostrar el formulario del mandato a >18 años en la página formularios.php y a su vez 
     para poder llamar a la página del servidor traeFicha.php y traer todos los campos de loa
     tabla ficha y grabarlos en los campos de este formulario al cargarlo.
     */
    function mostrarForm4() {
        $("#downloadOK44").hide();
        $("#form11").hide();
        $("#form22").hide();
        $("#form33").hide();
        $("#form44").show();
        let hoy = new Date();
        let usuario = $("#useroculto").val();
        $.ajax({
            url: "funciones/traeMandatoMay.php",
            data: {user: usuario},
            type: 'POST',
            success: function (response) {
                if (response != 0) {
                    datosFicha = JSON.parse(response);
                    $('#nombreManMay').val(datosFicha.nombre);
                    $('#apellidoManMay').val(datosFicha.apellido1);
                    $('#apellidoManMay2').val(datosFicha.apellido2);
                    $('#documentoManMay').val(datosFicha.documento);
                    $('#domicilioManMay').val(datosFicha.direccion);
                    $('#CPManMay').val(datosFicha.codpostal);
                    $('#localidadManMay').val(datosFicha.ciudad);
                    $('#ciudad5').val(datosFicha.ciudad);
                    $('#fecha5').val(hoy.getDate() + "/" + (hoy.getMonth() + 1) + "/" + hoy.getFullYear());
                    $('#nombreManMay').prop("disabled", true);
                    $('#apellidoManMay').prop("disabled", true);
                    $('#apellidoManMay2').prop("disabled", true);
                    $('#documentoManMay').prop("disabled", true);
                    $('#domicilioManMay').prop("disabled", true);
                    $('#CPManMay').prop("disabled", true);
                    $('#localidadManMay').prop("disabled", true);
                    $('#ciudad5').prop("disabled", true);
                    $('#fecha5').prop("disabled", true);
                }
            }
        });
    }

    /*Con las 4 funciones que se han creado se podrán aceptar las condiciones y tras aceptarlas,
     el botón de acceso a las mismas se desabilitará y se marcará como disable un checkbox que
     dice que se han aceptado las condiciones.
     */

    function aceptacionForm1() {
        $("#checkFicha").show();
        $("#modal1").prop("disabled", true);
    }
    //DESABILITADO
    /*
     function aceptacionForm2() {
     $("#checkManMen").show();
     $("#modal2").prop("disabled", true);
     }*/

    function aceptacionForm3() {
        $("#checkCesImg").show();
        $("#modal3").prop("disabled", true);
    }

    function aceptacionForm4() {
        $("#checkManMay").show();
        $("#modal4").prop("disabled", true);
    }

    /*Con esta funcion utilizando los datos que rescato de la generación de la cuenta
     * de usuario y los completo para uqe solamente se tengan que aceptar las condiciones.
     */
    function grabarForm1() {
        let usuario = $("#useroculto").val();
        if ($("#conformidad2").is(":checked")) {
            $("#condicionesFi").hide();
            $.ajax({
                url: "funciones/aPDF/pdfFicha.php",
                data: {usuario: usuario},
                type: 'POST',
                success: function (response) {
                    if (response != 0) {
                        $("#downloadOK11").show();
                        window.open('/KenpoHiken/funciones/aPDF/pdfFicha.php?usuario=' + usuario);
                    } else {
                        $("#downloadNoOK11").show();
                        setInterval('$("#downloadNoOK11").hide();', 7000);
                    }
                }
            });
        } else {
            $("#condicionesFi").show();
            setInterval('$("#condicionesFi").hide();', 7000);
        }
    }

    //DESABILITADO
    /*
     function grabarForm2() {
     let usuario = $("#useroculto").val();
     let nombre = $("#nombreManMenTu").val();
     let Apellido1 = $("#apellidoManMenTu").val();
     let Apellido2 = $("#apellidoManMenTu2").val();
     let documento = $("#documentoManMenTu").val();
     let domicilio = $("#domicilioManMenTu").val();
     let CP = $("#CPManMenTu").val();
     let ciudad = $("#localidadManMenTu").val();
     let hoy = $("#fecha3").val();
     alert('entro1');
     //console.log(usuario + " - " + nombre + " - " + Apellido1 + " - " + Apellido2 + " - " + documento + " - " + domicilio + " - " + CP + " - " + ciudad + " - " + hoy);
     if ($("#conformidad3").is(":checked")) {
     $("#condicionesManMen").hide();
     alert('entro2');
     if (nombre == "" || Apellido1 == "" || documento == "" || domicilio == "" || CP == "" || ciudad == "") {
     $("#erroMandMen").show();
     setInterval('$("#erroMandMen").hide();', 10000);
     alert("entro3");
     } else {
     alert("entro4");
     $.ajax({
     url: "funciones/guardarTutorMan.php",
     data: {usuario: usuario,
     nombreTu: nombre,
     Apellido1Tu: Apellido1,
     Apellido2Tu: Apellido2,
     documentoTu: documento,
     domicilioTu: domicilio,
     codPostalTu: CP,
     ciudadTu: ciudad,
     hoyTu: hoy
     },
     type: 'POST',
     success: function (response) {
     if (response == 0) {
     $("#downloadNoOK22").show();
     } else if (response == 1) {
     $("#pdfNoOk22").show();
     } else if (response == 3) {
     $("#pdfNoOk22").show();
     } else {
     $("#downloadOK22").show();
     window.open('funciones/aPDF/pdfMandatoMay.php', '_blank');
     }
     }
     });
     }
     } else {
     $("#condicionesManMen").show();
     setInterval('$("#condicionesManMen").hide();', 7000);
     }
     }*/

//GRABA DATOS FORMULARIO DE CESIÓN DE IMÁGENES
    function grabarForm3() {
        let usuario = $("#useroculto").val();
        let nombre = $("#nombreCesImTu").val();
        let apellido1 = $("#apellidoCesImTu").val();
        let apellido2 = $("#apellidoCesImTu2").val();
        let documento = $("#documentoCesImTu").val();
        let ciudad = $("#ciudad4").val();
        let hoy = $("#fecha3").val();
        if ($("#conformidad4").is(":checked")) {
            $("#condicionesCesImg").hide();
            if (nombre == "" || apellido1 == "" || ciudad == "") {
                $("#erroCesImg").show();
                setInterval('$("#erroCesImg").hide();', 10000);
            } else {
                $.ajax({
                    url: "funciones/guardarTutorCesImg.php",
                    data: {usuario: usuario,
                        nombreTu: nombre,
                        apellido1Tu: apellido1,
                        apellido2Tu: apellido2,
                        documento: documento,
                        ciudadTu: ciudad,
                        hoyTu: hoy
                    },
                    type: 'POST',
                    success: function (response) {
                        if (response == 0) {
                            $("#pdfNoOk33").show();
                        } else if (response == 1) {
                            $("#pdfNoOk33").show();
                        } else {
                            $.ajax({
                                url: "funciones/aPDF/pdfCesionImg.php",
                                data: {usuario: usuario},
                                type: 'POST',
                                success: function (response) {
                                    if (response != 0) {
                                        $("#downloadOK33").show();
                                        window.open('/KenpoHiken/funciones/aPDF/pdfCesionImg.php?usuario=' + usuario);
                                    } else {
                                        $("#downloadNoOK33").show();
                                        setInterval('$("#downloadNoOK33").hide();', 7000);
                                    }
                                }
                            });
                        }
                    }
                });
            }
        } else {
            $("#condicionesCesImg").show();
            setInterval('$("#condicionesCesImg").hide();', 7000);
        }
    }

    function grabarForm4() {
        let usuario = $("#useroculto").val();
        if ($("#conformidad5").is(":checked")) {
            $("#condicionesManMay").hide();
            $.ajax({
                url: "funciones/aPDF/pdfMandatoMay.php",
                data: {usuario: usuario},
                type: 'POST',
                success: function (response) {
                    if (response != 0) {
                        $("#downloadOK44").show();
                        window.open('/KenpoHiken/funciones/aPDF/pdfMandatoMay.php?usuario=' + usuario);
                    } else {
                        $("#downloadNoOK44").show();
                        setInterval('$("#downloadNoOK44").hide();', 7000);
                    }
                }
            });
        } else {
            $("#condicionesManMay").show();
            setInterval('$("#condicionesManMay").hide();', 7000);
        }
    }
    /*
     function adminFicha(user) {
     let usuario = user;
     alert(usuario);
     if (usuario == "") {
     $("#noOk").show();
     setInterval('$("#noOk").hide();', 7000);
     } else {
     $.ajax({
     url: "funciones/aPDF/pdfFicha.php",
     data: {usuario: usuario},
     type: 'POST',
     success: function (response) {
     if (response == 0) {
     $("#noOk").show();
     setInterval('$("#noOk").hide();', 7000);
     } else {
     $("#noOk").hide();
     //window.open('funciones/aPDF/pdfFicha.php', '_blank');
     }
     }
     });
     }
     }
     
     function adminCesionImg() {
     let usuario = $("#cesionImg").val();
     alert(usuario);
     if (usuario == "") {
     $("#noOk").show();
     setInterval('$("#noOk").hide();', 7000);
     } else {
     alert("entro1");
     $.ajax({
     url: "funciones/aPDF/pdfCesionImg.php",
     data: {usuario: usuario},
     type: 'POST',
     success: function (response) {
     if (response == 0) {
     $("#noOk").show();
     setInterval('$("#noOk").hide();', 7000);
     } else {
     $("#noOk").hide();
     window.open('funciones/aPDF/pdfCesionImg.php', '_blank');
     }
     }
     });
     }
     }
     
     function adminMandato() {
     let usuario = $("#mandato").val();
     alert(usuario);
     if (usuario == "") {
     $("#noOk").show();
     setInterval('$("#noOk").hide();', 7000);
     } else {
     alert("entro1");
     $.ajax({
     url: "funciones/aPDF/pdfMandatoMay.php",
     data: {usuario: usuario},
     type: 'POST',
     success: function (response) {
     if (response == 0) {
     $("#noOk").show();
     setInterval('$("#noOk").hide();', 7000);
     } else {
     $("#noOk").hide();
     window.open('funciones/aPDF/pdfMandatoMay.php', '_blank');
     }
     }
     });
     }
     }
     
     function adminborrado() {
     let usuario = $("#eliminaCuenta").val();
     alert(usuario);
     if (usuario == "") {
     $("#noOk").show();
     setInterval('$("#noOk").hide();', 7000);
     } else {
     alert("entro1");
     $.ajax({
     url: "funciones/borrarUsuario.php",
     data: {usuario: usuario},
     type: 'POST',
     success: function (response) {
     if (response == 0) {
     $("#borradoError").show();
     setInterval('$("#noOk").hide();', 7000);
     } else {
     $("borradoOk#").show();
     setInterval('$("#noOk").hide();', 7000);
     }
     }
     });
     }
     }*/
}