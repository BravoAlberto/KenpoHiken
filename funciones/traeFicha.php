<?php
//@author Alberto Bravo
include_once 'filtrado.php';
$usuario = filtrado($_REQUEST['user']);
$con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');

$sql = "SELECT * FROM ficha WHERE usuario = '" . $usuario . "'";
$query = $con->prepare($sql);
$query->execute();
$resultado = $query->fetch();
if ($resultado['usuario'] == null) {
    echo ('0');
    } else {
    echo json_encode($resultado);
}
?>