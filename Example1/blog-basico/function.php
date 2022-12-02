<?php

function conexion($bd_config){
    try {
        $conexion = new PDO('mysql:host=localhost; dbname='.$bd_config['baseDatos'], $bd_config['usuario'], $bd_config['pass']);
        return $conexion;
    } catch (PDOException $e) {
        return false;
    }
}

function limpiarDatos($datos){
    $datos = trim($datos);
    $datos = stripslashes($datos);
    $datos = htmlspecialchars($datos);
    return $datos;
}

function paginaActual(){
    return isset($_GET['pagina']) ? (int)$_GET['pagina'] : 1;
}

function obtenerPost($post_por_pagina, $conexion){
    $inicio = (paginaActual() > 1) ? paginaActual() * $post_por_pagina - $post_por_pagina: 0;
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $post_por_pagina");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function obtenerPostIndex($post_por_pagina_index, $conexion){
    $inicio = (paginaActual() > 1) ? paginaActual() * $post_por_pagina_index - $post_por_pagina_index: 0;
    $sentencia = $conexion->prepare("SELECT SQL_CALC_FOUND_ROWS * FROM articulos LIMIT $inicio, $post_por_pagina_index");
    $sentencia->execute();
    return $sentencia->fetchAll();
}

function idArticulo($id){
    return (int)limpiarDatos($id);
}

function obtenerPostPorId($conexion, $id){
    $resultado = $conexion->query("SELECT * FROM articulos WHERE id = $id LIMIT 1");
    $resultado = $resultado->fetchAll();
    return ($resultado) ? $resultado : false;
}

function fecha($fecha){
    $timestamp = strtotime($fecha);
    $meses = ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'];
    $dia = date('d', $timestamp);
    $mes = date('m', $timestamp)-1;
    $annio = date('Y', $timestamp);

    $fecha = $meses[$mes]. " del $annio";
    return $fecha;
}

?>