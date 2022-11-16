


<?php
include '../PHP_VAL/conexion.php';
$conn = OpenCon();
$conn->set_charset("utf8");
$consulta = "SELECT * FROM red_dato where RED='Facebook'";
$result = mysqli_query($conn, $consulta);




while ($row = $result->fetch_assoc()) {

    print($NAME = $row['NAME_DESC']);
}
