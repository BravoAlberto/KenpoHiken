<?php

include_once 'password.php';
include_once 'conectaDB.php';
session_start();//inicio sesion para guardar el usuario

$usuario = $_REQUEST['user'];
$clave = $_REQUEST['password'];
$admin = 'administrador';
$password = 'AB492ga2';

$con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');
    
if (($usuario == $admin) && ($clave == $password)) {
    $_SESSION['usuario']=$usuario;
    echo '0';
} elseif (($usuario != $admin) || ($clave != $password)) {
    $sql = "SELECT clave FROM usuario WHERE usuario = '" . $usuario . "'";
    $query = $con->prepare($sql);
    $query->execute();
    $resultado = $query->fetch();
    $hash = $resultado['clave'];
    if (password_verify($clave, $hash)) {
        $_SESSION['usuario']=$usuario;
        echo '1';
    } else {
        echo '2';
    }
}
?>