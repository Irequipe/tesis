<?php
//error_reporting(E_ERROR | E_PARSE);
session_start();
include '../PHP_VAL/conexion.php';
$usr = $_SESSION['usr'];
$red_add = $_POST['red_add'];
$emp = $_POST['emp'];

$conn = OpenCon();



$consulta = "INSERT INTO  red_usr (USER, RED) VALUES ('$usr', '$red_add')";
$envio = mysqli_query($conn, $consulta);
if ($envio) {
    header("Location: ../html/iniciousuario.php");
    die();
} else {
    echo ('MAL');

    die();
}
