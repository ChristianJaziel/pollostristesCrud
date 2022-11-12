<?php
session_start();
unset($_SESSION["s_usuario"]);
unset($_SESSION["s_idrol"]);
unset($_SESSION["s_rol_descripcion"]);
session_destroy();
header("Location:../login.php")
?>
