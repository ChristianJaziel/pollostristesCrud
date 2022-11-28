<?php

session_start();

include 'db_conn.php';

$idSolicitud = $_GET['id'];

if (isset($_POST['submit'])) {
    $nombre = $_POST['nombre'];
    $precio = $_POST['precio'];
    $descripcion = $_POST['descripcion'];

    $SQL_UPDATE = "UPDATE solicitudpollo SET NombreComida='$nombre', Precio='$precio', Descripcion='$descripcion' WHERE id=$idSolicitud";

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
            <h1 style="text-align:center;">Modif�calo a tu gusto chaval</h1>
            <a href="../bd/logout.php" id="btnCerrarSesion">Cerrar sesión</a>
            <a href="solicitudesAdmin.php" id="btnCerrarSesion">Atras</a>
        </div>
        <h2>Cambia tu platillo pa</h2>
        <?php
        $SQL_SELECT = "SELECT * FROM solicitudpollo WHERE id=$idSolicitud LIMIT 1";
        $result = mysqli_query($conn, $SQL_SELECT);
        $solicitud = mysqli_fetch_assoc($result);
        ?>
        <form action="#" class="formulario" method="POST">
            <br>
            <input style="height: 30px;" type="text" name="nombre" value="<?php echo $solicitud['NombreComida']?>">
            <input style="height: 30px;" type="number" name="precio" value="<?php echo $solicitud['Precio']?>" >
            <input style="height: 90px;" type="text" name="descripcion" value="<?php echo $solicitud['Descripcion']?>" ?>
            <div class="campo">
                <img height="auto" src="data:image/jpg;base64,   <?php echo base64_encode($solicitud['imagen'])   ?>" alt="">        
             </div>
            <input type="submit" value="Actualizar" name="submit">
        </form>
    </div>
</body>

</html>