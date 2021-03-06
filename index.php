<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Alberto Bravo">
        <title>Kenpo Hiken</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
        <link rel="shortcut icon" href="#">
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
                                <h2 class="text-uppercase">10 A??os de Experiencia</h2>
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
                        <p>Nuestro club nace como consecuencia de la amistad creada entre compa??eros de Kenpo del
                            Polideportivo Municipal Arganzuela.<br>
                            <a class="btn btn-link" href="https://www.kenpohiken.es/"  target="_blank">M??s informaci??n</a></p>
                    </div>
                    <div class="col-md-4 text-center informacion">
                        <img src="img/icono_kenpo_americano.jpg" class="img-fluid mb-3" alt="imagenAmer">
                        <h3>Kenpo Americano</h3>
                        <p>Somos practicantes de Kenpo en el estilo de Kenpo Karate o Kenpo Americano, creado por Ed Parker en California en la decada de los 60.<br>
                            <a class="btn btn-link" href="https://www.americankenpo.com/"  target="_blank">M??s informaci??n</a></p>                        
                    </div>
                    <div class="col-md-4 text-center informacion">
                        <img src="img/AKA_BN.jpg" class="img-fluid mb-3" alt="imagenAKA">
                        <h3>A.K.A.</h3>
                        <p>Nuestro club es miembro de American Kenpo Academies, una asociaci??n de clubes y para la pr??ctica
                            y mejora de nuestro arte.<br>
                            <a class="btn btn-link" href="https://es-es.facebook.com/akakenpo/"  target="_blank">M??s informaci??n</a></p>
                    </div>
                </div>
            </section>
        </div>
        <!--.container-->
        <section class="clases mt-5 py-5">
            <h2 class="inverso text-center mb-3">Sobre nuestras clases</h2>
            <a id="info"></a>
            <div class="container">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <img src="img/Clase1.jpg" class="card-img-top" alt="imagenClases">
                            <div
                                class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                                <p class="text-center m-0"></p>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Clases</h3>
                                <p class="card-subtitle mb-2">Elige el horario que m??s te interese</p>
                                <p class="card-text">Depende de tu edad tenenemos diferentes turnos en los que podr??s
                                    entrenar con nostros.</p>
                                <a class="btn btn-primary d-block d-md-inline" href="clases.html">M??s Informaci??n.</a>
                            </div>
                        </div>
                    </div>
                    <!--.col-md-4-->
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img src="img/Clase2.png" class="card-img-top" alt="imagenPrecios">
                            <div
                                class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Precios</h3>
                                <p class="card-subtitle mb-2">Elige cuanto quieres entrenar.</p>
                                <p class="card-text">Dependiendo de la clase que elijas podr??s entrenar con nostros por
                                    diferentes precios. Podr??s combinar las clases que quieras.</p>
                                <a class="btn btn-primary d-block d-md-inline" href="precios.html">M??s Informaci??n.</a>
                            </div>
                        </div>
                    </div>
                    <!--.col-md-4-->
                    <div class="col-md-6 col-lg-4">
                        <div class="card">
                            <img src="img/Clase3.jpg" class="card-img-top" alt="imagenlocaliz">
                            <div
                                class="card-meta bg-primary p-3 text-light d-flex justify-content-between align-items-center">
                                <p class="text-center m-0"></p>
                            </div>
                            <div class="card-body">
                                <h3 class="card-title">Localizaciones</h3>
                                <p class="card-subtitle mb-2">
                                    Elige d??nde quieres entrenar.
                                </p>
                                <p class="card-text">Contamos con dos ubicaciones en las que podr??s entrenar. En Madrid capital y en las Rozas. 
                                    Elige la que m??s te convenga.
                                </p>
                                <a class="btn btn-primary d-block d-md-inline" href="localizaciones.html">M??s
                                    Informaci??n.</a>
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
                            <h2>??Quieres empezar a entrenar con nosotros?</h2>
                            <p class="display-4">
                                Cont??ctanos y ap??ntate a nuestras clases
                            </p>
                            <a href="registro.php" class="btn-primary btn text-uppercase">Inscr??bete</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <footer class="footer py-4 mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8 mb-2 mb-md-0">
                        <nav class="nav justify-content-center">
                            <a href="https://www.instagram.com/kenpohiken/"  target="_blank"
                               class="fab fa-instagram icono instagram d-inline-flex align-items-center justify-content-center">
                            </a>
                            <a href="https://www.facebook.com/KenpoHiken"  target="_blank"
                               class="fab fa-facebook-f icono facebook d-inline-flex align-items-center justify-content-center">
                            </a>
                            <a href="https://www.youtube.com/channel/UCMua7FE1B_lpO1lzTXDwgvw"  target="_blank"
                               class="fab fa-youtube icono youtube d-inline-flex align-items-center justify-content-center">
                            </a>
                            <a href="https://twitter.com/kenpohiken" target="_blank"
                               class="fab fa-twitter icono twitter d-inline-flex align-items-center justify-content-center">
                            </a>
                        </nav>
                    </div>

                </div>
            </div>
            <div class="container mt-4">
                <div class="menu contacto text-center text-md-right col-12 mt-4 mb-md-0">
                    <!--desde mediano en adelante ocupa el md y m??s bajo el resto y -->
                    <p class="copyright text-center text-md-center"> <a href="privacidad.php">Todos los derechos reservados</a></p>
                </div>
            </div>
    </footer>
    <a class="appwhatsapp" href="https://api.whatsapp.com/send?phone=+34627605310&amp;text=Hola!&nbsp;me&nbsp;pueden&nbsp;ayudar?" target="_blank" >
        <img src="img/whatsapp.png" alt="whatsapp"/>
    </a>
</body>

</html>