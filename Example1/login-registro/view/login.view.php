<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/formulario.css">
    <title>Inicicar Sesion</title>
</head>
<body>
    <div class="container">
        <hr class="border">
        <samp class="logo"></samp>
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" class="form" name="login">
            <h1>Iniciar Sesión</h1>
            <div class="form-group">
                <i class="icon-l fa fa-user" aria-hidden="true"></i>
                <input type="text" name="user" id="" class="input usuario" placeholder="Usuario">
            </div>
            <div class="form-group">
                <i class="icon-l fa fa-lock" aria-hidden="true"></i>
                <input type="password" name="password" id="" class="input password" placeholder="Contraseña">
            </div>

            <?php if(!empty($errores)): ?>
                <div class="alert error">
                    <ul>
                    <?php echo $errores ; ?>
                    </ul>
                </div>
            <?php endif; ?>

            <div class="form-group">
                <button class="btn primary-btn">Ingresar</button>
            </div>
            
        </form>
        <p class="text-register">
            ¿ Aun no tienes cuenta ?
            <a href="registro.php">Regístrate</a>
        </p>
    </div>
</body>
</html>