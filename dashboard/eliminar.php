<?php

include 'db_conn.php';

session_start();

if (!isset($_SESSION['rol'])) {
    header("location: cerrar_sesion.php");
} else {
    if ($_SESSION['rol'] != 1) {
        header("location: cerrar_sesion.php");
    }
}

$idSolicitud = $_GET['id'];

$SQL_DELETE = "DELETE FROM solicitud WHERE id=$idSolicitud";
$resultado = mysqli_query($conn, $SQL_DELETE);
if($resultado) {
    header("location: solicitudesAdmin.php");
} else {
    echo "Failed: " . mysqli_error($conn);
}