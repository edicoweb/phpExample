<?php

/** Nos conectamos a la base de datos */
function conexion($dbConfig){
    try {
        $conexion = new PDO("{$dbConfig['dbtype']}:host={$dbConfig['host']}; dbname={$dbConfig['dbname']}", $dbConfig['user'], $dbConfig['pass']);
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}

/** Limpiamos nuestros datos recibidos mediante el formulario */
function LimpiarDatos($datos){
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

/** esta fn()  no retorna la pagina actual en lo que nos encontramos */
function paginaActual(){
    return isset($_GET['p']) ? (int)$_GET['p'] : 1;
}

/** Con esta función obtenemos articulos */
function obtenerPost($postPorPagina, $conexion){
    $inicio = (paginaActual() > 1) ? paginaActual() * $postPorPagina - $postPorPagina : 0;
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articles LIMIT $inicio, $postPorPagina");
    $sentencia->execute();
    return $sentencia->fetchAll();
}