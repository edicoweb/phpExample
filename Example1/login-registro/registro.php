<?php
    $errores = '';

    session_start();
    if(isset($_SESSION['user'])){
        header ('Location: index.php');
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user = filter_var(strtolower($_POST['user']), FILTER_SANITIZE_STRING);
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        // echo "$user . $password . $password2";
    
        if (empty($user) or empty($password) or empty($password2)) {
            $errores .= '<li>Por favor ingrese todo sus datos correctamente</li>';
        } else{

            try {
                $conexion = new PDO('mysql:host=localhost; dbname=db_registro', 'root', '');
            } catch (PDOException $e) {
                echo 'Error: ' . $e->getMessage();
            }

            $statement = $conexion->prepare('SELECT * FROM persona WHERE user = :user LIMIT 1');
            $statement->execute(array(':user' => $user));
            $resultado = $statement->fetch();

            if ($resultado != false) {
                $errores .= '<li>El nombre de usuario ya existe</li>';
            }

        }   
    }

    require './view/registro.view.php';
?>