<?php
include 'db_conn.php';

$idSolicitud = $_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/solicitudCompleta.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;700&family=Roboto:wght@400;500;700;900&display=swap" rel="stylesheet">
    <style>
        *{
            margin;10px;
        }
        body{
            padding:30px;
        }
    </style>
    <title>Tremendos pollos</title>
</head>

<body>

    <?php
    $query  = mysqli_query($conn,"SELECT * FROM solicitudbotarga WHERE idB=$idSolicitud");
    $result = mysqli_num_rows($query);
    if($result>0){
        while($data = mysqli_fetch_array($query)){
            ?>
            <div class="contenedor">
            <h1>TREMENDAS BOTARGAS</h1>
            <div class="contenedor">
            <a href="../bd/logout.php" class="btnCerrarSesion">Cerrar sesión</a>
            <a  href="solicitudesAdminB.php" class="btnCerrarSesion">Atras</a>
            </div>
                
                <br>
                <br>
                <div class="header">
                <main>
                    <div class="campo">
                        <p><span>Id</span></p>
                        <?php echo $data['idB']   ?>
                    </div>

                    <div class="campo">
                        <p><span>Nombre de tremenda botarga</span></p>
                    <?php echo $data['NombreBotarga']   ?>
                    </div>

                    <div class="campo">
                    <p><span>Coste</span></p>
                    <span>$<?php echo $data['PrecioB']   ?> .0 MXN</span>
                    </div>

                    <div class="campo">
                    <p><span>Descripcion del servicio</span></p>
                    <?php echo $data['DescripcionB']   ?>
                    </div>

                    <div class="campo">
                        <p><span>Fotito de la botarga</span></p>
                        <img height="auto" src="data:image/jpg;base64,   <?php echo base64_encode($data['imagenB'])   ?>" alt="">
                    
                    </div>

                </main>

             </div>
        </div>
           
            <?php
        } 
    }
    ?>
</body>

</html>