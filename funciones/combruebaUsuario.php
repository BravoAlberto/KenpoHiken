<?php
//@author Alberto Bravo
include_once 'password.php';
include_once 'filtrado.php';
include_once 'singleton.php';

$usuario = filtrado($_POST['user']);
$clave = Password::hash($_POST['password']);
//$con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');
$con = Singleton::singleton();
if (!empty($usuario) && (strlen($clave) >= 6 || strlen($clave) <= 15)) {
    $sql = "SELECT * FROM usuario WHERE usuario = '".$usuario."'";
    //$query = $con->prepare($sql);
    $query = $con->getLdb($sql);
    $query->execute();
    $resultado = $query->fetch();
    if ($resultado == null) {
        echo ('1');
    } else {
        echo('0');
    }
}
?>