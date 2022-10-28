<?php
    require 'funciones.php';

    $conexion = dbconexion('dbgaleria', 'root', '');

    if (!$conexion) {
        die();
    }

    //Por seguridad

    $id = isset($_GET['id']) ? (int)$_GET['id'] : false;
    if (!$id) {
        header('Location: index.php');
    }

    //vamos a obtener la imagen
    $statement = $conexion->prepare('SELECT * FROM foto WHERE id = :id');
    $statement->execute(array(':id' => $id));
    $foto = $statement->fetch();

    if(!$foto){
        header('Location: index.php');
    }

    require 'views/imagen.view.php';

?>