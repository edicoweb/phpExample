<?php
    session_start();
    if (isset($_SESSION['user'])) {
        header('Location: contenido.php');
    } else {
        header('Location: registro.php');
    }
?>