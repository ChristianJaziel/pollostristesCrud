<?php
session_start();
    $server="localhost";
    $nombre_bd="login";
    $usuarioo="root";
    $pas="";
    $sql = "mysql:host=$server;dbname=$nombre_bd;";
    $dsn_Options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    try { 
        $my_Db_Connection = new PDO($sql, $usuarioo, $pas, $dsn_Options);
        echo "Connected successfully";
      } catch (PDOException $error) {
        echo 'Connection error: ' . $error->getMessage();
      }

    $usuarior = (isset($_POST['user'])) ? $_POST['user'] : '';
    $passwordr = (isset($_POST['passw'])) ? $_POST['passw'] : '';

    $pass = md5($passwordr); 
    $consultaregistro= "INSERT INTO usuarios (usuario,password) VALUES ('$usuarior','$pass')";
    $resultado= $my_Db_Connection->prepare( $consultaregistro);

    if($resultado->execute()){
        echo("La base de datos ha sido actualizada");
    }else{
        echo("No se hizo ningun cambio");
    }

?>