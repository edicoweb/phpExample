<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="../css/font-awesome/css/font-awesome.css">
    <title>Galeria</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Vianca Productos</h1>
        </div>
    </header>

    <main>
        <section class="fotos">
            <div class="contenedor">
                <?php foreach($fotos as $foto): ?>
                    <div class="thumb">
                        <a href="imagen.php?id=<?php echo $foto['id'] ?>">
                            <img src="assets/img/<?php echo $foto['imagen'] ?>" alt="">
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <div class="paginacion">
                <?php if($pagina_actual > 1): ?>
                    <a href="index.php?p=<?php echo $pagina_actual - 1;?>" class="izquierda"> &laquo; Pagina anterior</a>
                <?php endif; ?>
                
                <?php if($total_paginas != $pagina_actual): ?>
                    <a href="index.php?p=<?php echo $pagina_actual + 1;?>" class="izquierda">Pagina siguiente &raquo;</a>
                <?php endif; ?>
            </div>
        </section>
    </main>

    <footer>
        <div class="contenedor">
            Derechos reservados @edicoweb 2022
        </div>
    </footer>
</body>
</html>