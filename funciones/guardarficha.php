<?php

include_once 'password.php';

$con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');

$usuario = $_REQUEST['usuario'];
$clave = Password::hash($_REQUEST['clave']);
$nombre = $_REQUEST['nombre'];
$apellido1 = $_REQUEST['apellido1'];
$apellido2 = $_REQUEST['apellido2'];
$tipo = $_REQUEST['tipo'];
$documento = $_REQUEST['documento'];
$nacimiento = $_REQUEST['nacimiento'];
$lugarnacim = $_REQUEST['lugarnacim'];
$nacionalidad = $_REQUEST['nacionalidad'];
$direccion = $_REQUEST['direccion'];
$ciudad = $_REQUEST['ciudad'];
$provincia = $_REQUEST['provincia'];
$codpostal = $_REQUEST['codpostal'];
$telefono = $_REQUEST['telefono'];
$mail = $_REQUEST['mail'];
$enfermedad = $_REQUEST['enfermedad'];
$mensaje = $_REQUEST['mensaje'];
$conformidad = $_REQUEST['conformidad'];

if (!empty($usuario) && (strlen($clave) >= 6 || strlen($clave) <= 8)) {
    $sql = "SELECT * FROM usuario WHERE usuario = '" . $usuario . "'";
    $query = $con->prepare($sql);
    $query->execute();
    $resultado = $query->fetch();
    if ($resultado != null) {
        echo ('0');
    } else {
        if(!empty($usuario) &&!empty($usuario) &&!empty($usuario) && !empty($usuario) &&!empty($usuario) &&!empty($usuario) && ){
        $sql = "INSERT INTO usuario VALUES ('" . $usuario . "','" . $clave . "')";
        $query = $con->prepare($sql);
        $resultado = $query->execute();

        $sql1 = "INSERT INTO ficha VALUES ('" . $usuario . "','" . $nombre . "','" . $apellido1 . "','" . $apellido2 . "'" . ",'" . $tipo . "',"
                . "'" . $documento . "','" . $nacimiento . "','" . $lugarnacim . "','" . $nacionalidad . "','" . $direccion . "','" . $ciudad . "',"
                . "'" . $provincia . "'" . ",'" . $codpostal . "','" . $telefono . "','" . $mail . "','" . $enfermedad . "','" . $mensaje . "',"
                . "'" . $conformidad . "')";
        $query = $con->prepare($sql1);
        $resultado = $query->execute();
        echo('1');
        }
    }
}
?>