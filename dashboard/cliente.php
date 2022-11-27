<?php

session_start();

if (!isset($_SESSION['rol'])) {
    header("location: cerrar_sesion.php");
} else {
    if ($_SESSION['rol'] != 2) {
        header("location: cerrar_sesion.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/cliente.css">
    <title>Cliente</title>
</head>

<body>
    <div class="contenedor">
        <div class="header">
            <h1>rol de usuario</h1>
            <a href="cerrar_sesion.php" class="btnCerrarSesion">Cerrar sesión</a>
        </div>
        <main>
            <a href="solicitud.php" class="btnEnviarNuevo">Enviar solicitud</a>
            <a href="solicitudes.php" class="btnVerSoli">Ver todas las solicitudes</a>
        </main>
    </div>
</body>

</html>