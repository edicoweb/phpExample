<!-- Head -->
<?php require 'head.php';?>
<!-- Header menú-->
<header class="header-post">
    <div class="nav container">
        <!-- Logo -->
        <a href="<?php echo RUTA; ?>" class="logo">
        </a>
        <!-- Nav Icon -->
        <a href="" class="btn"><i class='bx bxl-twitter'></i></a>
        <a href="" class="btn"><i class='bx bxl-facebook'></i></a>
        <a href="" class="btn"><i class='bx bxl-instagram-alt'></i></a>     
    </div>
</header>
<!-- Home Section -->
<section class="services post-container container">
    <div class="heading-post">
        <a href="<?php echo '/blog.php'; ?>"><i class='bx bx-arrow-back'></i>Ver mas posts</a>
    </div>
    <div class="posts-container">
        <div href="" class="post-content">
            <h2 class="post-title"><?= $post['title'] ?></h2>
            <img src="../imagesPrueba/<?php echo $post['img'] ?>" alt="">
            <p class="post-text"><?= $post['content']?></small>
        </div>
        <div class="posts-list">
            <p>Leer mas posts</p>
            <ul>
                <li><a href="">FLISoL: Festival Latinoamericano de Software Libre</a></li>
                <li><a href="">FLISoL: Festival Latinoamericano de Software Libre</a></li>
                <li><a href="">FLISoL: Festival Latinoamericano de Software Libre</a></li>
                <li><a href="">FLISoL: Festival Latinoamericano de Software Libre</a></li>
            </ul>
        </div>
    </div>  
</section>

<!-- Footer -->
<?php require 'footer.php';?>

