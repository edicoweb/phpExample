<?php

    try {
        $conexion = new PDO('mysql:host=localhost;dbname=blog_pagination', 'root', '');
    } catch (PDOException $e) {
        echo "ERROR: " . $e->getMessage();
        die();
    }

    $pagina = isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
    $postPorPagina = 4;

    require 'index.view.php';
?>