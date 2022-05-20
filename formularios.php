<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Formularios</title>
        <link rel="shortcut icon" href="#">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css">
        <script src="funciones/funciones.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
                integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
                integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
    </head>

    <body>
        <header class="header py-3 mb-5">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-4 col-8 mb-4 mb-md-0">
                        <a href="index.php">
                            <img src="img/Logo_Hiken.jpg" class="img-fluid" alt="imagenLogo">
                        </a>
                    </div>
                    <div class="btn-group col-8 col-md-4 mt-4">
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Formularios Inscripción temporada
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#" id="form1">Ficha Deportiva Hiken</a>
                            <a class="dropdown-item" href="#" id="form2">Mandato inscripción < 18 años</a>
                            <a class="dropdown-item" href="#" id="form3">Autorización imagenes < 18 años</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#" id="form4">Mandato inscripción > 18 años</a>
                        </div>
                    </div>
                    <div class="col-8 col-md-4">
                        <nav
                            class="menu nav flex-column flex-md-row text-center d-flex justify-content-md-end justify-content-center">
                            <a href="index.php" class="nav-link">Volver</a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <main class="container">
            <div class="row justify-content-center" id="form11" style="display:none;">
                <div class="col-md-8 bg-white contenido-nosotros py-5 px-3">
                    <h2 class="separador text-center my-2">Ficha Deportiva Hiken</h2>
                    <form method="POST" action="" >
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre1" placeholder="Tu nombre" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="telefono:">Teléfono:</label>
                                <input type="tel" class="form-control" name="telefono" id="telefono1" placeholder="Teléfono" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email:">E-mail</label>
                                <input type="email" class="form-control" name="email" id="correo1" placeholder="E-mail" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Mensaje</label>
                            <textarea class="form-control" name="mensaje" id="mensaje1" cols="30" rows="3" placeholder="Explica brevemente en que podemos ayudarte" required></textarea>
                        </div>
                        <div class="form-check py-2" style="display: none">
                            <label class="form-check-inline" for="conformidad1">Las condiciones han sido aceptadas</label>
                            <input type="checkbox" class="form-check-input is-invalid" name="conformidad1" id="conformidad1" checked disabled>
                        </div>
                        <div class="form-group mt-3">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#condicionesFicha">
                                Acepta las condiciones
                            </button>
                            <div class="modal fade"data-backdrop="false" id="condicionesFicha" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-uppercase text-center" id="ModalLongTitle"><strong>Aceptación de condiciones para la cesión de imágenes de menores de 18 años</strong></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>DOY MI CONSENTIMIENTO para que el CDE KENPO HIKEN y la Asociación Kenpo Academies (A.K.A) PUEDAN UTILIZAR Y DISPONER DE LAS IMÁGENES DE MI HIJO/A en medios de comunicación social.</strong></p>
                                            <p><strong>La Ley de Protección de Datos nos obliga a disponer de esta autorización para hacer uso delas fotos y videos, que puedan ser realizadas en los actos de la Asociación y de KENPO HIKEN en los que participe el alumno/a, por ello solicitamos el consentimiento a los padres, o tutores legales.</strong></p>
                                            <p><strong>El derecho a la propia imagen está reconocido al artículo 18. de la Constitución y regulado por la Ley 1/1982, de 5 de mayo, sobre el derecho al honor, a la intimidad personal y familiar y a la propia imagen y la Ley 15/1999, de 13 de diciembre, sobre la Protección de Datos de Carácter Personal, artículo 13 del Real Decreto 1720/2007, de 21 de diciembre, por el que se aprueba el Reglamento de desarrollo de la Ley Orgánica 15/1999, de 13 de diciembre, de protección de datos de carácter personal.</strong></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn btn-primary" id="aceptacionCondicionesImg">Acepto las condiciones</button>
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
                                <input type="submit" class="btn btn-primary" id="downloadpdf1" value="Descargar y enviar documento">
                            </div>
                        </div>
                        <div class="alert alert-success text-center" role="alert" id="pdfOk1" style="display: none;">
                            <p>Tu formulario se ha enviado correctamente</p>
                        </div>
                        <div class="alert alert-success text-center" role="alert" id="downloadOK1" style="display: none;">
                            <p>Tu formulario se ha descargado correctamente</p>
                        </div>
                        <div class="alert alert-danger text-center" role="alert" id="pdfNoOk1" style="display: none;">
                            <p>Tu formulario no se ha podido procesar</p>
                        </div>
                        <div class="alert alert-danger text-center" role="alert" id="downloadNoOK1" style="display: none;">
                            <p>Tu formulario no se ha podido desacargar</p>
                        </div>
                    </form>
                </div> 
            </div>    
            <div class="row justify-content-center" id="form22" style="display:none;">
                <div class="col-md-8 bg-white contenido-nosotros py-5 px-3">
                    <h4 class="separador text-center my-2">MANDATO ESPECÍFICO PARA LA INSCRIPCIÓN DE LA LICENCIA Y ACTIVIDADES DE LA FEDERACIÓN MADRILEÑA DE KARATE Y D.A.
                        (DEPORTISTAS MENORES DE 18 AÑOS)
                    </h4>
                    <form method="POST" action="" >
                        <div class="row py-2">
                            <div class="col-md-8">
                                <label for="nombre2">D/Dª</label>
                                <input type="text" class="form-control" name="nombre2" id="nombre2" placeholder="Nombre del deportista" required>
                            </div>
                            <div class="col-md-4">
                                <label for="documento2">con D.N.I.</label>
                                <input type="text" class="form-control" name="documento2" id="documento2" placeholder="D.N.I. / N.I.E. del deportista" required>
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <label for="domicilio2">con domicilio a efectos de notificaciones en </label>
                            <input type="text" class="form-control" name="emadomicilio2" id="domicilio2" placeholder="Domicilio del deportista" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="telefono2">Código postal</label>
                                <input type="tel" class="form-control" name="telefono2" id="telefono2" placeholder="Código Postal" required>
                            </div>
                            <div class="col-md-6">
                                <label for="localidad2">Localidad</label>
                                <input type="text" class="form-control" name="localidad2" id="localidad2" placeholder="localidad" required>
                            </div>
                        </div>
                        <div class="row py-2">
                            <div class="col-md-8">
                                <label for="nombre22">D/Dª</label>
                                <input type="text" class="form-control" name="nombre22" id="nombre22" placeholder="Nombre del tutor legal del deportista" required>
                            </div>
                            <div class="col-md-4">
                                <label for="documento22">con D.N.I.</label>
                                <input type="text" class="form-control" name="documento22" id="documento22" placeholder="D.N.I. / N.I.E. del tutor" required>
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <label for="domicilio22">con domicilio a efectos de notificaciones en </label>
                            <input type="text" class="form-control" name="emadomicilio22" id="domicilio22" placeholder="Domicilio del tutor" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="telefono22">Código postal</label>
                                <input type="tel" class="form-control" name="telefono22" id="telefono22" placeholder="Código Postal" required>
                            </div>
                            <div class="col-md-6">
                                <label for="localidad22">Localidad</label>
                                <input type="text" class="form-control" name="localidad22" id="localidad22" placeholder="localidad" required>
                            </div>
                        </div>
                        <div class="text-dark mt-4">
                            <p><strong>en concepto de MANDANTE.</strong></p>
                            <p><u><strong>Dice y otorga</strong></u></p>
                            <p><strong>Que confiere MANDATO a favor del representante de la Entidad Deportiva, CLUB DEPORTIVO ELEMENTAL KENPO HIKEN, con domicilio en CALLE BOLÍVAR, 22, PORTAL C, 1º C, 28045, Localidad MADRID, en concepto de MANDATARIO.</strong></p>
                            <p><strong>OBJETO DEL MANDATO.</strong></p>
                            <p><strong>Que el MANDATO, que se rige por los arts. 1709 a 1739 CC español se confiere para que se pueda llevar a cabo la afiliación/reafiliación federativa del MANDANTE en al año 2022.</strong></p>
                            <p><strong>Que este MANDATO también se otorga para que se pueda llevar a cabo la inscripción en actividades deportivas de la Federación Madrileña de Karate y D.A.</strong></p>
                            <p><strong>Que el MANDATO se concede para su actuación ante la Federación Madrileña de Karate y D.A., en las dependencias federativas personalmente o a través de los recursos online, en relación exclusivamente de los asuntos citados como objeto del MANDATO.</strong></p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="ciudad2:">En</label>
                                <input type="text" class="form-control" name="ciudad2" id="ciudad2" placeholder="Ciudad" required>
                            </div>
                            <div class="col-md-6">
                                <label for="fecha2:">a</label>
                                <input type="date" class="form-control" name="fecha2" id="fecha2" required>
                            </div>
                        </div>
                        <div class="form-check py-2" style="display: none">
                            <label class="form-check-inline" for="conformidad2">Las condiciones han sido aceptadas</label>
                            <input type="checkbox" class="form-check-input is-invalid" name="conformidad2" id="conformidad2" checked disabled>
                        </div>
                        <div class="form-group mt-3">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#condicionesMandato1">
                                Acepta las condiciones
                            </button>
                            <div class="modal fade"data-backdrop="false" id="condicionesMandato1" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-uppercase text-center" id="ModalLongTitle"><strong>Aceptación de condiciones para la inscripción de la licencia y actividades en la FMK</strong></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Que confiere MANDATO a favor del representante de la Entidad Deportiva, CLUB DEPORTIVO ELEMENTAL KENPO HIKEN, con domicilio en CALLE BOLÍVAR, 22, PORTAL C, 1º C, 28045, Localidad MADRID, en concepto de MANDATARIO.</strong></p>
                                            <p><strong>OBJETO DEL MANDATO.</strong></p>
                                            <p><strong>Que el MANDATO, que se rige por los arts. 1709 a 1739 CC español se confiere para que se pueda llevar a cabo la afiliación/reafiliación federativa del MANDANTE en al año 2022.</strong></p>
                                            <p><strong>Que este MANDATO también se otorga para que se pueda llevar a cabo la inscripción en actividades deportivas de la Federación Madrileña de Karate y D.A.</strong></p>
                                            <p><strong>Que el MANDATO se concede para su actuación ante la Federación Madrileña de Karate y D.A., en las dependencias federativas personalmente o a través de los recursos online, en relación exclusivamente de los asuntos citados como objeto del MANDATO.</strong></p>
                                            <p><strong>Acepto el MANDATO conferido y me obligo a cumplirlo de conformidad a las instrucciones del MANDANTE, y declaro bajo mi responsabilidad de la veracidad y actualización de los datos facilitados para la inscripción de la licencia y actividades de la Federación Madrileña de Karate y D.A.</strong></p>
                                            <p><strong>EL MANDANTE (Representante legal)</strong></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn btn-primary" id="aceptacionCondicionesImg">Acepto las condiciones</button>
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
                                <input type="submit" class="btn btn-primary" id="downloadpdf2" value="Descargar y enviar documento">
                            </div>
                        </div>
                        <div class="alert alert-success text-center" role="alert" id="pdfOk2" style="display: none;">
                            <p>Tu formulario se ha enviado correctamente</p>
                        </div>
                        <div class="alert alert-success text-center" role="alert" id="downloadOK2" style="display: none;">
                            <p>Tu formulario se ha descargado correctamente</p>
                        </div>
                        <div class="alert alert-danger text-center" role="alert" id="pdfNoOk2" style="display: none;">
                            <p>Tu formulario no se ha podido procesar</p>
                        </div>
                        <div class="alert alert-danger text-center" role="alert" id="downloadNoOK2" style="display: none;">
                            <p>Tu formulario no se ha podido desacargar</p>
                        </div>
                    </form>
                </div> 
            </div>         
            <div class="row justify-content-center" id="form33" style="display:none;">
                <div class="col-md-8 bg-white contenido-nosotros py-5 px-3">
                    <h3 class="separador text-center my-2">Autorización para la publicación de imágenes de los niños/as.</h3>
                    <form method="POST" action="" >
                        <div class="form-group">
                            <label for="nombre3">Don/Doña</label>
                            <input type="text" class="form-control" name="nombre3" id="nombre3" placeholder="Nombre del tutor del deportista menor de edad" required>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <label for="documento3:">con DNI</label>
                                <input type="tel" class="form-control" name="documento3" id="documento3" placeholder="Documento del tutor" required>
                            </div>
                            <div class="col-md-8">
                                <label for="tutor3:">como padre/madre o tutor del alumno/a</label>
                                <input type="email" class="form-control" name="tutor3" id="tutor3" placeholder="Nombre del deportista" required>
                            </div>
                        </div>
                        <div class="text-dark mt-4">
                            <p><strong>DOY MI CONSENTIMIENTO para que el CDE KENPO HIKEN y la Asociación Kenpo Academies (A.K.A) PUEDAN UTILIZAR Y DISPONER DE LAS IMÁGENES DE MI HIJO/A en medios de comunicación social.</strong></p>
                            <p><strong>La Ley de Protección de Datos nos obliga a disponer de esta autorización para hacer uso delas fotos y videos, que puedan ser realizadas en los actos de la Asociación y de KENPO HIKEN en los que participe el alumno/a, por ello solicitamos el consentimiento a los padres, o tutores legales.</strong></p>
                            <p><strong>El derecho a la propia imagen está reconocido al artículo 18. de la Constitución y regulado por la Ley 1/1982, de 5 de mayo, sobre el derecho al honor, a la intimidad personal y familiar y a la propia imagen y la Ley 15/1999, de 13 de diciembre, sobre la Protección de Datos de Carácter Personal, artículo 13 del Real Decreto 1720/2007, de 21 de diciembre, por el que se aprueba el Reglamento de desarrollo de la Ley Orgánica 15/1999, de 13 de diciembre, de protección de datos de carácter personal.</strong></p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="ciudad3:">En</label>
                                <input type="text" class="form-control" name="ciudad3" id="ciudad3" placeholder="Ciudad" required>
                            </div>
                            <div class="col-md-6">
                                <label for="fecha3:">a</label>
                                <input type="date" class="form-control" name="fecha3" id="fecha3" required>
                            </div>
                        </div>
                        <div class="form-check py-2" style="display: none">
                            <label class="form-check-inline" for="conformidad3">Las condiciones han sido aceptadas</label>
                            <input type="checkbox" class="form-check-input is-invalid" name="conformidad3" id="conformidad3" checked disabled>
                        </div>
                        <div class="form-group mt-3">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#condicionesImagenes">
                                Acepta las condiciones
                            </button>
                            <div class="modal fade"data-backdrop="false" id="condicionesImagenes" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-uppercase text-center" id="ModalLongTitle"><strong>Aceptación de condiciones para la cesión de imágenes de menores de 18 años</strong></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>DOY MI CONSENTIMIENTO para que el CDE KENPO HIKEN y la Asociación Kenpo Academies (A.K.A) PUEDAN UTILIZAR Y DISPONER DE LAS IMÁGENES DE MI HIJO/A en medios de comunicación social.</strong></p>
                                            <p><strong>La Ley de Protección de Datos nos obliga a disponer de esta autorización para hacer uso delas fotos y videos, que puedan ser realizadas en los actos de la Asociación y de KENPO HIKEN en los que participe el alumno/a, por ello solicitamos el consentimiento a los padres, o tutores legales.</strong></p>
                                            <p><strong>El derecho a la propia imagen está reconocido al artículo 18. de la Constitución y regulado por la Ley 1/1982, de 5 de mayo, sobre el derecho al honor, a la intimidad personal y familiar y a la propia imagen y la Ley 15/1999, de 13 de diciembre, sobre la Protección de Datos de Carácter Personal, artículo 13 del Real Decreto 1720/2007, de 21 de diciembre, por el que se aprueba el Reglamento de desarrollo de la Ley Orgánica 15/1999, de 13 de diciembre, de protección de datos de carácter personal.</strong></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn btn-primary" id="aceptacionCondicionesImg">Acepto las condiciones</button>
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
                                <input type="submit" class="btn btn-primary" id="downloadpdf3" value="Descargar y enviar documento">
                            </div>
                        </div>
                        <div class="alert alert-success text-center" role="alert" id="pdfOk3" style="display: none;">
                            <p>Tu formulario se ha enviado correctamente</p>
                        </div>
                        <div class="alert alert-success text-center" role="alert" id="downloadOK3" style="display: none;">
                            <p>Tu formulario se ha descargado correctamente</p>
                        </div>
                        <div class="alert alert-danger text-center" role="alert" id="pdfNoOk3" style="display: none;">
                            <p>Tu formulario no se ha podido procesar</p>
                        </div>
                        <div class="alert alert-danger text-center" role="alert" id="downloadNoOK3" style="display: none;">
                            <p>Tu formulario no se ha podido desacargar</p>
                        </div>
                    </form>
                </div> 
            </div> 
            <div class="row justify-content-center" id="form44" style="display:none;">
                <div class="col-md-8 bg-white contenido-nosotros py-5 px-3">
                    <h4 class="separador text-center my-2">MANDATO ESPECÍFICO PARA LA INSCRIPCIÓN DE LA LICENCIA Y ACTIVIDADES DE LA FEDERACIÓN MADRILEÑA DE KARATE Y D.A.
                        (DEPORTISTAS MAYORES DE 18 AÑOS)</h4>
                    <form method="POST" action="" >
                        <div class="row py-2">
                            <div class="col-md-8">
                                <label for="nombre4">D/Dª</label>
                                <input type="text" class="form-control" name="nombre4" id="nombre4" placeholder="Nombre del deportista" required>
                            </div>
                            <div class="col-md-4">
                                <label for="documento4">con D.N.I.</label>
                                <input type="text" class="form-control" name="documento4" id="documento4" placeholder="D.N.I. / N.I.E. del deportista" required>
                            </div>
                        </div>
                        <div class="form-group mt-2">
                            <label for="domicilio4"> en su propio nombre y representación, con domicilio a efectos de notificaciones en </label>
                            <input type="text" class="form-control" name="domicilio4" id="domicilio4" placeholder="Domicilio del deportista" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="telefono4">Código postal</label>
                                <input type="tel" class="form-control" name="telefono4" id="telefono4" placeholder="Código Postal" required>
                            </div>
                            <div class="col-md-6">
                                <label for="localidad4">Localidad</label>
                                <input type="text" class="form-control" name="localidad4" id="localidad4" placeholder="localidad" required>
                            </div>
                        </div>
                        <div class="text-dark mt-4">
                            <p><strong>en concepto de MANDANTE (deportista).</strong></p>
                            <p><u><strong>Dice y otorga</strong></u></p>
                            <p><strong>Que confiere MANDATO a favor del representante de la Entidad Deportiva, CLUB DEPORTIVO ELEMENTAL KENPO HIKEN, con domicilio en CALLE BOLÍVAR, 22, PORTAL C, 1º C, 28045, Localidad MADRID, en concepto de MANDATARIO.</strong></p>
                            <p><strong>OBJETO DEL MANDATO.</strong></p>
                            <p><strong>Que el MANDATO, que se rige por los arts. 1709 a 1739 CC español se confiere para que se pueda llevar a cabo la afiliación/reafiliación federativa del MANDANTE en al año 2022.</strong></p>
                            <p><strong>Que este MANDATO también se otorga para que se pueda llevar a cabo la inscripción en actividades deportivas de la Federación Madrileña de Karate y D.A.</strong></p>
                            <p><strong>Que el MANDATO se concede para su actuación ante la Federación Madrileña de Karate y D.A., en las dependencias federativas personalmente o a través de los recursos online, en relación exclusivamente de los asuntos citados como objeto del MANDATO.</strong></p>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="ciudad4:">En</label>
                                <input type="text" class="form-control" name="ciudad4" id="ciudad4" placeholder="Ciudad" required>
                            </div>
                            <div class="col-md-6">
                                <label for="fecha4:">a</label>
                                <input type="date" class="form-control" name="fecha4" id="fecha4" required>
                            </div>
                        </div>
                        <div class="form-check py-2" style="display: none">
                            <label class="form-check-inline" for="conformidad4">Las condiciones han sido aceptadas</label>
                            <input type="checkbox" class="form-check-input is-invalid" name="conformidad4" id="conformidad4" checked disabled>
                        </div>
                        <div class="form-group mt-3">
                            <button type="button" class="btn btn-info" data-toggle="modal" data-target="#condicionesMandato2">
                                Acepta las condiciones
                            </button>
                            <div class="modal fade"data-backdrop="false" id="condicionesMandato2" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-uppercase text-center" id="ModalLongTitle"><strong>Aceptación de condiciones para la cesión de imágenes de mayores de 18 años</strong></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <p><strong>Que confiere MANDATO a favor del representante de la Entidad Deportiva, CLUB DEPORTIVO ELEMENTAL KENPO HIKEN, con domicilio en CALLE BOLÍVAR, 22, PORTAL C, 1º C, 28045, Localidad MADRID, en concepto de MANDATARIO.</strong></p>
                                            <p><strong>OBJETO DEL MANDATO.</strong></p>
                                            <p><strong>Que el MANDATO, que se rige por los arts. 1709 a 1739 CC español se confiere para que se pueda llevar a cabo la afiliación/reafiliación federativa del MANDANTE en al año 2022.</strong></p>
                                            <p><strong>Que este MANDATO también se otorga para que se pueda llevar a cabo la inscripción en actividades deportivas de la Federación Madrileña de Karate y D.A.</strong></p>
                                            <p><strong>Que el MANDATO se concede para su actuación ante la Federación Madrileña de Karate y D.A., en las dependencias federativas personalmente o a través de los recursos online, en relación exclusivamente de los asuntos citados como objeto del MANDATO.</strong></p>
                                            <p><strong>Acepto el MANDATO conferido y me obligo a cumplirlo de conformidad a las instrucciones del MANDANTE, y declaro bajo mi responsabilidad de la veracidad y actualización de los datos facilitados para la inscripción de la licencia y actividades de la Federación Madrileña de Karate y D.A.</strong></p>
                                            <p><strong>EL MANDANTE (deportista)</strong></p>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                            <button type="button" class="btn btn-primary" id="aceptacionCondicionesImg">Acepto las condiciones</button>
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
                                <input type="submit" class="btn btn-primary" id="downloadpdf4" value="Descargar y enviar documento">
                            </div>
                        </div>
                        <div class="alert alert-success text-center" role="alert" id="pdfOk4" style="display: none;">
                            <p>Tu formulario se ha enviado correctamente</p>
                        </div>
                        <div class="alert alert-success text-center" role="alert" id="downloadOK4" style="display: none;">
                            <p>Tu formulario se ha descargado correctamente</p>
                        </div>
                        <div class="alert alert-danger text-center" role="alert" id="pdfNoOk4" style="display: none;">
                            <p>Tu formulario no se ha podido procesar</p>
                        </div>
                        <div class="alert alert-danger text-center" role="alert" id="downloadNoOK4" style="display: none;">
                            <p>Tu formulario no se ha podido desacargar</p>
                        </div>
                    </form>
                </div> 
            </div>   
        </main>
        <footer class="footer p-4 col-12">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-12 col-8">
                        <!--desde mediano en adelante ocupa el md y más bajo el resto y -->
                        <p class="copyright text-center text-md-center">Todos los derechos reservados</p>
                    </div>
                </div>
            </div>
        </footer>
        <a class="appwhatsapp" target="_blanck" href="https://api.whatsapp.com/send?phone=672233318&amp;text=Hola!&nbsp;me&nbsp;pueden&nbsp;ayudar?">
            <img src="img/whatsapp.png" alt="whatsapp"/>
        </a>
    </body>

</html>