<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <title>Galeria</title>
</head>
<body>
    <!-- <header>
        <div class="contenedor">
            <h1 class="titulo">Subir imagen</h1>
        </div>
    </header> -->

    <main>
        <section class="fotos">
            <div class="content">
              <form class="formulario" enctype="multipart/form-data" action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
                <label for="imagen">selecciona imagen:</label>
                <input type="file" id="imagen" name="imagen" class="inp-img">

                <label for="titulo">Titulo:</label>
                <input type="text" id="titulo" name="titulo" class="titulo" placeholder="Título">

                <label for="descripcion">Descripción:</label>
                <textarea id="descripcion" name="descripcion" placeholder="Ingrese una descripción"></textarea>

                <?php if(isset($error)): ?>
                    <small class="error"><?php echo $error; ?></small>
                <?php endif; ?>

                <input type="submit" class="submit-form" value="Subir foto">
              </form> 
            </div>
        </section>
    </main>

    <footer class="view-img-footer">
        <div class="contenedor">
            Derechos reservados @edicoweb 2022
        </div>
    </footer>
</body>
</html>