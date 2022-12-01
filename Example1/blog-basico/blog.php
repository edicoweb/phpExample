<?php
    require 'admin/config.php';
    require 'function.php';

    $conexion = conexion($bd_config);
    if(!$conexion){
        header('location: error.php');
    }

    $posts = obtenerPost($blog_config['post_por_pagina'], $conexion);
    if(!$posts){
        header('location: error.php');
    }
    require 'views/blog.view.php';
?>