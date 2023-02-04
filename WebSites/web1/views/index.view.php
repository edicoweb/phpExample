<!DOCTYPE html>
<html lang="es">
<!-- Head -->
<?php require 'head.php';?>
<body>
    <!-- Header menú-->
    <?php require 'header.php'; ?>
    <!-- Home Section -->
    <section class="home-container" id="home">
        <div class=" home container">
            <div class="home-text">
                <h1>Creamos soluciones <span> tecnológicas </span> a tu medida</h1>
                <p>Déjanos asesorarte y caminemos juntos en tu proceso de transformación digital.</p>
            </div>
            <div class="glowing">
                <span style="--i:1;"></span>
                <span style="--i:2;"></span>
                <span style="--i:3;"></span>
            </div>           
        </div>
        <img src="assets/img/img2.png" alt="">
    </section>
    <!-- Services section -->
    <section class="services container" id="services">
        <div class="heading">
            <p>Nuestros Servicios</p>
            <span></span>
        </div>
        <div class="services-content">
            <!-- Box-1 -->
            <div href="" class="box box-1">
                <img src="assets/icon/squares-toys.svg" alt="">

                <div class="box-text">
                    <div class="title-services">
                        <p>Desarrollo Web</p>
                    </div>
                    <p class="text-services">Desarrollamos activos digitales alineados a tu estrategia y orientados a tus objetivos.</p>
                    <div class="item-services">
                        <p><i class='bx bxs-check-circle'></i>Desarrollo Web</p>
                        <p><i class='bx bxs-check-circle'></i>Diseño Web</p>
                        <p><i class='bx bxs-check-circle'></i>Landing Pages</p>
                        <p><i class='bx bxs-check-circle'></i>eCommerce</p>
                    </div>
                </div>
            </div>
            <!-- Box-2 -->
            <div href="" class="box box-2">
                <img src="assets/icon/marketing.svg" alt="">

                <div class="box-text">
                    <div class="title-services">
                        <p>Marketing Digital</p>
                    </div>
                    <p class="text-services">Te ayudamos a alcanzar tus objetivos a través de la optimización de tus canales digitales.</p>
                    <div class="item-services">
                        <p><i class='bx bxs-check-circle'></i>Inbound Marketing</p>
                        <p><i class='bx bxs-check-circle'></i>Social Media</p>
                        <p><i class='bx bxs-check-circle'></i>Content Marketing</p>
                        <p><i class='bx bxs-check-circle'></i>SEO</p>
                    </div>
                </div>
            </div>
            <!-- Box-3 -->
            <div href="" class="box box-3">
                <img src="assets/icon/palette-color.svg" alt="">

                <div class="box-text">
                    <div class="title-services">
                        <p>Content Lab</p>
                    </div>
                    <p class="text-services">Creamos contenidos impactantes para tu marca con el objetivo de conectar con tu audiencia.</p>
                    <div class="item-services">
                        <p><i class='bx bxs-check-circle'></i>Diseño Gráfico</p>
                        <p><i class='bx bxs-check-circle'></i>Redacción SEO</p>
                        <p><i class='bx bxs-check-circle'></i>Video</p>
                        <p><i class='bx bxs-check-circle'></i>Fotografía Publicitaria</p>
                    </div>
                </div>
            </div>
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
            Somos expertos en desarrollo de software, marketing digital y diseño creativo. 
            Déjanos asesorarte y caminemos juntos en tu proceso de transformación digital.<br>
            </p>
        </div>
    </section>

    <!-- why-us -->
    <section class="why-us">
        <div class="why-us_text container heading">
            <p>¿Qué nos hace diferente?</p>
            <span></span>
        </div>
        <div class="why-us_cards container">
            <div class="why-us_card">
                <span></span>
                <h2>Servicios Eficientes</h2>
                <p>Trabajamos de la mano con nuestros clientes, siendo parte de su equipo y 
                    conociendo sus necesidades reales, desarrollando relaciones de largo plazo.</p>
            </div>
            <div class="why-us_card">
                <span></span>
                <h2>Ágiles y Flexibles</h2>
                <p>Trabajamos bajo las prácticas de metodologías ágiles nos hace ser un equipo organizado,
                    exigente y siempre en constante feedback con nuestros clientes.</p>
            </div>
            <div class="why-us_card">
                <span></span>
                <h2>Experiencia</h2>
                <p>Nuestro años de experiencia desarrollando soluciones  y
                    nuestro equipo de excelencia nos han hecho EXPERTOS en lo que hacemos.</p>
            </div>
        </div>
    </section>

    <!-- Newsletter section start -->
    <section class="newsletter">
        <div class="newsletter-content container">
            <div class="newsletter-img">
            <img src="assets/img/newsletter.png" alt="">
            </div>
            <div class="newsletter-text">
                <h2>¿Tu marca necesita algo, pero aún no sabes qué?</h2>
                <p>Escríbenos y te ayudamos a descubrir el mejor camino para hacer crecer tu marca.</p>
            </div>
            <a href="" class="btn">Hablemos Ya! <i class='bx bxs-chevrons-right'></i></a>
        </div>
    </section>

    <!-- Footer -->
    <?php require 'footer.php';?>
    <!-- Link To JS -->
    <script src="js/main.js"></script>
</body>
</html>