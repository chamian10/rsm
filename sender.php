<?php

$aviso = "";
if ($_POST['email'] != "") {
    // email de destino
    $email = "beatriz.rsmartino@gmail.com";

    // asunto del email
    $subject = "Contacto - RSM";

    // Cuerpo del mensaje
    $mensaje = "---------------------------------- \n";
    $mensaje .= "            Contacto               \n";
    $mensaje .= "---------------------------------- \n";
    $mensaje .= "NOMBRE:   " . $_POST['name'] . "\n";
    $mensaje .= "EMAIL:    " . $_POST['email'] . "\n";
    $mensaje .= "TELEFONO:    " . $_POST['phone'] . "\n";
    $mensaje .= "FECHA:    " . date("d/m/Y") . "\n";
    $mensaje .= "HORA:     " . date("h:i:s a") . "\n";
    $mensaje .= "IP:       " . $_SERVER['REMOTE_ADDR'] . "\n\n";
    $mensaje .= "---------------------------------- \n\n";
    $mensaje .= $_POST['comment'] . "\n\n";
    $mensaje .= "---------------------------------- \n";

    // headers del email
    $headers = "From: " . $_POST['email'] . "\r\n";

    // Enviamos el mensaje
    if (mail($email, $subject, $mensaje, $headers)) {
        $aviso = "Su mensaje fue enviado.";
        echo"<script>alert('Su mensaje fue enviado.'); window.location='index.html';</script>";
HTML;
    } else {
        $aviso = "Error de envío.";
        echo $aviso;
    }
}


?>