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
$ten=$_GET['name'];
$diachi=$_GET['address'];
$phuong=$_GET['phuong'];
$sdt=$_GET['phone'];

$qr = "
INSERT INTO `diennang` (`id`, `Ten`, `Sdt`, `Phuong`, `Phuong_kd`, `Quan`, `Dia_Chi`, `Chi_So`) VALUES (NULL, '$ten', '$sdt', '$phuong', '', 'Thủ Đức', '$diachi', '0');
";
  if($conn->query($qr)===TRUE){
    $_SESSION['flash']="<div class='alert alert-success'>
  	 Khách hàng " .$ten." đã được thêm vào hệ thống
	 </div>";
		}
    else{

      $_SESSION['flash']="<div class='alert alert-success'>
      Lỗi kết nối cơ sở dữ liệu
      </div>";
    }
     $conn->close();
    header("location:admin2.php");

 ?>