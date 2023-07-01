<?php
require 'admin/config.php';
require 'functions/function.php';

$conexion = conexion($dbConfig);
if(!$conexion){
    header("Location: error.php");
}

if ($_SERVER['REQUEST_METHOD'] == 'GET' && !empty($_GET['search'])) {
    $busqueda = limpiarDatos($_GET['search']);

    $statement = $conexion->prepare("SELECT * FROM articles WHERE title LIKE :search OR content LIKE :search");
    $statement->execute([':search' => "%$busqueda%"]);
    $resultado = $statement->fetchAll();

} else {
    header("Location: blog.php");
}

$numeroPaginas = numeroPaginas($blogConfig['postPorPagina'], $conexion);


require 'views/search.view.php';