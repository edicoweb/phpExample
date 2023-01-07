<!DOCTYPE html>
<html lang="en">
<?php require '../head.php'; ?>
<body>
    <?php require 'admin_header.view.php'; ?>
    <main class="main-blog">

        <form name="busqueda" class="search section" action="<?php echo RUTA; ?>/search.php" method="GET">
            <div class="search-admin">
                <div class="search-cont">
                    <input type="text" name="busqueda" placeholder="Buscar">
                    <button type="submit" class="icon fa fa-search"></button>
                </div>
                <a class="add-button" href="add.php"><small>Agregar Post</small></a>
            </div>
        </form>
        
        <?php foreach ($posts as $post): ?>
        <section class="blog-section-admin section" id="blog">
            <div class="blog-container-admin">      
                <div class="blog-container-text">
                    <h1><a href="../post.php?id=<?php echo $post['id'] ?>"><?php echo $post['id'] . " . " . $post['titulo'] ?></a></h1>
                </div>
                <div class="blog-container-icon">
                    <a href="edit.php?id=<?php echo $post['id']; ?>"><i class="fas fa-edit"></i></a>
                    <a href="delete.php?id=<?php echo $post['id']; ?>"><i class="fa fa-trash" aria-hidden="true"></i></a>
                </div>
            </div>
        </section>
        <?php endforeach; ?>

        <?php require '../admin/pagination.php'; ?>
    </main>

<?php require 'footer.view.php'; ?>
</body>
</html>