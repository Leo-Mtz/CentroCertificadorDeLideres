<html>
<head>
    <title>Cerrar sesion</title>
</head>
<body>

<?php
    session_start();
    session_destroy();
    header('Location: login.php');
    exit;
?>
</body>
</html>
