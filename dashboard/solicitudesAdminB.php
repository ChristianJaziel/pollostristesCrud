<?php

include 'db_conn.php';

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/solicitudesAdmin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <title>Solicitudes Enviadas</title>
</head>

<body>
    <div class="contenedor">
        <div class="header">
            <h1>Todas nuestras botargas</h1>
            <a href="../bd/logout.php" class="btnCerrarSesion">Cerrar sesión</a>
            <a href="admin.php" class="btnCerrarSesion">Atras</a>
        </div>
        <main>
            <?php
            $solicitudes = mysqli_query($conn, "SELECT idB, NombreBotarga, PrecioB  FROM solicitudbotarga");

            while ($solicitudb = mysqli_fetch_assoc($solicitudes)) {
                echo '
                    <div class="elemento">
                        <p><span>Id:</span> ' . $solicitudb['idB'] . '</p>' .
                        '<p><span>Nombre comida:</span> ' . $solicitudb['NombreBotarga'] . '</p>' .
                        '<p><span>Precio: $</span> ' . $solicitudb['PrecioB'] . '.0</p>' .
                        '<a href="solicitudCompletaB.php?id=' . $solicitudb['idB'] . '">Ver Completo</a>' .
                        '<a href="editarB.php?id=' . $solicitudb['idB'] . '">Modificar</a>' .
                        '<a href="eliminarB.php?id=' . $solicitudb['idB'] . '">Eliminar</a>' .
                    '</div>
                ';
            }
            ?>
        </main>
    </div>
</body>

</html>