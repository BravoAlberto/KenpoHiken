<?php
//@autdor Alberto Bravo
require_once ('../../dompdf/autoload.inc.php');

use Dompdf\Dompdf;
use Dompdf\Options;

$usuario = $_REQUEST['usuario'];

if (!empty($usuario)) {
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
            <title>Mandato mayores 18 años</title>
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="shortcut icon" href="#">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
            <link rel="stylesheet" href="../css/styles.css">
            <script src="funciones/funciones.js"></script>
        </head>
        <body class="mx-auto" style="width: 1350px;"><!-- margen auto para ancho específico -->
            <header class="header">
                <h5 class="text-center fw-bold text-uppercase"  style="font-size: 35px;">
                    Mandato epecífico para la inscripción de la licencia y actividades de<br>
                    la Federación Madrileña de Karate y D.A.<br>2022</h5>
            </header>
            <main class="mt-3" style="text-align:justify; text-justify: inter-word; font-size: 32px; line-height:40px;"><!-- Justificado texto a ancho página -->
                <?php
                foreach ($resultado as $valor) {
                    ?>
                    <p>D/Dª <span class="text-uppercase"><?php echo $valor['nombre'] . ' ' . $valor['apellido1'] . ' ' . $valor['apellido2']; ?></span> con <span class="text-uppercase"><?php echo $valor['tipo']; ?></span>
                        número <span class="text-uppercase"><?php echo $valor['documento']; ?></span>, en su nombre propio y representación,
                        con domicilio a efectos de notificación en <?php echo $valor['direccion'] . ", " . $valor['codpostal'] . ', localidad, ' . $valor['ciudad']; ?></p>
                    <?php
                }
                ?>
                <div>
                    <p>en concepto de mandante <strong>(deportista)</strong>.</p>
                    <p><strong><u>Dice y otorga</u></strong></p>
                    <p>Que confiere MANDATO a favor del representante de la Entidad Deportiva, <strong>CLUB DEPORTIVO ELEMENTAL KENPO HIKEN</strong>, con domicilio en CALLE BOLÍVAR, 22, PORTAL C, 1º C, 28045, Localidad MADRID, en concepto de MANDATARIO.</p>
                    <p class="text-uppercase">OBJETO DEL MANDATO</p>
                    <p>Que el MANDATO, que se rige por los arts. 1709 a 1739 CC español se confiere para que se pueda llevar a cabo la afiliación/reafiliación federativa del MANDANTE en al año 2022</p>
                    <p>Que este MANDATO también se otorga para que se pueda llevar a cabo la inscripción en actividades deportivas de la Federación Madrileña de Karate y D.A.</p>
                    <p>Que el MANDATO se concede para su actuación ante la Federación Madrileña de Karate y D.A., en las dependencias federativas personalmente o a través de los recursos online, en relación <u>exclusivamente</u> de los asuntos citados como objeto del MANDATO.</p>
                </div>
                <div>
                    <p class="text-right"> Condiciones aceptadas en <?php echo $valor['ciudad']; ?> a <?php
                        echo $fechaActual = date('d-m-Y');
                        ;
                        ?></p>
                    <p class="text-right">EL MANDANTE<br><?php echo $valor['nombre'] . ' ' . $valor['apellido1'] . ' ' . $valor['apellido2']; ?></p>
                    <p>Acepto el MANDATO conferido y me obligo a cumplirlo de conformidad a las instrucciones del MANDANTE, y declaro bajo mi responsabilidad de la veracidad y actualización de los datos facilitados para la inscripción de la licencia y actividades de la Federación Madrileña de Karate y D.A</p>
                </div>
                <div class="text-right">
                    <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/kenpohiken/img/firma.png" class="logo img-fluid" alt="Firm&sello">
                    <p>EL MANDATARIO (Entidad Deportival)</p>
                </div>
            </main>
            <footer class="fixed-bottom" style="font-size: 30px;">
                <!--<p class="text-muted">Impreso para deportistas con edad igual o mayor de 18 años</p>-->
            </footer>
        </body>
    </html>
    <?php
    $html = ob_get_clean();
//echo $html;
    $dompdf->load_html($html);
    $dompdf->setPaper('a4', 'portrait');
    $dompdf->render();
    $dompdf->stream("Mandato_" . $valor['nombre'] . "_" . $valor['apellido1'] . "_" . $fechaActual = date('d-m-Y') . ".pdf", array("Attachment" => true)); //con true lo autodescarga
} else {
    echo('0');
}
?>

