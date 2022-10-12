<?php

    session_start();
    if(isset($_SESSION['user'])){
        header ('Location: index.php');
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user = filter_var(strtolower($_POST['user']), FILTER_SANITIZE_STRING);
        $password = $_POST['password'];
        $password2 = $_POST['password2'];

        echo "$user . $password . $password2";
    }

    require './view/registro.view.php';
?>