<?php

if($_POST["nom"] && $_POST["email"] && $_POST["assumpte"] && $_POST["missatge"]!= "") {

    $de = $_POST["nom"];

    $destino = "cousoespinosa@gmail.com";

    $asunto = "CLIENTE";

    $mensaje .= "NOMBRE: " . utf8_decode($_POST["nom"]) ."\n";

    $mensaje .= "EMAIL: " . utf8_decode($_POST["email"]) ."\n";

    $mensaje .= "ASUNTO: " . utf8_decode($_POST["assumpte"]) ."\n";

    $mensaje .=  "SU MENSAJE: " . utf8_decode($_POST["missatge"]) ."\n";

    $emailheader = "From:<cousoespinosa@gmail.com>\r\n";

mail($destino, $asunto, $mensaje, $emailheader) or die ("Ho sentim, la teva sol.licitud no ha sigut enviada.<br/>Intenta-ho de nou.");

echo utf8_decode(utf8_encode('La teva consulta ha sigut enviada correctament.'));

    } else {

    if($_POST["nom"] == ""){

    echo utf8_encode ('Si us plau, indica el teu nom.');

    exit; }

    if($_POST["email"] == ""){

    echo utf8_encode ('Si us plau, indica un email de contacte.');

    exit; }

    if($_POST["assumpte"] == ""){

    echo utf8_encode ('Si us plau, indica un assumpte.');

    exit; }

     if($_POST["missatge"] == ""){

    echo utf8_encode ('Si us plau, indica un missatge.');

    exit; }

}
?>
