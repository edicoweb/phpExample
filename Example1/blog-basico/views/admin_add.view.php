<!DOCTYPE html>
<html lang="en">
<?php require '../head.php'; ?>
<?php require 'admin_header.view.php'; ?>
<body>
    <main class="main-blog">
        <div class="container container-add">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="form" name="login">
                <h1>Agregar Articulo</h1>
                <hr>

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
                </div>

                <div class="form-group button-add">
                    <input class="primary-button" type="submit" value="Crear articulo">
                </div>
                
            </form>

        </div>
    </main>

<?php require 'footer.view.php'; ?>
</body>
</html>