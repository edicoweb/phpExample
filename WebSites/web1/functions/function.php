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