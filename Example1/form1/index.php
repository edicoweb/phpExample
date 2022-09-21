<?php
$errores = '';
$enviado = '';

if(isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    if(!empty($name)){
        $name = trim($name);
        $name = filter_var($name, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor ingrese su nombre <br>';
    }

    if(!empty($email)){
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            $errores .= 'Ingrese un correo válido <br>';
        }
    } else {
        $errores .= 'Por favor ingrese su correo electrónico <br>';
    }

    if(!empty($message)){
        $message = filter_var($message, FILTER_SANITIZE_STRING);
    } else {
        $errores .= 'Por favor ingrese un Mensaje';
    }
    
    if(!$errores){
        $enviado = true;
    }
}

require 'index.view.php';
?>