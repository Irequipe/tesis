
<?php
//error_reporting(E_ERROR | E_PARSE);
session_start();
include '../PHP_VAL/conexion.php';
$usr = $_SESSION['usr'];
$old_desc = $_POST['old_desc'];
$nueva_desc = $_POST['nueva_desc'];
$red = $_POST['red'];

$conn = OpenCon();



$consulta = "UPDATE red_dato SET DATO_DESC = '$nueva_desc' WHERE DATO_DESC = '$old_desc' AND RED='$red'";

$envio = mysqli_query($conn, $consulta);
if ($envio) {
    $edt = 1;
    header("Location: ../html/verdetalleadmin.php?edt=" . $edt . "&red=" . $red);
    die();
} else {
    echo ('MAL');
    die();
}
