<?php
//@author Alberto Bravo
include_once 'singleton.php';
$con = Singleton::singleton();

$usuario = $_REQUEST['usuario'];

if (!empty($usuario)){
$sql = "DELETE FROM ficha WHERE usuario='".$usuario."'";
$sql = "DELETE FROM usuario WHERE usuario='".$usuario."'";
$sql = "DELETE FROM tutorImg WHERE usuario='".$usuario."'";
$query = $con->getLdb($sql);
$query->execute();

}else {
    echo ('0');
}
?>