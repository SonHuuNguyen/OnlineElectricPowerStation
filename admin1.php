
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

 $qr1 = "
SELECT * FROM `giadien`
WHERE id = 1
  "; 
$result1 = $conn->query($qr1);
$bac1 = $result1->fetch_assoc();
//======================
 $qr2 = "
SELECT * FROM `giadien`
WHERE id = 2
  "; 
$result2 = $conn->query($qr2);
$bac2 = $result2->fetch_assoc();
 //======================
 $qr3 = "
SELECT * FROM `giadien`
WHERE id = 3
  "; 
$result3 = $conn->query($qr3);
$bac3 = $result3->fetch_assoc();
 //======================
 $qr4 = "
SELECT * FROM `giadien`
WHERE id = 4
  "; 
$result4 = $conn->query($qr4);
$bac4 = $result4->fetch_assoc();
//======================
 $qr5 = "
SELECT * FROM `giadien`
WHERE id = 5
  "; 
$result5 = $conn->query($qr5);
$bac5 = $result5->fetch_assoc();
//======================
 $qr6 = "
SELECT * FROM `giadien`
WHERE id = 6
  "; 
$result6 = $conn->query($qr6);
$bac6 = $result6->fetch_assoc();


?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Trạm giám sát</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/bootstrap.min.css" />
<link rel="stylesheet" href="css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="css/fullcalendar.css" />
<link rel="stylesheet" href="css/matrix-style.css" />
<link rel="stylesheet" href="css/matrix-media.css" />
<link rel="stylesheet" href="css/dasboard.css" />
<link href="font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="css/jquery.gritter.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script src="js/dasboard.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Quản lý giá điện</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Xin chào <?php echo $_SESSION["user"] ?></span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i>Profile</a></li>
        <li class="divider"></li>
        <li class="divider"></li>
        <li><a href="admin1.php?logout=1"><i class="icon-key"></i> Log Out</a></li>
      </ul>
    </li>
    
  </ul>
</div>
<!--close-top-Header-menu-->
<!--start-top-serch-->
<div id="search">
  <input type="text" placeholder="Tìm kiếm..."/>
  <button type="submit" class="tip-bottom" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<!--close-top-serch-->
<!--sidebar-menu-->
<div id="sidebar"><a href="#" class="visible-phone"><i class="icon icon-home"></i>Bảng giám sát</a>
  <ul>
    <li><a href="admin.php"><i class="icon icon-home"></i> <span>Bảng giám sát</span></a> </li>
    <li  class="active"> <a href="admin1.php"><i class="icon icon-signal"></i> <span>Quản lý giá điện</span></a> </li>
    <li> <a href="admin2.php"><i class="icon icon-user"></i> <span>Quản lý người dùng</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Các quận huyện</span> <span class="label label-important">24</span></a>
      <ul>
        <li><a href="#">Quận 1</a></li>
        <li><a href="#">Quận 2</a></li>
        <li><a href="#">Quận 3</a></li>
        <li><a href="#">Quận 4</a></li>
        <li><a href="#">Quận 5</a></li>
        <li><a href="#">Quận 6</a></li>
        <li><a href="#">Quận 7</a></li>
        <li><a href="#">Quận 8</a></li>
        <li><a href="#">Quận 9</a></li>
        <li><a href="#">Quận 10</a></li>
        <li><a href="#">Quận 11</a></li>
        <li><a href="#">Quận 12</a></li>
        <li><a href="#">Quận Thủ Đức</a></li>
        <li><a href="#">Quận Gò Vấp</a></li>
        <li><a href="#">Quận Bình Thạnh</a></li>
        <li><a href="#">Quận Tân Bình</a></li>
        <li><a href="#">Quận Tân Phú</a></li>
        <li><a href="#">Quận Phú Nhuận</a></li>
        <li><a href="#">Quận Bình Tân</a></li>
        <li><a href="#">Huyện Củ Chi</a></li>
        <li><a href="#">Huyện Hóc Môn</a></li>
        <li><a href="#">Huyện Bình Chánh</a></li>
        <li><a href="#">Huyện Nhà Bè</a></li>
        <li><a href="#">Huyện Cần Giờ</a></li>

       
      </ul>
    </li>
    

  </ul>
</div>
<!--sidebar-menu-->

