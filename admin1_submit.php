<?php 
session_start();
$bac= $_POST['bac_submit'];
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
$T1= $_POST['T1'];
$T2= $_POST['T2'];
$T3= $_POST['T3'];
$T4= $_POST['T4'];
$T5= $_POST['T5'];
$T6= $_POST['T6'];
$T7= $_POST['T7'];
$T8= $_POST['T8'];
$T9= $_POST['T9'];
$T10= $_POST['T10'];
$T11= $_POST['T11'];
$T12= $_POST['T12'];

 $qr1 = "
UPDATE `giadien` 
SET T1 = $T1
WHERE id = '$bac'
  "; 
  $qr2 = "
UPDATE `giadien` 
SET T2 = $T2
WHERE id = '$bac'
  "; 
 $qr3 = "
UPDATE `giadien` 
SET T3 = $T3
WHERE id = '$bac'
  "; 
 $qr4 = "
UPDATE `giadien` 
SET T4 = $T4
WHERE id = '$bac'
  "; 
 $qr5 = "
UPDATE `giadien` 
SET T5 = $T5
WHERE id = '$bac'
  ";
 $qr6 = "
UPDATE `giadien` 
SET T6 = $T6
WHERE id = '$bac'
  "; 

 $qr7 = "
UPDATE `giadien` 
SET T7 = $T7
WHERE id = '$bac'
  "; 
 $qr8 = "
UPDATE `giadien` 
SET T8 = $T8
WHERE id = '$bac'
  "; 
 $qr9 = "
UPDATE `giadien` 
SET T9 = $T9
WHERE id = '$bac'
  "; 
 $qr10 = "
UPDATE `giadien` 
SET T10 = $T10
WHERE id = '$bac'
  ";
 $qr11 = "
UPDATE `giadien` 
SET T11 = $T11
WHERE id = '$bac'
  ";
 $qr12 = "
UPDATE `giadien` 
SET T12 = $T12
WHERE id = '$bac'
  ";
  echo $bac;

if (($conn->query($qr1) === TRUE)&&($conn->query($qr2) === TRUE)&&($conn->query($qr3) === TRUE)&&($conn->query($qr4) === TRUE)&&($conn->query($qr5) === TRUE)&&($conn->query($qr6) === TRUE)&&($conn->query($qr7) === TRUE)&&($conn->query($qr8) === TRUE)&&($conn->query($qr9) === TRUE)&&($conn->query($qr10) === TRUE)&&($conn->query($qr11) === TRUE)&&($conn->query($qr12) === TRUE)) 


{
    //echo "Record updated successfully";
    $_SESSION['flash'] = "<div class='alert alert-success'>
   Giá điện bậc <strong>" .$bac. "</strong> đã được thay đổi
</div>";
    header("location:admin1.php");
} else {
 	$_SESSION['flash'] = "<div class='alert alert-danger'>
   <strong>Cảnh báo!</strong> Lỗi kết nối cơ sỏ dữ liệu, vui lòng kiểm tra kết nối internet hoặc dữ liệu nhập vào
</div>";
    header("location:admin1.php");   
}

$conn->close();

 ?>
