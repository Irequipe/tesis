<?php

function OpenCon()
 {
 $DB_HOST = "localhost";
 $DB_USERNAME = "GESTOR_BASE";
 $DB_PASSWORD = "GesBase123";
 $DB = "sip";
 $conn = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD,$DB) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }

if ($conn){
    echo('Hola si sirve');
}


 
function CloseCon($conn)
 {
 $conn -> close();
 }

    
?>