<!--main-container-part-->
<div id="content">
<?php 
if (isset($_SESSION['flash'])) { 

   echo $_SESSION['flash'];

   unset($_SESSION['flash']);
}
?>
<div class="container-fluid" >
<h3 class="lead">Bảng quản lý giá điện</h3>
   <table class="table table-striped ">

    <tbody>
       <tr>
        <td><strong>Tháng</strong></td>
        <td><strong>T1</strong></td>
        <td><strong>T2</strong></td>
        <td><strong>T3</strong></td>
        <td><strong>T4</strong></td>
        <td><strong>T5</strong></td>
        <td><strong>T6</strong></td>
        <td><strong>T7</strong></td>
        <td><strong>T8</strong></td>
        <td><strong>T9</strong></td>
        <td><strong>T10</strong></td>
        <td><strong>T11</strong></td>
        <td><strong>T12</strong></td>
        <td><strong></strong></td>
      </tr>
      <tr id="gia_dien_bac_1">
        <td>Bậc 1 (0-50)</td>
        <td><?php echo $bac1['T1'];?></td>
        <td><?php echo $bac1['T2'];?></td>
        <td><?php echo $bac1['T3'];?></td>
        <td><?php echo $bac1['T4'];?></td>
        <td><?php echo $bac1['T5'];?></td>
        <td><?php echo $bac1['T6'];?></td>
        <td><?php echo $bac1['T7'];?></td>
        <td><?php echo $bac1['T8'];?></td>
        <td><?php echo $bac1['T9'];?></td>
        <td><?php echo $bac1['T10'];?></td>
        <td><?php echo $bac1['T11'];?></td>
        <td><?php echo $bac1['T12'];?></td>
        <td><button class='btn btn-xs btn-primary' onclick="sua_gia_dien(1)">Sửa</button></td>
      </tr>
     <tr id="gia_dien_bac_2">
        <td>Bậc 2 (51-100)</td>
        <td><?php echo $bac2['T1'];?></td>
        <td><?php echo $bac2['T2'];?></td>
        <td><?php echo $bac2['T3'];?></td>
        <td><?php echo $bac2['T4'];?></td>
        <td><?php echo $bac2['T5'];?></td>
        <td><?php echo $bac2['T6'];?></td>
        <td><?php echo $bac2['T8'];?></td>
        <td><?php echo $bac2['T7'];?></td>
        <td><?php echo $bac2['T9'];?></td>
        <td><?php echo $bac2['T10'];?></td>
        <td><?php echo $bac2['T11'];?></td>
        <td><?php echo $bac2['T12'];?></td>
        <td><button class='btn btn-xs btn-primary' onclick="sua_gia_dien(2)">Sửa</button></td>
      </tr>
      <tr id="gia_dien_bac_3">
        <td>Bậc 3 (101-200)</td>
        <td><?php echo $bac3['T1'];?></td>
        <td><?php echo $bac3['T2'];?></td>
        <td><?php echo $bac3['T3'];?></td>
        <td><?php echo $bac3['T4'];?></td>
        <td><?php echo $bac3['T5'];?></td>
        <td><?php echo $bac3['T6'];?></td>
        <td><?php echo $bac3['T8'];?></td>
        <td><?php echo $bac3['T7'];?></td>
        <td><?php echo $bac3['T9'];?></td>
        <td><?php echo $bac3['T10'];?></td>
        <td><?php echo $bac3['T11'];?></td>
        <td><?php echo $bac3['T12'];?></td>
        <td><button class='btn btn-xs btn-primary' onclick="sua_gia_dien(3)">Sửa</button></td>
      </tr>
      <tr id="gia_dien_bac_4">
        <td>Bậc 4 (201-300)</td>
        <td><?php echo $bac4['T1'];?></td>
        <td><?php echo $bac4['T2'];?></td>
        <td><?php echo $bac4['T3'];?></td>
        <td><?php echo $bac4['T4'];?></td>
        <td><?php echo $bac4['T5'];?></td>
        <td><?php echo $bac4['T6'];?></td>
        <td><?php echo $bac4['T8'];?></td>
        <td><?php echo $bac4['T7'];?></td>
        <td><?php echo $bac4['T9'];?></td>
        <td><?php echo $bac4['T10'];?></td>
        <td><?php echo $bac4['T11'];?></td>
        <td><?php echo $bac4['T12'];?></td>
        <td><button class='btn btn-xs btn-primary' onclick="sua_gia_dien(4)">Sửa</button></td>
      </tr>
      <tr id="gia_dien_bac_5">
        <td>Bậc 5 (301-400)</td>
        <td><?php echo $bac5['T1'];?></td>
        <td><?php echo $bac5['T2'];?></td>
        <td><?php echo $bac5['T3'];?></td>
        <td><?php echo $bac5['T4'];?></td>
        <td><?php echo $bac5['T5'];?></td>
        <td><?php echo $bac5['T6'];?></td>
        <td><?php echo $bac5['T8'];?></td>
        <td><?php echo $bac5['T7'];?></td>
        <td><?php echo $bac5['T9'];?></td>
        <td><?php echo $bac5['T10'];?></td>
        <td><?php echo $bac5['T11'];?></td>
        <td><?php echo $bac5['T12'];?></td>
        <td><button class='btn btn-xs btn-primary' onclick="sua_gia_dien(5)">Sửa</button></td>
      </tr>
    <tr id="gia_dien_bac_6">
        <td>Bậc 6 (401 trở lên)</td>
        <td><?php echo $bac6['T1'];?></td>
        <td><?php echo $bac6['T2'];?></td>
        <td><?php echo $bac6['T3'];?></td>
        <td><?php echo $bac6['T4'];?></td>
        <td><?php echo $bac6['T5'];?></td>
        <td><?php echo $bac6['T6'];?></td>
        <td><?php echo $bac6['T8'];?></td>
        <td><?php echo $bac6['T7'];?></td>
        <td><?php echo $bac6['T9'];?></td>
        <td><?php echo $bac6['T10'];?></td>
        <td><?php echo $bac6['T11'];?></td>
        <td><?php echo $bac6['T12'];?></td>
        <td><button class='btn btn-xs btn-primary' onclick="sua_gia_dien(6)">Sửa</button></td>
      </tr>

  
    </tbody>
  </table>

