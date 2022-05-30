<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Alberto Bravo">
        <title>Contacto</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="shortcut icon" href="#">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
                integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
        <script src="funciones/funciones.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
                integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
    </head>
    <body>
        <header class="header py-3 mb-5">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-4 col-12 mb-4 mb-md-0">
                        <a href="index.php">
                            <img src="img/Logo_Hiken.jpg" class="logo img-fluid" alt="imagenLogo">
                        </a>
                    </div>
                    <div class="col-12 col-md-8">
                        <nav class="nav-principal navbar navbar-expand-md navbar-light  justify-content-center ">
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav_principal"
                                    aria-expanded="false">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                            <div class="collapse navbar-collapse flex-column flex-sm-row justify-content-md-end text-center"
                                 id="nav_principal">
                                <a href="incio.php" class="nav-link">Entrar</a>
                                <a href="registro.php" class="nav-link">Registrarse</a>
                                <a href="contacto.php" class="nav-link active">Contacto</a>
                                <a href="index.php" class="nav-link">Volver</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <main class="container py-4">
            <div class="row justify-content-center">
                <div class="col-md-8 bg-white contenido-nosotros py-5 px-3">
                    <h2 class="separador text-center my-3">Contacto</h2>
                    <form method="POST">
                        <div class="form-group">
                            <label for="nombreMail">Nombre:</label>
                            <input type="text" class="form-control" name="nombreMail" id="nombreMail" placeholder="Tu nombre" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <label for="telefonoMail">Teléfono:</label>
                                <input type="tel" class="form-control" name="telefonoMail" id="telefonoMail" placeholder="Teléfono" required>
                            </div>
                            <div class="col-md-6">
                                <label for="emailMail">E-mail</label>
                                <input type="email" class="form-control" name="emailMail" id="emailMail" placeholder="E-mail" required>
                            </div>
                        </div>

                        <div class="alert alert-danger text-center mt-1" role="alert" id="errormailMail" style="display: none;">
                            El email introducido no es correcto. Un ejemplo de email podría ser<br>
                            <strong>ejemplo@ejemplo.com(es,org...)</strong>.
                        </div>
                        <div class="alert alert-danger text-center mt-1" role="alert" id="errorTelefonoMail" style="display: none;">
                            El teléfono introducido no es correcto, <strong>debe tener 9 dígitos.</strong>.
                        </div>
                        <div class="form-group mt-3">
                            <label for="mensajeMail">Mensaje</label>
                            <textarea class="form-control" name="mensajeMail" id="mensajeMail" cols="30" rows="3" placeholder="Explica brevemente en que podemos ayudarte" required></textarea>
                        </div>
                        <div class="alert alert-danger text-center mt-1" role="alert" id="camposVaciosContacto" style="display: none">
                            No puedes enviar el mensaje con campos vacíos.
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" id="correo" name="correo" value="Enviar mensaje">
                        </div>
                        <div class="alert alert-success text-center mt-1" role="alert" id="mailOk" style="display: none;">
                            <p>Tu email se ha enviado correctamete</p>
                        </div>
                        <div class="alert alert-danger text-center mt-1" role="alert" id="mailNoOk" style="display: none;">
                            <p>Tu email no ha podido enviarse</p>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <footer class="footer fixed-bottom mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-8 mb-2 mb-md-0">
                        <!--desde mediano en adelante ocupa el md y más bajo el resto y -->
                        <p class="copyright text-center text-md-center"> <a href="privacidad.php">Todos los derechos reservados</a></p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>