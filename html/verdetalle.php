<?php

//error_reporting(E_ERROR | E_PARSE);
session_start();
include '../PHP_VAL/conexion.php';
$usr = $_SESSION['usr'];

$conn = OpenCon();
$conn->set_charset("utf8");
$RED = $_POST['red'];
$consulta = "SELECT * FROM red_dato where RED='$RED'";
$result = mysqli_query($conn, $consulta);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIDT</title>
    <link rel="icon" type="image/png" href="./imgs/share.svg" sizes="32x32">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="../css/mediaqueries.css">
</head>

<body>
    <header class="header-inicio">
        <div>
            <img onclick="history.back()" class="arrow" src="../imgs/arrow-left.svg" alt="volver">
            <p class="option">Volver al inicio</p>
        </div>

        <p class="title">SIDT</p>
        <div>
            <p><?PHP print($usr) ?></p>
            <a href="../PHP_VAL/logout.php">
                <span><img src="../imgs/user.svg" alt="usuario" href></span>
            </a>
        </div>
    </header>
    <main class="main-verdetalle">
        <section class="card-detalleizq">
            <div class="card">
                <div>
                    <img src="../imgs/<?php print(strtolower($RED)); ?>.svg" alt="">
                    <p><?PHP print($RED) ?></p>
                </div>
                <p class="descripcion">Estos son los datos que <?PHP print($RED) ?> está recopilando actualmente.</p>
            </div>
        </section>
        <section class="card-detalle">
            <?php
            $count = 1;
            while ($row = $result->fetch_assoc()) {

            ?>
                <div>
                    <img class="imagen" src="../imgs/<?php print($count); ?>.svg" alt="img<?php print($count); ?>">
                    <span class="spann"><?php print($NAME = $row['NAME_DESC']); ?></span>
                    <button class="buttonDet" id="btnVerDetalle<?php print($count) ?>">Ver detalle</button>
                </div>


                <section class="card-detalle-abierto inactive" id="cardDetalle<?php print($count) ?>">
                    <span id="cerrarCard<?php print($count) ?>">X</span>
                    <p><?php print($DATO = $row['DATO_DESC']); ?></p>
                </section>



            <?php ++$count;
            }
            ?>


        </section>
    </main>
    <script src="../js/otro.js"></script>
</body>

</html>