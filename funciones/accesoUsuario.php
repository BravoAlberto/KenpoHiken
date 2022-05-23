<?php

include_once 'password.php';
include_once 'conectaDB.php';

$usuario = $_REQUEST['user'];
$clave = $_REQUEST['password'];
$admin = 'administrador';
$password = 'AB492ga2';

if (($usuario == $admin) && ($clave == $password)) {
    echo ('0');
} elseif (($usuario != $admin) || ($clave != $password)) {
    $con = conectaDB::singleton();
    $datoClave = $con->getClave($usuario);
    if (Password::verify($clave, $datoClave)) {
        echo ('1');
    } else {
        echo('2');
    }
}
/*
$con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');

if (($usuario == $admin) && ($clave == $password)) {
    echo ('0');
} elseif (($usuario != $admin) || ($clave != $password)) {
    $sql = "SELECT clave FROM usuario WHERE usuario = '" . $usuario . "'";
    $query = $con->prepare($sql);
    $query->execute();
    $resultado = $query->fetch();
    $hash = $resultado['clave'];
    if (Password::verify($clave, $hash)) {
        echo ('1');
    } else {
        echo('2');
    }
}*/
?>