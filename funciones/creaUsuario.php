<?php
//@author Alberto Bravo
include_once 'password.php';

$usuario = $_POST['user'];
$clave = Password::hash($_POST['password']);
$con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');

if (!empty($usuario) && (strlen($clave) >= 6 || strlen($clave) <= 8)) {
    $sql = "SELECT * FROM usuario WHERE usuario = '" . $usuario . "'";
    $query = $con->prepare($sql);
    $query->execute();
    $resultado = $query->fetch();
    if ($resultado['usuario'] === null) {
        $sql = "INSERT INTO usuario VALUES ('" . $usuario . "','" . $clave . "')";
        $query = $con->prepare($sql);
        $resultado = $query->execute();
        echo ('1');
    } else {
        echo('0');
    }
}
?>