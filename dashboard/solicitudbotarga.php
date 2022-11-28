<?php
include 'db_conn.php';

if (isset($_POST['submit'])) {
        $image = $_FILES['img']['tmp_name'];
        $imgContent = addslashes(file_get_contents($image));
        $nombre = $_POST['nombre'];
        $precio = $_POST['precio'];
        $descripcion = $_POST['descripcion'];
        $SQL_INSERT = "INSERT INTO solicitudbotarga(
            NombreBotarga,
            PrecioB,
            DescripcionB,
            imagenB) VALUES (
                '$nombre',
                '$precio',
                '$descripcion',
                '$imgContent' )";
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
    <link rel="stylesheet" href="css/stylesolipollos.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <title>Solicitud</title>
</head>

<body>
    <div class="contenedor">
        <div class="header">
            <h1>REGISTRO DE BOTARGAS </h1>
            <a href="cerrar_sesion.php" id="btnCerrarSesion">Cerrar sesión</a>
            <a href="admin.php" id="btnCerrarSesion">Atras</a>
        </div>
        <form action="#" class="formulario" method="POST" enctype="multipart/form-data">
            <!-- Nombre -->
            <label>Agrega a la coleccion nueva tu botarga</label>
            <br>
            <input style="height: 30px;" type="text" name="nombre" placeholder="Nombre de tu chulada pa?">
            <input style="height: 30px;" type="number" name="precio" placeholder="Precio de tremenda botarga.">
            <input style="height: 90px;" type="text" name="descripcion" placeholder="Descripcion del servicio ">
            <input class="input-img" style="height: 90px;" type="file" name="img" placeholder="Fotito">
            <input  style="height: 50px;" type="submit" value="Enviar solicitud" name="submit">
        </form>
    </div>
</body>

</html>