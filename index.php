<?php 
    $destinatario = 'escobarjuanp67@gamil.com';

    $nombre = $_POST['nombre'];
    $asunto = $_POST['tema'];
    $mensaje = $_POST['mensaje'];
    $email = $_POST['correo'];

    $header = "Enviado desde  la pagina portafolio";
    $mensajeCompleto = $mensaje . "\nAtentamente:" . $nombre;

    mail($destinatario, $asunto, $mensajeCompleto, $header);
    echo "<script>alert('correo enviado con Exito')</script>";
    echo "<script> setTimeout(\"location.href='index.html'\",1000)</script>";

?>