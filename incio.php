<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Acceso</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body>

        <header class="header py-3">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-4 col-8 mb-4 mb-md-0">
                        <a href="index.php">
                            <img src="img/Logo_Hiken.jpg" class="logo img-fluid">
                        </a>
                    </div>
                    <div class="col-12 col-md-8">
                        <nav
                            class="menu nav flex-column flex-md-row text-center d-flex justify-content-md-end justify-content-center">
                            <a href="index.php" class="nav-link">Volver</a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>

        <main class="container py-4">
            <div class="row justify-content-center">
                <div class="col-md-4 bg-white contenido-nosotros py-5 px-3">
                    <h2 class="separador text-center my-3">Inicio de sesión</h2>
                    <form method="POST" action="">
                        <div class="form-group">
                            <div class="form-group">
                                <label for="usuario1">Nombre</label>
                                <input type="text" class="form-control" name="usuario1" id="usuario1" placeholder="Tu nombre de usuario">
                            </div>
                            <div class="form-group">
                                <label for="password1">Contraseña</label>
                                <input type="password" class="form-control" name="password1" id="password1"
                                       placeholder="Tu contraseña de usuario">
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-primary" value="Acceder" name="acceder" id="acceder">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </main>
        <footer class="footer p-4">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-12 col-8">
                        <!--desde mediano en adelante ocupa el md y más bajo el resto y -->
                        <p class="copyright text-center text-md-center">Todos los derechos reservados</p>
                    </div>
                </div>
            </div>
        </footer>

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

    </body>

</html>