<?php

$usuario = $_REQUEST['usuario'];
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
    }
} else {
    echo ('0');
}
?>

