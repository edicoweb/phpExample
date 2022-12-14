<!DOCTYPE html>
<html lang="en">
<?php require 'head.php'; ?>
<body>
    <?php require 'header.views.php'; ?>
    <main class="main-blog">
        
        <section class="post-section section" id="blog">
            <div class="post-title">
                <h1><?php echo $post['titulo'] ?></h1>
                <small>Publicado en <?php echo fecha($post['fecha']) ?></small>
            </div>
            <div class="post-container">      
                <div class="post-container-text">
                    <p><?php echo nl2br($post['texto']); ?></p>
                </div>
                <div class="post-container-img">
                    <img src="assets/img/<?php echo $post['imagen'] ?>" alt="Lenovo">
                </div>  
            </div>
        </section>
    </main>

<?php require 'footer.view.php'; ?>
</body>
</html>