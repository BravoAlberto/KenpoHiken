<?php
//@author Alberto Bravo
include_once 'password.php';
include_once 'filtrado.php';
include_once 'singleton.php';

$usuario = filtrado($_POST['user']);
$clave = Password::hash($_POST['password']);
$con = Singleton::singleton();
if (!empty($usuario) && (strlen($clave) >= 6 || strlen($clave) <= 8)) {
    $sql = "SELECT * FROM usuario WHERE usuario = '" . $usuario . "'";
    $query = $con->getLdb($sql);
    $query->execute();
    $resultado = $query->fetch();
    if ($resultado['usuario'] === null) {
        $sql = "INSERT INTO usuario VALUES ('" . $usuario . "','" . $clave . "')";
        $query = $con->getLdb($sql);
        $resultado = $query->execute();
        echo ('1');
    } else {
        echo('0');
    }
}
?>