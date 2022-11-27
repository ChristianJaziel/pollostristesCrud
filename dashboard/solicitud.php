<?php
include 'db_conn.php';

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

    $SQL_INSERT = "INSERT INTO solicitud(
    fecha, 
    nombre, 
    apellido, 
    numeroDirec, 
    calle, 
    ciudad, 
    provincia, 
    codigoPostal, 
    tiempoResi, 
    numeroSocial, 
    telefono, 
    edad, 
    puesto, 
    salario) VALUES(
        '$fecha',
        '$nombre',
        '$apellido',
        '$numeroDirec',
        '$calle',
        '$ciudad',
        '$provincia',
        '$codPostal',
        '$tiempoRes',
        '$numSocial',
        '$telefono',
        '$edad',
        '$puesto',
        '$salario'
    )";

    if (mysqli_query($conn, $SQL_INSERT)) {
    } else {
        echo 'Algo salió mal con la inserción';
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
        <form action="#" class="formulario" method="POST">
            <!-- Fecha -->
            <label for="fecha">Fecha:</label>
            <input type="date" name="fecha">
            <!-- Nombre -->
            <label>Nombre:</label>
            <input type="text" name="apellido" placeholder="Apellido...">
            <input type="text" name="nombre" placeholder="Nombre...">
            <!-- Dirección actual -->
            <label>Dirección actual:</label>
            <input type="text" name="numeroDirec" placeholder="Número...">
            <input type="text" name="calle" placeholder="Calle...">
            <input type="text" name="ciudad" placeholder="Ciudad...">
            <input type="text" name="provincia" placeholder="Provincia...">
            <input type="text" name="codPostal" placeholder="Código Postal...">
            <!-- Tiempo residencia -->
            <label>Tiempo de residencia:</label>
            <input type="text" name="tiempoRes" placeholder="Tiempo de residencia...">
            <!-- Numero social -->
            <label>Número de seguridad social:</label>
            <input type="text" name="numSocial" placeholder="Número de seguridad social...">
            <!-- Telefono -->
            <label>Teléfono:</label>
            <input type="text" name="telefono" placeholder="Teléfono...">
            <!-- Si es menor de 18 -->
            <label>Si es menor de 18 años, indique su edad:</label>
            <input type="text" name="edad" placeholder="Edad...">
            <!-- Puesto -->
            <label>Puesto que se solicita:</label>
            <input type="text" name="puesto" placeholder="Puesto que se solicita...">
            <!-- salario -->
            <label>Salario deseado:</label>
            <input type="text" name="salario" placeholder="Salario deseado...">
            <!-- Enviar -->
            <input type="submit" value="Enviar solicitud" name="submit">
        </form>
    </div>
</body>

</html>