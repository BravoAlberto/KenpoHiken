<?php
//@author Alberto Bravo
include_once 'filtrado.php';
include_once 'singleton.php';

$usuario = filtrado($_REQUEST['user']);
//$con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');
$con = Singleton::singleton();

$sql = "SELECT * FROM ficha WHERE usuario = '" . $usuario . "'";
//$query = $con->prepare($sql);
$query = $con->getLdb($sql);
$query->execute();
$resultado = $query->fetch();
if ($resultado['usuario'] == null) {
    echo ('El usuario no existe');
    } else {
    echo json_encode($resultado);
}
?>