<h3 id="bx_label" class="hidden">Chỉnh sửa giá điện <small>(Đơn vị : Vnđ)</small></h3>



  <table class="table table-striped ">

    <tbody>
       <tr id="bx" class="hidden">
        <td><strong>Tháng</strong></td>
        <td><strong>T1 </strong></td>
        <td><strong>T2 </strong></td>
        <td><strong>T3 </strong></td>
        <td><strong>T4 </strong></td>
        <td><strong>T5 </strong></td>
        <td><strong>T6 </strong></td>
        <td><strong>T7 </strong></td>
        <td><strong>T8 </strong></td>
        <td><strong>T9 </strong></td>
        <td><strong>T10</strong></td>
        <td><strong>T11</strong></td>
        <td><strong>T12</strong></td>
        <td><strong></strong></td>
      </tr>
      <form action="admin1_submit.php" method="post" accept-charset="utf-8">
      <tr id="b1" class="titi">
        <td>Bậc 1</td>
        <td><input type="text" name="T1" value="<?php echo $bac1['T1'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T2" value="<?php echo $bac1['T2'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T3" value="<?php echo $bac1['T3'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T4" value="<?php echo $bac1['T4'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T5" value="<?php echo $bac1['T5'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T6" value="<?php echo $bac1['T6'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T7" value="<?php echo $bac1['T7'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T8" value="<?php echo $bac1['T8'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T9" value="<?php echo $bac1['T9'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T10" value="<?php echo $bac1['T10'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T11" value="<?php echo $bac1['T11'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T12" value="<?php echo $bac1['T12'];?>" style="width:40px !important;"></td> 
        <input type="hidden" name="bac_submit" value="1"> 
        <td><button type="submit" class='btn btn-xs btn-primary'>Lưu</button></td>
      </tr>
      </form>
      <form action="admin1_submit.php" method="post" accept-charset="utf-8">
      <tr id="b2" class="titi">
        <td>Bậc 2</td>
        <td><input type="text" name="T1"  value="<?php echo $bac2['T1'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T2"  value="<?php echo $bac2['T2'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T3"  value="<?php echo $bac2['T3'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T4"  value="<?php echo $bac2['T4'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T5"  value="<?php echo $bac2['T5'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T6"  value="<?php echo $bac2['T6'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T7"  value="<?php echo $bac2['T7'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T8"  value="<?php echo $bac2['T8'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T9"  value="<?php echo $bac2['T9'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T10" value="<?php echo $bac2['T10'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T11" value="<?php echo $bac2['T11'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T12" value="<?php echo $bac2['T12'];?>" style="width:40px !important;"></td>
        <input type="hidden" name="bac_submit" value="2"> 
        <td><button type="submit" class='btn btn-xs btn-primary'>Lưu</button></td>
      </tr>
      </form>
      <form action="admin1_submit.php" method="post" accept-charset="utf-8">
      <tr id="b3" class="titi">
        <td>Bậc 3</td>
        <td><input type="text" name="T1"  value="<?php echo $bac3['T1'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T2"  value="<?php echo $bac3['T2'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T3"  value="<?php echo $bac3['T3'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T4"  value="<?php echo $bac3['T4'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T5"  value="<?php echo $bac3['T5'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T6"  value="<?php echo $bac3['T6'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T7"  value="<?php echo $bac3['T7'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T8"  value="<?php echo $bac3['T8'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T9"  value="<?php echo $bac3['T9'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T10" value="<?php echo $bac3['T10'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T11" value="<?php echo $bac3['T11'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T12" value="<?php echo $bac3['T12'];?>" style="width:40px !important;"></td>
        <input type="hidden" name="bac_submit" value="3">
        <td><button type="submit" class='btn btn-xs btn-primary'>Lưu</button></td>
      </tr>
      </form>
      <form action="admin1_submit.php" method="post" accept-charset="utf-8">
      <tr id="b4" class="titi">
        <td>Bậc 4</td>
        <td><input type="text" name="T1"  value="<?php echo $bac4['T1'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T2"  value="<?php echo $bac4['T2'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T3"  value="<?php echo $bac4['T3'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T4"  value="<?php echo $bac4['T4'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T5"  value="<?php echo $bac4['T5'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T6"  value="<?php echo $bac4['T6'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T7"  value="<?php echo $bac4['T7'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T8"  value="<?php echo $bac4['T8'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T9"  value="<?php echo $bac4['T9'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T10" value="<?php echo $bac4['T10'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T11" value="<?php echo $bac4['T11'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T12" value="<?php echo $bac4['T12'];?>" style="width:40px !important;"></td>
        <input type="hidden" name="bac_submit" value="4"> 
        <td><button type="submit" class='btn btn-xs btn-primary'>Lưu</button></td>
      </tr>
      </form>
      <form action="admin1_submit.php" method="post" accept-charset="utf-8">
      <tr id="b5" class="titi">
        <td>Bậc 5</td>
        <td><input type="text" name="T1"  value="<?php echo $bac5['T1'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T2"  value="<?php echo $bac5['T2'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T3"  value="<?php echo $bac5['T3'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T4"  value="<?php echo $bac5['T4'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T5"  value="<?php echo $bac5['T5'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T6"  value="<?php echo $bac5['T6'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T7"  value="<?php echo $bac5['T7'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T8"  value="<?php echo $bac5['T8'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T9"  value="<?php echo $bac5['T9'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T10" value="<?php echo $bac5['T10'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T11" value="<?php echo $bac5['T11'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T12" value="<?php echo $bac5['T12'];?>" style="width:40px !important;"></td>
        <input type="hidden" name="bac_submit" value="5">
        <td><button type="submit" class='btn btn-xs btn-primary'>Lưu</button></td>
      </tr>
      </form>
      <form action="admin1_submit.php" method="post" accept-charset="utf-8">
      <tr id="b6" class="titi">
        <td>Bậc 6</td>
        <td><input type="text" name="T1"  value="<?php echo $bac6['T1'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T2"  value="<?php echo $bac6['T2'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T3"  value="<?php echo $bac6['T3'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T4"  value="<?php echo $bac6['T4'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T5"  value="<?php echo $bac6['T5'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T6"  value="<?php echo $bac6['T6'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T7"  value="<?php echo $bac6['T7'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T8"  value="<?php echo $bac6['T8'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T9"  value="<?php echo $bac6['T9'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T10" value="<?php echo $bac6['T10'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T11" value="<?php echo $bac6['T11'];?>" style="width:40px !important;"></td>
        <td><input type="text" name="T12" value="<?php echo $bac6['T12'];?>" style="width:40px !important;"></td>
        <input type="hidden" name="bac_submit" value="6"> 
        <td><button type="submit" class='btn btn-xs btn-primary'>Lưu</button></td>
      </tr>
      </form>
      </tbody>
    </table>
  </div>
</div>

<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> 2016 &copy; Đồ Án Tốt Nghiệp - Võ Duy Chính - Lê Cao Nguyên</div>
</div>

<!--end-Footer-part-->

<script src="js/excanvas.min.js"></script> 
<script src="js/jquery.min.js"></script> 
<script src="js/jquery.ui.custom.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.flot.min.js"></script> 
<script src="js/jquery.flot.resize.min.js"></script> 
<script src="js/jquery.peity.min.js"></script> 
<script src="js/fullcalendar.min.js"></script> 
<script src="js/matrix.js"></script> 
<script src="js/matrix.dashboard.js"></script> 
<script src="js/jquery.gritter.min.js"></script> 
<script src="js/matrix.interface.js"></script> 
<script src="js/matrix.chat.js"></script> 
<script src="js/jquery.validate.js"></script> 
<script src="js/matrix.form_validation.js"></script> 
<script src="js/jquery.wizard.js"></script> 
<script src="js/jquery.uniform.js"></script> 
<script src="js/select2.min.js"></script> 
<script src="js/matrix.popover.js"></script> 
<script src="js/jquery.dataTables.min.js"></script> 
<script src="js/matrix.tables.js"></script> 

</body>
</html>
