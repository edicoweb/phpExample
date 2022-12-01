<?php
    require 'admin/config.php';
    require 'function.php';

    $conexion = conexion($bd_config);
    if(!$conexion){
        header('location: error.php');
    }

    $post = obtenerPost($blog_config['post_por_pagina'], $conexion);
    if(!$post){
        header('location: error.php');
    }
    require 'views/blog.view.php';
?>