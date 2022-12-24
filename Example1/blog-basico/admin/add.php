<?php
session_start();
require 'config.php';
require '../function.php';

comprobarSesion();

$conexion = conexion($bd_config);
if (!$conexion) {
    header('Location: ../error.php');
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $titulo = limpiarDatos($_POST['titulo']);
    $estracto = limpiarDatos($_POST['estracto']);
    $texto = $_POST['texto'];
    $imagen = $_FILES['imagen']['tmp_name'];

    $archivo_subido = '../' . $blog_config['carpeta_imagenes'] . $_FILES['imagen']['name'];
    move_uploaded_file($imagen, $archivo_subido);

    $statement = $conexion->prepare(
        'INSERT INTO articulos(id, titulo, estracto, texto, imagen)
        VALUES (null, :titulo, :estracto, :texto, :imagen)'
    );

    $statement->execute(array(
        ':titulo' => $titulo,
        ':estracto' => $estracto,
        ':texto' => $texto,
        ':imagen' => $_FILES['imagen']['name']
    ));

    // header('Location: ' . RUTA . '/admin');
}

require '../views/admin_add.view.php';
?>