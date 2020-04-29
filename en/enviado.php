<?php

if($_POST["name"] && $_POST["email"] && $_POST["subject"] && $_POST["message"]!= "") {

    $de = $_POST["name"];

    $destino = "cousoespinosa@gmail.com";

    $asunto = "CLIENTE";

    $mensaje .= "NOMBRE: " . utf8_decode($_POST["name"]) ."\n";

    $mensaje .= "EMAIL: " . utf8_decode($_POST["email"]) ."\n";

    $mensaje .= "ASUNTO: " . utf8_decode($_POST["subject"]) ."\n";

    $mensaje .=  "SU MENSAJE: " . utf8_decode($_POST["message"]) ."\n";

    $emailheader = "From:<cousoespinosa@gmail.com>\r\n";

mail($destino, $asunto, $mensaje, $emailheader) or die ("Sorry, your request has not been sent.<br/>Try again.");

echo utf8_decode(utf8_encode('Your query has been sent correctly.'));

    } else {

    if($_POST["name"] == ""){

    echo utf8_encode ('Please, enter your name.');

    exit; }

    if($_POST["email"] == ""){

    echo utf8_encode ('Please, enter your contact email.');

    exit; }

    if($_POST["subject"] == ""){

    echo utf8_encode ('Please, indicate a subject.');

    exit; }

     if($_POST["message"] == ""){

    echo utf8_encode ('Please, indicate a message.');

    exit; }

}
?>
