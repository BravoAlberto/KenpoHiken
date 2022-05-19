<?php

include_once 'password.php';

$con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');

$usuario = $_POST['usuario'];
$clave = Password::hash($_POST['clave']);
$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$tipo = $_POST['tipo'];
$documento = $_POST['documento'];
$nacimiento = $_POST['nacimiento'];
$lugarnacim = $_POST['lugarnacim'];
$nacionalidad = $_POST['nacionalidad'];
$direccion = $_POST['direccion'];
$ciudad = $_POST['ciudad'];
$provincia = $_POST['provincia'];
$codpostal = $_POST['codpostal'];
$telefono = $_POST['telefono'];
$mail = $_POST['mail'];
$enfermedad = $_POST['enfermedad'];
$mensaje = $_POST['mensaje'];
$conformidad = $_POST['conformidad'];

if (!empty($usuario) && (strlen($clave) >= 6 || strlen($clave) <= 8)) {
    $sql = "SELECT * FROM usuario WHERE usuario = '" . $usuario . "'";
    $query = $con->prepare($sql);
    $query->execute();
    $resultado = $query->fetch();
    if ($resultado['usuario'] !== null) {
        echo ('0');
    } else {
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
?>