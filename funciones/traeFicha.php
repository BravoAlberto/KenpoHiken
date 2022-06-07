<?php

//@author Alberto Bravo
include_once 'filtrado.php';
include_once 'singleton.php';

$usuario = filtrado($_REQUEST['user']);

$con = Singleton::singleton();

$sql = "SELECT * FROM ficha WHERE usuario = '" . $usuario . "'";
$query = $con->getLdb($sql);
$query->execute();
$resultado = $query->fetch();
if ($resultado['usuario'] == null) {
    echo ('0');
} else {
    echo json_encode($resultado);
}
?>
