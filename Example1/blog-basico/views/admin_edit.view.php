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
                    <input type="hidden" value="" name="id">
                </div>

                <div class="form-group">
                    <input type="text" name="titulo" class="input" placeholder="Título">
                </div>

                <div class="form-group">
                    <input type="text" name="estracto" class="input" placeholder="Extracto">
                </div>

                <div class="form-group">
                    <textarea name="texto" placeholder="Texto" cols="30" rows="10"></textarea>
                </div>

                <div class="form-group">
                    <input type="file" name="imagen" class="input-file" placeholder="Texto">
                    <input type="hidden" name="imagen_guardada" value="">
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