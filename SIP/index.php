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
    <link rel="stylesheet" href="./css/styles.css">
    <link rel="stylesheet" href="./css//mediaqueries.css">
</head>

<body class="body-index">
    <header class="header-index">
        <h1>SIP</h1>
        <h3>Sistema de Seguimiento de información Personal</h3>
    </header>
    <main class="main-index">
        <form action="../PHP_VAL/validar_Login.php" method="post">
            <input type="usr" placeholder="Usuario" id='usr' name="usr">
            <input type="password" placeholder="Contraseña" id='password' name="password">
            <button type="submit">Ingresar</button>
            <?php if (isset($_GET['log'])) {
                $log = $_GET['log'];
                if ($log == null) {
                    echo ('<p>Credenciales Incorrectas</p>');
                } elseif ($log == 1) {
                    echo ('<p>Usuario registrado correctamente</p>');
                }
            }
            ?>
            <p>No tienes una cuenta? <a href="../html/registroUser.php">Registrate</a></p>

        </form>
    </main>
    <footer>
        <p>Estás a un clic de conocer que información es recolectada por las diferentes redes sociales que utilizas</p>
    </footer>
    <script src="./js/main.js"></script>
</body>

</html>