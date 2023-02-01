<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="shortcut icon" href="assets/favicon/fav-icon.png" type="image/x-icon">
    <title>vianca</title>
</head>
<body>
    <header>
        <div class="nav container">
            <!-- Logo -->
            <a href="#" class="logo">
            </a>
            <!-- Nav Icon -->
            <div class="menu-icon">
                <i class='bx bx-menu'></i>
            </div>
            <!-- Nav Lista -->
            <ul class="navbar">
                <li><a href="#home">Inicio</a></li>
                <li><a href="#services">Servicios</a></li>
                <li><a href="#about">Nosotros</a></li>
                <li><a href="#blog">Blog</a></li>
            </ul>
        </div>
    </header>

    <!-- Home Section -->
    <section class="home-container" id="home">
        <div class=" home container">
            <div class="home-text">
                <h1><span>Creamos brillantes</span> soluciones tecnológicas</h1>
                <p>Déjanos asesorarte y caminemos juntos en tu proceso de transformación digital.</p>
            </div>
            <div class="glowing">
                <span style="--i:1;"></span>
                <span style="--i:2;"></span>
                <span style="--i:3;"></span>
            </div>           
        </div>
    </section>
    <!-- Services section -->
    <section class="services container" id="services">
        <div class="heading">
            <p>Nuestros Servicios</p>
            <span></span>
        </div>
        <div class="services-content">
            <!-- Box-1 -->
            <a href="" class="box box-1">
                <img src="assets/icon/squares-toys.svg" alt="">
                <div class="box-text">
                    <div class="title-services">
                        <p>Software a Medida</p>
                    </div>
                </div>
            </a>
            <!-- Box-2 -->
            <a href="" class="box box-2">
                <img src="assets/icon/marketing.svg" alt="">
                <div class="box-text">
                    <div class="title-services">
                        <p>Estrategias de Marketing Digital</p>
                    </div>
                </div>
            </a>
            <!-- Box-3 -->
            <a href="" class="box box-3">
                <img src="assets/icon/palette-color.svg" alt="">
                <div class="box-text">
                    <div class="title-services">
                        <p>Diseño y Creatividad Publicitaria</p>
                    </div>
                </div>
            </a>
            <!-- Box-4 -->
            <a href="" class="box box-4">
                <img src="assets/icon/rocket.svg" alt="">
                <div class="box-text">
                    <div class="title-services">
                        <p>Posicionamiento Web SEO</p>
                    </div>
                </div>
            </a>
        </div>
    </section>

    <!-- About Section -->
    <section class="about container" id="about">
        <div class="about-img">
            <img src="./assets/img/about-group.svg" alt="">
        </div>
        <div class="about-text">
            <h2>¿Quiénes Somos?</h2>
            <p>
            Somos expertos en desarrollo de software, marketing digital y diseño creativo. Déjanos asesorarte y caminemos juntos en tu proceso de transformación digital.<br>
            </p>
        </div>
    </section>

    <!-- why-us -->
    <section class="why-us">
        <div class="why-us_text container">
            <h2>¿Qué nos hace diferente?</h2>
        </div>
    </section>

    <!-- Newsletter section start -->
    <section class="newsletter">
        <div class="newsletter-content container">
            <div class="newsletter-text">
                <h2>Dejenos tu whatsapp</h2>
                <p>Nosotros nos contactamos contigo.</p>
            </div>
            <form action="" method="get">
                <input type="text" name="" id="" placeholder="Número de Celular" required>
                <input type="submit" value="Enviar" class="btn">
            </form>
        </div>
    </section>

    <!-- Footer -->
    <section class="footer container">
        <div class="footer-box footer-bussines">
            <h3>Grupo Vianca</h3>
            <a href="#about">Nosotros</a>
            <a href="#services">Servicios</a>
            <a href="#">Blog</a>
            <a href="#">Políticas de Privacidad</a>
        </div>
        <div class="footer-box footer-info">
            <h3>Contáctanos:</h3>
            <p>+51 987432961</p>
            <p>grupovianca@gmail.com</p>
            <p>Lima, Perú</p>
            <p>Av. Virreyes S/N</p>
        </div>

        <div class="footer-box footer-social">
            <h3>Síguenos:</h3>
            <div class="social">
                <a href="#"><i class='bx bxl-facebook'></i></a>
                <a href="#"><i class='bx bxl-twitter' ></i></a>
                <a href="#"><i class='bx bxl-instagram' ></i></i></a>
            </div>
        </div>
    </section>

    <!-- Copyright -->
    <div class="copyright">
        <p>Grupo Vianca &#169; Todos los derechos reservados</p>
    </div>
    <!-- Link To JS -->
    <script src="js/main.js"></script>
</body>
</html>