<!DOCTYPE html>
<html lang="en">
<?php require 'head.php'; ?>
<?php require 'header.views.php'; ?>
<body>
    <main class="main-blog">
        <div class="container container-login">
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="form" name="login">
                <h1>Iniciar Sesión</h1>

                <div class="form-group">
                    <input type="text" name="user" id="" class="input usuario" placeholder="Usuario">
                </div>

                <div class="form-group">
                    <input type="password" name="password" id="" class="input password" placeholder="Contraseña">
                </div>

                <div class="form-group">
                    <button class="btn primary-btn">Ingresar</button>
                </div>
                
            </form>

            <p class="text-register">
                ¿ Aun no tienes cuenta ?
                <a href="registro.php">Regístrate</a>
            </p>

        </div>
    </main>

<?php require 'footer.view.php'; ?>
</body>
</html>