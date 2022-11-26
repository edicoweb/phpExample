<!DOCTYPE html>
<html lang="en">
<?php require 'head.php'; ?>
<body>
    <?php require 'header.views.php'; ?>
    <main class="main-blog">

        <form name="search" class="search section" action="<?php echo RUTA; ?>/buscar.php" method="GET">
            <input type="text" name="search" placeholder="Buscar">
            <button type="submit" class="icon fa fa-search"></button>
        </form>

        <section class="blog-section section" id="blog">
            <div class="blog-container">
                <div class="blog-container-img">
                    <img src="assets/img/post.png" alt="Lenovo">
                </div>        
                <div class="blog-container-text">
                    <h1><a href="<?php echo "post.php"; ?>">Lenovo Tech World</a></h1>
                    <p>
                        Lenovo Tech World es la reunión anual de la contracultura digital, aquellas comunidades que se presentan de una manera crítica de las tecnologías dentro de nuestros mecanismos de desarrollo de la sociedad.
                        <a href=""><i class="fa-solid fa-arrow-right"></i></i> Seguir leendo</a>
                    </p>
                </div>
            </div>
        </section>

        <section class="blog-section section" id="blog">
            <div class="blog-container">
                <div class="blog-container-img">
                    <img src="assets/img/post.png" alt="Lenovo">
                </div>        
                <div class="blog-container-text">
                    <h1><a href="$">Lenovo Tech World</a></h1>
                    <p>
                        Lenovo Tech World es la reunión anual de la contracultura digital, aquellas comunidades que se presentan de una manera crítica de las tecnologías dentro de nuestros mecanismos de desarrollo de la sociedad.
                        <a href=""><i class="fa-solid fa-arrow-right"></i></i> Seguir leendo</a>
                    </p>
                </div>
            </div>
        </section>

        <section class="blog-section section" id="blog">
            <div class="blog-container">
                <div class="blog-container-img">
                    <img src="assets/img/post.png" alt="Lenovo">
                </div>        
                <div class="blog-container-text">
                    <h1><a href="$">Lenovo Tech World</a></h1>
                    <p>
                        Lenovo Tech World es la reunión anual de la contracultura digital, aquellas comunidades que se presentan de una manera crítica de las tecnologías dentro de nuestros mecanismos de desarrollo de la sociedad.
                        <a href=""><i class="fa-solid fa-arrow-right"></i></i> Seguir leendo</a>
                    </p>
                </div>
            </div>
        </section>

        <?php require 'pagination.php'; ?>
    </main>

<?php require 'footer.view.php'; ?>
</body>
</html>