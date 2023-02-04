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
        <div class="box-blog">
            <img src="assets/img/1.jpg" alt="">
            <a class="box-blog_title" href="">FLISoL: Festival Latinoamericano de Software Libre</a>
            <a class="box-blog_next" href="<?php echo 'post.php'; ?>">Leer Post<i class='bx bx-right-arrow-alt'></i></a>
            <small>Enero 2023</small>
        </div>

        <div href="" class="box-blog">
            <img src="assets/img/2.png" alt="">
            <a class="box-blog_title" href="">FLISoL: Festival Latinoamericano de Software Libre</a>
            <a class="box-blog_next" href="">Leer Post<i class='bx bx-right-arrow-alt'></i></a>
            <small>Enero 2023</small>
        </div>

        <div href="" class="box-blog">
            <img src="assets/img/3.png" alt="">
            <a class="box-blog_title" href="">FLISoL: Festival Latinoamericano de Software Libre</a>
            <a class="box-blog_next" href="">Leer Post<i class='bx bx-right-arrow-alt'></i></a>
            <small>Enero 2023</small>
        </div>

        <div href="" class="box-blog">
            <img src="assets/img/1.jpg" alt="">
            <a class="box-blog_title" href="">FLISoL: Festival Latinoamericano de Software Libre</a>
            <a class="box-blog_next" href="">Leer Post<i class='bx bx-right-arrow-alt'></i></a>
            <small>Enero 2023</small>
        </div>

        <div href="" class="box-blog">
            <img src="assets/img/3.png" alt="">
            <a class="box-blog_title" href="">FLISoL: Festival Latinoamericano de Software Libre</a>
            <a class="box-blog_next" href="">Leer Post<i class='bx bx-right-arrow-alt'></i></a>
            <small>Enero 2023</small>
        </div>
    </div>  
</section>

<section class="pagination container">
    <a class="left deactivate" href=""><i class='bx bx-chevrons-left'></i></a>
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
