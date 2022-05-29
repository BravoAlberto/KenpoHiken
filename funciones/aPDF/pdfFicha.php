<?php
//@autdor Alberto Bravo

require_once ('../../dompdf/autoload.inc.php');

use Dompdf\Dompdf;
use Dompdf\Options;

$usuario = $_REQUEST['usuario'];

if (!empty($usuario)) {
    $fechaActual = date('d-m-Y');
    $con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');
    $sql = "SELECT * FROM ficha WHERE usuario = '" . $usuario . "'";
    $query = $con->prepare($sql);
    $query->execute();
    $resultado = $query->fetchAll(PDO::FETCH_ASSOC); //Para obtener todos los registros de la tabla.


    $options = new Options();
    $options->setIsRemoteEnabled(true);
    $dompdf = new Dompdf($options);
    $dompdf->set_option('dpi', 200);
    $dompdf->set_option('Calibri', 'Arial');

    ob_start();
    ?>
    <!DOCTYPE html>
    <html lang="es">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="widtd=device-widtd, initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <meta name="autdor" content="Alberto Bravo">
            <title>Ficha Deportiva</title>
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="shortcut icon" href="#">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
            <link rel="stylesheet" href="../css/styles.css">
            <script src="funciones/funciones.js"></script>
        </head>
        <body class="mx-auto" style="width: 1380px;">
            <header>
                <div class="text-center">
                    <a href="index.php">
                        <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/kenpohiken/img/Logo_Leyenda_Lema.jpg" class="logo img-fluid" alt="LogoLeyenda">
                    </a>
                </div>
            </header>
            <main>
                <h5 class="text-center text-uppercase mt-2">Ficha deportiva</h5>
                <p class="fw-bold"  style="font-size: 36px;">1. Identificación</p>
                <table class="table table-bordered" style="text-align: start; line-height:25px;">
                    <tr class="bg-light" style="font-size: 34px; font-weight:600;">
                        <td>Nombre</td>
                        <td>Primer Apellido</td>
                        <td>Segundo apellido</td>
                    </tr>
                    <?php
                    foreach ($resultado as $valor) {
                        
                    }
                    ?>
                    <tr style="font-size: 34px; text-align: center;">
                        <td><?php echo $valor['nombre']; ?></td>
                        <td><?php echo $valor['apellido1']; ?></td>
                        <td><?php echo $valor['apellido2']; ?></td>
                    </tr>
                    <tr class="bg-light" style="font-size: 34px; font-weight:600; text-align: left;">
                        <td>Tipo documento</td>
                        <td>Número documento</td>
                        <td>Fecha nacimiento</td>
                    </tr>
                    <tr style="font-size: 34px; text-align: center;">
                        <td><?php echo $valor['tipo']; ?></td>
                        <td><?php echo $valor['documento']; ?></td>
                        <td><?php echo $valor['nacimiento']; ?></td>
                    </tr>
                    <tr class="bg-light" style="font-size: 34px; font-weight:600; text-align: left;">
                        <td colspan="2">Domicilio</td>
                        <td>Localidad</td>
                    </tr>
                    <tr style="font-size: 34px; text-align: center;">
                        <td colspan="2"><?php echo $valor['direccion']; ?></td>
                        <td><?php echo $valor['provincia']; ?></td>
                    </tr>
                    <tr class="bg-light" style="font-size: 34px; font-weight:600;">
                        <td>Código Postal</td>
                        <td>Lugar de nacimiento</td>
                        <td>Nacionalidad</td>
                    </tr>
                    <tr style="font-size: 34px; text-align: center;">
                        <td><?php echo $valor['codpostal']; ?></td>
                        <td><?php echo $valor['lugarnacim']; ?></td>
                        <td><?php echo $valor['nacionalidad']; ?></td>
                    </tr>
                    <tr class="bg-light" style="font-size: 34px; font-weight:600;">
                        <td>Teléfono de contacto</td>
                        <td colspan="2">Correo electrónico</td>
                    </tr>
                    <tr style="font-size: 34px; text-align: center;">
                        <td><?php echo $valor['telefono']; ?></td>
                        <td colspan="2"><?php echo $valor['mail']; ?></td>
                    </tr>
                </table>
                <p class="fw-bold"  style="font-size: 36px;">2. Observaciones psicosanitarias</p>
                <table class="table table-bordered" style="font-size: 12px; line-height:25px;">
                    <tr>
                        <td colspan="2"class="bg-light" style="font-size: 34px; font-weight:600; line-height:38px;">¿Padece Ud o su hij@ alguna enfermedad o trastorno que le impida la práctica del kenpo?</td>
                        <td class="text-center" style="font-size: 36px;"><?php echo $valor['enfermedad']; ?></td>
                    </tr>
                    <tr class="bg-light" style="font-size: 34px; font-weight:600;">
                        <td colspan="3">En caso afirmativo, indique cuál/cuales</td>
                    </tr>
                    <tr style="font-size: 34px; text-align: left;">
                        <td colspan="3" style="height: 200px;"><?php echo $valor['mensaje']; ?></td>
                    </tr>
                </table>
                <div class="fw-normal" style="font-size: 32px; text-align:justify; text-justify: inter-word;">
                    <p>1. El abono de las cuotas de los entrenamientos se hará a principio de cada mes.</p>
                    <p>2. La hoja de inscripción junto con la bonificación de las cuotas serán requisito necesario para estar dado en el club.</p>
                    <p>3. De conformidad con la Ley Orgánica 15/1999, de 13 de diciembre Vd., o en su caso su representante legal, queda informado y consiente expresa e inequívocamente la incorporación de sus datos a los ficheros mixtos de datos personales y al tratamiento de estos con la finalidad de la gestión integral de su relación con el Club Deportivo Elemental Kenpo Hiken. Así mismo consiente el tratamiento para el envío de las comunicaciones incluidas las comerciales, aún por medios electrónicos. El responsable de los ficheros es el Club Deportivo Elemental Kenpo Hiken, domiciliado en C/ Puerto de la Mano de Hierro, 18, 28053 MADRID. Autoriza a que sus datos personales, incluidas imagen y/o voz, puedan ser utilizados para la organización, promoción y divulgación del deporte y/o club en cualquier medio. Asimismo, autoriza la cesión de sus datos a los Organismos Oficiales Deportivos y Seguros. Podrá ejercitar los derechos de acceso, rectificación, cancelación y oposición en la forma y de acuerdo con los procedimientos establecidos en la precitada Ley Orgánica, dirigiéndose a la dirección arriba indicada, según procedimiento. El deportista responde, en cualquier caso, de la veracidad, exactitud, vigencia, autenticidad y pertinencia de los Datos Personales proporcionados, comprometiéndose a la actualización de estos cuando esta sea necesaria.</p>
                </div>
                <div>
                    <p class="text-right"> Condiciones aceptadas en <?php echo $valor['ciudad']; ?> a <?php
                        echo $fechaActual;
                        ;
                        ?></p>
                </div>
            </main>
        </body>
    </html>
    <?php
    $html = ob_get_clean();
    //echo $html;
    $dompdf->load_html($html);
    $dompdf->setPaper('a4', 'portrait');
    $dompdf->render();
    $dompdf->stream("Ficha_" . $valor['nombre'] . "_" . $valor['apellido1'] . ".pdf", array("Attachment" => true)); //con true lo autodescarga
} else {
    echo('0');
}
?>

