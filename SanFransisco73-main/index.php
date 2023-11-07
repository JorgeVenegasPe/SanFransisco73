<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="resources/css/index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css">
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
    <div class="scrollToTop-btn flex-center">
        <i class="fas fa-arrow-up"></i>
    </div>
    <?php
    require 'views/header.php';
    ?>
    <section class="home" id="home">
        <div class="home-container">
            <div class="info paragraph">
                <p style="--d: 0s; letter-spacing:3px" class="uno">Una herramienta de IA diseñada para saber el tipo de corte según su cráneo</p>
                <h2 style="--d: .1s;" class="dos">Recomendación de cortes de cabello Escaneo craneal <spam >usando IA</spam></h2>
                <a style="--d: .2s;" class="button-signup tres" href="#contacto">Comenzar ahora</a>
                <p style="--d: .3s; letter-spacing:3px" class="uno">7 Días Prueba gratuita | Uso para todos los clientes</p>
            </div>
            <br>
            <a style="--d: .4s;"  href="#nosotros" class="scroll-down ">Scroll Down <i class="fas fa-arrow-down"></i></a>
        </div>
    </section>
    <section class="degrade section-degrade" >
    </section>
    <section class="nosotros flex-center" id="nosotros">
        <div class="nosotros-container">
            <div class="info-nosotros">
                <h2>SAN FRANSISCO 73</h2>
                <h4>San Fransisco 73 <span> Barberia & Salon </span> ubicado en <span> Lima-Peru </span></h4>
                <p>Bienvenidos a San Francisco 73, un lugar donde la tradición se encuentra con la moda. Fundada hace tres años en el corazón de nuestra querida ciudad,
                    esta barbería ha sido un faro para aquellos que buscan más que un simple corte de cabello. San Francisco 73 es un homenaje a la época dorada de la barbería,
                    donde la atención al detalle y la artesanía son fundamentales.
                </p>
            </div>
            <img src="resources/images/empresa2.jpg" alt="">
        </div>

        <div class="nosotros-container">
            <img style="width: 40%;" src="resources/images/empresa.jpg" alt="">
            <div class="info-nosotros">
                <h3>Sobre nosotros</h3>
                <p>
                    En el corazón de nuestra querida ciudad, se encuentra San Francisco '73, una barbería fundada en 2020 por nuestra apasionada líder, Sarah Venegas.
                    Desde entonces, hemos sido un faro para aquellos que buscan algo más que un simple corte de cabello.
                    <br>
                    <br>
                    Sarah, nuestra fundadora, es una auténtica maestra en su oficio, fusionando la habilidad tradicional con las tendencias más modernas. Cada corte es una
                    obra maestra en sí misma, una expresión única de estilo que refleja la personalidad de cada cliente. En San Francisco '73, no solo obtendrás un corte de
                    cabello perfecto, sino que también te sumergirás en una experiencia de estilo inigualable.
                    <br>
                    <br>
                    Nuestra misión es realzar la belleza masculina y elevar la confianza de cada cliente que cruza nuestras puertas. Más que una barbería, somos una comunidad
                    de amantes de la moda y la elegancia.
                    Únete a nuestra comunidad y descubre lo que hace de San Francisco '73 el destino preferido para los amantes de la barbería en nuestra vibrante ciudad.
                    Ofrecemos desde cortes de vanguardia que siguen las últimas tendencias hasta peinados clásicos que nunca pasan de moda. Estamos aquí para ayudarte a lucir y
                    sentirte lo mejor posible en cada paso que das.
                    <br>
                    <br>
                    Ven y déjate mimar en San Francisco '73, donde la tradición se encuentra con la moda de la manera más elegante y auténtica. Nuestra barbería es un refugio de estilo,
                    un lugar donde los hombres pueden descubrir su mejor versión, donde la confianza y el estilo se entrelazan en una experiencia única.
                </p>
            </div>
        </div>
    </section>
    <section class="services section" id="services">
        <div class="container flex-center">
            <h1 class="section-title-01">Servicios</h1>
            <h1 class="section-title-02">Servicios</h1>
            <div class="services-container">
                <article class="card" style="background: url('resources/images/corte-mid-v.jpg') center no-repeat;background-size:100%;">
                    <div class="card__body">
                        <h2 class="card__title">Corte</h2>
                        <p style="padding: 0 30px;">
                            En San Fransisco 73, ofrecemos una amplia gama de cortes, desde los estilos clásicos atemporales hasta las tendencias más modernas. Disfrute de un servicio de calidad y salga con un aspecto fresco y confiado en cada visita."
                        </p>
                        <br>
						<a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <article class="card" style="background: url('resources/images/pintado.jpg') center no-repeat;background-size:100%;">
                    <div class="card__body">
                        <h2 class="card__title">Peinado</h2>
                        <p>
                        En San Fransisco 73,ofrecemos una amplia gama de opciones para su cabello. Desde peinados ondulados que añaden un toque romántico hasta texturas y tintes que transforman su aspecto. Nuestros estilistas expertos están listos para ayudarle a resaltar su belleza única.
                        </p>
                        <br>
						<a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <article class="card" style="background: url('resources/images/facial.jpg') center no-repeat;background-size:100%;">
                    <div class="card__body">
                        <h2  class="card__title">Facial</h2>
                        <p>
                        En San Fransisco 73, le invitamos a experimentar la indulgencia y el cuidado que su piel merece. Nuestros tratamientos faciales están diseñados para proporcionarle una experiencia relajante y efectiva.
                        </p>
                        <br>
						<a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <article class="card" style="background: url('resources/images/ondulado.jpg') center no-repeat;background-size:120%;">
                    <div class="card__body">
                        <h2 class="card__title">Spa</h2>
                        <p>
                        "En San Fransisco 73, ofrecemos una experiencia de belleza integral. Nuestros servicios de spa incluyen cuidado de uñas, pestañas y cejas para realzar su belleza natural. Nuestros expertos estilistas y técnicos de uñas trabajan juntos para brindarle un tratamiento relajante y rejuvenecedor."
                        </p>
                        <br>
						<a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <section class="degrade section-degrade reverse" >
    </section>
    <section class="reserva section" id="reserva">
        <div class="service-list flex-center">
            <div class="service-card">
                <i class="fa-solid fa-location-dot"></i>
                <h3 style="letter-spacing:3px">Locales</h3>
                <p style="letter-spacing:2px">Contamos con más de 7 locales en todo Lima Metropolitana</p>
                <div class="learn-more-btn">Ver ubicaciones<i class="fas fa-long-arrow-alt-right"></i></div>
            </div>
            <div class="service-card">
                <i class="fa-solid fa-paper-plane"></i>
                <h3 style="letter-spacing:3px">Reservas</h3>
                <p style="letter-spacing:2px">Genera un cita virtual hoy y asiste sin problemas a nuestros locales.</p>
                <div class="learn-more-btn">Reservar un cita<i class="fas fa-long-arrow-alt-right"></i></div>
            </div>
            <div class="service-card">
                <i class="fa-solid fa-calendar"></i>
                <h3 style="letter-spacing:3px">Horarios de atención</h3>
                <p style="letter-spacing:2px">
                    Lun - Sab 10 am a 8:30 pm
                <br>
                    Domingos 11 am a 5:30 pm
                </p>
                <div class="learn-more-btn">Contactanos<i class="fas fa-long-arrow-alt-right"></i></div>
            </div>
        </div>
    </section>
    <?php
    require 'views/footer.php';
    ?>
    <script src="resources/js/main.js"></script>
</body>
</html>