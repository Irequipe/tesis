<?php

function OpenCon()
 {
 $dbhost = "localhost";
 $dbuser = "GESTOR_BASE";
 $dbpass = "GesBase123";
 $db = "sip";
 $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
 
 return $conn;
 }
 
function CloseCon($conn)
 {
 $conn -> close();
 }

    
?>