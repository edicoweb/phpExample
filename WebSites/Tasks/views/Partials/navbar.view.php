<nav>
    <a href="about">Acerca de mi</a>
    <a href="projects">Proyectos</a>
    <a href="contact">Contáctame</a>
    <?php if(Auth::check()): ?>
        <span> Bienvenido <?= $_SESSION['name'] ?></span>
        <form style="display: inline;" action="/logout" method="post">
            <button style="background-color: transparent; border: 0; font-weight: bold; color: red; cursor: pointer;" >Salir</button>
        </form>
    <?php endif ?>
</nav>