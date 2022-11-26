<!DOCTYPE html>
<html lang="en">
<?php require 'head.php'; ?>
<body>
    <?php require 'header.view.php'; ?>
    <main>
        <section class="index-container section">
            <div class="index-container-text">
                    <h1>Hola!</h1>
                    <h1>Soy usuario</h1>
                    <p>Me apaciona la comunicación intuitiva, Creo en la creatividad innata y Sé surfear en el océano de internet
                    <span>!Estoy aquí para ayudarte¡</span>
                    </p>
                    <a class="primary-button" href="">Contáctame</a>
            </div>
            <div class="index-container-photo">
                    <img src="img/photo.png" alt="">
            </div>
        </section>

        <section class="qh-section" id="que-hago">
            <div class="qh-container section">
                <div class="qh-container-skills">
                    <div class="skills-card">
                        <span class="icon-1"></span>
                        <h1>Desarrollo Web</h1>
                    </div>
                    <div class="skills-card">
                        <span class="icon-2"></span>
                        <h1>Diseño UI</h1>
                    </div>
                    <div class="skills-card">
                        <span class="icon-3"></span>
                        <h1>Diseño Grafico</h1>
                    </div>
                    <div class="skills-card">
                        <span class="icon-4"></span>
                        <h1>Análisis de datos</h1>
                    </div>
                </div>
                <div class="qh-container-text">
                    <h1>Creamos soluciones tecnológicas a tu medida</h1>
                    <p>Somos expertos en desarrollo de software y aplicaciones móviles. Déjanos asesorarte y caminemos juntos en tu proceso de transformación digital.</p>
                    <a class="primary-button" href="">Mi Portafolio</a>
                </div>
            </div>
        </section>
        <section class="blog-section section" id="blog">
            <a href="<?php echo "blog.php"; ?>">Ver mas posts <i class="fa-solid fa-arrow-right"></i></i></a>
            <div class="blog-container">          
                    <div class="blog-container-text">
                        <h1><a href="<?php echo "post.php"; ?>">Lenovo Tech World</a></h1>
                        <p>
                            Lenovo Tech World es la reunión anual de la contracultura digital, aquellas comunidades que se presentan de una manera crítica de las tecnologías dentro de nuestros mecanismos de desarrollo de la sociedad.
                            <a href=""><i class="fa-solid fa-arrow-right"></i></i> Seguir leendo</a>
                        </p>
                    </div>
                    <div class="blog-container-img">
                        <span>
                        </span>
                        <img src="assets/img/post.png" alt="Lenovo">
                    </div>
            </div>
            <div class="pagination">
                <a href=""> < </a>
                <a href=""> > </a>
            </div>
        </section>

        <section class="form-section" id="contact">   
            <div class="form-container section">
                <h1>¡Cuéntanos tu <span>idea</span>!</h1>
                <form action="" method="post">
                    <div>
                        <label for="name">Nombre:
                        <input type="text" name="name" id="name" class="name">
                        </label>
                        <label for="email">Correo:
                        <input type="text" name="email" id="email" class="email">
                        </label>
                    </div>
                    <label for="message">Mensaje:</label>
                    <textarea name="message" id="message" class="message"></textarea>
                    <button class="primary-button">Enviar</button>
                </form>
            </div>
        </section>
    </main>

<?php require 'footer.view.php'; ?>
</body>
</html>