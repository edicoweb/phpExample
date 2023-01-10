<!DOCTYPE html>
<html lang="en">
<?php require '../head.php'; ?>
<?php require 'admin_header.view.php'; ?>
<body>
    <main class="main-blog">
        <div class="container container-add">
            <form enctype="multipart/form-data" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="form">
                <h1>Editar articulo</h1>
                <hr>

                <div class="form-group">
                    <input type="hidden" name="id" value="<?php echo $post['id'] ?>">
                </div>

                <div class="form-group">
                    <input type="text" name="titulo" class="input" value="<?php echo $post['titulo'] ?>">
                </div>

                <div class="form-group">
                    <input type="text" name="estracto" class="input" value="<?php echo $post['estracto'] ?>">
                </div>

                <div class="form-group">
                    <textarea name="texto" cols="30" rows="10"> <?php echo $post['texto'] ?> </textarea>
                </div>

                <div class="form-group">
                    <input type="file" name="imagen" class="input-file">
                    <input type="hidden" name="imagen_guardada" value="<?php echo $post['imagen'] ?>">
                </div>

                <div class="form-group button-add">
                    <input class="primary-button" type="submit" value="Modificar articulo">
                </div>
                
            </form>

        </div>
    </main>

<?php require 'footer.view.php'; ?>
</body>
</html>