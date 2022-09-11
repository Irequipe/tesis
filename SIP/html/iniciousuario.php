<?php
//error_reporting(E_ERROR | E_PARSE);
session_start();
include '../PHP_VAL/conexion.php';
$usr = $_SESSION['usr'];

$conn = OpenCon();

$consulta1 = "SELECT RED FROM red_usr where USER='$usr'";
$result1 = mysqli_query($conn, $consulta1);

$emp = $_GET['emp'];

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
        <p class="option">Vista general</p>
        <p class="title">SIP</p>
        <div>
            <p><?PHP print($usr) ?></p><span><img src="../imgs/user.svg" alt="usuario"></span>
        </div>
    </header>
    <main class="main-usuario">
        <section class="vacia">
        </section>
        <section class="card-redes">
            <?php

            if ($emp == null) {
            ?>
                <div>
                    <tr>
                        <p><?php print('NO TIENES REDES SOCIALES ASOCIADAS'); ?></p>
                    </tr>
                </div>
            <?php } else {

            ?>
                <p>Estas son tus redes sociales asociadas</p>
                <?php
                while ($row1 = $result1->fetch_assoc()) {
                ?>
                    <div>
                        <tr>
                            <img src="../imgs/<?php print($RED = $row1['RED']); ?>.svg" alt="">
                            <p><?php print($RED = $row1['RED']); ?></p>
                            <button onclick="location.href=''" type="button">
                                Consultar</button>
                        </tr>
                    </div>
            <?php }
            } ?>





            <!-- <div>
                <img src="../imgs/instagram.svg" alt="">
                <p>Instagram</p>
                <button>Consultar</button>
            </div>
            <div>
                <img src="../imgs/twitter.svg" alt="">
                <p>Twitter</p>
                <button>Consultar</button>
            </div> -->

        </section>
        <section class="anadir">
            <img src="../imgs/add.svg" alt="">
        </section>

    </main>
    <script src="./js/main.js"></script>
</body>

</html>