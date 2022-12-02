<?php
    require 'admin/config.php';
    require 'function.php';
    
    $conexion = conexion($bd_config);

    if (!$conexion) {
        header('Location: error.php');
    }

    $id_articulo = idArticulo($_GET['id']);

    if(empty($id_articulo)){
        header('Location: blog.php');
    }

    $post = obtenerPostPorId($conexion, $id_articulo);

    if (!$post) {
        header('Location: blog.php');
    }

    $post = $post[0];

    require 'views/post.view.php';
?>