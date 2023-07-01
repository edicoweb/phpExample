<!-- Head -->
<?php require 'head.php';?>
<!-- Header menú-->
<?php require 'header.php'; ?>
<!-- Home Section -->
<section class="home-container">
    <div class=" home-blog container">
        <div class="home-text">
            <h1>BLOG DE <span> VIANCA </span></h1>
        </div>
        <form name="search" class="search" action="search.php" method="get">
            <button type="submit"><i class='bx bx-search'></i></button>
            <input type="text" name="search" placeholder="Buscar Post">
        </form> 
    </div>
     <img src="assets/img/img2.png" alt="">
</section>

<section class="services container">
    <div class="heading">
        <p>Nuestros Servicios</p>
        <span></span>
    </div>
    <div class="posts-content">
        <!-- Box-1 -->
        <?php foreach ($resultado as $post): ?>
        <div class="box-blog">
            <img src="../imagesPrueba/<?= $post['img'] ?>" alt="Portada del Post">
            <a class="box-blog_title" href=""><?= $post['title'] ?></a>
            <a class="box-blog_next" href="<?php echo 'post.php?id='.$post['id']; ?>">Leer Post<i class='bx bx-right-arrow-alt'></i></a>
            <small><?= fecha($post['date']) ?></small>
        </div>
        <?php endforeach; ?>
    </div>  
</section>
<section class="pagination container">
    <?php if(paginaActual() === 1): ?>
        <i class='desactivate bx bx-chevrons-left'></i>
    <?php else: ?>
        <a class="left" href="blog.php?p=<?php echo paginaActual() - 1 ?>"><i class='bx bx-chevrons-left'></i></a>    
    <?php endif; ?>

    <ul>
        <?php for($i = 1; $i <= $numeroPaginas; $i++): ?>
            <?php if(paginaActual() === $i): ?>
                <li><a class="active" href="blog.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php else: ?>
                <li><a href="blog.php?p=<?php echo $i; ?>"><?php echo $i; ?></a></li>
            <?php endif; ?>
        <?php endfor; ?>
    </ul>
    <?php if(paginaActual() == $numeroPaginas): ?>
        <i class='desactivate bx bx-chevrons-right'></i>
    <?php else: ?>
        <a class="right" href="blog.php?p=<?php echo paginaActual() + 1 ?>"><i class='bx bx-chevrons-right'></i></a>    
    <?php endif; ?>
</section>

<!-- Footer -->
<?php require 'footer.php';?>
<!-- Link To JS -->
<script src="js/main.js"></script>
