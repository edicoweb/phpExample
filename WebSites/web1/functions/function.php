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

/**Vamos a limpiar nuestro id capturado en post.php */
function idArticulo($id){
    return (int)limpiarDatos($id);
}

/** Obtenemos post por id */
function obtenerPostPorId($conexion, $id){
    $resultado = $conexion->query("SELECT * FROM articles WHERE id = $id LIMIT 1");
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

function fecha($fecha){
    $timestamp = strtotime($fecha);
    $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    $dia = date('d', $timestamp);
    $mes = date('m', $timestamp)-1;
    $annio = date('Y', $timestamp);

    $fecha = "$dia de". $meses[$mes] . " del $annio";
    return $fecha;
}