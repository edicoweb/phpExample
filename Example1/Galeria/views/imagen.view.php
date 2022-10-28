<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Galeria</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">
                <?php 
                    if (!empty($foto['titulo'])) {
                        echo $foto['titulo'];
                    } else {
                        echo $foto['imagen'];
                    }
                ?>
            </h1>
        </div>
    </header>
    <main>
        <section class="fotos">
            <div class="content">
                    <img src="assets/img/<?php echo $foto['imagen']; ?>" alt="">
                    <p class="texto"><?php echo $foto['descripcion'] ?></p>
                    <a href="index.php" class="regresar"><i class="fa fa-long-arrow-left"></i> Regresar</a>
            </div>
        </section>
    </main>

    <footer class="view-img-footer">
        <div class="contenedor">
            Derechos reservados @edicoweb 2022
        </div>
    </footer>
</body>
</html>