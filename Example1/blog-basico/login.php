<?php
    session_start();
    require 'admin/config.php';
    require 'function.php';

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $usuario = limpiarDatos($_POST['user']);
        $password = limpiarDatos($_POST['password']);

        if ($usuario == $blog_admi['usuario'] && $password == $blog_admi['password']) {
            $_SESSION['admin'] = $blog_admi['usuario'];
            header('Location:' . RUTA . '/admin');
        }
    }
    
    require 'views/login.view.php';
?>