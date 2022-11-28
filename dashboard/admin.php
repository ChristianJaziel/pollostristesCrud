

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <title>Administrador</title>
</head>

<body>
    <div class="contenedor">
        <div class="header">
            <h1>Master de los pollos y botargas</h1>
            <a href="../bd/logout.php" class="btnCerrarSesion">Cerrar sesión</a>
        </div>
        <main>
            <a href="solicitudpollos.php" class="btnEnviarNuevo">Agregar un nuevo pollito</a>  
            <a href="solicitudbotarga.php" class="btnEnviarNuevo">Agregar botarga</a>
            <a href="solicitudesAdmin.php" class="btnVerSoli">Ver todos los pollos.. Ay! canijo</a>
            <a href="solicitudesAdminB.php" class="btnVerSoli">Ver todas las botargas.. Ay! caray</a>
        </main>
    </div>
</body>

</html>