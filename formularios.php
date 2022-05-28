<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Alberto Bravo">
        <title>Formularios</title>
        <link rel="shortcut icon" href="#">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css">
        <script src="funciones/funciones.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
                integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
                integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
        include_once 'funciones/comprobarUsuario.php';
        session_start();
        $usuario = new Usuario();
        if (!empty($_SESSION['usuario'])) {
            $logUser = $_SESSION['usuario'];
        } else {
            header('location:accesoDenegado.php');
        }
        if ($usuario->comprobarUsuario($logUser) == $logUser) {
            ?>
            <header class="header py-3 mb-5">
                <div class="container">
                    <div class="row justify-content-center align-items-center">
                        <div class="col-md-4 col-12 mb-4 mb-md-0">
                            <a href="index.php">
                                <img src="img/Logo_Hiken.jpg" class="logo img-fluid" alt="imagenLogo">
                            </a>
                        </div>
                        <div class="col-12 col-md-8">
                            <nav class="menu nav flex-column flex-md-row text-center d-flex justify-content-md-end justify-content-center">
                                <a href="index.php" class="nav-link">Cerrar sesión<abbr title="Cierra la sesión para regresar a la página de incio"
                                                                                        <img src="img/pregunta.png" class="ayuda align-top justify-content-end" alt="imagenPregunta"></abbr></a>
                            </nav>
                        </div>
                    </div>
                </div>
            </header>
            <main class="container">
                <div class="row justify-content-center">
                    <div class="justify-content-center btn-group col-12 mb-5">
                        <button type="button" class="btn btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Formularios Inscripción temporada
                        </button>
                        <div class="dropdown-menu dropdown-menu-end">
                            <a class="dropdown-item" href="#" id="form1">Ficha Deportiva Club Kenpo Hiken</a>
                            <a class="dropdown-item" href="#" id="form3">Autorización imagenes < 18 años</a>
                            <a class="dropdown-item" href="#" id="form4">Mandato inscripción</a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center my-5" id="form11" style="display:none;">
                    <div class="col-md-8 bg-white contenido-nosotros py-5">
                        <h3 class="text-center mb-3">Ficha Deportiva Club Kenpo Hiken</h3>
                        <form method="POST" action="#" id="formulario1">
                            <input type="hidden" id="useroculto" name="useroculto" value="<?php echo $logUser ?>">
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="nombreFi">Nombre</label>
                                    <input type="text" class="form-control" name="nombreFi" id="nombreFi" placeholder="Tu nombre" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="apellidoFi1">Primer apellido</label>
                                    <input type="text" class="form-control" name="apellidoFi1" id="apellidoFi1"
                                           aria-describedby="helpId" placeholder="Tu primer apellido" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="apellidoFi2">Segundo apellido</label>
                                    <input type="text" class="form-control" name="apellidoFi2" id="apellidoFi2"
                                           aria-describedby="helpId" placeholder="Tu segundo apellido">
                                </div>
                            </div>
                            <div class="row py-3">
                                <div class="col-md-4">
                                    <label for="tipoFi">Tipo de documento</label>
                                    <select class="form-control" name="tipoFi" id="tipoFi" aria-describedby="helpId" required>
                                        <option selected value="">Tipo documento</option>
                                        <option value="dni">DNI</option>
                                        <option value="nie">NIE</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="documentoFi">Número de documento</label>
                                    <input type="text" class="form-control" name="documentoFi" id="documentoFi"
                                           aria-describedby="helpId" placeholder="Tu documento" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="nacimientoFi">Fecha de nacimiento</label>
                                    <input type="date" class="form-control" name="nacimientoFi" id="nacimientoFi"
                                           aria-describedby="helpId" required>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="lugarNacFi">Lugar de nacimiento</label>
                                    <input type="text" class="form-control" name="lugarNacFi" id="lugarNacFi"
                                           aria-describedby="helpId" placeholder="Tu lugar de nacimiento" required>
                                </div>
                                <!--.col-md-6-->
                                <div class="col-md-6">
                                    <label for="paisFi">Nacionalidad</label>
                                    <input type="text" class="form-control" name="paisFi" id="paisFi"
                                           aria-describedby="helpId" placeholder="Tu nacionalidad" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <label for="addressFi">Dirección</label>
                                <input type="text" class="form-control" name="addressFi" id="addressFi"
                                       placeholder="Tu dirección" required>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="ciudadFi">Ciudad</label>
                                    <input type="text" class="form-control" name="ciudadFi" id="ciudadFi"
                                           aria-describedby="helpId" placeholder="Tu ciudad" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="provinciaFi">Provincia</label>
                                    <input type="text" class="form-control" name="provinciaFi" id="provinciaFi"
                                           aria-describedby="helpId" placeholder="Tu provincia" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="CPFi">Código Postal</label>
                                    <input type="text" class="form-control" name="CPFi" id="CPFi" aria-describedby="helpId"
                                           placeholder="Tu código postal" required>
                                </div>
                            </div>
                            <div class="row py-3">
                                <div class="col-md-6">
                                    <label for="telefonoFi">Teléfono</label>
                                    <input type="tel" class="form-control" name="telefonoFi" id="telefonoFi"
                                           aria-describedby="helpId" placeholder="Tu teléfono" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="mailFi">E-mail</label>
                                    <input type="email" class="form-control" name="mailFi" id="mailFi"
                                           aria-describedby="helpId" placeholder="Tu e-mail" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dolenciaFi">¿Padece usted alguna enfermedad o trastorno que impida o dificulte la
                                    práctica de kenpo?</label>
                                <select class="form-control" name="dolenciaFi" id="dolenciaFi" aria-describedby="helpId" required>
                                    <option selected value="">Elige una de las dos opciones</option>
                                    <option value="si">SI</option>
                                    <option value="no">NO</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="mensajeFi">En caso afirmativo, indique cuales</label>
                                <textarea class="form-control" name="mensajeFi" id="mensajeFi" rows="2"></textarea>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="ciudad2:">En</label>
                                    <input type="text" class="form-control" name="ciudad2" id="ciudad2" placeholder="Ciudad" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="fecha2:">a</label>
                                    <input type="text" class="form-control" name="fecha2" id="fecha2">
                                </div>
                            </div>
                            <div class="text-dark mt-4">
                                <p class="fw-normal">El abono de las cuotas de los entrenamientos se hará a principio de cada mes.</p>
                                <p class="fw-normal">La hoja de inscripción junto con la bonificación de las cuotas serán requisito necesario para estar dado en el club.</p>
                                <p class="fw-normal">De conformidad con la Ley Orgánica 15/1999, de 13 de diciembre Vd., o en su caso su representante legal, queda informado y consiente expresa e inequívocamente la incorporación de sus datos a los ficheros mixtos de datos personales y al tratamiento de estos con la finalidad de la gestión integral de su relación con el Club Deportivo Elemental Kenpo Hiken. Así mismo consiente el tratamiento para el envío de las comunicaciones incluidas las comerciales, aún por medios electrónicos. El responsable de los ficheros es el Club Deportivo Elemental Kenpo Hiken, domiciliado en C/ Puerto de la Mano de Hierro, 18, 28053 MADRID. Autoriza a que sus datos personales, incluidas imagen y/o voz, puedan ser utilizados para la organización, promoción y divulgación del deporte y/o club en cualquier medio. Asimismo, autoriza la cesión de sus datos a los Organismos Oficiales Deportivos y Seguros. Podrá ejercitar los derechos de acceso, rectificación, cancelación y oposición en la forma y de acuerdo con los procedimientos establecidos en la precitada Ley Orgánica, dirigiéndose a la dirección arriba indicada, según procedimiento. El deportista responde, en cualquier caso, de la veracidad, exactitud, vigencia, autenticidad y pertinencia de los Datos Personales proporcionados, comprometiéndose a la actualización de estos cuando esta sea necesaria.</p>
                            </div>
                            <div class="form-check py-2" style="display: none" id="checkFicha">
                                <input type="checkbox" class="form-check-input is-invalid" name="conformidad2" id="conformidad2" unchecked onclick="return false;">
                                <label class="form-check-inline" for="conformidad2">Las condiciones han sido aceptadas</label>
                            </div>
                            <div class="alert alert-success text-center" role="alert" id="condicionesFi" style="display: none;">
                                <p>Debes aceptar las condiciones antes de enviar el formulario</p>
                            </div>
                            <div class="form-group mt-3">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#condicionesFicha" id="modal1">
                                    Acepta las condiciones
                                </button>
                                <div class="modal fade"data-backdrop="false" id="condicionesFicha" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-uppercase text-center fw-normal" id="ModalLongTitle">Aceptación de condiciones para la inscripción del alumno en el Club Deportivo Kenpo Hiken</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="fw-normal">El abono de las cuotas de los entrenamientos se hará a principio de cada mes.</p>
                                                <p class="fw-normal">La hoja de inscripción junto con la bonificación de las cuotas serán requisito necesario para estar dado en el club.</p>
                                                <p class="fw-normal">De conformidad con la Ley Orgánica 15/1999, de 13 de diciembre Vd., o en su caso su representante legal, queda informado y consiente expresa e inequívocamente la incorporación de sus datos a los ficheros mixtos de datos personales y al tratamiento de estos con la finalidad de la gestión integral de su relación con el Club Deportivo Elemental Kenpo Hiken. Así mismo consiente el tratamiento para el envío de las comunicaciones incluidas las comerciales, aún por medios electrónicos. El responsable de los ficheros es el Club Deportivo Elemental Kenpo Hiken, domiciliado en C/ Puerto de la Mano de Hierro, 18, 28053 MADRID. Autoriza a que sus datos personales, incluidas imagen y/o voz, puedan ser utilizados para la organización, promoción y divulgación del deporte y/o club en cualquier medio. Asimismo, autoriza la cesión de sus datos a los Organismos Oficiales Deportivos y Seguros. Podrá ejercitar los derechos de acceso, rectificación, cancelación y oposición en la forma y de acuerdo con los procedimientos establecidos en la precitada Ley Orgánica, dirigiéndose a la dirección arriba indicada, según procedimiento. El deportista responde, en cualquier caso, de la veracidad, exactitud, vigencia, autenticidad y pertinencia de los Datos Personales proporcionados, comprometiéndose a la actualización de estos cuando esta sea necesaria.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-primary" id="aceptacionFicha" data-dismiss="modal" onClick="$('#conformidad2').prop('checked', true)">Acepto las condiciones</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-4">
                                    <input type="submit" class="btn btn-primary" id="enviopdf11" value="Enviar documento">   
                                </div>
                                <div class="col-md-3 col-4">
                                    <input type="submit" class="btn btn-primary" id="downloadpdf11" value="Descargar y enviar documento">
                                </div>
                            </div>
                            <div class="alert alert-success text-center" role="alert" id="pdfOk11" style="display: none;">
                                <p>Tu formulario se ha enviado correctamente</p>
                            </div>
                            <div class="alert alert-success text-center" role="alert" id="downloadOK11" style="display: none;">
                                <p>Tu formulario se ha descargado correctamente</p>
                            </div>
                            <div class="alert alert-danger text-center" role="alert" id="pdfNoOk11" style="display: none;">
                                <p>Tu formulario no se ha podido procesar</p>
                            </div>
                            <div class="alert alert-danger text-center" role="alert" id="downloadNoOK11" style="display: none;">
                                <p>Tu formulario no se ha podido desacargar</p>
                            </div>
                        </form>
                    </div> 
                </div>  
                <!--DESABILITADO_PARA PROXIMA IMPLEMENTACIÓN
                <div class="row justify-content-center my-5" id="form22" style="display:none;">
                    <div class="col-md-8 bg-white contenido-nosotros py-5">
                        <h3 class="text-center">Mandato específico para la inscripción de la licencia y actividades de la Federación Madrileña de Karate y D.A.
                        </h3>
                        <h5 class="text-center py-2"><span class="fw-bold text-danger">A cumplimentar sólo para los menores de 18 años</span>
                        </h5>
                        <form method="POST" action="#" >
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nombreManMen">D/Dª</label>
                                    <input type="text" class="form-control" name="nombreManMen" id="nombreManMen" placeholder="Nombre del deportista" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="apellidoManMen">con primer apellido</label>
                                    <input type="text" class="form-control" name="apellidoManMen" id="apellidoManMen"
                                           aria-describedby="helpId" placeholder="Primer apellido" required>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-6 mt-1">
                                    <label for="apellidoManMen2">, segundo apellido</label>
                                    <input type="text" class="form-control" name="apellidoManMen2" id="apellidoManMen2"
                                           aria-describedby="helpId" placeholder="Segundo apellido">
                                </div>
                                <div class="col-md-6 mt-1">
                                    <label for="documentoManMen">y con D.N.I. o N.I.E.</label>
                                    <input type="text" class="form-control" name="documentoManMen" id="documentoManMen" placeholder="D.N.I. / N.I.E. del deportista" required>
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <label for="domicilioManMen">con domicilio a efectos de notificaciones en </label>
                                <input type="text" class="form-control" name="domicilioManMen" id="domicilioManMen" placeholder="Domicilio del deportista" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="CPManMen">Código postal</label>
                                    <input type="tel" class="form-control" name="CPManMen" id="CPManMen" placeholder="Código Postal del deportista" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="localidadManMen">Localidad</label>
                                    <input type="text" class="form-control" name="localidadManMen" id="localidadManMen" placeholder="Localidad del deportista" required>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-6 mt-1">
                                    <label for="nombreManMenTu">D/Dª</label>
                                    <input type="text" class="form-control" name="nombreManMenTu" id="nombreManMenTu" placeholder="Nombre del tutor" required>
                                </div>
                                <div class="col-md-6 mt-1">
                                    <label for="apellidoManMenTu">con primer apellido</label>
                                    <input type="text" class="form-control" name="apellidoManMenTu" id="apellidoManMenTu"
                                           aria-describedby="helpId" placeholder="Primer apellido del tutor" required>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-6">
                                    <label for="apellidoManMenTu2">, segundo apellido</label>
                                    <input type="text" class="form-control" name="apellidoManMenTu2" id="apellidoManMenTu2"
                                           aria-describedby="helpId" placeholder="Segundo apellido del tutor">
                                </div>
                                <div class="col-md-6">
                                    <label for="documentoManMenTu">y con D.N.I. o N.I.E.</label>
                                    <input type="text" class="form-control" name="documentoManMenTu" id="documentoManMenTu" placeholder="D.N.I. / N.I.E. del tutor" required>
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <label for="domicilioManMenTu">con domicilio a efectos de notificaciones en </label>
                                <input type="text" class="form-control" name="domicilioManMenTu" id="domicilioManMenTu" placeholder="Domicilio del tutor" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="CPManMenTu">Código postal</label>
                                    <input type="tel" class="form-control" name="CPManMenTu" id="CPManMenTu" placeholder="Código Postal del tutor" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="localidadManMenTu">Localidad</label>
                                    <input type="text" class="form-control" name="localidadManMenTu" id="localidadManMenTu" placeholder="Localidad del tutor" required>
                                </div>
                            </div>
                            <div class="text-dark mt-4">
                                <p class="fw-normal">en concepto de MANDANTE.</p>
                                <p class="fw-normal">Dice y otorga</p>
                                <p class="fw-normal">Que confiere MANDATO a favor del representante de la Entidad Deportiva, CLUB DEPORTIVO ELEMENTAL KENPO HIKEN, con domicilio en CALLE BOLÍVAR, 22, PORTAL C, 1º C, 28045, Localidad MADRID, en concepto de MANDATARIO.</p>
                                <p class="fw-normal">OBJETO DEL MANDATO.</p>
                                <p class="fw-normal">Que el MANDATO, que se rige por los arts. 1709 a 1739 CC español se confiere para que se pueda llevar a cabo la afiliación/reafiliación federativa del MANDANTE en al año 2022.</p>
                                <p class="fw-normal">Que este MANDATO también se otorga para que se pueda llevar a cabo la inscripción en actividades deportivas de la Federación Madrileña de Karate y D.A.</p>
                                <p class="fw-normal">Que el MANDATO se concede para su actuación ante la Federación Madrileña de Karate y D.A., en las dependencias federativas personalmente o a través de los recursos online, en relación exclusivamente de los asuntos citados como objeto del MANDATO.</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="ciudad3:">En</label>
                                    <input type="text" class="form-control" name="ciudad3" id="ciudad3" placeholder="Ciudad" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="fecha3:">a</label>
                                    <input type="text" class="form-control" name="fecha3" id="fecha3">
                                </div>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert" id="erroMandMen" style="display: none">
                                    No puedes enviar el mensaje con campos vacíos.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" id="cierre">
                                    </button>
                                </div>
                            </div>
                            <div class="form-check mt-3" style="display: none" id="checkManMen">
                                <input type="checkbox" class="form-check-input is-invalid" name="conformidad3" id="conformidad3" unchecked onclick="return false;">
                                <label class="form-check-inline" for="conformidad3">Las condiciones han sido aceptadas</label>
                            </div>
                            <div class="alert alert-success text-center" role="alert" id="condicionesManMen" style="display: none;">
                                <p>Debes aceptar las condiciones antes de enviar el formulario</p>
                            </div>
                            <div class="form-group mt-3">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#condicionesMandato1" id="modal2">
                                    Acepta las condiciones
                                </button>
                                <div class="modal fade"data-backdrop="false" id="condicionesMandato1" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-uppercase text-center fw-normal" id="ModalLongTitle">Aceptación de condiciones para la inscripción de la licencia y actividades en la FMK</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="fw-normal">Que confiere MANDATO a favor del representante de la Entidad Deportiva, CLUB DEPORTIVO ELEMENTAL KENPO HIKEN, con domicilio en CALLE BOLÍVAR, 22, PORTAL C, 1º C, 28045, Localidad MADRID, en concepto de MANDATARIO.</p>
                                                <p class="fw-normal">OBJETO DEL MANDATO.</p>
                                                <p class="fw-normal">Que el MANDATO, que se rige por los arts. 1709 a 1739 CC español se confiere para que se pueda llevar a cabo la afiliación/reafiliación federativa del MANDANTE en al año 2022.</p>
                                                <p class="fw-normal">>Que este MANDATO también se otorga para que se pueda llevar a cabo la inscripción en actividades deportivas de la Federación Madrileña de Karate y D.A.</p>
                                                <p class="fw-normal">Que el MANDATO se concede para su actuación ante la Federación Madrileña de Karate y D.A., en las dependencias federativas personalmente o a través de los recursos online, en relación exclusivamente de los asuntos citados como objeto del MANDATO.</p>
                                                <p class="fw-normal">Acepto el MANDATO conferido y me obligo a cumplirlo de conformidad a las instrucciones del MANDANTE, y declaro bajo mi responsabilidad de la veracidad y actualización de los datos facilitados para la inscripción de la licencia y actividades de la Federación Madrileña de Karate y D.A.</p>
                                                <p class="fw-normal">EL MANDANTE (Representante legal)</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-primary" id="aceptacionMandatoMen" data-dismiss="modal" onClick="$('#conformidad3').prop('checked', true)">Acepto las condiciones</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-4">
                                    <input type="submit" class="btn btn-primary" id="enviopdf22" value="Enviar documento">   
                                </div>
                                <div class="col-md-3 col-4">
                                    <input type="submit" class="btn btn-primary" id="downloadpdf22" value="Descargar y enviar documento">
                                </div>
                            </div>
                            <div class="alert alert-success text-center" role="alert" id="pdfOk22" style="display: none;">
                                <p>Tu formulario se ha enviado correctamente</p>
                            </div>
                            <div class="alert alert-success text-center" role="alert" id="downloadOK22" style="display: none;">
                                <p>Tu formulario se ha descargado correctamente</p>
                            </div>
                            <div class="alert alert-danger text-center" role="alert" id="pdfNoOk22" style="display: none;">
                                <p>Tu formulario no se ha podido procesar</p>
                            </div>
                            <div class="alert alert-danger text-center" role="alert" id="downloadNoOK22" style="display: none;">
                                <p>Tu formulario no se ha podido desacargar</p>
                            </div>
                        </form>
                    </div> 
                </div> 
                -->
                <div class="row justify-content-center my-5" id="form33" style="display:none;">
                    <div class="col-md-8 bg-white contenido-nosotros py-5">
                        <h3 class="text-center">Autorización para la publicación de imágenes</h3>
                        <h5 class="text-center py-2"><span class="fw-bold text-danger">A cumplimentar sólo para los menores de 18 años</span>
                        </h5>
                        <form method="POST" action="#" >
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="nombreCesImTu">Don/Doña</label>
                                    <input type="text" class="form-control" name="nombreCesImTu" id="nombreCesImTu" placeholder="Nombre del tutor" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="apellidoCesImTu">con primer apellido</label>
                                    <input type="text" class="form-control" name="apellidoCesImTu" id="apellidoCesImTu"
                                           aria-describedby="helpId" placeholder="1er apellido del tutor" required>
                                </div>
                                <div class="col-md-4">
                                    <label for="apellidoCesImTu2">, segundo apellido</label>
                                    <input type="text" class="form-control" name="apellidoCesImTu2" id="apellidoCesImTu2"
                                           aria-describedby="helpId" placeholder="2do apellido del tutor">
                                </div>
                            </div>
                            <div class="row mt-3">
                                <div class="col-md-4 mt-1">
                                    <label for="documentoCesImTu">y con D.N.I. o N.I.E.</label>
                                    <input type="tel" class="form-control" name="documentoCesImTu" id="documentoCesImTu" placeholder="Documento del tutor" required>
                                </div>
                                <div class="col-md-8">
                                    <label for="nombreCesIm">como padre/madre o tutor del deportista</label>
                                    <input type="email" class="form-control" name="nombreCesIm" id="nombreCesIm" placeholder="Nombre deportista" required>
                                </div>
                            </div>
                            <div class="text-dark mt-4">
                                <p class="fw-normal">DOY MI CONSENTIMIENTO para que el CDE KENPO HIKEN y la Asociación Kenpo Academies (A.K.A) PUEDAN UTILIZAR Y DISPONER DE LAS IMÁGENES DE MI HIJO/A en medios de comunicación social.</p>
                                <p class="fw-normal">La Ley de Protección de Datos nos obliga a disponer de esta autorización para hacer uso delas fotos y videos, que puedan ser realizadas en los actos de la Asociación y de KENPO HIKEN en los que participe el alumno/a, por ello solicitamos el consentimiento a los padres, o tutores legales.</p>
                                <p class="fw-normal">El derecho a la propia imagen está reconocido al artículo 18. de la Constitución y regulado por la Ley 1/1982, de 5 de mayo, sobre el derecho al honor, a la intimidad personal y familiar y a la propia imagen y la Ley 15/1999, de 13 de diciembre, sobre la Protección de Datos de Carácter Personal, artículo 13 del Real Decreto 1720/2007, de 21 de diciembre, por el que se aprueba el Reglamento de desarrollo de la Ley Orgánica 15/1999, de 13 de diciembre, de protección de datos de carácter personal.</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="ciudad4">En</label>
                                    <input type="text" class="form-control" name="ciudad4" id="ciudad4" placeholder="Ciudad" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="fecha4:">a</label>
                                    <input type="text" class="form-control" name="fecha4" id="fecha4">
                                </div>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert" id="erroCesImg" style="display: none">
                                    No puedes enviar el mensaje con campos vacíos.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close" id="cierre">
                                    </button>
                                </div>
                            </div>
                            <div class="form-check py-2" style="display: none" id="checkCesImg">
                                <input type="checkbox" class="form-check-input is-invalid" name="conformidad4" id="conformidad4" unchecked onclick="return false;">
                                <label class="form-check-inline" for="conformidad4">Las condiciones han sido aceptadas</label>
                            </div>
                            <div class="alert alert-success text-center" role="alert" id="condicionesCesImg" style="display: none;">
                                <p>Debes aceptar las condiciones antes de enviar el formulario</p>
                            </div>
                            <div class="form-group mt-3">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#condicionesImagenes" id="modal3">
                                    Acepta las condiciones
                                </button>
                                <div class="modal fade"data-backdrop="false" id="condicionesImagenes" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-uppercase text-center fw-normal" id="ModalLongTitle">Aceptación de condiciones para la cesión de imágenes de menores de 18 años</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="fw-normal">DOY MI CONSENTIMIENTO para que el CDE KENPO HIKEN y la Asociación Kenpo Academies (A.K.A) PUEDAN UTILIZAR Y DISPONER DE LAS IMÁGENES DE MI HIJO/A en medios de comunicación social.</p>
                                                <p class="fw-normal">La Ley de Protección de Datos nos obliga a disponer de esta autorización para hacer uso delas fotos y videos, que puedan ser realizadas en los actos de la Asociación y de KENPO HIKEN en los que participe el alumno/a, por ello solicitamos el consentimiento a los padres, o tutores legales.</p>
                                                <p class="fw-normal">El derecho a la propia imagen está reconocido al artículo 18. de la Constitución y regulado por la Ley 1/1982, de 5 de mayo, sobre el derecho al honor, a la intimidad personal y familiar y a la propia imagen y la Ley 15/1999, de 13 de diciembre, sobre la Protección de Datos de Carácter Personal, artículo 13 del Real Decreto 1720/2007, de 21 de diciembre, por el que se aprueba el Reglamento de desarrollo de la Ley Orgánica 15/1999, de 13 de diciembre, de protección de datos de carácter personal.</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-primary" id="aceptacionCondicionesImg" data-dismiss="modal" onClick="$('#conformidad4').prop('checked', true)">Acepto las condiciones</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-4">
                                    <input type="submit" class="btn btn-primary" id="enviopdf33" value="Enviar documento">   
                                </div>
                                <div class="col-md-3 col-4">
                                    <input type="submit" class="btn btn-primary" id="downloadpdf33" value="Descargar y enviar documento">
                                </div>
                            </div>
                            <div class="alert alert-success text-center mt-2" role="alert" id="pdfOk33" style="display: none;">
                                <p>Tu formulario se ha enviado correctamente</p>
                            </div>
                            <div class="alert alert-success text-center mt-2" role="alert" id="downloadOK33" style="display: none;">
                                <p>Tu formulario se ha descargado correctamente</p>
                            </div>
                            <div class="alert alert-danger text-center mt-2" role="alert" id="pdfNoOk33" style="display: none;">
                                <p>Tu formulario no se ha podido procesar</p>
                            </div>
                            <div class="alert alert-danger text-center mt-2" role="alert" id="downloadNoOK33" style="display: none;">
                                <p>Tu formulario no se ha podido desacargar</p>
                            </div>
                        </form>
                    </div> 
                </div> 
                <div class="row justify-content-center my-5" id="form44" style="display:none;">
                    <div class="col-md-8 bg-white contenido-nosotros py-5">
                        <h3 class="text-center">Mandato específico para la inscripción de la licencia y actividades de la Federación Madrileña de Karate y D.A.
                        </h3>                  
                        <form method="POST" action="#" >
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="nombreManMay">D/Dª</label>
                                    <input type="text" class="form-control" name="nombreManMay" id="nombreManMay" placeholder="Nombre del deportista" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="apellidoManMay">con primer apellido</label>
                                    <input type="text" class="form-control" name="apellidoManMay" id="apellidoManMay"
                                           aria-describedby="helpId" placeholder="Primer apellido" required>
                                </div>
                            </div>
                            <div class="row py-2">
                                <div class="col-md-6">
                                    <label for="apellidoManMay2">, segundo apellido</label>
                                    <input type="text" class="form-control" name="apellidoManMay2" id="apellidoManMay2"
                                           aria-describedby="helpId" placeholder="Segundo apellido">
                                </div>
                                <div class="col-md-6">
                                    <label for="documentoManMay">y con D.N.I. o N.I.E.</label>
                                    <input type="text" class="form-control" name="documentoManMay" id="documentoManMay" placeholder="D.N.I. / N.I.E. del deportista" required>
                                </div>
                            </div>
                            <div class="form-group mt-2">
                                <label for="domicilioManMay"> en su propio nombre y representación, con domicilio a efectos de notificaciones en </label>
                                <input type="text" class="form-control" name="domicilioManMay" id="domicilioManMay" placeholder="Domicilio del deportista" required>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="CPManMay">Código postal</label>
                                    <input type="tel" class="form-control" name="CPManMay" id="CPManMay" placeholder="Código Postal" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="localidadManMay">Localidad</label>
                                    <input type="text" class="form-control" name="localidadManMay" id="localidadManMay" placeholder="localidad" required>
                                </div>
                            </div>
                            <div class="text-dark mt-4">
                                <p class="fw-normal">en concepto de MANDANTE (deportista).</p>
                                <p class="fw-normal fst-italic">Dice y otorga</p>
                                <p class="fw-normal">Que confiere MANDATO a favor del representante de la Entidad Deportiva, CLUB DEPORTIVO ELEMENTAL KENPO HIKEN, con domicilio en CALLE BOLÍVAR, 22, PORTAL C, 1º C, 28045, Localidad MADRID, en concepto de MANDATARIO.</p>
                                <p class="fw-normal">OBJETO DEL MANDATO.</p>
                                <p class="fw-normal">Que el MANDATO, que se rige por los arts. 1709 a 1739 CC español se confiere para que se pueda llevar a cabo la afiliación/reafiliación federativa del MANDANTE en al año 2022.</p>
                                <p class="fw-normal">Que este MANDATO también se otorga para que se pueda llevar a cabo la inscripción en actividades deportivas de la Federación Madrileña de Karate y D.A.</p>
                                <p class="fw-normal">Que el MANDATO se concede para su actuación ante la Federación Madrileña de Karate y D.A., en las dependencias federativas personalmente o a través de los recursos online, en relación exclusivamente de los asuntos citados como objeto del MANDATO.</p>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="ciudad5:">En</label>
                                    <input type="text" class="form-control" name="ciudad5" id="ciudad5" placeholder="Ciudad" required>
                                </div>
                                <div class="col-md-6">
                                    <label for="fecha5:">a</label>
                                    <input type="text" class="form-control" name="fecha5" id="fecha5">
                                </div>
                            </div>
                            <div class="form-check py-2" style="display: none" id="checkManMay">
                                <input type="checkbox" class="form-check-input is-invalid" name="conformidad5" id="conformidad5" unchecked onclick="return false;">
                                <label class="form-check-inline" for="conformidad5">Las condiciones han sido aceptadas</label>
                            </div>
                            <div class="alert alert-success text-center" role="alert" id="condicionesManMay" style="display: none;">
                                <p>Debes aceptar las condiciones antes de enviar el formulario</p>
                            </div>
                            <div class="form-group mt-3">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#condicionesMandato2" id="modal4">
                                    Acepta las condiciones
                                </button>
                                <div class="modal fade" data-backdrop="false" id="condicionesMandato2" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title text-uppercase text-center fw-normal" id="ModalLongTitle">Aceptación de condiciones para la cesión de imágenes de mayores de 18 años</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <p class="fw-normal">Que confiere MANDATO a favor del representante de la Entidad Deportiva, CLUB DEPORTIVO ELEMENTAL KENPO HIKEN, con domicilio en CALLE BOLÍVAR, 22, PORTAL C, 1º C, 28045, Localidad MADRID, en concepto de MANDATARIO.</p>
                                                <p class="fw-normal">OBJETO DEL MANDATO.</p>
                                                <p class="fw-normal">Que el MANDATO, que se rige por los arts. 1709 a 1739 CC español se confiere para que se pueda llevar a cabo la afiliación/reafiliación federativa del MANDANTE en al año 2022.</p>
                                                <p class="fw-normal">Que este MANDATO también se otorga para que se pueda llevar a cabo la inscripción en actividades deportivas de la Federación Madrileña de Karate y D.A.</p>
                                                <p class="fw-normal">Que el MANDATO se concede para su actuación ante la Federación Madrileña de Karate y D.A., en las dependencias federativas personalmente o a través de los recursos online, en relación exclusivamente de los asuntos citados como objeto del MANDATO.</p>
                                                <p class="fw-normal">Acepto el MANDATO conferido y me obligo a cumplirlo de conformidad a las instrucciones del MANDANTE, y declaro bajo mi responsabilidad de la veracidad y actualización de los datos facilitados para la inscripción de la licencia y actividades de la Federación Madrileña de Karate y D.A.</p>
                                                <p class="fw-normal">EL MANDANTE (deportista)</p>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                                <button type="button" class="btn btn-primary" id="aceptacionMandatoMay" data-dismiss="modal" onClick="$('#conformidad5').prop('checked', true)">Acepto las condiciones</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3 col-4">
                                    <input type="submit" class="btn btn-primary" id="enviopdf44" value="Enviar documento">   
                                </div>
                                <div class="col-md-3 col-4">
                                    <input type="submit" class="btn btn-primary" id="downloadpdf44" value="Descargar y enviar documento">
                                </div>
                            </div>
                            <div class="alert alert-success text-center mt-2" role="alert" id="pdfOk44" style="display: none;">
                                <p>Tu formulario se ha enviado correctamente</p>
                            </div>
                            <div class="alert alert-success text-center mt-2" role="alert" id="downloadOK44" style="display: none;">
                                <p>Tu formulario se ha descargado correctamente</p>
                            </div>
                            <div class="alert alert-danger text-center mt-2" role="alert" id="pdfNoOk44" style="display: none;">
                                <p>Tu formulario no se ha podido procesar</p>
                            </div>
                            <div class="alert alert-danger text-center mt-2" role="alert" id="downloadNoOK44" style="display: none;">
                                <p>Tu formulario no se ha podido desacargar</p>
                            </div>
                        </form>
                    </div> 
                </div>   
            </main>
            <?php
            session_destroy();
        } else {
            header('location:accesoDenegado.php');
        }
        ?>
        <footer class="footer p-4 fixed-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-8 mb-2 mb-md-0">
                        <!--desde mediano en adelante ocupa el md y más bajo el resto y -->
                        <p class="copyright text-center text-md-center"></p>
                    </div>
                </div>
            </div>
        </footer>
        <a class="appwhatsapp" target="_blanck" href="https://api.whatsapp.com/send?phone=+34627605310&amp;text=Hola!&nbsp;me&nbsp;pueden&nbsp;ayudar?">
            <img src="img/whatsapp.png" alt="whatsapp"/>
        </a>
    </body>
</html>