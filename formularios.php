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
                    <h2 class="separador text-center my-3">Ficha Deportiva Hiken</h2>
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
                        <div class="text-primary">
                            <p><strong>Selecciona que quieres hacer con el formulario</strong></p>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" id="enviopdf1" value="Enviar documento">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" id="downloadpdf1" value="Descargar y enviar documento">
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
                    <h2 class="separador text-center my-3">Mandato inscripción < 18 años</h2>
                    <form method="POST" action="" >
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre2" placeholder="Tu nombre" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="telefono:">Teléfono:</label>
                                <input type="tel" class="form-control" name="telefono" id="telefono2" placeholder="Teléfono" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email:">E-mail</label>
                                <input type="email" class="form-control" name="email" id="correo2" placeholder="E-mail" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Mensaje</label>
                            <textarea class="form-control" name="mensaje" id="mensaje2" cols="30" rows="3" placeholder="Explica brevemente en que podemos ayudarte" required></textarea>
                        </div>
                        <div class="text-primary">
                            <p><strong>Selecciona que quieres hacer con el formulario</strong></p>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" id="enviopdf2" value="Enviar documento">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" id="downloadpdf2" value="Descargar y enviar documento">
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
                    <h2 class="separador text-center my-3">Autorización imagenes < 18 años</h2>
                    <form method="POST" action="" >
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre3" placeholder="Tu nombre" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="telefono:">Teléfono:</label>
                                <input type="tel" class="form-control" name="telefono" id="telefono3" placeholder="Teléfono" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email:">E-mail</label>
                                <input type="email" class="form-control" name="email" id="correo3" placeholder="E-mail" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Mensaje</label>
                            <textarea class="form-control" name="mensaje" id="mensaje3" cols="30" rows="3" placeholder="Explica brevemente en que podemos ayudarte" required></textarea>
                        </div>
                        <div class="text-primary">
                            <p><strong>Selecciona que quieres hacer con el formulario</strong></p>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" id="enviopdf23" value="Enviar documento">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" id="downloadpdf3" value="Descargar y enviar documento">
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
                    <h2 class="separador text-center my-3">Mandato inscripción > 18 años</h2>
                    <form method="POST" action="" >
                        <div class="form-group">
                            <label for="nombre">Nombre:</label>
                            <input type="text" class="form-control" name="nombre" id="nombre4" placeholder="Tu nombre" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="telefono:">Teléfono:</label>
                                <input type="tel" class="form-control" name="telefono" id="telefono4" placeholder="Teléfono" required>
                            </div>
                            <div class="col-md-6">
                                <label for="email:">E-mail</label>
                                <input type="email" class="form-control" name="email" id="correo4" placeholder="E-mail" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="mensaje">Mensaje</label>
                            <textarea class="form-control" name="mensaje" id="mensaje4" cols="30" rows="3" placeholder="Explica brevemente en que podemos ayudarte" required></textarea>
                        </div>
                        <div class="text-primary">
                            <p><strong>Selecciona que quieres hacer con el formulario</strong></p>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" id="enviopdf4" value="Enviar documento">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" id="downloadpdf4" value="Descargar y enviar documento">
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
                        <div class="alert alert-danger text-center" role="alert" id="downloadNoOK42" style="display: none;">
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