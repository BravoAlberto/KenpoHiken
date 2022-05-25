<?php
//@author Alberto Bravo
/* Código php para enviar correo */
$nombre = $_REQUEST['name'];
$telefono = $_REQUEST['phone'];
$mail = $_REQUEST['correoel'];
$mensaje = $_REQUEST['text'];

if (isset($_REQUEST['name']) && isset($_REQUEST['phone']) && isset($_REQUEST['email']) && isset($_REQUEST['text'])) {
    $nombre = $_REQUEST['name'];
    $telefono = $_REQUEST['phone'];
    $mail = $_REQUEST['email'];
    $mensaje = $_REQUEST['text'];
    $from = $mail;
    $to = "proyectohiken@gmail.com";
    $subject = "Nuevo mensaje de " . $mail;
    $message = $mensaje;
    $headers = "From:" . $from;
    if (mail($to, $subject, $message, $headers)) {
        echo 1;
    } else {
        echo 0;
    }
} else {
    echo 0;
}
?>

