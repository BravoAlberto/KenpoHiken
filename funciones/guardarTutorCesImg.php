<?php
//Guarda los datos del tutor del formulario de la Cesión de imágenes en la tabla tutorImg de la BBDD
$usuario = $_REQUEST['usuario'];
$nombreTu = $_REQUEST['nombreTu'];
$apellido1Tu = $_REQUEST['apellido1Tu'];
$apellido2Tu = $_REQUEST['apellido2Tu'];
$documento = $_REQUEST['documento'];
$hoyTu = $_REQUEST['hoyTu'];

$con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');

if (!empty($usuario) || !empty($nombreTu) || !empty($apellido1Tu) || !empty($apellido2Tu) || !empty($documento)) {

    $sql1 = "INSERT IGNORE INTO tutorImg VALUES('" . $usuario . "','" . $nombreTu . "','" . $apellido1Tu . "','" . $apellido2Tu . "','". $documento ."')";
    $query1 = $con->prepare($sql1);
    $query1->execute();

    if ($query1->rowCount() == 0) {
        echo('1');
    }
} else {
    echo ('0');
}
?>

