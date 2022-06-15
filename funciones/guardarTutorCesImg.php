<?php

//Guarda los datos del tutor del formulario de la Cesión de imágenes en la tabla tutorImg de la BBDD
include_once 'filtrado.php';
include_once 'singleton.php';

$usuario = $_REQUEST['usuario'];
$nombreTu = filtrado($_REQUEST['nombreTu']);
$apellido1Tu = filtrado($_REQUEST['apellido1Tu']);
$apellido2Tu = filtrado($_REQUEST['apellido2Tu']);
$documento = filtrado($_REQUEST['documento']);
$hoyTu = $_REQUEST['hoyTu'];

//$con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');
$con = Singleton::singleton();

if (!empty($usuario) || !empty($nombreTu) || !empty($apellido1Tu) || !empty($apellido2Tu) || !empty($documento)) {

    $sql1 = "INSERT IGNORE INTO tutorImg VALUES('" . $usuario . "','" . $nombreTu . "','" . $apellido1Tu . "','" . $apellido2Tu . "','" . $documento . "')";
    //$query1 = $con->prepare($sql1);
    $query1 = $con->getLdb($sql1);
    $query1->execute();

    if ($query1->rowCount() == 0) {
        echo('3');
    }else{
        echo('3');
    }
} else {
    echo ('0');
}
?>

