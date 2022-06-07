<?php

//@author Alberto Bravo
include_once 'password.php';
include_once 'filtrado.php';
include_once 'singleton.php';

$con = Singleton::singleton();

$usuario = filtrado($_REQUEST['usuario']);
$clave = Password::hash($_REQUEST['clave']);
$nombre = filtrado($_REQUEST['nombre']);
$apellido1 = filtrado($_REQUEST['apellido1']);
$apellido2 = filtrado($_REQUEST['apellido2']);
$tipo = filtrado($_REQUEST['tipo']);
$documento = filtrado($_REQUEST['documento']);
$nacimiento = filtrado($_REQUEST['nacimiento']);
$lugarnacim = filtrado($_REQUEST['lugarnacim']);
$nacionalidad = filtrado($_REQUEST['nacionalidad']);
$direccion = filtrado($_REQUEST['direccion']);
$ciudad = filtrado($_REQUEST['ciudad']);
$provincia = filtrado($_REQUEST['provincia']);
$codpostal = filtrado($_REQUEST['codpostal']);
$telefono = filtrado($_REQUEST['telefono']);
$mail = filtrado($_REQUEST['mail']);
$enfermedad = filtrado($_REQUEST['enfermedad']);
$mensaje = filtrado($_REQUEST['mensaje']);


$sql = "SELECT * FROM usuario WHERE usuario = '" . $usuario . "'";
$query = $con->getLdb($sql);
$query->execute();
$resultado = $query->fetch();
if ($resultado != null) {
    echo ('0');
} else {
    if (empty($nombre) || empty($apellido1) || empty($tipo) || empty($documento) 
            || empty($nacimiento) || empty($lugarnacim) || empty($nacionalidad) 
            || empty($direccion) || empty($ciudad) || empty($provincia) 
            || empty($codpostal) || empty($telefono) || empty($mail) 
            || empty($enfermedad)) {
        echo ('2');
    } else {
        $sql1 = "INSERT INTO ficha VALUES ('" . $usuario . "','" . $nombre . "','"
                . $apellido1 . "','" . $apellido2 . "'" . ",'" . $tipo . "'," . "'"
                . $documento . "','" . $nacimiento . "','" . $lugarnacim . "','"
                . $nacionalidad . "','" . $direccion . "','" . $ciudad . "',"
                . "'" . $provincia . "'" . ",'" . $codpostal . "','" . $telefono
                . "','" . $mail . "','" . $enfermedad . "','" . $mensaje . "')";
        $query = $con->getLdb($sql1);
        $resultado = $query->execute();

        $sql = "INSERT INTO usuario VALUES ('" . $usuario . "','" . $clave . "')";
        $query = $con->getLdb($sql);
        $resultado = $query->execute();
        echo('1');
    }
}
?>