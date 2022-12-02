<?php
    require 'admin/config.php';
    require 'function.php';

    $conexion = conexion($bd_config);

    if (!$conexion) {
        header('Location: error.php');
    }

    $posts = obtenerPostIndex($blog_config['post_por_pagina_index'], $conexion);
    if (!$posts) {
        header('Location: error.php');
    }

    require 'views/index.view.php';
?>