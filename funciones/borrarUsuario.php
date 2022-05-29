<?php

//@author Alberto Bravo
$con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');

$usuario = $_REQUEST['usuario'];


if (!empty($usuario)) {
    $sql = "DELETE FROM ficha WHERE usuario='" . $usuario . "';";
    $sql = $sql . "DELETE FROM usuario WHERE usuario='" . $usuario . "';";
    $sql = $sql . "DELETE FROM tutorImg WHERE usuario='" . $usuario . "';";
    $query = $con->prepare($sql);
    $query->execute();
    echo ('1');
} else {
    echo ('0');
}
?>