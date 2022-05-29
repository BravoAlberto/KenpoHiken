<?php

//@author Alberto Bravo
$usuario = $_REQUEST['user'];
$con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');

$sql = "SELECT * FROM ficha WHERE usuario = '" . $usuario . "'";
$query = $con->prepare($sql);
$query->execute();
$resultado = $query->fetch();

$sql1 = "SELECT * FROM tutorImg WHERE usuario = '" . $usuario . "'";
$query1 = $con->prepare($sql1);
$query1->execute();
$resultado1 = $query1->fetch();

if ($resultado['usuario'] == null) {
    echo ('0');
} else {
    if (empty($resultado1['usuario'])) {
        echo json_encode($resultado);
    } else {
        $array = array($resultado, $resultado1);
        echo json_encode($array);
    }
}
?>