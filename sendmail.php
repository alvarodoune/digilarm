<?php
    ini_set( 'display_errors', 1 );
    error_reporting( E_ALL );
    $from = $_POST['email'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $to = "alvarodoune@gmail.com";
    $subject = "Consulta Web";
    $message = $_POST['message'];
    $headers = "De:" . $from . "Nombre:" . $name . "Celular:" . $phone;
    mail($to,$subject,$message, $headers);
    echo "Mensaje enviado correctamente.";
    
 /*   if (isset($_SERVER["HTTP_REFERER"])) {
        header("Location: " . $_SERVER["HTTP_REFERER"]);
    }*/