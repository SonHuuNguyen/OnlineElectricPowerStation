<?php

$phuong=$_GET["phuong"];
$num-$_GET["num"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "u458728455_uno";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
$conn->query("SET NAMES 'UTF8'"); //Tiếng Việt


 $qr = "
SELECT * FROM `diennang`
WHERE Phuong = '$phuong'
ORDER BY id
  "; 
  
    $result = $conn->query($qr);
  echo $num;


$conn->close();
 ?>