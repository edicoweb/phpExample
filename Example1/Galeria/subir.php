<?php
    require 'funciones.php';

    $conexion = dbconexion('dbgaleria', 'root', '');

    if (!$conexion) {
        die();
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_FILES)) {
        $check = @getimagesize($_FILES['imagen']['tmp_name']);

        if ($check !== false) {
            $carpeta_destino = 'assets/img/';
             $archivo_subido = $carpeta_destino . $_FILES['imagen']['name'];
             move_uploaded_file($_FILES['imagen']['tmp_name'], $archivo_subido);
            
             $statement = $conexion->prepare('
             INSERT INTO foto (imagen, titulo, descripcion)
             VALUES (:imagen, :titulo, :descripcion)
             ');
            
             $statement->execute(array(
                ':imagen'=>$_FILES['imagen']['name'],
                ':titulo'=>$_POST['titulo'],
                ':descripcion'=>$_POST['descripcion']
             ));

             header('Location: index.php');
        } else {
            $error = "El archivo no es una imagen o es muy pesado";
        }
    }

    require 'views/subir.view.php';

?>