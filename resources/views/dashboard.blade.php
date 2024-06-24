<x-app-layout>
     @section('content')
        <!--Start Main Slider -->
        <section class="main-slider main-slider-one">
            <div class="main-slider-one__inner">
                <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel nav-style1 dot-style1"
                    data-owl-options='{
                            "loop": true,
                            "autoplay": true,
                            "animateOut": "slideOutDown",
                            "animateIn": "fadeIn",
                            "margin": 0,
                            "nav": true,
                            "dots": true,
                            "smartSpeed": 500,
                            "autoplayTimeout": 10000,
                            "navText": ["<span class=\"icon-arrow-right1\"></span>","<span class=\"icon-arrow-right\"></span>"],
                            "responsive": {
                                    "0": {
                                        "items": 1
                                    },
                                    "768": {
                                        "items": 1
                                    },
                                    "992": {
                                        "items": 1
                                    },
                                    "1200": {
                                        "items": 1
                                    }
                                }
                            }'>

                    <!--Inicio Slider Principal Uno-->
                    <div class="main-slider-one__single">
                        <div class="image-layer" style="background-image:url({{ asset('assets/images/slides/slider-v1-img1.jpg')}})">
                        </div>
                        <div class="shape1"><img src="{{ asset('assets/images/shapes/main-slider-v1-shape1.png')}}" alt="#"></div>
                        <div class="shape2"><img src="{{ asset('assets/images/shapes/main-slider-v1-shape2.png')}}" alt="#"></div>

                        <div class="container">
                            <div class="main-slider-one__content">
                                <div class="tagline">
                                    <span>Fundación Dios es Bueno, Fiel y Justo</span>
                                </div>
                                <div class="title">
                                    <h2>¡Unidos por un Ecuador <br> más solidario!</h2>
                                </div>

                                <div class="text">
                                    <p>Juntos podemos hacer la diferencia. <br> Ayuda a transformar vidas y construir un futuro mejor.</p>
                                </div>

                                <div class="btn-box">
                                    <a class="thm-btn" href="{{ route('donaciones') }}">
                                        <span class="txt">Donar Ahora</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Fin Slider Principal Uno-->

                    <!--Inicio Slider Principal Uno-->
                    <div class="main-slider-one__single">
                        <div class="image-layer" style="background-image:url({{ asset('assets/images/slides/slider-v1-img2.jpg')}})">
                        </div>
                        <div class="shape1"><img src="{{ asset('assets/images/shapes/main-slider-v1-shape1.png')}}" alt="#"></div>
                        <div class="shape2"><img src="{{ asset('assets/images/shapes/main-slider-v1-shape2.png')}}" alt="#"></div>

                        <div class="container">
                            <div class="main-slider-one__content">
                                <div class="tagline">
                                    <span>Fundación Dios es Bueno, Fiel y Justo</span>
                                </div>
                                <div class="title">
                                    <h2>¡Tu apoyo <br> cambia vidas!</h2>
                                </div>

                                <div class="text">
                                    <p>Con tu ayuda, podemos brindar esperanza y oportunidades a quienes más lo necesitan. <br> ¡Únete a nuestra causa!</p>
                                </div>

                                <div class="btn-box">
                                    <a class="thm-btn" href="#">
                                        <span class="txt">Donar Ahora</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Fin Slider Principal Uno-->

                    <!--Inicio Slider Principal Uno-->
                    <div class="main-slider-one__single">
                        <div class="image-layer" style="background-image:url({{ asset('assets/images/slides/slider-v1-img3.jpg')}})">
                        </div>
                        <div class="shape1"><img src="{{ asset('assets/images/shapes/main-slider-v1-shape1.png')}}" alt="#"></div>
                        <div class="shape2"><img src="{{ asset('assets/images/shapes/main-slider-v1-shape2.png')}}" alt="#"></div>

                        <div class="container">
                            <div class="main-slider-one__content">
                                <div class="tagline">
                                    <span>Fundación Dios es Bueno, Fiel y Justo</span>
                                </div>
                                <div class="title">
                                    <h2>¡Por un mañana <br> más brillante!</h2>
                                </div>

                                <div class="text">
                                    <p>Nos dedicamos a crear un impacto positivo en nuestras comunidades. <br> ¡Descubre cómo puedes ayudar!</p>
                                </div>

                                <div class="btn-box">
                                    <a class="thm-btn" href="#">
                                        <span class="txt">Donar Ahora</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Fin Slider Principal Uno-->
                </div>
            </div>
        </section>

        <!--End Main Slider-->


        <!--Start Feature One -->
        <section class="feature-one">
            <div class="container">
                <div class="row">
                    <!--Inicio Feature One Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-one__single text-center">
                            <div class="shape2"><img src="{{ asset('assets/images/shapes/feature-v1-shape1.png')}}" alt="#"></div>
                            <div class="shape3"><img src="{{ asset('assets/images/shapes/feature-v1-shape2.png')}}" alt="#"></div>
                            <div class="feature-one__single-icon">
                                <div class="shape1"></div>
                                <span class="icon-donation-1"></span>
                            </div>

                            <div class="feature-one__single-content">
                                <h2>Amigable para Donantes</h2>
                                <p>Facilitamos el proceso de donación <br> para que puedas ayudar con facilidad</p>
                            </div>
                        </div>
                    </div>
                    <!--Fin Feature One Single-->

                    <!--Inicio Feature One Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.2s">
                        <div class="feature-one__single text-center">
                            <div class="shape2"><img src="{{ asset('assets/images/shapes/feature-v1-shape1.png')}}" alt="#"></div>
                            <div class="shape3"><img src="{{ asset('assets/images/shapes/feature-v1-shape2.png')}}" alt="#"></div>
                            <div class="feature-one__single-icon">
                                <div class="shape1 l12"></div>
                                <span class="icon-donation-3"></span>
                            </div>

                            <div class="feature-one__single-content">
                                <h2>Cuidado Médico</h2>
                                <p>Brindamos atención médica <br> a quienes más lo necesitan</p>
                            </div>
                        </div>
                    </div>
                    <!--Fin Feature One Single-->

                    <!--Inicio Feature One Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-one__single text-center">
                            <div class="shape2"><img src="{{ asset('assets/images/shapes/feature-v1-shape1.png')}}" alt="#"></div>
                            <div class="shape3"><img src="{{ asset('assets/images/shapes/feature-v1-shape2.png')}}" alt="#"></div>
                            <div class="feature-one__single-icon">
                                <div class="shape1 style3"></div>
                                <span class="icon-charity-food"></span>
                            </div>

                            <div class="feature-one__single-content">
                                <h2>Alimentos Saludables</h2>
                                <p>Proveemos comida nutritiva <br> para mejorar la salud de nuestra comunidad</p>
                            </div>
                        </div>
                    </div>
                    <!--Fin Feature One Single-->
                </div>
            </div>
        </section>

        <!--End Feature One -->

        <!--Start About One -->
        <section class="about-one">
            <div class="shape5 float-bob-y"><img src="{{ asset('assets/images/shapes/about-v1-shape3.png')}}" alt="#"></div>
            <div class="container">
                <div class="row">
                    <!--Inicio About One Content-->
                    <div class="col-xl-7">
                        <div class="about-one__content">
                            <div class="sec-title">
                                <div class="sec-title__tagline">
                                    <h6>Conoce Nuestra Fundación</h6>
                                </div>
                                <h2 class="sec-title__title">Reten y Haz Crecer <br> Tu Base de Donantes</h2>
                            </div>
                            <div class="about-one__content-text">
                                <p>Estamos dedicados a hacer de Ecuador un lugar mejor. <br> Descubre cómo puedes ayudar a transformar vidas.</p>
                            </div>
                            <div class="about-one__content-bottom">
                                <div class="row">
                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="about-one__content-bottom-left">
                                            <div class="single-box">
                                                <div class="inner">
                                                    <div class="icon-box">
                                                        <div class="shape1"></div>
                                                        <span class="icon-donation-4"></span>
                                                    </div>

                                                    <div class="content-box">
                                                        <h2>Recaudación de Fondos</h2>
                                                        <p>Organizamos eventos para apoyar <br> diversas causas en nuestra comunidad</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="single-box mb0">
                                                <div class="inner">
                                                    <div class="icon-box">
                                                        <div class="shape1"></div>
                                                        <span class="icon-donation-1"></span>
                                                    </div>

                                                    <div class="content-box">
                                                        <h2>Hacer una Donación</h2>
                                                        <p>Tu contribución puede hacer una gran diferencia <br> en la vida de alguien</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <ul class="about-one__content-bottom-left-list">
                                                <li>
                                                    <p>Fondos Recaudados para Caridades</p>
                                                </li>
                                                <li>
                                                    <p>Caridades Registradas Apoyadas</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>

                                    <div class="col-xl-6 col-lg-6 col-md-6">
                                        <div class="about-one__content-bottom-right">
                                            <div class="about-one__helped-fund text-center">
                                                <div class="shape3 float-bob-y"></div>
                                                <div class="about-one__helped-fund-bg"
                                                    style="background-image: url({{ asset('assets/images/backgrounds/about-v1-bg.png')}});">
                                                </div>
                                                <div class="img-box">
                                                    <div class="inner">
                                                        <img src="{{ asset('assets/images/about/about-v1-img1.jpg')}}" alt="#">
                                                    </div>
                                                    <div class="shape2 rotate-me"><img src="{{ asset('assets/images/shapes/about-v1-shape1.png')}}" alt="#">
                                                    </div>
                                                </div>

                                                <div class="content-box">

                                                    <p>Ayudando a cumplir deseos en todo el mundo</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Fin About One Content-->

                    <!--Inicio About One Img-->
                    <div class="col-xl-5">
                        <div class="about-one__img">
                            <div class="about-one__img-inner">
                                <div class="shape4"><img src="{{ asset('assets/images/shapes/about-v1-shape2.png')}}" alt="#"></div>
                                <img src="{{ asset('assets/images/about/about-v1-img2.jpg')}}" alt="#">
                            </div>
                        </div>
                    </div>
                    <!--Fin About One Img-->
                </div>

                <div class="about-one__bottom">
                    <div class="about-one__bottom-inner">
                        <div class="about-one__bottom-content">
                            <div class="icon-box">
                                <span class="icon-donation-2"></span>
                            </div>

                            <div class="text-box">
                                <h2>Desde 2020, hemos concedido más de <br> 1200 deseos en todo el mundo.</h2>
                            </div>
                        </div>

                        <div class="about-one__bottom-btn">
                            <a class="thm-btn" href="{{ route('about') }}">
                                <span class="txt">Conoce Más Sobre Nosotros</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--End About One -->

        <!--Start Case One -->
        <section class="case-one">
            <div class="case-one__bg" style="background-image: url({{ asset('assets/images/backgrounds/case-v1-bg.jpg')}});"></div>
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sec-title__tagline">
                        <h6>Comienza a ayudarles</h6>
                    </div>
                    <h2 class="sec-title__title">Explora Estas Causas</h2>
                </div>
                <div class="row">
                    <!--Inicio Caso Uno-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="case-one__single">
                            <div class="case-one__single-img">
                                <div class="inner">
                                    <img src="{{ asset('assets/images/resources/case-v1-img1.jpg')}}" alt="#">
                                </div>
                                <div class="text-box">
                                    Alimentos
                                </div>
                            </div>

                            <div class="case-one__single-content">
                                <div class="inner">
                                    <div class="case-one__single-content-bg"
                                        style="background-image: url({{ asset('assets/images/shapes/case-v1-shape1.png')}});"></div>
                                    <h2><a href="{{ route('donaciones') }}">Ayúdanos a tocar las vidas <br> de estos jóvenes</a></h2>
                                    <p>Tu ayuda puede cambiar la vida de muchos <br> jóvenes en necesidad.</p>
                                </div>
                                <div class="case-one__progress">
                                    <div class="case-one__progress-box">
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="1%">
                                                <div class="count-text">1%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom-text">
                                        <div class="left-text">
                                            <p>$120 <span>Recaudados</span></p>
                                        </div>
                                        <div class="right-text">
                                            <p>1% de $12.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Fin Caso Uno-->

                    <!--Inicio Caso Uno-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInLeft" data-wow-delay="100ms" data-wow-duration="1000ms">
                        <div class="case-one__single">
                            <div class="case-one__single-img">
                                <div class="inner">
                                    <img src="{{ asset('assets/images/resources/case-v1-img2.jpg')}}" alt="#">
                                </div>
                                <div class="text-box">
                                    Caridad
                                </div>
                            </div>

                            <div class="case-one__single-content">
                                <div class="inner">
                                    <div class="case-one__single-content-bg"
                                        style="background-image: url({{ asset('assets/images/shapes/case-v1-shape1.png')}});"></div>
                                    <h2><a href="{{ route('donaciones') }}">No más hambre <br> No dejemos a nadie atrás</a></h2>
                                    <p>Juntos podemos erradicar el hambre y <br> brindar apoyo a los más necesitados.</p>
                                </div>
                                <div class="case-one__progress">
                                    <div class="case-one__progress-box">
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="1%">
                                                <div class="count-text">1%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom-text">
                                        <div class="left-text">
                                            <p>$18 <span>Recaudados</span></p>
                                        </div>
                                        <div class="right-text">
                                            <p>1% de $10.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Fin Caso Uno-->

                    <!--Inicio Caso Uno-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1000ms">
                        <div class="case-one__single">
                            <div class="case-one__single-img">
                                <div class="inner">
                                    <img src="{{ asset('assets/images/resources/case-v1-img3.jpg')}}" alt="#">
                                </div>
                                <div class="text-box">
                                    Salud
                                </div>
                            </div>

                            <div class="case-one__single-content">
                                <div class="inner">
                                    <div class="case-one__single-content-bg"
                                        style="background-image: url({{ asset('assets/images/shapes/case-v1-shape1.png')}});"></div>
                                    <h2><a href="{{ route('donaciones') }}">Comparte tus bendiciones <br> con los niños</a></h2>
                                    <p>Brinda salud y esperanza a los niños <br> necesitados.</p>
                                </div>
                                <div class="case-one__progress">
                                    <div class="case-one__progress-box">
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="1%">
                                                <div class="count-text">1%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom-text">
                                        <div class="left-text">
                                            <p>$150 <span>Recaudados</span></p>
                                        </div>
                                        <div class="right-text">
                                            <p>7% de $21.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Fin Caso Uno-->

                    <!--Inicio Caso Uno-->
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="1000ms">
                        <div class="case-one__single">
                            <div class="case-one__single-img">
                                <div class="inner">
                                    <img src="{{ asset('assets/images/resources/case-v1-img4.jpg')}}" alt="#">
                                </div>
                                <div class="text-box">
                                    Médico
                                </div>
                            </div>

                            <div class="case-one__single-content">
                                <div class="inner">
                                    <div class="case-one__single-content-bg"
                                        style="background-image: url({{ asset('assets/images/shapes/case-v1-shape1.png')}});"></div>
                                    <h2><a href="#">Apoya la intervención <br> temprana para niños</a></h2>
                                    <p>Tu apoyo puede hacer la diferencia en la vida de <br> un niño con necesidades médicas.</p>
                                </div>
                                <div class="case-one__progress">
                                    <div class="case-one__progress-box">
                                        <div class="bar">
                                            <div class="bar-inner count-bar" data-percent="1%">
                                                <div class="count-text">1%</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="bottom-text">
                                        <div class="left-text">
                                            <p>$250 <span>Recaudados</span></p>
                                        </div>
                                        <div class="right-text">
                                            <p>1% de $25.000</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Fin Caso Uno-->
                </div>
            </div>
        </section>

        <!--End Case One -->



        <!--Start Counter One -->
        <section class="counter-one">
            <div class="shape1 float-bob-y">
                <img src="{{ asset('assets/images/shapes/counter-v1-shape4.png')}}" alt="#">
            </div>
            <div class="container">
                <div class="row">
                    <!--Start Counter One Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.1s">
                        <div class="counter-one__single">
                            <div class="counter-one__single-top">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/shapes/counter-v1-shape1.png')}}" alt="#">
                                </div>
                                <div class="text-box">
                                    <h2><span class="odometer" data-count="1">00</span></h2>
                                </div>
                            </div>

                            <div class="counter-one__single-bottom">
                                <p>Organizaciones Benéficas Registradas</p>
                            </div>
                        </div>
                    </div>
                    <!--End Counter One Single-->

                    <!--Start Counter One Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.2s">
                        <div class="counter-one__single">
                            <div class="counter-one__single-top">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/shapes/counter-v1-shape2.png')}}" alt="#">
                                </div>
                                <div class="text-box">
                                    <h2><span class="dollar">$</span><span class="odometer" data-count="550">00</span><span class="m"></span></h2>
                                </div>
                            </div>

                            <div class="counter-one__single-bottom">
                                <p>Fondos Recaudados para Organizaciones Benéficas</p>
                            </div>
                        </div>
                    </div>
                    <!--End Counter One Single-->

                    <!--Start Counter One Single-->
                    <div class="col-xl-4 col-lg-4 wow animated fadeInUp" data-wow-delay="0.3s">
                        <div class="counter-one__single">
                            <div class="counter-one__single-top">
                                <div class="img-box">
                                    <img src="{{ asset('assets/images/shapes/counter-v1-shape3.png')}}" alt="#">
                                </div>
                                <div class="text-box">
                                    <h2><span class="odometer" data-count="10">00</span><span class="m"></span></h2>
                                </div>
                            </div>

                            <div class="counter-one__single-bottom">
                                <p>Usuarios que están Haciendo la Diferencia</p>
                            </div>
                        </div>
                    </div>
                    <!--End Counter One Single-->
                </div>
            </div>
        </section>

        <!--End Counter One -->

        <!--Start Feature Two -->
        <section class="feature-two">
            <div class="container">
                <div class="row">
                    <!--Inicio de la imagen del Feature-->
                    <div class="col-xl-6">
                        <div class="feature-two__img">
                            <div class="shape2 float-bob-y">
                                <img src="{{ asset('assets/images/shapes/feature-v2-shape2.png')}}" alt="#">
                            </div>
                            <div class="feature-two__img1 clearfix">
                                <div class="shape1">
                                    <img src="{{ asset('assets/images/shapes/feature-v2-shape1.png')}}" alt="#">
                                </div>
                                <img src="{{ asset('assets/images/resources/feature-v2-img1.jpg')}}" alt="#">
                            </div>
                            <div class="feature-two__img2 wow fadeInRight" data-wow-delay="100ms" data-wow-duration="2500ms">
                                <div class="inner">
                                    <img src="{{ asset('assets/images/resources/feature-v2-img2.jpg')}}" alt="#">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Fin de la imagen del Feature-->

                    <!--Inicio del Contenido del Feature-->
                    <div class="col-xl-6">
                        <div class="feature-two__content">
                            <div class="sec-title">
                                <div class="sec-title__tagline">
                                    <h6>¡Haz la diferencia hoy!</h6>
                                </div>
                                <h2 class="sec-title__title">Hay mucho más <br> que podemos hacer juntos</h2>
                            </div>

                            <div class="feature-two__content-text1">
                                <p>En nuestro camino para mejorar el mundo, cada acción cuenta. Únete a nosotros en esta misión
                                    de solidaridad y progreso. Juntos, podemos marcar la diferencia.</p>
                            </div>

                            <div class="feature-two__content-text2">
                                <p>Explora las múltiples formas en que puedes contribuir y participar en nuestro esfuerzo
                                    común. Cada pequeño gesto suma y ayuda a construir un futuro mejor para todos.</p>
                            </div>

                            <div class="feature-two__content-bottom">
                                <div class="feature-two__content-bottom-content">
                                    <div class="top-content">
                                        <div class="icon-box">
                                            <div class="shape3"></div>
                                            <span class="icon-charity"></span>
                                        </div>
                                        <div class="text-box">
                                            <h2><span class="dollar">$ </span><span class="odometer" data-count="550.00"> 00</span><span
                                                    class="plus"> </span></h2>
                                            <p>Donaciones Desde 2020</p>
                                        </div>
                                    </div>

                                    <div class="btn-box">
                                        <a class="thm-btn" href="{{ route('donaciones') }}">
                                            <span class="txt">Donación Ahora</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="feature-two__content-bottom-img">
                                    <div class="feature-two__content-bottom-img-inner">
                                        <img src="{{ asset('assets/images/resources/feature-v2-img3.jpg')}}" alt="#">
                                        <div class="content-box">
                                            <p>Fondos Ayudados</p>
                                            <h2>$550,00</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Fin del Contenido del Feature-->
                </div>
            </div>
        </section>


        <!--End Feature Two -->

        <!--Start Gallery One -->
        <section class="gallery-one">
            <div class="gallery-one__top">
                <div class="shape1"><img src="{{ asset('assets/images/shapes/gallery-v1-shape1.png')}}" alt="#"></div>
                <div class="shape2"><img src="{{ asset('assets/images/shapes/gallery-v1-shape2.png')}}" alt="#"></div>
                <div class="gallery-one__top__bg"
                    style="background-image: url({{ asset('assets/images/backgrounds/gallery-v1-bg.jpg')}});"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="gallery-one__top-inner text-center">
                                <div class="text-box">
                                    <h2>Apoyamos y empoderamos a niños con enfermedades crónicas y a sus familias
                                        proporcionando servicios compasivos y relevantes en su camino hacia una vida enriquecedora</h2>
                                </div>

                                <div class="btn-box">
                                    <a class="thm-btn" href="{{ route('contactos') }}">
                                        <span class="txt">Sé un Voluntario</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="gallery-one__bottom">
                <div class="auto-container">
                    <div class="row">
                        <!--Start Gallery One Single-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.1s">
                            <div class="gallery-one__single">
                                <div class="gallery-one__single-img">
                                    <img src="{{ asset('assets/images/gallery/gallery-v1-img1.jpg')}}" alt="#">
                                    <div class="text-box">
                                        <h2><a href="{{ route('donaciones') }}">Recaudación de Fondos</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Gallery One Single-->

                        <!--Start Gallery One Single-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.2s">
                            <div class="gallery-one__single">
                                <div class="gallery-one__single-img bg2">
                                    <img src="{{ asset('assets/images/gallery/gallery-v1-img2.jpg')}}" alt="#">
                                    <div class="text-box">
                                        <h2><a href="{{ route('donaciones') }}">Alimentos Frescos</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Gallery One Single-->

                        <!--Start Gallery One Single-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.3s">
                            <div class="gallery-one__single">
                                <div class="gallery-one__single-img bg3">
                                    <img src="{{ asset('assets/images/gallery/gallery-v1-img3.jpg')}}" alt="#">
                                    <div class="text-box">
                                        <h2><a href="{{ route('donaciones') }}">Educación</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Gallery One Single-->

                        <!--Start Gallery One Single-->
                        <div class="col-xl-3 col-lg-6 col-md-6 wow animated fadeInUp" data-wow-delay="0.4s">
                            <div class="gallery-one__single">
                                <div class="gallery-one__single-img bg4">
                                    <img src="{{ asset('assets/images/gallery/gallery-v1-img4.jpg')}}" alt="#">
                                    <div class="text-box">
                                        <h2><a href="{{ route('donaciones') }}">Médico</a></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--End Gallery One Single-->
                    </div>
                </div>
            </div>
        </section>

        <!--End Gallery One -->

        <!--Start Testimonial One -->
        <section class="testimonial-one">
            <div class="auto-container">
                <div class="sec-title text-center">
                    <div class="sec-title__tagline">
                        <h6>Nuestros Testimonios</h6>
                    </div>
                    <h2 class="sec-title__title">Experiencias de Nuestros Clientes</h2>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="testimonial-one__inner">
                            <div class="owl-carousel owl-theme thm-owl__carousel testimonial-one__carousel"
                                data-owl-options='{
                                "loop": true,
                                "autoplay": true,
                                "margin": 30,
                                "nav": false,
                                "dots": false,
                                "smartSpeed": 500,
                                "autoplayTimeout": 10000,
                                "navText": ["<span class=\"icon-left-arrow\"></span>","<span class=\"icon-next\"></span>"],
                                "responsive": {
                                        "0": {
                                            "items": 1
                                        },
                                        "768": {
                                            "items": 1
                                        },
                                        "992": {
                                            "items": 2
                                        },
                                        "1200": {
                                            "items": 3
                                        }
                                    }
                                }'>

                                <!--Start Testimonial One Single-->
                                <div class="testimonial-one__single text-center">
                                    <div class="shape1"> </div>
                                    <div class="shape2"> </div>
                                    <div class="icon-box">
                                        <span class="icon-quote-right"></span>
                                    </div>
                                    <div class="testimonial-one__single-img">
                                    </div>
                                    <div class="author-info">
                                        <h2>Alexandra Orno</h2>
                                        <p>Calle Todd, Alemania</p>
                                    </div>

                                    <div class="text-box">
                                        <p>Estoy encantada con el servicio que recibí de esta empresa. Me ayudaron a
                                            alcanzar mis metas de una manera que nunca creí posible.</p>
                                    </div>
                                </div>
                                <!--End Testimonial One Single-->

                                <!--Start Testimonial One Single-->
                                <div class="testimonial-one__single text-center">
                                    <div class="shape1"> </div>
                                    <div class="shape2"> </div>
                                    <div class="icon-box">
                                        <span class="icon-quote-right"></span>
                                    </div>
                                    <div class="testimonial-one__single-img">

                                    </div>
                                    <div class="author-info">
                                        <h2>Ana Ron Agona</h2>
                                        <p>Calle Sur, Estados Unidos</p>
                                    </div>

                                    <div class="text-box">
                                        <p>¡Increíble! No puedo agradecer lo suficiente a esta empresa por su excelente
                                            trabajo y apoyo. ¡Altamente recomendado!</p>
                                    </div>
                                </div>
                                <!--End Testimonial One Single-->

                                <!--Start Testimonial One Single-->
                                <div class="testimonial-one__single text-center">
                                    <div class="shape1"> </div>
                                    <div class="shape2"> </div>
                                    <div class="icon-box">
                                        <span class="icon-quote-right"></span>
                                    </div>
                                    <div class="testimonial-one__single-img">

                                    </div>
                                    <div class="author-info">
                                        <h2>Mahfuz R.</h2>
                                        <p>Lado Norte, Estados Unidos</p>
                                    </div>

                                    <div class="text-box">
                                        <p>Estoy asombrado por el profesionalismo y la dedicación del equipo. ¡Realmente
                                            hicieron un trabajo excepcional!</p>
                                    </div>
                                </div>
                                <!--End Testimonial One Single-->

                                <!-- Repetir la misma estructura para testimonios adicionales -->

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!--End Testimonial One -->


     @endsection
</x-app-layout>
