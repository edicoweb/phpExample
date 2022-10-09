<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Paginación</title>
</head>
<body>
    <div class="container">
        <h1>Lista de Tareas</h1>
        <section class="articulo">
            <ul>
                <!-- Listamos datos de la base de datos -->
                <?php foreach ($articulos as $articulo): ?>
                    <li><?php echo $articulo['id'] . '.- ' . $articulo['contenido'] ?></li>
                <?php endforeach; ?>
            </ul>
        </section>

        <section class="paginacion">
            <ul>
                <!-- Establecemos cuando el boton [<<] este desabilitado -->
                <?php if ($pagina == 1): ?>
                    <li><a class="disabled" href="">&laquo;</a></li>
                <?php else: ?>
                    <li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
                <?php endif; ?>

                <!-- Ejecutamos un ciclo para mostras la paginas 1 2 3 -->
                <?php
                    for ($i=1; $i<= $numeroPaginas ; $i++) { 
                        if ($pagina == $i) {
                            echo "<li class='active'> <a href='?pagina=$i'> $i </a></li>";
                        }else{
                            echo "<li><a href='?pagina=$i'>$i</a></li>";
                        }
                    }
                ?>

                <!-- Establecemos cuando el boton [>>] este desabilitado -->
                <?php if ($pagina == $numeroPaginas): ?>
                    <li><a class="disabled" href="">&raquo;</a></li>
                <?php else: ?>
                    <li><a href="?pagina=<?php echo $pagina + 1 ?>">&raquo;</a></li>
                <?php endif; ?>
            </ul>
        </section>
    </div>
</body>
</html>