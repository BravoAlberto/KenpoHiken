<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Alberto Bravo">
        <title>Administración de deportistas</title>
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
                    <div class="col-md-4 col-12 mb-4 mb-md-0">
                        <a href="index.php">
                            <img src="img/Logo_Hiken.jpg" class="logo img-fluid">
                        </a>
                    </div>
                    <div class="col-12 col-md-8">
                        <nav
                            class="menu nav flex-column flex-md-row text-center d-flex justify-content-md-end justify-content-center">
                            <a href="index.php" class="nav-link">Inicio</a>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <?php
        session_start();
        if ($_SESSION['usuario'] == "administrador") {
            ?>
            <main class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-md-8 col-lg-9 bg-white contenido-nosotros py-2 px-2">
                        <h2 class="text-center py-3">Listado de deportistas</h2>
                        <div class="table-responsive-md text-center">
                            <table style="height: 100px;" class="table table-hover">
                                <caption>Temporada 2021/2022</caption>
                                <thead>
                                    <tr>
                                        <th scope="col">Nombre</th>
                                        <th scope="col">Apellido.1º</th>
                                        <th scope="col">Apellido.2º</th>
                                        <th scope="col">Teléfono</th>
                                        <th scope="col">Ficha</th>
                                        <th scope="col">Imágenes</th>
                                        <th scope="col">Mandato</th>
                                        <th scope="col">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="align-middle">Alberto</td>
                                        <td class="align-middle">Bravo</td>
                                        <td class="align-middle">García</td>
                                        <td class="align-middle">672233318</td>
                                        <td class="align-middle"><button class="btn btn-info" type="button" id="abrir">PDF</button></td>
                                        <td class="align-middle"><button class="btn btn-info" type="button" id="abrir">PDF</button></td>
                                        <td class="align-middle"><button class="btn btn-info" type="button" id="abrir">PDF</button></td>
                                        <td class="align-middle">
                                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#borrarCuenta">X</button>
                                            <div class="alinear modal fade" data-backdrop="false" id="borrarCuenta" tabindex="-1" role="dialog" aria-labelledby="ModalLongTitle" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header justify-content-around">
                                                            <h5 class="alert alert-primary text-light modal-title text-uppercase" id="ModalLongTitle">Borrado de cuenta de usuario</h5>
                                                        </div>
                                                        <div class="modal-body">
                                                            <p>¿Estás seguro de que quieres borrar la cuenta de este deportista?<p>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-primary" data-dismiss="modal">No</button>
                                                            <button type="button" class="btn btn-success" id="borrarCuenta">Si</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <?php
            session_destroy();
        } else {
            header('location:accesoDenegado.php');
        }
        ?>
        <footer class="footer mt-auto p-4 fixed-bottom">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-8 mb-2 mb-md-0">

                        <p class="copyright text-center text-md-center"></p>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>
