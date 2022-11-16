<?php

//error_reporting(E_ERROR | E_PARSE);
session_start();
include '../PHP_VAL/conexion.php';
$usr = $_SESSION['usr'];

$conn = OpenCon();
$NAME = $_POST['name'];
$DESC = $_POST['desc'];
$RED = $_POST['red'];

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nuevo parametro</title>
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
            <p><?PHP print($usr) ?></p><span><img src="../imgs/user.svg" alt="usuario"></span>
        </div>
    </header>
    <main class="main-nuevoparametro">
        <section class="card-detalleizq">
            <div class="title">
                <p>Vista detallada</p>
            </div>
            <div class="card">
                <div>
                    <img src="../imgs/<?php print(strtolower($RED)); ?>.svg" alt="">
                    <p><?PHP print($RED) ?></p>
                </div>
                <p class="descripcion">Editar el parametro: <?PHP echo ("<br>");
                                                            print($NAME);
                                                            ?>
            </div>

            <p>Nuevo nombre</p>
            <form action="../PHP_VAL/cambiarNombre.php" method="post">
                <input type="text" placeholder="Nuevo nombre del parametro" id="nuevo_name" name="nuevo_name">
                <input type="hidden" style="visibility: hidden;" value="<?php print($NAME); ?>" id="old_name" name="old_name">
                <input type="hidden" style="visibility: hidden;" value="<?php print($RED); ?>" id="red" name="red">
                <section class="nparametro-right">
                    <button type="submit">Guardar</button>
                </section>
            </form>


        </section>
        <section class="nparametro-mid">
            <div class="title">
                <p class="pDesc">Descripción anterior: <?PHP echo ("<br>");
                                                        print($DESC);
                                                        ?>
                </p>
            </div>
            <form action="../PHP_VAL/cambiarDesc.php" method="post">
                <textarea id="nueva_desc" name="nueva_desc" placeholder="Limite: 5000 caracteres"></textarea>
                <input type="hidden" style="visibility: hidden;" value="<?php print($DESC); ?>" id="old_desc" name="old_desc">
                <input type="hidden" style="visibility: hidden;" value="<?php print($RED); ?>" id="red" name="red">
                <section class="nparametro-right">
                    <button>Guardar</button>
                </section>
        </section>
    </main>
    <script src="../js/main.js"></script>
</body>

</html>