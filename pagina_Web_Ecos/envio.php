<?php
    
    $mensaje = $_POST['mensaje'];
    $correo = $_POST['correo'];

    $header =  'from: ' . $correo . "\r\n";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";

    $mensaje .= "Su e-mail es: " . $correo . " \r\n";
    $mensaje .="el mensaje es: " . $mensaje . " \r\n";

    $para = 'yizthak011@gmail.com';
    $asunto = 'mensaje_user';

    mail($para, $asunto, utf8_decode($mensaje), $header);

    $validarEnvio = mail($para, $asunto, $mensaje, $header);

if (!$validarEnvio){
    echo "envio fallido";
} else{
    echo "<script>alert('envio realizado')</script>";
    echo "<script>window.location.replace('la pagina a redirigir')</script>";
}
  // echo "<script> alert('mensaje enviado exitosamente')</script>";
   //echo "<script> setTimeout (\"location.href='index.html'\",1000) </script>";

?>