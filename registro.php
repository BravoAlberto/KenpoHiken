<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="author" content="Alberto Bravo">
        <title>Registro</title>
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
                            <img src="img/Logo_Hiken.jpg" class="img-fluid" alt="imagenLogo">
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
                                <a href="registro.php" class="nav-link active">Registrarse</a>
                                <a href="contacto.php" class="nav-link">Contacto</a>
                                <a href="index.php" class="nav-link">Volver</a>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </header>
        <main class="container py-3 mb-5">
            <div class="row justify-content-center">
                <div class="col-md-8 bg-white contenido-nosotros py-4 px-3">
                    <h2 class="separador text-center my-3">Reg??strate</h2>
                    <div id="ficha">
                        <p class="fw-normal fs-5">Introduce los datos con los se acceder?? a la cuenta de usuario<br>                            
                            <span class="fw-bold">La contrase??a debe tener entre 6 y 15 caracteres<br>Todos los campos son obligatorios</span></p>
                        <form method="POST">
                            <div class="form-group">
                                <label for="usuario">Nombre de usuario</label>
                                <input type="text" class="form-control" name="usuario" id="usuario"
                                       placeholder="Tu nombre de usuario" value="<?php echo (!empty($_POST['usuario'])) ? $nombre : ''; ?>" required>
                                <div class="alert alert-danger mt-2" role="alert" id="errorvacio1" style="display: none;">
                                    No puedes dejar este campo vac??o.
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Contrase??a de acceso</label>
                                <input type="password" class="form-control" name="password" id="password"
                                       placeholder="Tu password" required>
                                <div class="alert alert-danger mt-2" role="alert" id="errorvacio2" style="display: none;">
                                    La contrase??a tiene que tener entre 6 y 15 caracteres.
                                </div>
                            </div>
                            <div class="alert alert-info mt-2" role="alert" id="errorvacio17" style="display: none;">
                                Este usuario ya existe, debes probar con otro nombre de usuario.
                            </div>
                            <button class="btn btn-primary" type="button" id="continuar">Continuar</button>
                            <button class="btn btn-primary" type="button" id="spinner" disabled style="display: none;">
                                <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                Continuar</button>
                            <div id="datos" style="display: none;">
                                <hr class="my-3"/>
                                <p class="fw-normal fs-5">Introduce ahora los siguientes datos del <span class="fw-bold text-danger">deportista</span> para que podamos crear su ficha.<br>
                                    <span class="fw-bold">Todos los campos son obligatorios</span></p>
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Tu nombre" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="apellido1">Primer apellido</label>
                                            <input type="text" class="form-control" name="apellido1" id="apellido1" placeholder="Tu primer apellido" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="apellido2">Segundo apellido</label>
                                            <input type="text" class="form-control" name="apellido2" id="apellido2"
                                                    placeholder="Tu segundo apellido">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group ">
                                            <label for="tipo">Tipo de documento</label>
                                            <select class="form-control" name="tipo" id="tipo"  required>
                                                <option selected value="">Tipo documento</option>
                                                <option value="dni">DNI</option>
                                                <option value="nie">NIE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group ">
                                            <label for="documento">N??mero de documento</label>
                                            <input type="text" class="form-control" name="documento" id="documento"
                                                    placeholder="Tu documento" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group ">
                                            <label for="nacimiento">Fecha de nacimiento</label>
                                            <input type="date" class="form-control" name="nacimiento" id="nacimiento"
                                                    required>
                                        </div>
                                    </div>
                                </div>
                                <div class="alert alert-danger text-center mt-1" role="alert" id="errordn1" style="display: none;">
                                    El n??mero del DNI o del NIE no es correcto.<br><strong>No contiene 9 caracteres o la letra no es correcta, rev??selo.</strong>
                                </div>
                                <div class="alert alert-danger text-center mt-1" role="alert" id="errorFecha" style="display: none;">
                                    La fecha de nacimiento tiene que ser anterior al d??a de hoy.
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="lugarNac">Lugar de nacimiento</label>
                                            <input type="text" class="form-control" name="lugarNac" id="lugarNac"
                                                    placeholder="Tu lugar de nacimiento" required>
                                        </div>
                                    </div>
                                    <!--.col-md-6-->
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="pais">Nacionalidad</label>
                                            <input type="text" class="form-control" name="pais" id="pais"
                                                    placeholder="Tu nacionalidad" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address">Direcci??n</label>
                                    <input type="text" class="form-control" name="address" id="address"
                                           placeholder="Tu direcci??n" required>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group ">
                                            <label for="ciudad">Ciudad</label>
                                            <input type="text" class="form-control" name="ciudad" id="ciudad"
                                                    placeholder="Tu ciudad" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group ">
                                            <label for="provincia">Provincia</label>
                                            <input type="text" class="form-control" name="provincia" id="provincia"
                                                    placeholder="Tu provincia" required>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group ">
                                            <label for="CP">C??digo Postal</label>
                                            <input type="text" class="form-control" name="CP" id="CP" placeholder="Tu c??digo postal" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="alert alert-danger text-center mt-1" role="alert" id="errorCP" style="display: none;">
                                    El C??digo postal introducido no es correcto, <strong>debe tener 5 d??gitos.</strong>.
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="telefono">Tel??fono</label>
                                            <input type="text" class="form-control" name="telefono" id="telefono"
                                                    placeholder="Tu tel??fono" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mail">E-mail</label>
                                            <input type="text" class="form-control" name="mail" id="mail"
                                                    placeholder="Tu e-mail" required>
                                        </div>
                                    </div>
                                </div>
                                <div class="alert alert-danger text-center mt-1" role="alert" id="errormail" style="display: none;">
                                    El email introducido no es correcto. Un ejemplo de email podr??a ser<br>
                                    <strong>ejemplo@ejemplo.com(es,org...)</strong>.
                                </div>
                                <div class="alert alert-danger text-center mt-1" role="alert" id="errorTelefono" style="display: none;">
                                    El tel??fono introducido no es correcto, <strong>debe tener 9 d??gitos.</strong>.
                                </div>
                                <div class="form-group">
                                    <label for="dolencia">??Padece usted alguna enfermedad o trastorno que impida o dificulte la
                                        pr??ctica de kenpo?</label>
                                    <select class="form-control" name="dolencia" id="dolencia"  required>
                                        <option selected value="">Elige una de las dos opciones</option>
                                        <option value="si">SI</option>
                                        <option value="no">NO</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="mensaje">En caso afirmativo, indique cuales</label>
                                    <textarea class="form-control" name="mensaje" id="mensaje" rows="2"></textarea>
                                </div>
                                <div class="alert alert-danger text-center mt-1" role="alert" id="camposVacios" style="display: none">
                                    No puedes enviar el formulario con campos vac??os.
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary" id="enviar" value="Enviar datos">
                                    <button class="btn btn-primary" type="button" id="spinnerEnviar" disabled style="display: none;">
                                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                                        Continuar</button>
                                </div>
                            </div>      
                        </form>
                    </div>
                    <div class="alert alert-info text-center" role="alert" id="cuentaOk" style="display: none;">
                        <p>FELICIDADES<br>
                            TU CUENTA DE USUARIO HA SIDO CREADA CON EXITO</p>
                        <a class="btn btn-light" href="incio.php">Accede a tu cuenta</a>
                    </div>
                    <div class="alert alert-success text-center mt-2" role="alert" id="cuentaNoOk" style="display: none;">
                        Se ha producido un error a la hora de grabar sus datos.<br>Int??ntalo de nuevo utilizando un nombre de usuario diferente.
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer fixed-bottom mt-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6 col-8 mb-2 mb-md-0">
                        <p class="copyright text-center text-md-center"> <!--<a href="privacidad.php">Todos los derechos reservados</a>--></p>
                    </div>
                </div>
            </div>
        </footer>
        <a class="appwhatsapp" target="_blank" href="https://api.whatsapp.com/send?phone=+34627605310&amp;text=Hola!&nbsp;me&nbsp;pueden&nbsp;ayudar?">
            <img src="img/whatsapp.png" alt="whatsapp"/>
        </a>
    </body>
</html>