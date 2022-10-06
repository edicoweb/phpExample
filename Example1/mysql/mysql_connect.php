<?php
    // $id = $_GET['id'];

    try {
        $conexion = new PDO('mysql:host=localhost; dbname=prueba_csl', 'root', '');
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo 'conexion ok';

        //PREPARED STATEMENTS
        $statement = $conexion->prepare('SELECT * FROM usuario');
        $statement->execute();

        //iNSERTAR DATOS
        // $statement = $conexion->prepare('INSERT INTO usuario VALUES(null, "Rosmery", "rosmery@gmail.com")');
        // $statement->execute();

        $resultados = $statement->fetchAll();
        foreach ($resultados as $usuario) {
            echo $usuario['name'] . '<br>';
        }

    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage() . '<br>';
        die();
    }

    $conexion = null;
?>