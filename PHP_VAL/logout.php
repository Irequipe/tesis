<?php
session_start();
include '../PHP_VAL/conexion.php';
$usr = $_SESSION['usr'];
session_destroy();
header("Location:../index.php");
