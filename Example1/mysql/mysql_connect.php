<?php
    $id = $_GET['id'];

    try {
        $conexion = new PDO('mysql:host=localhost; dbname=prueba_csl', 'root', '');
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'conexion ok';

        //PREPARED STATEMENTS

        $statement = $conexion->prepare('SELECT * FROM usuario WHERE id = :id');
        $statement->execute( array(':id' => $id) );

        $resultado = $statement->fetch();
        echo '<pre>';
        print_r($resultado);
        echo '</pre>';

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage() . '<br>';
        die();
    }

    $conexion = null;
?>