<?php

if($_POST["nombre"] && $_POST["email"] && $_POST["asunto"] && $_POST["mensaje"]!= "") {

    $de = $_POST["nombre"];

    $destino = "cousoespinosa@gmail.com";

    $asunto = "CLIENTE";

    $mensaje .= "NOMBRE: " . utf8_decode($_POST["nombre"]) ."\n";

    $mensaje .= "EMAIL: " . utf8_decode($_POST["email"]) ."\n";

    $mensaje .= "ASUNTO: " . utf8_decode($_POST["asunto"]) ."\n";

    $mensaje .=  "SU MENSAJE: " . utf8_decode($_POST["mensaje"]) ."\n";

    $emailheader = "From:<cousoespinosa@gmail.com>\r\n";

mail($destino, $asunto, $mensaje, $emailheader) or die ("Lo sentimos, tu solicitud no ha sido enviada.<br/>Intentelo de nuevo.");

echo utf8_decode(utf8_encode('Tu consulta ha sido enviada correctamente.'));

    } else {

    if($_POST["nombre"] == ""){

    echo utf8_encode ('Por favor, indica tu nombre.');

    exit; }

    if($_POST["email"] == ""){

    echo utf8_encode ('Por favor, indica un email de contacto.');

    exit; }

    if($_POST["asunto"] == ""){

    echo utf8_encode ('Por favor, indica un asunto.');

    exit; }

     if($_POST["mensaje"] == ""){

    echo utf8_encode ('Por favor, indica un mensaje.');

    exit; }

}
?>
