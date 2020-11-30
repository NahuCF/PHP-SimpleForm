<?php

$err = '';
$enviado = '';

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mensaje = $_POST['mensaje'];

    if(!empty($name))
    {
        $name = trim($name);
        $name = filter_var($name, FILTER_SANITIZE_STRING);
    }
    else
    {
        $err .= "Por favor introduzca un nombre. <br />";
    }
    if(!empty($email))
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        {
            $err .= "El email no es valido. <br />";
        }
    }
    else
    {
        $err .= "El email esta vacio. <br />";
    }
    if(!empty($mensaje))
    {
        $mensaje = trim($mensaje);
        $mensaje = stripcslashes($mensaje);
        $mensaje = htmlspecialchars($mensaje);
    }
    else
    {
        $err .= "Por favor introduzca un mensaje.";
    }
    if(empty($err))
    {
        $enviar_a = "nahuefer105@outlook.com";
        $asunto = "Correo enviado desde TuVieja.com";

        $enviar_mensaje = "De: $name \n";
        $enviar_mensaje = "Email: $email \n";
        $enviar_mensaje = "Mensaje: " . $mensaje;

        //mail($enviar_a, $asunto, $enviar_mensaje);
        $enviado = "true";
    }
}

require 'index.view.php';

?>