<?php
//error_reporting(E_ERROR | E_PARSE);
session_start();
include '../PHP_VAL/conexion.php';
$usr = $_SESSION['usr'];

$conn = OpenCon();

$consulta1 = "SELECT RED FROM red_usr where USER='$usr'";
$result1 = mysqli_query($conn, $consulta1);

$consulta2 = "SELECT * FROM redes WHERE NAME NOT IN (SELECT RED FROM red_usr WHERE USER='$usr')";
$result2 = mysqli_query($conn, $consulta2);

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
                            <form action="/html/verdetalle.php" method="POST">
                                <input style="visibility: hidden;" value=<?php print($RED = $row1['RED']); ?> id="red" name="red" />
                                <button type="submit">
                                    Consultar</button>
                            </form>
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
            <form method="POST" action="/html/verdetalle.php">
                <div class="col">
                    <th> <select class="" name="red_add" id="red_add">
                            <?php
                            while ($row2 = $result2->fetch_assoc()) { ?>
                                <option value="<?php print($name = $row2['NAME']); ?>"><?php print($name = $row2['NAME']); ?></option>


                            <?php }
                            ?>
                    </th>
                    </select>
                    <button type="submit" class="btn btn-success" href="">Asociar</button>
                </div>
            </form>
        </section>

    </main>
    <script src="./js/main.js"></script>
</body>

</html>