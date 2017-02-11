<?php
session_start();

if(isset($_GET['logout']))
{
  unset($_SESSION["user"]); 
}
if(!isset($_SESSION["user"])){
  header("location: login.php");
}

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
if(isset($_GET['del_id'])) {
  $id=$_GET['del_id'];
  $qr= "DELETE FROM `diennang` WHERE id = '$id'
  ";
  $qr1= "DELETE FROM `month` WHERE id = '$id'
  ";
  if(($conn->query($qr)===TRUE)&&($conn->query($qr1)===TRUE)){
    $_SESSION['flash']="<div class='alert alert-success'>
   Khách hàng với id =" .$id." đã được xóa

</div>";


    echo "ok";}
    else{

      $_SESSION['flash']="<div class='alert alert-success'>
   Khách hàng với id =" .$id." đã được xóa

</div>";


    echo "ok";
    }

}
else
{
  $id=$_GET['id_user'];
$ten=$_GET['name'];
$diachi=$_GET['address'];
$sdt=$_GET['phone'];

 $qr1 = "
UPDATE `diennang` SET `Ten` = '$ten'
WHERE id = $id;
  "; 
 $qr2 = "
UPDATE `diennang` SET `Dia_Chi` = '$diachi'
WHERE id = $id;
  "; 
 $qr3 = "
UPDATE `diennang` SET `Sdt` = '$sdt'
WHERE id = $id;
  "; 


if(($conn->query($qr1)===TRUE)&&($conn->query($qr2)===TRUE)&&($conn->query($qr3)===TRUE))
  {
    $_SESSION['flash'] = "<div class='alert alert-success'>
   Thông tin khách hàng với id =" .$id." đã được thay đổi

</div>";
    $conn->close();
    header("location:admin2.php");
  }
else {

   $_SESSION['flash'] =  "<div class='alert alert-success'>
   Lỗi kết nối cơ sở dữ liệu
</div>";
    $conn->close();
    header("location:admin2.php");
}

}





 ?>
