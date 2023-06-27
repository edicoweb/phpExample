<?php
require "admin/config.php";
require "functions/function.php";

$conexion = conexion($dbConfig);
$idArticulo = idArticulo($_GET['id']);

if(!$dbConfig){
    header("Location: error.php");
}

if(empty($idArticulo)){
    header("Location: blog.php");
}

/** Obtenemos el articulo por Id */
$post = obtenerPostPorId($conexion, $idArticulo);
/** Si no encontramos el id redireccionamos al blog.php */
if (!$post) {
    header("Location: blog.php");
}
$post = $post[0];

require "views/post.view.php";