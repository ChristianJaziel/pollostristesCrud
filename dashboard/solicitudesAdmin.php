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
            <h1>Todos nuestros Pollos</h1>
            <a href="../bd/logout.php" class="btnCerrarSesion">Cerrar sesión</a>
        </div>
        <main>
            <?php
            $solicitudes = mysqli_query($conn, "SELECT id, NombreComida, Precio  FROM solicitudpollo");

            while ($solicitudpollo = mysqli_fetch_assoc($solicitudes)) {
                echo '
                    <div class="elemento">
                        <p><span>Id:</span> ' . $solicitudpollo['id'] . '</p>' .
                        '<p><span>Nombre comida:</span> ' . $solicitudpollo['NombreComida'] . '</p>' .
                        '<p><span>Nombre:</span> ' . $solicitudpollo['Precio'] . '</p>' .
                        '<a href="solicitudCompleta.php?id=' . $solicitudpollo['id'] . '">Ver Completo</a>' .
                        '<a href="editar.php?id=' . $solicitudpollo['id'] . '">Modificar</a>' .
                        '<a href="eliminar.php?id=' . $solicitudpollo['id'] . '">Eliminar</a>' .
                    '</div>
                ';
            }
            ?>
        </main>
    </div>
</body>

</html>