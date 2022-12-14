<?php
    $errores = '';

    session_start();
    if(isset($_SESSION['user'])){
        header ('Location: index.php');
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user = filter_var(strtolower($_POST['user']), FILTER_UNSAFE_RAW);
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        // echo "$user . $password . $password2";
    
        if (empty($user) or empty($password) or empty($password2)) {
            $errores .= '<li>Por favor ingrese todo sus datos correctamente</li>';
        } 
        else{

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

            $password = hash('sha512', $password);
            $password2 = hash('sha512', $password2);

            if($password != $password2){
                $errores .= '<li>Las contraseñas no coinciden</li>';
            }
        }
        
        if(empty($errores)){
            $statement = $conexion->prepare('INSERT INTO persona (id, user, password) VALUES (null, :user, :password)');
            $statement->execute(array(':user' => $user, ':password' => $password));
            header('Location: login.php');
        }
    }
    require './view/registro.view.php';
?>