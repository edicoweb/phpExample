<?php
session_start();

    if($_SESSION){
        $nombre = $_SESSION['nombre'];
        echo "<h1>Hola, $nombre </h1>";
    } else {
        echo 'No iniciaste session';
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
</head>
<body>
    <!-- <h1>Hola, <?php echo $_SESSION['nombre']; ?></h1> -->
    <a href="salir.php">Cerrar Sesion</a>
</body>
</html>