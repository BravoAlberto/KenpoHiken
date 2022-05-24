<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Kenpo Hiken</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
                integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"
                integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ"
        crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"
                integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm"
        crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/3d613ca332.js "></script>
        <link rel="stylesheet" href="css/styles.css">
    </head>

    <body class="index">

        <header class="header menu py-3">
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
                                <a href="contacto.php" class="nav-link">Contacto</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <div class="container">
            <div class="row imagen-superior">
                <div class="col-md-12 bg-primary">
                    <div class="row justify-content-center align-items-center h-100">
                        <div class="col-sm-8 col-md-6">
                            <div class="contenido text-center text-light mb-2 mt-2">
                                <h2 class="text-uppercase">10 Años de Experiencia</h2>
                                <h5>Con 100 alumnos y 2 gimnasios.</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!--<div class="col-md-6 bg-cartel">
                </div>-->
            </div>
            <div class="row imagen-superior">
                <div class="col-md-12 video">
                    <iframe title="vimeo-player" src="https://player.vimeo.com/video/706645389?h=f2c346ac0c"
                            allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <div class="container">
            <section class="nosotros mt-5">
                <h2 class="separador text-center mb-3">Sobre nosotros</h2>
                <div class="row">
                    <div class="col-md-4 text-center informacion">
                        <img src="img/Movil.jpg" class="img-fluid mb-3" alt="imagenhiken">
                        <h3>Kenpo Hiken</h3>
                        <p>Nuestro club nace como consecuencia de la amistad creada entre compañeros de Kenpo del
                            Polideportivo Municipal Arganzuela.<br>
                            <a class="btn btn-link" href="https://www.kenpohiken.es/">Más información</a></p>
                    </div>
                    <div class="col-md-4 text-center informacion">
                        <img src="img/icono_kenpo_americano.jpg" class="img-fluid mb-3" alt="imagenAmer">
                        <h3>Kenpo Americano</h3>
                        <p>Somos practicantes de Kenpo en el estilo de Kenpo Karate o Kenpo Americano, creado por Ed.
                            Parker.<br>
                            <a class="btn btn-link" href="https://www.americankenpo.com/">Más información</a></p>                        
                    </div>
                    <div class="col-md-4 text-center informacion">
                        <img src="img/AKA_BN.jpg" class="img-fluid mb-3" alt="imagenAKA">
                        <h3>A.K.A.</h3>
                        <p>Nuestro club es miembro de American Kenpo Academies, una asociación de clubes y para la práctica
                            y mejora de nuestro arte.<br>
                            <a class="btn btn-link" href="https://es-es.facebook.com/akakenpo/">Más información</a></p>
                    </div>
                </div>
            </section>
        </div>
        <!--.container-->
        <section class="clases mt-5 py-5">
            <h2 class="inverso text-center mb-3">Sobre nuestras clases</h2>
            <a name="info"></a>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img src="img/clase1.jpg" class="card-img-top" alt="imagenClases">
                            <div
                                class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                                <p class="text-center m-0"></p>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Clases</h3>
                                <p class="card-subtitle mb-2">Elige el horario que más te interese</p>
                                <p class="card-text">Depende de tu edad tenenemos diferentes turnos en los que podrás
                                    entrenar con nostros.</p>
                                <a class="btn btn-primary d-block d-md-inline" href="clases.html">Más Información.</a>
                            </div>
                        </div>
                    </div>
                    <!--.col-md-4-->
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img src="img/clase2.png" class="card-img-top" alt="imagenPrecios">
                            <div
                                class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Precios</h3>
                                <p class="card-subtitle mb-2">Elige cuanto quieres entrenar.</p>
                                <p class="card-text">Dependiendo de la clase que elijas podrás entrenar con nostros por
                                    diferentes precios. Podrás combinar las clases que quieras.</p>
                                <a class="btn btn-primary d-block d-md-inline" href="precios.html">Más Información.</a>
                            </div>
                        </div>
                    </div>
                    <!--.col-md-4-->
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img src="img/clase3.jpg" class="card-img-top" alt="imagenlocaliz">
                            <div
                                class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                                <p class="text-center m-0"></p>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Localizaciones</h3>
                                <p class="card-subtitle mb-2">
                                    Elige en que gimanasio quieres entrenar.
                                </p>
                                <p class="card-text">Contamos con dos ubicaciones en Madrid en las que podrás entrenar.
                                    Elige la que más te convenga.
                                </p>
                                <a class="btn btn-primary d-block d-md-inline" href="localizaciones.html">Más
                                    Información.</a>
                            </div>
                        </div>
                    </div>
                    <!--.col-md-4-->
                </div>
            </div>
        </section>

        <div class="licenciatura">
            <div class="container">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-6 ">
                        <div class="contenido text-light text-center ">
                            <h2>¿Quieres empezar a entrenar con nosotros?</h2>
                            <p class="display-4">
                                Contáctanos y apúntate a nuestras clases
                            </p>
                            <a href="registro.php" class="btn-primary btn text-uppercase">Inscríbete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer py-4">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 mb-2 mb-md-0">
                        <nav class="nav justify-content-center">
                            <a href="https://www.instagram.com/kenpohiken/"
                               class="fab fa-instagram icono instagram d-inline-flex align-items-center justify-content-center">
                            </a>
                            <a href="https://www.facebook.com/KenpoHiken"
                               class="fab fa-facebook-f icono facebook d-inline-flex align-items-center justify-content-center">
                            </a>
                            <a href="https://www.youtube.com/channel/UCMua7FE1B_lpO1lzTXDwgvw"
                               class="fab fa-youtube icono youtube d-inline-flex align-items-center justify-content-center">
                            </a>
                            <a href="https://twitter.com/kenpohiken"
                               class="fab fa-twitter icono twitter d-inline-flex align-items-center justify-content-center">
                            </a>
                        </nav>
                    </div>

                </div>
            </div>
            <div class="container">
                <div class="menu contacto text-center text-md-right col-12 mt-4 mb-md-0">
                    <!--desde mediano en adelante ocupa el md y más bajo el resto y -->
                    <p class="copyright text-center text-md-center"> <a href="privacidad.php">Todos los derechos reservados</a></p>
                </div>
            </div>
        </div>
    </footer>
    <a class="appwhatsapp" target="_blanck" href="https://api.whatsapp.com/send?phone=+34627605310&amp;text=Hola!&nbsp;me&nbsp;pueden&nbsp;ayudar?">
        <img src="img/whatsapp.png" alt="whatsapp"/>
    </a>
</body>

</html>