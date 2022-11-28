<?php

include 'db_conn.php';

session_start();

$idSolicitud = $_GET['id'];

$SQL_DELETE = "DELETE FROM solicitudbotarga WHERE idB=$idSolicitud";
$resultado = mysqli_query($conn, $SQL_DELETE);
if($resultado) {
    header("location: solicitudesAdminB.php");
} else {
    echo "Failed: " . mysqli_error($conn);
}