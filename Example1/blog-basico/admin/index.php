<?php
session_start();
require 'config.php';
require '../function.php';

$conexion = conexion($bd_config);
if (!$conexion) {
    header('Location: ../error.php');
}

$posts = obtenerPost($blog_config['post_por_pagina'], $conexion);

require '../views/admin_index.view.php';
?>