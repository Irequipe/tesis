<?php
//error_reporting(E_ERROR | E_PARSE);
session_start();
include '../PHP_VAL/conexion.php';
$usr = $_SESSION['usr'];

$conn = OpenCon();

$consulta1 = "SELECT * FROM redes";
$result1 = mysqli_query($conn, $consulta1);

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


            ?>
            <p>Estas son las redes sociales registradas</p>
            <?php
            while ($row1 = $result1->fetch_assoc()) {
            ?>
                <div>
                    <tr>
                        <img src="../imgs/<?php print($RED = $row1['NAME']); ?>.svg" alt="">
                        <p><?php print($RED = $row1['NAME']); ?></p>
                        <form action="/html/verdetalleAdmin.php" method="POST">
                            <input style="visibility: hidden;" value=<?php print($RED = $row1['NAME']); ?> id="red" name="red" />
                            <button type="submit">
                                Gestionar</button>
                        </form>
                    </tr>
                </div>
            <?php } ?>






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


    </main>
    <script src="./js/main.js"></script>
</body>

</html>