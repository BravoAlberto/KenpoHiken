<?php

//@author Alberto Bravo
include_once 'singleton.php';

//$con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');
$con = Singleton::singleton();

$usuario = $_REQUEST['usuario'];


if (!empty($usuario)) {
    $sql = "DELETE FROM ficha WHERE usuario='" . $usuario . "';";
    $sql = $sql . "DELETE FROM usuario WHERE usuario='" . $usuario . "';";
    $sql = $sql . "DELETE FROM tutorImg WHERE usuario='" . $usuario . "';";
    //$query = $con->prepare($sql);
    $query = $con->getLdb($sql);
    $query->execute();
    echo ('1');
} else {
    echo ('0');
}
?>