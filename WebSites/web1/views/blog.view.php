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
        <form name="search" class="search" action="<?php echo RUTA; ?>/search.php" method="get">
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
        <?php foreach ($posts as $post): ?>
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
        <a class="left deactivate" href=""><i class=' bx bx-chevrons-left'></i></a>
    <?php else: ?>
        <a class="left deactivate" href=""><i class='bx bx-chevrons-left'></i></a>    
    <?php endif; ?>
    <ul>
        <li><a href="">1</a></li>
        <li><a class="active" href="">2</a></li>
        <li><a href="">3</a></li>
        <li><a href="">4</a></li>
    </ul>
    <a class="right" href=""><i class='bx bx-chevrons-right' ></i></a>
</section>

<!-- Footer -->
<?php require 'footer.php';?>
<!-- Link To JS -->
<script src="js/main.js"></script>
