<?php
//error_reporting(E_ERROR | E_PARSE);
session_start();
include '../PHP_VAL/conexion.php';
$usr = $_SESSION['usr'];
$old_name = $_POST['old_name'];
$nuevo_name = $_POST['nuevo_name'];
$red = $_POST['red'];

$conn = OpenCon();



$consulta = "UPDATE red_dato SET NAME_DESC = '$nuevo_name' WHERE NAME_DESC = '$old_name' AND RED='$red'";
$envio = mysqli_query($conn, $consulta);
if ($envio) {
    $edt = 1;
    header("Location: ../html/verdetalleadmin.php?edt=" . $edt . "&red=" . $red);
    die();
} else {
    echo ('MAL');
    die();
}
