<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Login</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css.map">
        <link rel="shortcut icon" href="#">
        <!--<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css.map" rel="stylesheet">-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css">
        <script src="funciones/funciones.js"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
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
                                <a href="incio.php" class="nav-link active">Entrar</a>
                                <a href="registro.php" class="nav-link">Registrarse</a>
                                <a href="contacto.html" class="nav-link">Contacto</a>
                                <a href="index.php" class="nav-link">Volver</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <main class="container py-4">
            <div class="row justify-content-center">
                <div class=" col-sm-6 col-9 bg-white contenido-nosotros py-5 px-3">
                    <h2 class="separador text-center my-3">Inicio de sesión</h2>
                    <form method="POST" action="#">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="usuarioAcceso">Usuario</label>
                                <input type="text" class="form-control" name="usuarioAcceso" id="usuarioAcceso" placeholder="Tu nombre de usuario" required>
                                <div class="alert alert-danger" role="alert" id="errorUsu" style="display: none;">
                                    <a class="close" data-dismiss="alert"> × </a>
                                    No puedes dejar este campo vacío.
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="passwordAcceso">Contraseña</label>
                                <input type="password" class="form-control" name="passwordAcceso" id="passwordAcceso" placeholder="Tu contraseña de usuario" required>
                                <div class="alert alert-danger" role="alert" id="ErrorClave" style="display: none;">
                                    <a class="close" data-dismiss="alert"> × </a>
                                    La contraseña tiene que tener entre 6 y 8 caracteres.
                                </div>
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Acceder" name="acceder" id="acceder">
                            </div>
                            <button class="btn btn-primary" type="button" id="spinnerAcceso" disabled style="display: none;">
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Continuar</button>
                            <br>                          
                        </div>
                    </form>
                    <div class="alert alert-danger" role="alert" id="errorRegistro" style="display: none;">
                        <a class="close" data-dismiss="alert"> × </a>
                        El usuario o la contraseña son erróneos.<br>Intentalo nuevamente
                    </div> 
                </div>
            </div>
        </main>
        <footer class="footer p-4">
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