<?php
require 'admin/config.php';
require 'functions/function.php';

$conexion = conexion($dbConfig);
if(!$conexion){
    header("Location: error.php");
}

/** Enviando parametroa a nuestra function obtenerPost() */
$posts = obtenerPost($blogConfig['postPorPagina'], $conexion);

$numeroPaginas = numeroPaginas($blogConfig['postPorPagina'], $conexion);
require "views/blog.view.php";