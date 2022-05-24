<?php

include_once 'password.php';
include_once 'conectaDB.php';
session_start();//inicio sesion para guardar el usuario

$usuario = $_REQUEST['user'];
$clave = $_REQUEST['password'];
$admin = 'administrador';
$password = 'AB492ga2';
$_SESSION['user']=$usuario;//grabo el dato del usuario recibido en la sesión y que se enví en los header

$con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');

if (($usuario == $admin) && ($clave == $password)) {
    header("location:../administrador.php");
} elseif (($usuario != $admin) || ($clave != $password)) {
    $sql = "SELECT clave FROM usuario WHERE usuario = '" . $usuario . "'";
    $query = $con->prepare($sql);
    $query->execute();
    $resultado = $query->fetch();
    $hash = $resultado['clave'];
    if (password_verify($clave, $hash)) {
        header("location:../formularios.php");
    } else {
        header("location:../accesoDenegado.php");
    }
}
/*
if (($usuario == $admin) && ($clave == $password)) {
    header("location:../administrador.php");
} elseif (($usuario != $admin) || ($clave != $password)) {
    $con = conectaDB::singleton();
    $datoClave = $con->getClave($usuario);
    if (Password::verify($clave, $datoClave)) {
        header("location:../formularios.php");
    } else {
        header("location:../accesoDenegado.php");
    }
}
*/

?>