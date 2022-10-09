<?php

$usuario = $_POST['usr'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$log = 1;

include 'conexion.php';

$conn = OpenCon();


$consulta = "INSERT INTO users (USER, PASS)  VALUES ('$usuario','$hashed_password')";
$envio = mysqli_query($conn, $consulta);

if ($envio) {

    header("Location: ../index.php?log=" . $log);
    die();
}
