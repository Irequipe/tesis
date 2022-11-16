<?php
//error_reporting(E_ERROR | E_PARSE);
$usuario = $_POST['usr'];
$password = $_POST['password'];
session_start();
$miarray = $_REQUEST['usr'];
$log = null;

$_SESSION['usr'] = $usuario;



include 'conexion.php';

$conn = OpenCon();

$consulta = "SELECT * FROM users where USER='$usuario'";
$result = mysqli_query($conn, $consulta);
while ($row = $result->fetch_assoc()) {
    $user = $row['USER'];
    $pass = $row['PASS'];
    $rol = $row['ROL'];
}

if (password_verify($password, $pass)) {
    $consulta1 = "SELECT RED FROM red_usr where USER='$usuario'";
    $result1 = mysqli_query($conn, $consulta1);

    while ($row1 = $result1->fetch_assoc()) {
        $emp = $row1['RED'];
    }

    if ($emp == null) {
        $emp = null;
    } else {
        $emp = 1;
    }


    if ($rol == 0) {
        header("Location: ../html/iniciousuario.php?emp=" . $emp);
        die();
    } else {
        header("Location: ../html/inicioadmin.php");
        die();
    }
} else {
    header("Location: ../index.php?log=" . $log);
}
