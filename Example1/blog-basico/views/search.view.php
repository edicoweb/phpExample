<!DOCTYPE html>
<html lang="en">
<?php require 'head.php'; ?>
<body>
    <?php require 'header.views.php'; ?>
    <main class="main-blog">

        <form name="busqueda" class="search section" action="<?php echo RUTA; ?>/search.php" method="GET">
            <input type="text" name="busqueda" placeholder="Buscar">
            <button type="submit" class="icon fa fa-search"></button>
        </form>
        <?php foreach ($resultados as $post): ?>
        <section class="blog-section section" id="blog">
            <div class="blog-container">
                <div class="blog-container-img">
                    <img src="assets/img/<?php echo $post['imagen'] ?>" alt="Lenovo">
                </div>        
                <div class="blog-container-text">
                    <h1><a href="post.php?id=<?php echo $post['id'] ?>"><?php echo $post['titulo'] ?></a></h1>
                    <p>
                        <?php echo $post['estracto'] ?>
                        <a href="">Seguir leendo</a>
                    </p>
                </div>
            </div>
        </section>
        <?php endforeach; ?>

        <?php require 'pagination.php'; ?>
    </main>

<?php require 'footer.view.php'; ?>
</body>
</html>