<?php

//@author Alberto Bravo
include_once 'filtrado.php';
$usuario = filtrado($_REQUEST['user']);
$con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');

$sql = "SELECT * FROM tutorImg WHERE usuario = '" . $usuario . "'";
$query = $con->prepare($sql);
$query->execute();
$resultado = $query->fetch();
if (empty($resultado['usuario'])) {
    echo('0');
} else {
    echo json_encode($resultado);
}
/*
  $sql1 = "INSERT INTO tutor VALUES ('" . $usuario . "','" . $nombre . "','" . $apellido1 . "','" . $apellido2 . "','" . $documento . "')";
  $query = $con->prepare($sql1);
  $resultado = $query->execute();}
 */
?>