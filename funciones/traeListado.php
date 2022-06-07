<?php
//@author Alberto Bravo
include_once 'singleton.php';

//$con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');
$con = Singleton::singleton();

$sql = "SELECT * FROM ficha";
//$query = $con->prepare($sql);
$query = $con->getLdb($sql);
$query->execute();
$resultado = $query->fetch();
if ($resultado['usuario'] == null) {
    echo ('0');
    } else {
    echo json_encode($resultado);
}
?>