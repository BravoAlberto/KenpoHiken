<?php
//@autdor Alberto Bravo
require_once ('../../dompdf/autoload.inc.php');
include_once '../singleton.php';

use Dompdf\Dompdf;
use Dompdf\Options;

$fechaActual = date('d-m-Y');
//$con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');
$con = Singleton::singleton();
$sql = "SELECT * FROM ficha order by apellido1;";
//$query = $con->prepare($sql);
$query = $con->getLdb($sql);
$query->execute();
$resultado = $query->fetchAll(PDO::FETCH_ASSOC);
$contador = 0;
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
        <title>Listado general de deportistas</title>
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="shortcut icon" href="#">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700" rel="stylesheet">
        <link rel="stylesheet" href="../css/styles.css">
        <script src="funciones/funciones.js"></script>
    </head>
    <body class="mx-auto" "><!-- margen auto para ancho específico -->
        <main>
            <h5 class="text-center text-uppercase">lISTADO ALUMNOS</h5>
            <table class="table table-bordered">
                <caption>Temporada 2022-2023</caption>
                <tr class="bg-light" style="font-size: 38px; font-weight:600;">
                    <td></td>
                    <td>1er.Apellido</td>
                    <td>2do.Apellido</td>
                    <td>Nombre</td>
                    <td>Fecha nacim.</td>
                    <td>Documento</td>
                    <td>Teléfono</td>
                    <td>Email</td>
                </tr>
                <?php
                foreach ($resultado as $valor) {
                    ?>
                    <tr style="font-size: 35px;">
                        <td><?php echo $contador++ ?></td>
                        <td><?php echo $valor['apellido1']; ?></td>
                        <?php
                        if (empty($valor['apellido2'])) {
                            ?>
                            <td class="text-center"><strong>-</strong></td>
                            <?php
                        } else {
                            ?>
                            <td><?php echo $valor['apellido2']; ?></td>
                            <?php
                        }
                        ?>
                        <td><?php echo $valor['nombre']; ?></td>
                        <td><?php echo $valor['nacimiento']; ?></td>
                        <td><?php echo ($valor['tipo'] . '-' . $valor['documento']); ?></td>
                        <td><?php echo $valor['telefono']; ?></td>
                        <td><?php echo $valor['mail']; ?></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </main>
    </body>
</html>
<?php
$html = ob_get_clean();
//echo $html;
$dompdf->load_html($html);
$dompdf->setPaper('a4', 'landscape');
$dompdf->render();
$dompdf->stream("Listado_completo_deportistas_" . $fechaActual . ".pdf", array("Attachment" => false)); //con true lo autodescarga
?>

