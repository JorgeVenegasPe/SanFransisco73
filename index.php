<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet" />
    <link rel="stylesheet" href="resources/css/index.css">
</head>
<body>
    <?php
    require 'views/header.php';
    ?>
    <section class="home" id="home">
        <div class="home-container">
            <div class="info paragraph">
                <p style="--d: 0s;" class="uno">Una herramienta de IA diseñada para saber el tipo de corte según su cráneo</p>
                <h2 style="--d: .1s;" class="dos">Recomendación de cortes de cabello Escaneo craneal <spam>usando IA</spam></h2>
                <a style="--d: .2s;" class="button-signup tres" href="#contacto">Create una cuenta</a>
                <p style="--d: .3s;" class="uno">7 Días Prueba gratuita | Uso para todos los clientes</p>
            </div>
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
                    Nuestra fundadora, Sarah, es una auténtica maestra en su oficio, fusionando la habilidad tradicional con las tendencias más modernas. En San Francisco '73,
                    no solo obtendrás un corte de cabello perfecto, sino que te sumergirás en una experiencia de estilo inigualable. Nuestra misión es realzar la belleza masculina,
                    elevando la confianza de cada cliente.
                <br>
                <br>
                    Únete a nuestra comunidad de moda y descubre lo que hace de San Francisco '73 el destino preferido para los amantes de la barbería en nuestra vibrante ciudad.
                    Desde cortes de vanguardia hasta peinados clásicos, estamos aquí para ayudarte a lucir y sentirte lo mejor posible. Ven y déjate mimar en San Francisco '73,
                    donde la tradición y la moda se entrelazan de la manera más elegante.
                </p>
            </div>
        </div>
    </section>
    <section class="services section" id="servicios">
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
    <section class="Reservas section" id="servicios">
        <div class="container flex-center">
            <h1 class="section-title-01">Servicios</h1>
            <h1 class="section-title-02">Servicios</h1>
            <div class="services-container">
                <article class="card" style="background: url('resources/images/corte-mid-v.jpg') center no-repeat;background-size:120%;">
                    <div class="card__body">
                        <h2 class="card__title">Corte</h2>
                        <p style="padding: 0 30px;">
                            En San Fransisco 73, ofrecemos una amplia gama de cortes, desde los estilos clásicos atemporales hasta las tendencias más modernas. Disfrute de un servicio de calidad y salga con un aspecto fresco y confiado en cada visita."
                        </p>
                        <br>
						<a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <article class="card" style="background: url('resources/images/ondulado.jpg') center no-repeat;background-size:120%;">
                    <div class="card__body">
                        <h2 class="card__title">Peinado</h2>
                        <p>
                        En San Fransisco 73,ofrecemos una amplia gama de opciones para su cabello. Desde peinados ondulados que añaden un toque romántico hasta texturas y tintes que transforman su aspecto. Nuestros estilistas expertos están listos para ayudarle a resaltar su belleza única.
                        </p>
                        <br>
						<a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
                <article class="card" style="background: url('resources/images/corte-mid-v.jpg') center no-repeat;background-size:120%;">
                    <div class="card__body">
                        <h2  class="card__title">Facial</h2>
                        <p>
                        En San Fransisco 73, le invitamos a experimentar la indulgencia y el cuidado que su piel merece. Nuestros tratamientos faciales están diseñados para proporcionarle una experiencia relajante y efectiva.
                        </p>
                        <br>
						<a href="#" class="card-cta" id="enlace">Ver mas &rarr;</a>
                    </div>
                </article>
            </div>
        </div>
    </section>
    <?php
    require 'views/footer.php';
    ?>
</body>
</html>