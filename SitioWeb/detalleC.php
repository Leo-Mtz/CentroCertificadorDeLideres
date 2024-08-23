<?php 
    session_start();
    $id_certi = (int)$_SESSION['IDCerti'];
    include('config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Certificación</title>
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
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Navbar & Hero Start -->
        <div class="container-xxl position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-light px-4 px-lg-5 py-3 py-lg-0">
                <a href="index.php" class="navbar-brand p-0">
                    <h1 class="m-0">CCL</h1>
                    <!--<img src="img/logoCCL.png" alt="Logo">-->
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="fa fa-bars"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav mx-auto py-0">
                        <a href="index.php" class="nav-item nav-link">Home</a>
                        <a href="index.php" class="nav-item nav-link">Acerca</a>
                        <a href="bCerti.php" class="nav-item nav-link">Servicios</a>
                        <?php
                            if($_SESSION['tipo']==1)echo '<a href="menuA.php" class="nav-item nav-link">Menú</a>';
                            if($_SESSION['tipo']==2)echo '<a href="menuU.php" class="nav-item nav-link">Menú</a>';
                        ?>
                    </div>
                    <?php
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
                     ?>
                </div>
            </nav>

            <div class="container-xxl py-5 bg-primary hero-header">
                <div class="container my-5 py-4 px-lg-5">
                    
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
        
        <!-- El contenido inicia -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-1 px-lg-5">
                <section class="jumbotron text-center">
                <div class="container">
                    <h1 class="jumbotron-heading"><?=$_SESSION['nombre_certi']?></h1>
                    <p class="lead text-muted"><?=$_SESSION['descripcion']?></p>
                    
                    </p>
                </div>
                </section>

                <div class="album py-5 bg-light">
                <div class="container">

                    <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                        <div class="card-body">
                            <h4 class="card-text">Fecha de Inicio</h4>
                            <p class="card-text"><?=$_SESSION['fechaI']?></p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                        <div class="card-body">
                            <h4 class="card-text">Fecha de Finalización</h4>
                            <p class="card-text"><?=$_SESSION['fechaF']?></p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                        <div class="card-body">
                            <h4 class="card-text">Tipo</h4>
                            <p class="card-text"><?=$_SESSION['tipo_certi']?></p>
                            <div class="d-flex justify-content-between align-items-center">
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    
                </div>
                </div>
                <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
                                <!--<input type="submit" class="btn btn-primary my-2">Reservar lugar</a>-->
                                <?php
                                    if($_SESSION['registrado']==true){
                                        echo '<input type="submit" class="btn btn-primary" value="Ya cuenta con una plaza en esta certificación" name="reservar" disabled>';    
                                    }else{
                                        if($_SESSION['tipo']==2) echo '<input type="submit" class="btn btn-primary" value="Reservar lugar" name="reservar" id="reservar">';
                                        else echo '<input type="submit" class="btn btn-primary" value="Ingrese con una cuenta de alumno" name="reservar" disabled>';    
                                    }
                                ?>
                                <!--Registro en la BD del lugar-->
                                <?php
                                    if(isset($_POST['reservar'])){
                                        $conexion = mysqli_connect($server, $db_user, $db_pass) or die ("Error en la conexión.");
                                        if($conexion){
                                            mysqli_select_db($conexion, $database) or die("ERROR en base de datos");
                                            $query = "INSERT INTO usuario_certificaciones (IDCerti, ID) VALUES
                                            (".$_SESSION['IDCerti'].", ".$_SESSION['id'].");";
                                            mysqli_select_db($conexion, $database) or die("ERROR en base de datos");
                                            mysqli_query($conexion, $query);
                                            $query = "UPDATE certificaciones SET Plazas_disponibles = Plazas_disponibles-1 WHERE IDCerti = ".$_SESSION['IDCerti'].";"; 
                                            mysqli_query($conexion, $query);
                                            mysqli_close($conexion);
                                            $_SESSION['registrado']=true;
                                            echo '<meta http-equiv="Refresh" content="0;url=detalleC.php">';
                                        }
                                    }
                                ?>
                            </form> 
                        </div>
                    </div>
            </div>
        </div>
        <!-- El contenido finaliza -->
        

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
        <a href="#" class="btn btn-lg btn-secondary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
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