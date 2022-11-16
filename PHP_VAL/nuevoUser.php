<?php

$usuario = $_POST['usr'];
$password = $_POST['password'];
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$log = 1;

include 'conexion.php';

$conn = OpenCon();


$consulta0 = "SELECT USER FROM users WHERE USER='$usuario'";
$envio0 = mysqli_query($conn, $consulta0);
if (($row0 = $envio0->fetch_assoc()) == null) {
    echo ('se supone que no existe');
    $consulta = "INSERT INTO users (USER, PASS)  VALUES ('$usuario','$hashed_password')";
    $envio = mysqli_query($conn, $consulta);
    if ($envio) {
        header("Location: ../index.php?log=" . $log);
        die();
    } else {
        header("Location: ../html/registroUser.php?log=" . $log);
        die();
    }
} else {
    header("Location: ../html/registroUser.php?log=" . $log);
    die();
}
