<?php

function OpenCon()
 {
 $DB_HOST = "us-cdbr-east-06.cleardb.net";
 $DB_USERNAME = "b2de6a3dbf1dfd";
 $DB_PASSWORD = "c8e55bdf";
 $DB = "heroku_8bb7fcb9eb3ba85";
 $conn = new mysqli($DB_HOST, $DB_USERNAME, $DB_PASSWORD,$DB) or die("Connect failed: %s\n". $conn -> error);
 $conn->set_charset("utf8mb4");
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }

    
?>