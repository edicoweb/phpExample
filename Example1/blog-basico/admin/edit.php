<?php
session_start();

require 'config.php';
require '../function.php';

comprobarSesion();

$conexion = conexion($bd_config);

if (!$conexion) {
    reader('Location: ../error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    # code...
} else {
    $id_articulo = idArticulo($_GET['id']);

    if (empty($id_articulo)) {
       header('Location: ' . RUTA . '/admin');
    }
    
    $post = obtenerPostPorId($conexion, $id_articulo);

    if (!$post) {
        header('Location: ' . RUTA . '/admin');
    }

    $post = $post[0];
}

require '../views/admin_edit.view.php';
?>