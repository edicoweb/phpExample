<?php
session_start();
if (isset($_SESSION['user'])) {
    require './view/contenido.view.php';
} else {
    header('Location: login.php');
    die();
}
?>