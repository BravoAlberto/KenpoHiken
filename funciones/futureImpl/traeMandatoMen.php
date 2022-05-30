<?php
//@author Alberto Bravo
$usuario = $_REQUEST['user'];
$con = new PDO("mysql:host=localhost; dbname=kenpohiken", 'administrador', 'AB492ga2');

$sql = "SELECT * FROM ficha WHERE usuario = '" . $usuario . "'";
$query = $con->prepare($sql);
$query->execute();
$resultado = $query->fetch();
if ($resultado['usuario'] == null) {
    echo ('El usuario no existe');
    } else {
    echo json_encode($resultado);
}
?>