<!DOCTYPE html>
<html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registro</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css.map">
        <link rel="shortcut icon" href="#">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css.map" rel="stylesheet">
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
        <header class="header py-3">
            <div class="container">
                <div class="row justify-content-center align-items-center">
                    <div class="col-md-4 col-8 mb-4 mb-md-0">
                        <a href="index.php">
                            <img src="img/Logo_Hiken.jpg" class="img-fluid" alt="imagenLogo">
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
                <div class="col-md-8 bg-white contenido-nosotros py-4 px-3">
                    <h2 class="separador text-center my-3">Regístrate</h2>
                    <form method="post" action="guardarficha.php">
                        <p>Introduce a continuación los datos con los que quieres acceder a tu cuenta de usuario<br>
                            Todos los campos son obligatorios</p>
                        <div class="form-group">
                            <div class="form-group">
                                <label for="usuario">Nombre de usuario</label>
                                <input type="text" class="form-control" name="usuario" id="usuario"
                                       placeholder="Tu nombre de usuario" value="<?php echo (!empty($_POST['usuario'])) ? $nombre : ''; ?>" required>
                                <div class="alert alert-danger" role="alert" id="errorvacio1" style="display: none;">
                                    <a class="close" data-dismiss="alert"> × </a>
                                    No puedes dejar este campo vacío.
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password">Contraseña de acceso</label>
                                <input type="password" class="form-control" name="password" id="password"
                                       placeholder="Tu password" required>
                                <div class="alert alert-danger" role="alert" id="errorvacio2" style="display: none;">
                                    <a class="close" data-dismiss="alert"> × </a>
                                    La contraseña tiene que tener entre 6 y 8 caracteres.
                                </div>
                            </div>
                            <button class="btn btn-primary" type="button" id="continuar">Continuar</button>
                            <br>
                            <div class="alert alert-info" role="alert" id="errorvacio17" style="display: none;">
                                <a class="close" data-dismiss="alert"> × </a>
                                Este usuario ya existe, debes probar con otro nombre de usuario.
                            </div>
                            <hr class="my-3"/>
                            <div id="datos" style="display: none;">
                                <p>Introduce ahora tus datos personales para que podamos crear tu ficha de alumno<br>
                                    Todos los campos son obligatorios</p>
                                <div class="form-group">
                                    <label for="nombre">Nombre</label>
                                    <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Tu nombre" required>
                                    <div class="alert alert-danger" role="alert" id="errorvacio3" style="display: none;">
                                        <a class="close" data-dismiss="alert"> × </a>
                                        No puedes dejar este campo vacío.
                                    </div>
                                    <div class="invalid-feedback">
                                        Please provide a valid name.
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="apellido1">Primer apellido</label>
                                            <input type="text" class="form-control" name="apellido1" id="apellido1"
                                                   aria-describedby="helpId" placeholder="Tu primer apellido" required>
                                            <div class="alert alert-danger" role="alert" id="errorvacio4" style="display: none;">
                                                <a class="close" data-dismiss="alert"> × </a>
                                                No puedes dejar este campo vacío.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="apellido2">Segundo apellido</label>
                                            <input type="text" class="form-control" name="apellido2" id="apellido2"
                                                   aria-describedby="helpId" placeholder="Tu segundo apellido">
                                            <div class="alert alert-danger" role="alert" id="errorvacio5" style="display: none;">
                                                <a class="close" data-dismiss="alert"> × </a>
                                                No puedes dejar este campo vacío.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group ">
                                            <label for="tipo">Tipo de documento</label>
                                            <select class="form-control" name="tipo" id="tipo" aria-describedby="helpId" required>
                                                <option selected value="">Tipo documento</option>
                                                <option value="dni">DNI</option>
                                                <option value="nie">NIE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group ">
                                            <label for="documento">Número de documento</label>
                                            <input type="text" class="form-control" name="documento" id="documento"
                                                   aria-describedby="helpId" placeholder="Tu documento" required>
                                            <div class="alert alert-danger" role="alert" id="errordn1" style="display: none;">
                                                <a class="close" data-dismiss="alert"> × </a>
                                                El número del DNI o del NIE no es correcto, revíselo.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group ">
                                            <label for="nacimiento">Fecha de nacimiento</label>
                                            <input type="date" class="form-control" name="nacimiento" id="nacimiento"
                                                   aria-describedby="helpId" required>
                                            <div class="alert alert-danger" role="alert" id="errorvacio7" style="display: none;">
                                                <a class="close" data-dismiss="alert"> × </a>
                                                No puedes dejar este campo vacío.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="lugarNac">Lugar de nacimiento</label>
                                            <input type="text" class="form-control" name="lugarNac" id="lugarNac"
                                                   aria-describedby="helpId" placeholder="Tu lugar de nacimiento" required>
                                            <div class="alert alert-danger" role="alert" id="errorvacio8" style="display: none;">
                                                <a class="close" data-dismiss="alert"> × </a>
                                                No puedes dejar este campo vacío.
                                            </div>
                                        </div>
                                    </div>
                                    <!--.col-md-6-->
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="pais">Nacionalidad</label>
                                            <input type="text" class="form-control" name="pais" id="pais"
                                                   aria-describedby="helpId" placeholder="Tu nacionalidad" required>
                                            <div class="alert alert-danger" role="alert" id="errorvacio9" style="display: none;">
                                                <a class="close" data-dismiss="alert"> × </a>
                                                No puedes dejar este campo vacío.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="address">Dirección</label>
                                    <input type="text" class="form-control" name="address" id="address"
                                           placeholder="Tu dirección" required>
                                    <div class="alert alert-danger" role="alert" id="errorvacio10" style="display: none;">
                                        <a class="close" data-dismiss="alert"> × </a>
                                        No puedes dejar este campo vacío.
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group ">
                                            <label for="ciudad">Ciudad</label>
                                            <input type="text" class="form-control" name="ciudad" id="ciudad"
                                                   aria-describedby="helpId" placeholder="Tu ciudad" required>
                                            <div class="alert alert-danger" role="alert" id="errorvacio11" style="display: none;">
                                                <a class="close" data-dismiss="alert"> × </a>
                                                No puedes dejar este campo vacío.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group ">
                                            <label for="provincia">Provincia</label>
                                            <input type="text" class="form-control" name="provincia" id="provincia"
                                                   aria-describedby="helpId" placeholder="Tu provincia" required>
                                            <div class="alert alert-danger" role="alert" id="errorvacio12" style="display: none;">
                                                <a class="close" data-dismiss="alert"> × </a>
                                                No puedes dejar este campo vacío.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group ">
                                            <label for="CP">Código Postal</label>
                                            <input type="text" class="form-control" name="CP" id="CP" aria-describedby="helpId"
                                                   placeholder="Tu código postal" required>
                                            <div class="alert alert-danger" role="alert" id="errorvacio13" style="display: none;">
                                                <a class="close" data-dismiss="alert"> × </a>
                                                No puedes dejar este campo vacío.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group ">
                                            <label for="telefono">Teléfono</label>
                                            <input type="tel" class="form-control" name="telefono" id="telefono"
                                                   aria-describedby="helpId" placeholder="Tu teléfono" required>
                                            <div class="alert alert-danger" role="alert" id="errorvacio14" style="display: none;">
                                                <a class="close" data-dismiss="alert"> × </a>
                                                No puedes dejar este campo vacío.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="mail">E-mail</label>
                                            <input type="email" class="form-control" name="mail" id="mail"
                                                   aria-describedby="helpId" placeholder="Tu e-mail" required>
                                            <div class="alert alert-danger" role="alert" id="errorvacio15" style="display: none;">
                                                <a class="close" data-dismiss="alert"> × </a>
                                                No puedes dejar este campo vacío.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="dolencia">¿Padece usted alguna enfermedad o trastorno que impida o dificulte la
                                        práctica de kenpo?</label>
                                    <select class="form-control" name="dolencia" id="dolencia" aria-describedby="helpId" required>
                                        <option selected value="">Elige una de las dos opciones</option>
                                        <option value="si">SI</option>
                                        <option value="no">NO</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="mensaje">En caso afirmativo, indique cuales</label>
                                    <textarea class="form-control" name="mensaje" id="mensaje" rows="2"></textarea>
                                </div>
                                <div class="form-check py-2">
                                    <input type="checkbox" class="form-check-input is-invalid" name="conformidad" id="conformidad" required>
                                    <label class="form-check-label" for="conformidad">Acepto las condiciones y consiento el tratamiento de mis datos por parte de Kenpo Hiken.</label>
                                    <div id="invalidCheck3Feedback" class="invalid-feedback">
                                        Debes aceptar las condiciones antes de enviar el formulario
                                    </div>
                                </div>
                                <div class="form-group py-2">
                                    <input type="submit" class="btn btn-primary" value="Enviar" name="enviar" id="enviar">
                                </div>
                                <div class="alert alert-success" role="alert" id="cuentaOk" style="display: none;">
                                    Cuenta de usuario creada y datos de la ficha guardados.
                                </div>
                            </div>   
                        </div>                    
                    </form>
                    <p>
                        1. El abono de las cuotas de los entrenamientos se hará a principio de cada mes.
                        2. La hoja de inscripción junto con la bonificación de las cuotas serán requisito necesario para
                        estar dado en el club.
                        3. De conformidad con la Ley Orgánica 15/1999, de 13 de diciembre Vd., o en su caso su
                        representante legal, queda informado y consiente expresa e inequívocamente la incorporación de
                        sus datos a los ficheros mixtos de datos personales y al tratamiento de estos con la finalidad
                        de la gestión integral de su relación con el Club Deportivo Elemental Kenpo Hiken. Así mismo
                        consiente el tratamiento para el envío de las comunicaciones incluidas las comerciales, aún por
                        medios electrónicos. El responsable de los ficheros es el Club Deportivo Elemental Kenpo Hiken,
                        domiciliado en C/ Puerto de la Mano de Hierro, 18, 28053 MADRID. Autoriza a que sus datos
                        personales, incluidas imagen y/o voz, puedan ser utilizados para la organización, promoción y
                        divulgación del deporte y/o club en cualquier medio. Asimismo, autoriza la cesión de sus datos a
                        los Organismos Oficiales Deportivos y Seguros. Podrá ejercitar los derechos de acceso,
                        rectificación, cancelación y oposición en la forma y de acuerdo con los procedimientos
                        establecidos en la precitada Ley Orgánica, dirigiéndose a la dirección arriba indicada, según
                        procedimiento. El deportista responde, en cualquier caso, de la veracidad, exactitud, vigencia,
                        autenticidad y pertinencia de los Datos Personales proporcionados, comprometiéndose a la
                        actualización de estos cuando esta sea necesaria.
                    </p>
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



    </body>

</html>