<?php
require_once ('../../dompdf/autoload.inc.php');

//require_once '../../PHPMailer/src/PHPMailer.php';
//$mail = new PHPMailer();
use Dompdf\Dompdf;
use Dompdf\Options;

session_start();

$usuario = $_SESSION['usuario'];
echo ('<pre>');
print_r($_SESSION);
echo ('</pre>');
//@autdor Alberto Bravo
/* $usuario = $_REQUEST['usuario'];
  $nombreTu = $_REQUEST['nombreTu'];
  $Apellido1Tu = $_REQUEST['Apellido1Tu'];
  $Apellido2Tu = $_REQUEST['Apellido2Tu'];
  $documentoTu = $_REQUEST['documentoTu'];
  $domicilioTu = $_REQUEST['domicilioTu'];
  $codPostalTu = $_REQUEST['codPostalTu'];
  $ciudadTu = $_REQUEST['ciudadTu'];
  $hoyTu = $_REQUEST['hoyTu'];

  $con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');

  if (!empty($usuario) || !empty($nombreTu) || !empty($Apellido1Tu) || !empty($Apellido2Tu) || !empty($documentoTu) || !empty($domicilioTu) || !empty($codPostal) || !empty($ciudadTu)) {

  $sql1 = "INSERT IGNORE INTO tutorMan VALUES('" . $usuario . "','" . $nombreTu . "','" . $Apellido1Tu . "','" . $Apellido2Tu . "','" . $documentoTu . "','" . $domicilioTu . "','" . $codPostalTu . "','" . $ciudadTu . "')";
  $query1 = $con->prepare($sql1);

  $query1->execute();

  if ($query1->rowCount() == 0) {
  echo('1');
  } else {
 */
$con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');

$sql = "SELECT * FROM ficha WHERE usuario = '" . $usuario . "'";
$query = $con->prepare($sql);
$query->execute();
$resultado = $query->fetchAll(PDO::FETCH_ASSOC); //Para obtener todos los registros de la tabla.

