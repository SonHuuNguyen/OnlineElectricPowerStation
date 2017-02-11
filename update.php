<?php 
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
$a=1;
while ($a>0)
{
$var= date('m');
$var = (int)$var;
$var = (string)$var;
$var = "T".$var;
$qr = "
SELECT * FROM `diennang` 
WHERE id = 1
  "; 
 $result = $conn->query($qr);
 $row = $result->fetch_assoc();
 $chiso = $row['Chi_So'];
// echo $chiso;

 $qr1 = "
UPDATE `month` 
SET $var = '$chiso'
WHERE id = 1
  "; 
// var_dump($qr1);
$conn->query($qr1);
 sleep(20);
}
 ?>