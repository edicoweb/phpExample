<?php

try {
    $conexion = new PDO("mysql:host=localhost; dbname=viancadb", "root", "");
} catch (PDOException $e) {
    die($e->getMessage());
}