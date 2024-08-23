<?php 
include('config.php');
    //Poner uno para verificar
    session_start();
    $_SESSION['IDCerti'] = $_POST['IDCerti'];
    $conexion = mysqli_connect($server, $db_user, $db_pass) or die ("Problemas en la conexion");
    if($conexion){
        mysqli_select_db($conexion, $database) or die ("ERROR db");
        $query = "SELECT * FROM certificaciones WHERE IDCerti=".$_SESSION['IDCerti'].";";
        $certif = mysqli_query($conexion,$query) or die("Error query".mysqli_error());
        $row = $certif->fetch_assoc();
        
        $_SESSION['nombre_certi'] = $row['Nombre'];
        $_SESSION['descripcion'] = $row['Descripcion'];
        $_SESSION['fechaI'] = $row['Fecha_inicio'];
        $_SESSION['fechaF'] = $row['Fecha_fin'];
        $_SESSION['tipo_certi'] = $row['Tipo'];
        $_SESSION['plazasD'] = (int)$row['Plazas_disponibles'];
        mysqli_close($conexion);
        
        $conn = new mysqli($server, $db_user, $db_pass, $database);
        $sql = "SELECT * FROM usuario_certificaciones WHERE IDCerti=".$_SESSION['IDCerti']." AND ID=".$_SESSION['id'].";";
        $result = $conn->query($sql);
        if($result->num_rows == 1){
            $_SESSION['registrado'] = true;
        }else{
            $_SESSION['registrado'] = false;
        }
        $conn->close();
    }
    header('Location: detalleC.php');
?>