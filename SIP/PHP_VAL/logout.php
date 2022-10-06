<?php
session_start();
include '../PHP_VAL/conexion.php';
$usr = $_SESSION['usr'];
header("Location:../index.php");
