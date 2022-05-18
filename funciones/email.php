<?php
/* Código php para enviar correo */
if (isset($_POST['mail']) && isset($_POST['mensaje']) && isset($_POST['nombre']) && isset($_POST['telefono'])) {
    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $mail = $_POST['mail'];
    $mensaje = $_POST['mensaje'];
    $from = $mail;
    $to = "proyectohiken@gmail.com";
    $subject = "Nuevo mensaje de " . $mail;
    $message = $mensaje;
    $headers = "From:" . $from;
    if(mail($to, $subject, $message, $headers)){
        echo 1;
    }else{
        echo 0;
    }
} else {
    echo 0;
}
?>

