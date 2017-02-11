<?php


$phuong=$_GET["phuong"];

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
    $rowcount=mysqli_num_rows($result);
  //var_dump($result);
  //var_dump($result->fetch_assoc());
  echo "<tr>
        <td><strong>ID</strong></td>
        <td><strong>Tên chủ hộ</strong></td>
        <td><strong>Địa chỉ</strong></td>
        <td><strong>SDT</strong></td>
         <td><strong>Xem</strong></td>
      </tr>";

 while($row = $result->fetch_assoc()) {
        echo "<tr>
        <td>".$row['id']."</td>
        <td>".$row['Ten'] ."</td>
        <td>".$row['Dia_Chi']."</td>
        <td>".$row['Sdt']."</td> <td><button class='btn btn-xs btn-success' onclick='load_user(\"each_user.php?id=".$row['id']."\"); load2();'>Xem</button></td>";
    }
    echo "numnum" . $rowcount . "e";
$conn->close();
 ?>
