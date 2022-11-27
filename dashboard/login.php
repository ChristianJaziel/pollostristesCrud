<?php

use LDAP\Result;

    include_once 'db_conn.php';
    session_start();

/*     if(isset($_GET['cerrar_sesion'])){
        session_unset();
        session_destroy();
    } */
    if(isset($_SESSION['rol'])){
        alert('$_SESSION');
        switch($_SESSION['rol']){
            case 1:
                header('location: admin.php');
                break;
            case 2:
                header('location: cliente.php');
                break;
            default:
        }
    }
    if(isset($_POST['usuario']) && isset($_POST['contrasena'])){
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND password = '$contrasena'";
        $resultado = mysqli_query($conn, $sql);

        if($resultado -> num_rows > 0){
            $rol = $resultado->fetch_column(3);
            switch($rol) {
                case 1:
                    header("location: admin.php");
                    $_SESSION['rol'] = 1;
                    break;
                case 2:
                    header("location: cliente.php");
                    $_SESSION['rol'] = 2;
                    break;
            }
        } else {
            header("location: admin.php");
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
    <link rel="stylesheet" href="css/stylesLogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Roboto:wght@400;500;700;900&display=swap"
        rel="stylesheet">
    <title>login</title>
</head>
<body>
    <div class="contenedor">
        <h1>login</h1>
        <form action="#" class="login" method="POST">
            <!-- Usuario -->
            <label for="usuario">Usuario:</label>
            <input type="text" name="usuario">
            <!-- Contraseña -->
            <label for="contrasena">Contraseña:</label>
            <input type="password" name="contrasena">
            <!-- Entrar -->
            <input type="submit" value="entrar">
        </form>
    </div>
</body>
</html>