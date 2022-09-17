<?php

//error_reporting(E_ERROR | E_PARSE);
session_start();
include '../PHP_VAL/conexion.php';
$usr = $_SESSION['usr'];

$conn = OpenCon();
$RED = $_POST['red'];
$conn = OpenCon();
$consulta = "SELECT * FROM red_dato where RED='$RED'";
$result = mysqli_query($conn, $consulta);



?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIP</title>
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

        <p class="title">SIP</p>
        <div>
            <p><?PHP print($usr) ?></p><span><img src="../imgs/user.svg" alt="usuario"></span>
        </div>
    </header>
    <main class="main-verdetalle">
        <section class="card-detalleizq">
            <div class="title">
                <p>Vista detallada</p>
            </div>
            <div class="card">
                <div>
                    <img src="../imgs/<?php print($RED); ?>.svg" alt="">
                    <p><?PHP print($RED) ?></p>
                </div>
                <p class="descripcion">Estos son los datos que <?PHP print($RED) ?> está recopilando actualmente.</p>
            </div>
        </section>
        <section class="card-detalle">
            <?php
            while ($row = $result->fetch_assoc()) {
            ?>
                <div>
                    <img src="../imgs/<?php print($NAME = $row['NAME_DESC']); ?>.svg" alt="detalle">
                    <span><?php print($NAME = $row['NAME_DESC']); ?></span>
                    <button>Editar detalle</button>
                </div>
            <?php }
            ?>
        <section class="card-detalle-abierto inactive">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo dolor minus voluptate, quidem quisquam cumque, pariatur dignissimos aperiam delectus voluptatem assumenda suscipit eaque unde. Nihil vero dolorum hic eum odit. </p>
        </section>

        </section>
    </main>
    <script src="./js/main.js"></script>
</body>

</html>