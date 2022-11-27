<?php

session_start();

include 'db_conn.php';

$idSolicitud = $_GET['id'];

if (isset($_POST['submit'])) {
    $fecha = $_POST['fecha'];
    $apellido = $_POST['apellido'];
    $nombre = $_POST['nombre'];
    $numeroDirec = $_POST['numeroDirec'];
    $calle = $_POST['calle'];
    $ciudad = $_POST['ciudad'];
    $provincia = $_POST['provincia'];
    $codPostal = $_POST['codPostal'];
    $tiempoRes = $_POST['tiempoRes'];
    $numSocial = $_POST['numSocial'];
    $telefono = $_POST['telefono'];
    $edad = $_POST['edad'];
    $puesto = $_POST['puesto'];
    $salario = $_POST['salario'];

    $SQL_UPDATE = "UPDATE solicitud SET fecha='$fecha', nombre='$nombre', apellido='$apellido', numeroDirec='$numeroDirec', calle='$calle', ciudad='$ciudad', provincia='$provincia', codigoPostal='$codPostal', tiempoResi='$tiempoRes', numeroSocial='$numSocial', telefono='$telefono', edad='$edad', puesto='$puesto', salario='$salario' WHERE id=$idSolicitud";

    $result = mysqli_query($conn, $SQL_UPDATE);

    header("location: solicitudesAdmin.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/stylesSoli.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <title>Solicitud</title>
</head>

<body>
    <div class="contenedor">
        <div class="header">
            <h1>FORMULARIO DE SOLICITUD DE EMPLEO</h1>
            <a href="cerrar_sesion.php" id="btnCerrarSesion">Cerrar sesión</a>
        </div>
        <h2>Llene los campos con la información solicitada</h2>
        <?php
        $SQL_SELECT = "SELECT * FROM solicitud WHERE id=$idSolicitud LIMIT 1";
        $result = mysqli_query($conn, $SQL_SELECT);
        $solicitud = mysqli_fetch_assoc($result);
        ?>
        <form action="#" class="formulario" method="POST">
            <!-- Fecha -->
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha" value="<?php echo $solicitud['fecha']?>">
            <!-- Nombre -->
            <label>Nombre:</label>
            <input type="text" name="apellido" placeholder="Apellido..." value="<?php echo $solicitud['apellido']?>">
            <input type="text" name="nombre" placeholder="Nombre..." value="<?php echo $solicitud['nombre']?>">
            <!-- Dirección actual -->
            <label>Dirección actual:</label>
            <input type="text" name="numeroDirec" placeholder="Número..." value="<?php echo $solicitud['numeroDirec']?>">
            <input type="text" name="calle" placeholder="Calle..." value="<?php echo $solicitud['calle']?>">
            <input type="text" name="ciudad" placeholder="Ciudad..." value="<?php echo $solicitud['ciudad']?>">
            <input type="text" name="provincia" placeholder="Provincia..." value="<?php echo $solicitud['provincia']?>">
            <input type="text" name="codPostal" placeholder="Código Postal..." value="<?php echo $solicitud['codigoPostal']?>">
            <!-- Tiempo residencia -->
            <label>Tiempo de residencia:</label>
            <input type="text" name="tiempoRes" placeholder="Tiempo de residencia..." value="<?php echo $solicitud['tiempoResi']?>">
            <!-- Numero social -->
            <label>Número de seguridad social:</label>
            <input type="text" name="numSocial" placeholder="Número de seguridad social..." value="<?php echo $solicitud['numeroSocial']?>">
            <!-- Telefono -->
            <label>Teléfono:</label>
            <input type="text" name="telefono" placeholder="Teléfono..." value="<?php echo $solicitud['telefono']?>">
            <!-- Si es menor de 18 -->
            <label>Si es menor de 18 años, indique su edad:</label>
            <input type="text" name="edad" placeholder="Edad..." value="<?php echo $solicitud['edad']?>">
            <!-- Puesto -->
            <label>Puesto que se solicita:</label>
            <input type="text" name="puesto" placeholder="Puesto que se solicita..." value="<?php echo $solicitud['puesto']?>">
            <!-- salario -->
            <label>Salario deseado:</label>
            <input type="text" name="salario" placeholder="Salario deseado..." value="<?php echo $solicitud['salario']?>">
            <!-- Enviar -->
            <input type="submit" value="Actualizar" name="submit">
        </form>
    </div>
</body>

</html>