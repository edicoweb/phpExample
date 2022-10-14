<?php
    session_start();
    if (isset($_SESSION['usuario'])) {
        header('Location: index.php');
    }

    $errores = '';

    if ($_SERVER['REQUEST_METHOD']  == 'POST') {
        $user = filter_var(strtolower($_POST['user']), FILTER_SANITIZE_STRING);
        $password = $_POST['password'];
        $password = hash('sha512', $password);

        try {
            $conexion = new PDO('mysql:host=localhost;dbname=db_registro', 'root', '');
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }

        $statement = $conexion->prepare('SELECT * FROM persona WHERE user = :user and password = :password');
        $statement->execute(array(':user' => $user, ':password' => $password));

        $resultado = $statement->fetch();
        
        if ($resultado != false) {
            $_SESSION['user'] = $user;
            header('Location: index.php');
        } else {
            $errores .= '<li>Su usuario o contraseña es incorrecta</li>';
        }

    }

    require './view/login.view.php';
?>