<!doctype html>
<html lang="en">

<head>
    <title>Reburn</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link
        href="https://fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&display=swap"
        rel="stylesheet">
    <link rel="icon" type=".ico" href="assets/images/favicon.ico" />
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>

<body>

    @include('layouts.navbar')

    <main class="container-fluid p-0">
        @section('content')

            {{-- Banner 1 --}}
            <div class="main-banner" id="top">
                <div class="img-overlay header-text">
                    <div class="caption">
                        <h6>La vida comienza al final de tu zona de confort</h6>
                        <h2>ÚNETE A LA GRAN FAMILIA <em>REBURN GYM</em></h2>
                        <div class="main-button scroll-to-section">
                            <a href="https://wa.me/+529842056758?text=Hola!, Necesito más información, sobre costos y demás"
                                target="_blank">Hazte miembro</a>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Nuestros servicios --}}
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2>Nuestros<em> Servicios</em></h2>
                        <p>Reburn cuenta con las mejores herramientas para mejorar y cumplir tus sueños que tienes
                            sobre
                            tu físico.</p>
                    </div>
                </div>
                <div class="col-12 col-md-5 offset-1 text-justify">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon1.png" alt="program">
                            </div>
                            <div class="right-content">
                                <h4>Aptitud Básica</h4>
                                <p>Herramientas en buena calidad, con sus respectivos cuidados, que esperas para
                                    empezar
                                    con tu rutina.</p>
                                <a href="https://wa.me/+529842056758?text=Hola! Necesito más información"
                                    class="text-button" target="_blank">Más información</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon2.png" alt="program">
                            </div>
                            <div class="right-content">
                                <h4>Nuevo entrenamiento de gimnasio</h4>
                                <p>Contamos con nuevos entrenamiento que en estos momentos causa furor en los
                                    centros
                                    deportivos, una rutina Hiit que se presenta como la forma más fácil, asequible y
                                    eficaz de ponerse en forma, perder peso y definir la silueta. Todo en 45 minutos
                                    y
                                    sin sufrir.</p>
                                <a href="https://wa.me/+529842056758?text=Hola!, Necesito más información"
                                    class="text-button" target="_blank">Más información</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon3.png" alt="program">
                            </div>
                            <div class="right-content">
                                <h4>Curso Muscular Avanzado</h4>
                                <p>Tenemos el orgullo de presentar un seminario avanzado de reequilibración
                                    tónico-postural, en base al concepto de cadenas musculares GDS, dirigido a
                                    entrenadores.</p>
                                <a href="https://wa.me/+529842056758?text=Hola!, Necesito más información"
                                    class="text-button" target="_blank">Más información</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-5 text-justify">
                    <ul class="features-items">
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon4.png" alt="program">
                            </div>
                            <div class="right-content">
                                <h4>Curso musculación estética</h4>
                                <p> El objetivo es el desarrollo muscular a nivel hipertrófico, de definición
                                    muscular,
                                    simetría corporal y la máxima reducción posible de grasa corporal.</p>
                                <a href="https://wa.me/+59842056758?text=Hola!, Necesito más información"
                                    class="text-button" target="_blank">Más información</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon5.png" alt="program">
                            </div>
                            <div class="right-content">
                                <h4>Entrenamiento de yoga</h4>
                                <p>Contamos con especialistas que te conectan con el cuerpo, la respiración y la
                                    mente.
                                    Esta práctica utiliza posturas físicas, ejercicios de respiración y meditación
                                    para
                                    mejorar la salud general. </p>
                                <a href="https://wa.me/+52529842056758?text=Hola!, Necesito más información"
                                    class="text-button" target="_blank">Más información</a>
                            </div>
                        </li>
                        <li class="feature-item">
                            <div class="left-icon">
                                <img src="assets/images/features-first-icon6.png" alt="program">
                            </div>
                            <div class="right-content">
                                <h4>Curso de musculación</h4>
                                <p>Contamos con un instructor de fitness que se encarga de dirigir e instruir a las
                                    personas sobre los diferentes ejercicios y actividades de acondicionamiento
                                    físico.
                                    Sus responsabilidades y funciones pueden variar de acuerdo al área en el cual se
                                    haya especializado</p>
                                <a href="https://wa.me/+529842056758?text=Hola!, Necesito más información"
                                    class="text-button" target="_blank">Más información</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>

            {{-- Banner 2 --}}
            <div class="row section" id="call-to-action">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-10 offset-lg-1">
                            <div class="cta-content">
                                <h2>¡NO LO<em> PIENSES MÁS</em> EMPIEZA<em> HOY!</em>!</h2>
                                <p>Busca la actividad que va contigo.</p>
                                <div class="main-button scroll-to-section">
                                    <a href="https://wa.me/+529842056758?text=Hola!%20deceo%20ser%20miembro%20por%20favor."
                                        target="_blank">Hazte miembro</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Nuestros espacios y ambientes --}}
            <section class="section" id="our-halls">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-lg-3">
                            <div class="section-heading">
                                <h2>Nuestro <em>Espacio</em></h2>
                                <p>No te preocupes si no sabes que espacio ocupar o por donde empezar, nuestro espacio se
                                    adapta
                                    a usted.</p>
                            </div>
                        </div>
                    </div>
                    <div class="row" id="tabs">
                        <div class="col-lg-4 mb-5">
                            <ul>
                                <li>
                                    <a href='#tabs-1'><img src="assets/images/tabs-first-icon.png" alt="classes">Equipo
                                        adecuado</a>
                                </li>
                                <li>
                                    <a href='#tabs-2'><img src="assets/images/tabs-first-icon.png"
                                            alt="classes">Espacios
                                        seguros</a>
                                </li>
                                <li>
                                    <a href='#tabs-3'><img src="assets/images/tabs-first-icon.png"
                                            alt="classes">Ambiente
                                        agradable</a>
                                </li>
                                <li>
                                    <a href='#tabs-4'><img src="assets/images/tabs-first-icon.png"
                                            alt="classes">Personal
                                        capacitado</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-8">
                            <section class='tabs-content'>
                                <article id='tabs-1'>
                                    <img src="assets/images/halls/halls-1.jpg" alt="First hall">
                                    <h4>Primera sala Aptitud básica</h4>
                                    <p>Contamos con una sala aptamente libre con sus herramientas para principiantes en el
                                        mundo
                                        del Gym</p>
                                    <div class="main-button">
                                        <a href="#schedule">Ver Horario</a>
                                    </div>
                                </article>
                                <article id='tabs-2'>
                                    <img src="assets/images/halls/halls-2.jpg" alt="Second hall">
                                    <h4>Segundo salón Curso Muscular Avanzado</h4>
                                    <p>Segunda sala para musculos avanzados, esta sla cuenta con seguridad, herramientas
                                        para
                                        dicho ejercico y mucho mas.</p>
                                    <div class="main-button">
                                        <a href="#schedule">Ver Horario</a>
                                    </div>
                                </article>
                                <article id='tabs-3'>
                                    <img src="assets/images/halls/halls-3.jpg" alt="Third hall">
                                    <h4>Entrenamiento de yoga</h4>
                                    <p>Salon especialmente para conectar el cuerpo con los sentidos y ir mas a profundo de
                                        meditacion, espcio limpio y silencio.</p>
                                    <div class="main-button">
                                        <a href="#schedule">Ver Horario</a>
                                    </div>
                                </article>
                                <article id='tabs-4'>
                                    <img src="assets/images/halls/halls-4.jpg" alt="Fourth hall">
                                    <h4>Curso Musculación Estética</h4>
                                    <p>Este salon es para medir tu masa uscular y hacer estudios sobre tus resultados que se
                                        llevana travez de los ejrcicios y cursos.</p>
                                    <div class="main-button">
                                        <a href="#schedule">Ver Horario</a>
                                    </div>
                                </article>
                            </section>
                        </div>
                    </div>
                </div>
            </section>

            <hr>

            {{-- carrusel de testimonios --}}
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-heading">
                        <h2><em>Lo que opinan de nosotros</em></h2>
                        <p>Porque no brindamos solo un espacio, brindamos experiencias, momentos, sueños, calidad de vida,
                            por
                            ello no simporta lo que nuestra familia expresa de nosotros.</p>
                    </div>
                </div>
            </div>
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">

                        <div class="row">
                            <div class="col-4 offset-2">
                                <figure class="testimonial">
                                    <blockquote>Desde que llegué a REBURN, me hicieron sentir como una más en esa gran
                                        familia
                                        que
                                        han
                                        creado en sus instalaciones, siempre pendientes de estar a la última en las
                                        actividades,
                                        pero
                                        sin duda lo mejor de este gimnasio es el equipo humano que lo forma estando
                                        pendientes
                                        de
                                        todos
                                        y cada uno de aquellos que visiten sus instalaciones
                                    </blockquote>
                                    <img src="assets/images/testimonials/testimonial-avatar-1.jpg" alt="testimonial">
                                    <div class="peopl">
                                        <h3>Alicia G.</h3>
                                        <p class="indentity">Fitness Jr.</p>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-4">
                                <figure class="testimonial">
                                    <blockquote>Unas instalaciones de lo mas completas, gran variedad de clases y
                                        actividades.
                                        Tiene
                                        horaios y espacio muy flexibles, lo cual te permite entrenar en casi cualquier
                                        momento.
                                        Te
                                        asesoran en nutrición, te planifican entrenamientos completos y te ayudan a
                                        conseguir
                                        tus
                                        objetivos. Además disponen de sauna!
                                    </blockquote>
                                    <img src="assets/images/testimonials/testimonial-avatar-2.jpg" alt="testimonial">
                                    <div class="peopl">
                                        <h3>Daniel A.C.</h3>
                                        <p class="indentity">Warrior Star.</p>
                                    </div>
                                </figure>
                            </div>

                        </div>
                    </div>
                    <div class="carousel-item" data-bs-interval="5000">
                        <div class="row">
                            <div class="col-4 offset-2">
                                <figure class="testimonial">
                                    <blockquote>Es raro, hoy en día, encontrar un gimnasio cuyos monitores estén pendientes
                                        de ti
                                        seas
                                        cliente habitual o solo de paso. Que sepan recomendarte una dieta o aconsejarte
                                        sobre
                                        nutrición.
                                        Las
                                        instalaciones tienen variedad de maquinas y bancos para que no tengas que estar
                                        para
                                        esperando
                                        hacer tus ejercicios.
                                    </blockquote>
                                    <img src="assets/images/testimonials/testimonial-avatar-4.jpg" alt="testimonial">
                                    <div class="peopl">
                                        <h3>Erick J.P.</h3>
                                        <p class="indentity">Diamond Warrior.</p>
                                    </div>
                                </figure>
                            </div>
                            <div class="col-4">
                                <figure class="testimonial">
                                    <blockquote>Llevo dos años entrenando en el gimnasio REBURN durante mis vacaciones y
                                        estoy
                                        encantado. Tienen todo lo que necesitas para entrenar (sin florituras innecesarias)
                                        y un
                                        montón
                                        de clases colectivas. Y lo mejor de todo es el trato y el buen asesoramiento que te
                                        dan
                                        desde el
                                        minuto 1. Se nota la experiencia de muchos años.
                                    </blockquote>
                                    <img src="assets/images/testimonials/testimonial-avatar-3.jpg" alt="testimonial">
                                    <div class="peopl">
                                        <h3>Sebastian C</h3>
                                        <p class="indentity">Advanced Ninja.</p>
                                    </div>
                                </figure>

                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon bg-dark" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon bg-dark" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            {{-- fin de carrusel --}}
        @show
    </main>

    @include('layouts.footer')

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
</script>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
    crossorigin="anonymous"></script>
<script src="{{ asset('assets/js/js.js') }}"></script>

</html>
