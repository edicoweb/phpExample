<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vianca | Contacto</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./style.css">
</head>
<body>
    <div class="draw">
        <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <h1>CONTACTO</h1>

            <input type="text" class="form-control" id="name" name="name" placeholder="Nombre" value="">
            <input type="text" class="form-control" id="email" name="email" placeholder="Correo electrónico" value="">
            <textarea class="form-control form-control-msg" id="message" name="message" placeholder="Mensaje"></textarea>

            <?php if(!empty($errores)): ?>
                <div class="alert error">
                    <?php echo $errores; ?>
                </div>
                <?php elseif(!empty($enviado)): ?>
                    <div class="alert success">
                        <p>Mensaje enviado</p>
                    </div>
            <?php endif ?>

            <input type="submit" name="submit" class="btn btn-primary" value="Enviar">
        </form>
    </div>
</body>
</html>