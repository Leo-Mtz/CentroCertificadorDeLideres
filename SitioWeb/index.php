<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CCL</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500&family=Jost:wght@500;600;700&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0" >
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0" id="navbar">
                <a href="index.php" class="navbar-brand p-0">
                    <h1 class="m-0">CCL</h1>
                    <!-- <img src="img/logo.png" alt="Logo"> -->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="#home" class="nav-item nav-link">Home</a>
                        <a href="#about" class="nav-item nav-link">Acerca de</a>
                        <a href="#servicios" class="nav-item nav-link">Servicios </a>
                        <a href="#graduado" class="nav-item nav-link">Graduados </a>
                        <a href="#contacto" class="nav-item nav-link">Contacto</a>
                    </div>
                    <?php
                        if(!isset($_SESSION['correo'])){
                            echo'<a href="login.php" class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block">Iniciar Sesión</a>';
                        }else{
                            echo '<div class="dropdown">
                            <button class="btn rounded-pill py-2 px-4 ms-3 d-none d-lg-block" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            '.$_SESSION['nombre'].'
                            </button>
                            <ul class="dropdown-menu">
                            <li><button class="dropdown-item" type="button">';
                              if($_SESSION['tipo']==1)echo '<a class="dropdown-item" href="menuA.php">Menú</a>';
                              if($_SESSION['tipo']==2)echo '<a class="dropdown-item" href="menuU.php">Menú</a>';
                              echo '</button></li>
                              <li><button class="dropdown-item" type="button"><a class="dropdown-item" href="logout.php">Cerrar Sesión</a></button></li>
                            </ul>
                          </div>';
                        }   
                     ?>
                </div>
            </nav>

            <div class="container-xxl bg-primary hero-header" id="home">
                <div class="container px-lg-5">
                    <div class="row g-5 align-items-end">
                        <div class="col-lg-6 text-center text-lg-start">
                            <h1 class="text-white mb-4 animated slideInDown">EL MEJOR ORGANISMO CERTIFICADOR DE MÉXICO </h1>
                            <p class="text-white pb-3 animated slideInDown">¡Obtén tu certificación y abre las puertas a nuevas oportunidades! Bienvenido al centro certificador líder que impulsa tu futuro profesional</p>
                            <a href="#about" class="btn btn-secondary py-sm-3 px-sm-5 rounded-pill me-3 animated slideInLeft">Conócenos </a>
                            <a href="#contacto" class="btn btn-light py-sm-3 px-sm-5 rounded-pill animated slideInRight">¡Contáctanos!</a>
                        </div>
                        <div class="col-lg-6 text-center text-lg-start">
                            <img class="img-fluid animated zoomIn" src="img/hero2.png" alt="Imagen promocional">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->

        <!-- 
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="row g-4">
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-mail-bulk text-primary mb-4"></i>
                            <h5 class="mb-3">Digital Marketing</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-search text-primary mb-4"></i>
                            <h5 class="mb-3">SEO & Backlinks</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="feature-item bg-light rounded text-center p-4">
                            <i class="fa fa-3x fa-laptop-code text-primary mb-4"></i>
                            <h5 class="mb-3">Design & Development</h5>
                            <p class="m-0">Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam stet diam sed stet lorem.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         -->


        <!-- Acerca de Start -->
        <div class="container-xxl py-5" id="about" >
            <div class="container py-5 px-lg-5">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <p class="section-title text-secondary">Acerca de Nosotros<span></span></p>
                        <h1 class="mb-5">¿QUIÉNES SOMOS?</h1>
                        <p class="mb-4">Somos un centro de evaluación y certificación de coaching, con una metodología avalada por la Secretaria de Educación Pública (SEP), a través del Consejo Nacional de Normalización y Certificación de Competencias Laborales (CONOCER); que ofrece al empresario, trabajadores, docentes, estudiantes y servidores públicos un alto nivel de competencias para trabajar en el logro de sus objetivos.</p>
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                  Misión 
                                </button>
                              </h2>
                              <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Brindamos acompañamiento en el crecimiento, alineación y equilibrio en todas las areas de las personas bajo una metodología de reconocimiento mundial. Contribuimos al desarrollo personal y profesional en acciones de mejoras a través del coaching, logrando despertar todas las cualidades dormidas y encaminarlas al logro de objetivos.
                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Visión
                                </button>
                              </h2>
                              <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    Ser un centro de evaluación y certificación de coaching de talla mundial, que logre contribuir en el ser humano un alto nivel de excelencia, con altos estándares de calidad, y profesionalismo.                                </div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                  Valores Corporativos
                                </button>
                              </h2>
                              <div id="collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    El centro certificador cuenta con los siguientes valores corporativos donde el cliente es lo más importante.<br>
                                    <ul>
                                        <li>Valores éticos, el mundo está urgido de retomar e incorporar los valores en la vida del ser humano.</li>
                                        <li>Confidencialidad, el secreto profesional es lo más importante para nosotros.</li>
                                        <li>Integridad y coherencia; aplicamos lo que decimos.</li>
                                        <li>Honestidad, el cliente necesita de un acompañamiento responsable, con profesionales que puedan garantizar un excelente trabajo.</li>
                                        <li>Orientación y acompañamiento al logro de objetivos.</li>
                                        <li>Calidad en el servicio, nos esforzamos por brindarle a nuestros clientes la mejor calidad, con los mejores profesionales.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        </div>
                        <!-- About End <div class="col-lg-5">
                            <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/about.png">
                        </div>-->
                    </div>
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <img class="img-fluid wow zoomIn" data-wow-delay="0.5s" src="img/ccl_logo.png">
                    </div>
                </div>
            </div>
        </div>
        <!-- About End -->

        <!-- Estadisticas Start -->
        <div class="container-xxl bg-primary fact py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                        <i class="fa fa-certificate fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">7</h1>
                        <p class="text-white mb-0">Años de experiencia</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-users-cog fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">15</h1>
                        <p class="text-white mb-0">Empresas con las que <br>hemos colaborado </p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-users fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">50</h1>
                        <p class="text-white mb-0">Clientes satisfechos</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-check fa-3x text-secondary mb-3"></i>
                        <h1 class="text-white mb-2" data-toggle="counter-up">10 </h1>
                        <p class="text-white mb-0">Certificaciones impartidas </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- Estadisticas End -->

        <!-- servicios Start -->
        <div class="container-xxl py-5" id="servicios">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span><span></span></p>
                    <h1 class="text-center mb-5">Nuestros Servicios </h1>
                </div>
                <div class="row mt-n2 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="col-12 text-center">
                        <ul class="list-inline mb-5" id="portfolio-flters">
                            <li class="mx-2 active" data-filter="*">Todos</li>
                            <li class="mx-2" data-filter=".first">Certificaciones</li>
                            <li class="mx-2" data-filter=".second">Coaching</li>
                        </ul>
                    </div>
                </div>
                <div class="row g-4 portfolio-container">
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/eco724.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="https://conocer.gob.mx/contenido/publicaciones_dof/EC0724.pdf"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Certificaciones</p>
                                <h5 class="lh-base mb-0">EC0 724 Coaching para la ejecución</a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 portfolio-item first wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/ec12612.jpg" alt="" >
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="https://www.conocer.gob.mx/contenido/publicaciones_dof/2020/EC1261.pdf"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Certificaciones</p>
                                <h5 class="lh-base mb-0">EC1261 Coaching de Finanzas Personales</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/formacion.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="https://www.escuelacoaching.com/que-es-coaching-ser-coach/"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Coaching</p>
                                <h5 class="lh-base mb-0">Formación</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.1s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/capacitacion.png" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="https://www.escuelacoaching.com/que-es-coaching-ser-coach/"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Coaching</p>
                                <h5 class="lh-base mb-0">Capacitación</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.3s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/certificacion.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="https://www.ilce.edu.mx/images/certificaciones/competencias/estandares/EC0204.pdf"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Coaching</p>
                                <h5 class="lh-base mb-0">Certificación</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/sesiones.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="https://www.esneca.com/blog/sesion-coaching-como-es/"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Coaching</p>
                                <h5 class="lh-base mb-0">Sesiones de Coachinng</a>                           
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item second wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/cEmpresarial.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="https://preply.com/es/blog/b2b-que-es-coaching-empresarial/"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <p class="text-primary fw-medium mb-2">Coaching</p>
                                <h5 class="lh-base mb-0">Coaching Empresarial</a>                           
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/conferencia.png" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="https://www.facebook.com/Ceceldirecc"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <h5 class="lh-base mb-0">Conferencias</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 portfolio-item wow fadeInUp" data-wow-delay="0.5s">
                        <div class="rounded overflow-hidden">
                            <div class="position-relative overflow-hidden">
                                <img class="img-fluid w-100" src="img/cHumano.jpg" alt="">
                                <div class="portfolio-overlay">
                                    <a class="btn btn-square btn-outline-light mx-1" href="https://www.edx.org/es/aprende/recursos-humanos-y-capital-humano"><i class="fa fa-link"></i></a>
                                </div>
                            </div>
                            <div class="bg-light p-4">
                                <h5 class="lh-base mb-0">Diseño de cursos de capital humano</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- servicios End -->
        <span></span> 
        <!-- Graduados Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s" id="graduado">
            <div class="container py-5 px-lg-5">
                <p class="section-title text-secondary justify-content-center"><span></span>Testimonios<span></span></p>
                <h1 class="text-center mb-5">¡Qué dicen nuestros graduados!</h1>
                <div class="owl-carousel testimonial-carousel">
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Obtener la certificación de coaching para la ejecución ha sido transformador para mí. Las herramientas y técnicas que aprendí me han permitido mejorar significativamente mi productividad y enfoque. Ahora, no solo logro cumplir mis metas, sino que lo hago de manera más eficiente y con mayor confianza. Recomiendo esta certificación a cualquiera que quiera llevar su capacidad de ejecución al siguiente nivel.</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-1.jpg" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Gabriela Iliana Pérez </h5>
                                <span>2020</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Obtener la certificación de coaching para la ejecución ha sido clave para mi éxito profesional. Las estrategias aprendidas me han permitido gestionar mis proyectos de manera más eficiente y cumplir mis objetivos laborales con mayor eficacia. Esta certificación ha mejorado significativamente mi rendimiento en el trabajo y la forma en que abordo mis tareas diarias. ¡Altamente recomendada!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-2.jpg" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Mauricio Mendoza</h5>
                                <span>2020</span>
                            </div>
                        </div>
                    </div>
                    <div class="testimonial-item bg-light rounded my-4">
                        <p class="fs-5"><i class="fa fa-quote-left fa-4x text-primary mt-n4 me-3"></i>Completar la certificación de coaching ha transformado mi manera de interactuar con mis clientes. He adquirido habilidades clave que me permiten entender mejor sus necesidades y ofrecerles un apoyo más efectivo y personalizado. Gracias a esta certificación, mis sesiones de coaching son ahora más impactantes y valiosas para mis clientes. ¡Altamente recomendada!</p>
                        <div class="d-flex align-items-center">
                            <img class="img-fluid flex-shrink-0 rounded-circle" src="img/testimonial-3.jpg" style="width: 65px; height: 65px;">
                            <div class="ps-4">
                                <h5 class="mb-1">Gerardo Sánchez</h5>
                                <span>2021</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- graduados End -->

        <!-- empresas Start -->
        <div class="container-xxl py-5" id="empresas">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span><span></span></p>
                    <h1 class="text-center mb-5">Empresas e Instituciones con las que Hemos Colaborado </h1>
                </div>
                <div class="mx-auto p-2" style="width: 250px;">
                    <div id="carrusel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active" data-bs-interval="2500">
                            <img src="img/UDEM.png" class="d-block w-100" alt="udem">
                          </div>
                          <div class="carousel-item" data-bs-interval="2500">
                            <img src="img/uicslp.png" class="d-block w-100" alt="UICSLP">
                          </div>
                          <div class="carousel-item">
                            <img src="img/temazcalli.png" class="d-block w-100" alt="Temazcalli" data-bs-interval="2500">
                          </div>
                          <div class="carousel-item">
                            <img src="img/cafeF.png" class="d-block w-100" alt="lafuente" data-bs-interval="2500">
                          </div>
                          <div class="carousel-item">
                            <img src="img/uniM.png" class="d-block w-100" alt="Universidad de matehuala" data-bs-interval="2500">
                          </div>
                          <div class="carousel-item">
                            <img src="img/bachilleres.png" class="d-block w-100" alt="Colegio de Bachilleres" data-bs-interval="2500">
                          </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <!-- empresas End -->

        <!-- avalado Start -->
        <div class="container-xxl bg-primary newsletter py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row justify-content-center">
                    <div class="col-lg-7 text-center">
                        <p class="section-title text-white justify-content-center"><span></span><span></span></p>
                        <h1 class="text-center text-white mb-4">Instituciones Gubernamentales que nos Avalan </h1>
                        <div class="row g-4">
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">  
                                <div class="service-item d-flex flex-column text-center rounded">
                                    <img class="img-fluid w-100" src="img/conocer.png" alt="">
                                    <a class="btn btn-square" href="https://conocer.gob.mx/liga_interes/el-consejo-nacional-de-normalizacion-y-certificacion-de-competencias-laborales/"><i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="service-item d-flex flex-column text-center rounded">
                                    <img class="img-fluid w-100" src="img/sep.png" alt="">
                                    <a class="btn btn-square" href="https://www.gob.mx/sep"><i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                                <div class="service-item d-flex flex-column text-center rounded">
                                    <img class="img-fluid w-100" src="img/STPS.png" alt="">
                                    <a class="btn btn-square" href="https://www.gob.mx/stps"><i class="fa fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--avalado End -->

        <!-- Team Start -->
        <div class="container-xxl py-5">
            <div class="container py-5 px-lg-5">
                <div class="wow fadeInUp" data-wow-delay="0.1s">
                    <p class="section-title text-secondary justify-content-center"><span></span><span></span></p>
                    <h1 class="text-center mb-5">Nuestro Equipo</h1>
                </div>
                <div class="row g-4">
                    <div class="mx-auto p-2" style="width: 390px;" data-wow-delay="0.1s">
                        <div class="team-item bg-light rounded">
                            <div class="text-center border-bottom p-4">
                                <img class="img-fluid rounded-circle mb-4" src="img/grace.jpeg" alt="">
                                <h5>Graciela Hurtado Pérez</h5>
                                <span>Fundadora y Directora</span>
                            </div>
                            <div class="d-flex justify-content-center p-4">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Team End -->
        
        <!--Contact Start-->
        <div class="container py-5 px-lg-5" id="contacto" >
            <div class="wow fadeInUp" data-wow-delay="0.1s">
                <p class="section-title text-secondary justify-content-center"><span></span><span></span></p>
                <h1 class="text-center mb-5">¡Contáctanos!</h1>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <p class="text-center mb-4">LLena los datos y nos contactaeremos contigo lo más pronto posible<br>También puedes mandar mensaje a nuestro WhatsApp Business +52 444-491-2462</a>.</p>
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name" name="nombre">
                                        <label for="name">Tú nombre</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email" name="correo">
                                        <label for="email">Tú correo</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject" name="asunto">
                                        <label for="subject">Asunto</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px" name="mensaje"></textarea>
                                        <label for="message">Mensaje</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3" type="submit" name="enviar">Enviar Mensaje</button>
                                </div>
                                <?php
                                    if(isset($_POST['enviar']) ){
                                        $to = "info@certificacionparalideres.com";
                                        $subject = $_POST['asunto'];

                                        $message = $_POST['mensaje'];

                                        $headers = "MIME-Version: 1.0" . "\r\n";
                                        $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

                                        $headers .= 'From: <'.$_POST['correo'].'>' . "\r\n";                                        

                                        mail($to,$subject,$message,$headers) or die("Error!");

                                        echo '<div class="alert alert-success" role="alert">
                                                <h4 class="alert-heading">¡Muchas gracias por su mensaje!</h4>
                                                <p>Una persona de nuestro equipo se pondra en contacto lo más pronto posible</p>
                                                <hr>
                                                <p class="mb-0">Recuerde que también puede contactarnos en WhatsApp Business: +52 444-491-2462</p>
                                            </div>';
                                    }
                                    ?>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--Contact End-->

        <!-- Footer Start -->
        <div class="container-fluid bg-primary text-light footer wow fadeIn" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Contacto <span></span></p>
                        <p><i class="fa fa-map-marker-alt me-3"></i>Mariano Arista 811, De Tequisquiapan, 78250 San Luis Potosí, S.L.P.
                        </p>
                        <p><i class="fa fa-phone-alt me-3"></i>+52 444 491 2462</p>
                        <p><i class="fa fa-envelope me-3"></i>info@certificacionparalideres.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/Ceceldirecc"><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-outline-light btn-social" href="www.instagram.com/centro.lideres"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://www.youtube.com/@centrocertificadordelidere1300"><i class="fab fa-youtube"></i></a>
                            <a class="btn btn-outline-light btn-social" href="https://mx.linkedin.com/in/ctro-certificador-de-lideres-a9b33422b"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <p class="section-title text-white h5 mb-4">Menú<span></span></p>
                        <a href="index.php" class="btn btn-link">Home</a>
                        <a href="#about" class="btn btn-link">Acerca de</a>
                        <a href="#servicios" class="btn btn-link">Servicios</a>
                        <a href="#projecto" class="btn btn-link">Project</a>
                        <a class="btn btn-link" href="">¡Contáctanos!</a>
                    </div>
                </div>
            </div>
            <div class="container px-lg-5">
                <div class="copyright">
                    <div class="row">
                        <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                            &copy; <a class="border-bottom" href="#">Centro Certificador de Líderes </a>, All Right Reserved. 				
                        </div>
                        <div class="col-md-6 text-center text-md-end">
                            <div class="footer-menu">
                                <a href="index.php">Home</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer End -->

        <!-- Back to Top -->
        <a href="#home" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>