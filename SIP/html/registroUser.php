<?php
//error_reporting(E_ERROR | E_PARSE);
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

<body class="body-index">
    <header class="header-index">
        <h1>SIP</h1>
        <h3>Registro de usuario</h3>
    </header>
    <main class="main-index">
        <form action="../PHP_VAL/nuevoUser.php" method="post">
            <p>Ingresa tu nombre de usuario</p>
            <input type="usr" placeholder="Usuario" id='usr' name="usr">
            <p>Ingresa tu contraseña de usuario</p>
            <input type="password" placeholder="Contraseña" id='password' name="password">
            <button type="submit">Registrar</button>

        </form>
    </main>
    <script src="../js/otro.js"></script>
</body>

</html>