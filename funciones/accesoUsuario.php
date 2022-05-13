<?php

include_once 'password.php';
include_once 'creaUsuario';

$usuarioE = $_POST['usuarioE'];

$usuario = $usuarioE['user'];
$clave = $usuarioE['password'];

$con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');
$sql = "SELECT clave FROM usuario WHERE usuario=$usuario";
$query = $con->prepare($sql);
$resultado = $query->execute();
echo $resultado['clave'];

if (Password::verify($clave, $resultado['clave'])) {
    $usuario['user'] = $usuario;
    echo('Registo correcto');
}else{
    echo('Acceso denegado');
}
?>