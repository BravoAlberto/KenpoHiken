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

    $sql2 = "SELECT * FROM tutorImg WHERE usuario = '" . $usuario . "'";
    $query2 = $con->prepare($sql2);
    $query2->execute();
    $resultado2 = $query2->fetchAll(PDO::FETCH_ASSOC); //Para obtener todos los registros de la tabla.



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
            <title>Cesión imágenes menores 18 años</title>
            <link rel="stylesheet" href="css/bootstrap.css">
            <link rel="shortcut icon" href="#">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
            <link rel="stylesheet" href="../css/styles.css">
            <script src="funciones/funciones.js"></script>
        </head>
        <body class="mx-auto" style="width: 1380px;"><!-- margen auto para ancho específico -->
            <header class="header">
                <h5 class="text-center fw-bold text-uppercase">
                    Cesión de imágenes<br>
                    <span class="text-decoration-underline">(deportistas menores de 18 años)</span><br>2022</h5>
            </header>
            <h5 class="fw-bold text-uppercase mt-2"  style="font-size: 35px;">
                Cláusula federados
            </h5>
            <main class="mt-2" style="text-align:justify; text-justify: inter-word; font-size: 32px; line-height:40px;"><!-- Justificado texto a ancho página -->
                <?php
                foreach ($resultado as $valor) {
                    
                }
                foreach ($resultado2 as $valor2) {
                    
                }
                ?>
                <div>
                    <p>De acuerdo con lo dispuesto en el Reglamento (UE) 2016/679, del Parlamento Europeo y del Consejo, de 27 de abril de 2016, relativo a las personas físicas en lo que respecta al tratamiento de datos personales y a la libre circulación de estos datos (RGPD) y normativa española vigente, y respecto a los datos que le identifican como federado se le informa  que sean tratados para llevar a cabo el encargo solicitado, según lo dispuesto en el artículo 6.1.b RGPD.</p>
                    <p>Trataremos su imagen y /o voz basándonos en el interés legítimo de la Federación, según dispone el artículo 36.b de la Ley 15/1994, de 28 de diciembre, del Deporte de la Comunidad de Madrid, según lo dispuesto en el artículo 6.1.c RGPD.</p>
                    <p>Se le informa que los mismos serán cedidos en los casos que exista una obligación legal, según lo establecido en el artículo 6.1.c del RGPD. </p>
                    <p>Sus datos serán incorporados al Sistema de Protección de Datos de la <strong>Federación Madrileña de Karate</strong> con <strong>NIF G79206975</strong>, y domicilio en <strong>Calle Alberche 21. 28007 - Madrid</strong>. Serán conservados durante el tiempo que dure el tratamiento, o en su caso, el tiempo legal establecido para cada una de las obligaciones legales que deriven de los tratamientos llevados a cabo.</p>
                    <p>Se le informa de que puede ejercitar sus derechos de acceso a los datos, su rectificación, supresión, oposición, limitación de su tratamiento o portabilidad de los mismos según lo establecido en el RGPD. Podrá ejercitar estos derechos, o revocar el consentimiento, por escrito en la dirección postal indicada o en <strong>info@fmkarate.com</strong>, junto a copia de mi DNI. </p>
                    <p>Esta entidad ha nombrado <strong>Delegado de Protección de Datos a Persevera, S. L. U.</strong>, en la persona de <strong>Manuel del Palacio</strong>. Su contacto es <strong>Príncipe de Anglona, 5. 28005 Madrid</strong> o <strong>mdp.dpo@perseveragrupo.com</strong></p>
                    <p>Asimismo, declara que he sido informado de su derecho a presentar reclamación ante la Autoridad de Control, Agencia Española de Protección de Datos.</p>
                </div>
                <p style=" text-align: right;">
                    Por el participante menor de edad, su tutor legal</p>
                <table class="table " style="text-align: start; line-height:25px; width: 100%;">
                    <tr style="line-height:60px;">
                        <td style="border: solid 1px; width: 50%;">
                            D./Dña. <?php echo $valor['nombre'] . ' ' . $valor['apellido1'] . ' ' . $valor['apellido2']; ?><br>
                            DNI / NIE - <?php echo $valor['documento']; ?>
                        </td>
                        <td style="border: solid 1px; width: 50%;">
                            D./Dña. <?php echo $valor2['nombre'] . ' ' . $valor2['apellido1'] . ' ' . $valor2['apellido2']; ?><br>
                            DNI / NIE - <?php echo $valor2['documento']; ?>
                        </td>
                    </tr>
                </table>
                <div>
                    <p> Condiciones aceptadas en <?php echo $valor['ciudad']; ?> a <?php
                        echo $fechaActual = date('d-m-Y');
                        ;
                        ?></p>
                </div>
        </body>
    </html>
    <?php
    $html = ob_get_clean();
//echo $html;
    $dompdf->load_html($html);
    $dompdf->setPaper('a4', 'portrait');
    $dompdf->render();
    $dompdf->stream("Cesión_Imágenes_" . $valor['nombre'] . "_" . $valor['apellido1'] . ".pdf", array("Attachment" => true)); //con true lo autodescarga
} else {
    echo('0');
}
?>

