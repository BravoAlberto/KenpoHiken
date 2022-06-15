<?php
//@author Alberto Bravo
/* Código php para enviar correo */
include_once 'filtrado.php';
$nombre = filtrado($_REQUEST['name']);
$telefono = filtrado($_REQUEST['phone']);
$mail = filtrado($_REQUEST['correoel']);
$mensaje = filtrado($_REQUEST['text']);

if (isset($_REQUEST['name']) && isset($_REQUEST['phone']) && isset($_REQUEST['correoel']) && isset($_REQUEST['text'])) {
    $from = $mail;
    $to = "proyectohiken@gmail.com";
    $subject = "Nuevo mensaje de " . $mail;
    $message = $mensaje;
    $headers = "De:" . $nombre."\r"."Teléfono:" . $telefono."\n" . "From:" . $from;
    if (mail($to, $subject, $message, $headers)) {
        echo 1;
    } else {
        echo 0;
    }
} else {
    echo 0;
}
?>

