<?php require ('Partials/head.view.php') ?>
<h1>Iniciar sesion</h1>
<form action="/login" method="post">
    <div>
        <input style="margin-top: 10px;" type="text" name="email" placeholder="email" id="">
    </div>
    <div>
        <input style="margin-top: 10px;" type="text" name="password" placeholder="Contraseña" id="">
    </div>
    <div>
        <button style="margin-top: 10px;" type="submit">Ingresar</button>
    </div>
</form>
<?php require ('Partials/footer.view.php') ?>