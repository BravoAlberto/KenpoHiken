<?php
/* Código php para enviar correo */
    $nombre = $_POST['name'];
    $telefono = $_POST['phone'];
    $mail = $_POST['correoel'];
    $mensaje = $_POST['text'];
    echo "<script>alert('entro');</script>";
if (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['email']) && isset($_POST['text'])) {
    $nombre = $_POST['name'];
    $telefono = $_POST['phone'];
    $mail = $_POST['email'];
    $mensaje = $_POST['text'];
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

