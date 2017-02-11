<?php 
session_start();

if(isset($_GET['logout']))
{
  unset($_SESSION["user"]); 
}
if(!isset($_SESSION["user"])){
  header("location: login.php");
}


function khungtieuthu($chiso) {
    $khung_s = 1;
	if($chiso<50) {$khung_s=1;}
	elseif ($chiso<100) {$khung_s=2;}
	elseif ($chiso<200) {$khung_s=3;}
	elseif ($chiso<300) {$khung_s=4;}
	elseif ($chiso<400) {$khung_s=5;}
	else {$khung_s=6;}
	return $khung_s;
}

$id= $_GET["id"];

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "u458728455_uno";


$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
 }
$conn->query("SET NAMES 'UTF8'"); //Tiếng Việt

$qr = "
SELECT * FROM `diennang`
WHERE id = '$id'
  "; 
 $result = $conn->query($qr);
 $row = $result->fetch_assoc();
 echo $row['Ten'];
 echo "diachi". $row['Dia_Chi'];

$qr2 = "
SELECT * FROM `month`
WHERE id = '$id'
  "; 
 $result2 = $conn->query($qr2);
 $row2 = $result2->fetch_assoc();


function tinh_tien($chiso, $thang)
{
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "u458728455_uno";
$conn = new mysqli($servername, $username, $password, $dbname);
$khung=khungtieuthu($chiso);
$qr3 = "
SELECT * FROM `giadien`
WHERE id = '$khung'
  "; 
 $result3 = $conn->query($qr3);
 $row3 = $result3->fetch_assoc();
 $t = 'T'.$thang;
 $gia_dien = $chiso * $row3[$t];
  $conn->close();
 return round($gia_dien,2);
}



 echo   "chiso".
        "<td>Chỉ số công tơ</td>
        <td>".$row2['T1']."</td>
        <td>".$row2['T2']."</td>
        <td>".$row2['T3']."</td>
        <td>".$row2['T4']."</td>
        <td>".$row2['T5']."</td>
        <td>".$row2['T6']."</td>
        <td>".$row2['T7']."</td>
        <td>".$row2['T8']."</td>
        <td>".$row2['T9']."</td>
        <td>".$row2['T10']."</td>
        <td>".$row2['T11']."</td>
        <td>".$row2['T12']."</td>";

echo   "tieuthu".
        "<td>Điện năng tiêu thụ</td>
        <td>".$row2['T1']."</td>
        <td>".($row2['T2'] - $row2['T1'])."</td>
        <td>".($row2['T3'] - $row2['T2'])."</td>
        <td>".($row2['T4'] - $row2['T3'])."</td>
        <td>".($row2['T5'] - $row2['T4'])."</td>
        <td>".($row2['T6'] - $row2['T5'])."</td>
        <td>".($row2['T7'] - $row2['T6'])."</td>
        <td>".($row2['T8'] - $row2['T7'])."</td>
        <td>".($row2['T9'] - $row2['T8'])."</td>
        <td>".($row2['T10'] - $row2['T9'])."</td>
        <td>".($row2['T11'] - $row2['T10'])."</td>
        <td>".($row2['T12'] - $row2['T11'])."</td>";
echo   "giatien".
        "<td>Thành tiền</td>
        <td>".tinh_tien($row2['T1'], 1)."</td>
        <td>".tinh_tien(($row2['T2'] - $row2['T1']), 2)."</td>
        <td>".tinh_tien(($row2['T3'] - $row2['T2']), 3)."</td>
        <td>".tinh_tien(($row2['T4'] - $row2['T3']), 4)."</td>
        <td>".tinh_tien(($row2['T5'] - $row2['T4']), 5)."</td>
        <td>".tinh_tien(($row2['T6'] - $row2['T5']), 6)."</td>
        <td>".tinh_tien(($row2['T7'] - $row2['T6']), 7)."</td>
        <td>".tinh_tien(($row2['T8'] - $row2['T7']), 8)."</td>
        <td>".tinh_tien(($row2['T9'] - $row2['T8']), 9)."</td>
        <td>".tinh_tien(($row2['T10'] - $row2['T9']), 10)."</td>
        <td>".tinh_tien(($row2['T11'] - $row2['T10']), 11)."</td>
        <td>".tinh_tien(($row2['T12'] - $row2['T11']), 12)."</td>";

echo "chisohientai". $row['Chi_So'];

$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = $row2['T1']." ".($row2['T2'] - $row2['T1'])." ".($row2['T3'] - $row2['T2'])." ".($row2['T4'] - $row2['T3'])." ".($row2['T5'] - $row2['T4'])." ".($row2['T6'] - $row2['T5'])." ".($row2['T7'] - $row2['T6'])." ".($row2['T8'] - $row2['T7'])." ".($row2['T9'] - $row2['T8'])." ".($row2['T10'] - $row2['T9'])." ".($row2['T11'] - $row2['T10'])." ".($row2['T12'] - $row2['T11']);
fwrite($myfile, $txt);
fclose($myfile);
 $conn->close();

 ?>
 