$sql2 = "SELECT * FROM tutorMan WHERE usuario = '" . $usuario . "'";
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
        <title>Mandato menores 18 a??os</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="shortcut icon" href="#">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="../css/styles.css">
        <script src="funciones/funciones.js"></script>
    </head>
    <body class="mx-auto" style="width: 1350px;"><!-- margen auto para ancho espec??fico -->
        <header class="header">
            <h5 class="text-center fw-bold text-uppercase"  style="font-size: 35px;">
                Mandato epec??fico para la inscripci??n de la licencia y actividades de<br>
                la Federaci??n Madrile??a de Karate y D.A.<br>
                <span class="text-decoration-underline">(deportistas menores de 18 a??os)</span><br>2022</h5>
        </header>
        <main class="mainBody mt-3" style="text-align:justify; text-justify: inter-word; font-size: 30px; line-height:40px;"><!-- Justificado texto a ancho p??gina -->
            <?php
            foreach ($resultado as $valor) {
                ?>
                <p>D/D?? <span class="text-uppercase"><?php echo $valor['nombre'] . ' ' . $valor['apellido1'] . ' ' . $valor['apellido2']; ?></span> <strong>(deportista)</strong> con <span class="text-uppercase"><?php echo $valor['tipo']; ?></span>
                    n??mero <span class="text-uppercase"><?php echo $valor['documento']; ?></span>,
                    con domicilio a efectos de notificaci??n en <?php echo $valor['direccion'] . ", " . $valor['codpostal'] . ', localidad, ' . $valor['ciudad']; ?></p>
                <?php
            }
            foreach ($resultado2 as $valor2) {
                ?>
                <p>D/D?? <span class="text-uppercase"><?php echo $valor2['nombre'] . ' ' . $valor2['apellido1'] . ' ' . $valor2['apellido2']; ?></span> <strong>(representante legal)</strong> con <span class="text-uppercase"><?php echo $valor['tipo']; ?></span>
                    n??mero <span class="text-uppercase"><?php echo $valor2['documento']; ?></span>,
                    con domicilio a efectos de notificaci??n en <?php echo $valor2['direccion'] . ", " . $valor2['codpostal'] . ', localidad, ' . $valor2['ciudad']; ?></p>
                <?php
            }
            ?>
            <div>
                <p>en concepto de mandante.</p>
                <p><strong><u>Dice y otorga</u></strong></p>
                <p>Que confiere MANDATO a favor del representante de la Entidad Deportiva, <strong>CLUB DEPORTIVO ELEMENTAL KENPO HIKEN</strong>, con domicilio en CALLE BOL??VAR, 22, PORTAL C, 1?? C, 28045, Localidad MADRID, en concepto de MANDATARIO.</p>
                <p class="text-uppercase">OBJETO DEL MANDATO</p>
                <p>Que el MANDATO, que se rige por los arts. 1709 a 1739 CC espa??ol se confiere para que se pueda llevar a cabo la afiliaci??n/reafiliaci??n federativa del MANDANTE en al a??o 2022</p>
                <p>Que este MANDATO tambi??n se otorga para que se pueda llevar a cabo la inscripci??n en actividades deportivas de la Federaci??n Madrile??a de Karate y D.A.</p>
                <p>Que el MANDATO se concede para su actuaci??n ante la Federaci??n Madrile??a de Karate y D.A., en las dependencias federativas personalmente o a trav??s de los recursos online, en relaci??n <u>exclusivamente</u> de los asuntos citados como objeto del MANDATO.</p>
            </div>
            <div>
                <p class="text-center"> Condiciones aceptadas en <?php echo $valor['ciudad']; ?> a <?php
                    echo $fechaActual = date('d-m-Y');
                    ;
                    ?></p>
                <p class="text-right">EL MANDANTE (representante legal)<br><?php echo $valor['nombre'] . ' ' . $valor['apellido1'] . ' ' . $valor['apellido2']; ?></p>
                <p>Acepto el MANDATO conferido y me obligo a cumplirlo de conformidad a las instrucciones del MANDANTE, y declaro bajo mi responsabilidad de la veracidad y actualizaci??n de los datos facilitados para la inscripci??n de la licencia y actividades de la Federaci??n Madrile??a de Karate y D.A</p>
            </div>
            <div class="text-right">
                <img src="http://<?php echo $_SERVER['HTTP_HOST']; ?>/kenpohiken/img/firma.png" class="logo img-fluid" alt="Firm&sello">
                <p>EL MANDATARIO (Entidad Deportival)</p>
            </div>
        </main>
        <footer class="fixed-bottom" style="font-size: 30px;">
            <p class="text-muted">Impreso para deportistas menores de 18 a??os</p>
        </footer>
    </body>
</html>
<?php
$html = ob_get_clean();
echo $html;
$dompdf->load_html($html);
$dompdf->setPaper('a4', 'portrait');
$dompdf->render();
$dompdf->stream("Mandato_Menores18_" . $valor['nombre'] . "_" . $valor['apellido1'] . "_" . $fechaActual = date('d-m-Y') . ".pdf", array("Attachment" => false)); //con true lo autodescarga
/*
  $to = "proyectohiken@gmail.com";
  $subject = "Nuevo mensaje de " . $valor['nombre'] . "_" . $valor['apellido1'];
  $message = "Se ha enviado la ficha de" . $valor['nombre'] . "_" . $valor['apellido1'];
  $headers = "From:" . $valor['nombre'] . "_" . $valor['apellido1'];
  if (mail($to, $subject, $message, $headers)) {
  $mail->AddAttachment($dompdf->render(), "Mandato_Menores18_" . $valor['nombre'] . "_" . $valor['apellido1'] . "_" . $fechaActual = date('d-m-Y') . ".pdf");
  }else{
  echo("3");
  } */
/*  }
  } else {
  echo('0');
  } */
?>

