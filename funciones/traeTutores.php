<?php
//@author Alberto Bravo
$usuario = $_REQUEST['user'];
$con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');

$sql = "SELECT * FROM tutor WHERE usuario = '" . $usuario . "'";
$query = $con->prepare($sql);
$query->execute();
$resultado = $query->fetch();
if ($resultado['usuario'] != null) {
    echo json_encode($resultado);
} else {
    //Dudo de si grabar aquí o grabar aparte y aquí hacer update de datos
    $sql1 = "INSERT INTO tutor VALUES ('" . $usuario . "','" . $nombre . "','" . $apellido1 . "','" . $apellido2 . "','" . $documento . "','" . $direccion . "'," . $codpostal . "','" . $ciudad . "')";
    $query = $con->prepare($sql1);
    $resultado = $query->execute();}
?>