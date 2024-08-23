<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>LogIn</title>
</head>
<body>
    <?php
      session_start();
      include('config.php');
      $correo= $_POST['correo'];
      $pin= $_POST['pass'];
      $tipo=0;
      $conn = new mysqli($server, $db_user, $db_pass, $database);
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }else{  
          $sql = "SELECT * FROM usuarios WHERE correo='$correo' AND pass='$pin' AND estado = 1;";
          $result = $conn->query($sql);
          if($result->num_rows == 1) {
              $row = $result->fetch_assoc();
              if($row['tipo']==1)$tipo=1;
              if($row['tipo']==2)$tipo=2;

              $_SESSION['id'] = $row['ID'];
              $_SESSION['correo'] = $row['correo'];
              $_SESSION['nombre'] = $row['nombre'];
              $_SESSION['apellidos'] = $row['Apellido'];
              $_SESSION['tipo']=$tipo;
              
              if($tipo == 1){
                  header('Location: menuA.php');
              }
              if($tipo == 2){
                  header('Location: menuU.php');
              }
          }else{
              echo '<div class="alert alert-danger" role="alert"> Datos Incorrectos</div>';
              header('Location: login.php');
          }
          $conn->close();
      }    
    ?>
</body>
</html>