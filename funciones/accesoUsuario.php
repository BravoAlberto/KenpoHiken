<?php

include_once 'password.php';

$usuario = $_POST['user'];
$clave = $_POST['password'];

$con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');
$sql = "SELECT clave FROM usuario WHERE usuario=$usuario";
$query = $con->prepare($sql);
$resultado = $query->execute();
echo $resultado['clave'];

if (Password::verify($clave, $resultado['clave'])) {
    $resultado['usuario'] = $usuario;
    echo('1');
} else {
    echo('2');
}
?>