<?php //Verifica si tiene los permisos necesarios
    session_start();
    if(isset($_SESSION['correo']) && isset($_SESSION['tipo'])==1){   
    }else{
        header("Location: index.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Administrador</title>
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
                        <a href="index.php" class="nav-item nav-link">Servicios</a>
                        <a href="menuA.php" class="nav-item nav-link">Menú</a>
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
                <div class="container my-5 py-5 px-lg-5">
                    <div class="row g-5 py-5">
                        <div class="col-12 text-center">
                            <h1 class="text-white animated slideInDown">Registro Administrador</h1>
                            <hr class="bg-white mx-auto mt-0" style="width: 90px;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Navbar & Hero End -->
        

        <!-- El contenido inicia -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container py-5 px-lg-5">
                <form  action="<?php echo $_SERVER['PHP_SELF']; ?>" method = "post">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" placeholder="Nombre" name="nombre" required>
                                <label for="name">Nombre</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="apellidos" placeholder="Apellidos" name="apellidos" required>
                                <label for="text">Apellidos</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="tel" class="form-control" id="telefono" placeholder="Teléfono" pattern="[0-9]{2}-[0-9]{4}-[0-9]{4}" name="telefono" required>
                                <label for="name">Teléfono (Formato: 44-4485-6475)</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <select name="ciudad" class="form-control" id="ciudad" required>
                                    <script>
                                        var ciudades=['Aguascalientes','Baja California','Baja California Sur','Campeche','Chiapas','Chihuahua','Coahuila de Zaragoza','Colima','Ciudad de México','Durango','Guanajuato','Guerrero','Hidalgo','Jalisco','Estado de Mexico','Michoacan de Ocampo','Morelos','Nayarit','Nuevo Leon','Oaxaca','Puebla','Queretaro de Arteaga','Quintana Roo','San Luis Potosi','Sinaloa','Sonora','Tabasco','Tamaulipas','Tlaxcala','Veracruz de Ignacio de la Llave','Yucatan','Zacatecas'];;
                                        for(i=0;i<ciudades.length;i++){
                                            document.write("<option>" + ciudades[i] + "</option>");
                                        }
                                    </script>
                                    <option selected>Seleccionar estado</option>
                                </select>
                                <label for="text">Estado</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="correo" placeholder="correo" name="correo" required>
                                <label for="subject">Correo electrónico </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="password" class="form-control" id="correo" placeholder="contraseña" name="pass"  minlength="8" required>
                                <label for="subject">Contraseña </label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit" name="registro">Registrar</button>
                        </div>
                        <!--Seccion de registro a la BD -->
                        <?php
                            include('config.php');
                            if(isset($_POST['registro']) ){
                                $conn = new mysqli($server, $db_user, $db_pass, $database);
                                if ($conn->connect_error) {
                                    die("Connection failed: " . $conn->connect_error);
                                }else{
                                    $sql = "SELECT * FROM usuarios WHERE correo ='".$_POST['correo']."';";
                                    $result = $conn->query($sql);
                                    if($result->num_rows == 1 || $_POST['ciudad']=="Seleccionar estado"){
                                        echo '<div class="alert alert-danger" role="alert">Datos invalidos, intente de nuevo</div>';
                                        //header('Location: registroU.php');
                                    }else{
                                        $conn->close();  
                                        $conexion = mysqli_connect($server, $db_user, $db_pass) or die ("Problemas en la conexion");
                                        if($conexion){
                                            $query = "INSERT INTO usuarios(correo, pass, nombre, Apellido, Telefono, Ciudad, tipo, estado) VALUES
                                            ('".$_POST['correo']."', '".$_POST['pass']."', '".$_POST['nombre']."', '".$_POST['apellidos']."', '".$_POST['telefono']."', '".$_POST['ciudad']."', 1, 1);";
                                            mysqli_select_db($conexion, $database) or die("ERROR en base de datos");
                                            if(mysqli_query($conexion, $query)) echo '<div class="alert alert-success" role="alert"> Cuenta Activada Correctamente </div>';
                                            mysqli_close($conexion);
                                            
                                        }
                                    }
                                }      
                            }
                        ?>
                    </div>
                </form>
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