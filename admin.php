<?php 
session_start();

if(isset($_GET['logout']))
{
  unset($_SESSION["user"]); 
}
if(!isset($_SESSION["user"])){
  header("location: login.php");
}

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
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>

<script src="js/dasboard.js"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>

</head>
<body>

<!--Header-part-->
<div id="header">
  <h1><a href="dashboard.html">Trạm giám sát</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<div id="user-nav" class="navbar navbar-inverse">
  <ul class="nav">
    <li  class="dropdown" id="profile-messages" ><a title="" href="#" data-toggle="dropdown" data-target="#profile-messages" class="dropdown-toggle"><i class="icon icon-user"></i>  <span class="text">Xin chào <?php echo $_SESSION["user"]; ?></span><b class="caret"></b></a>
      <ul class="dropdown-menu">
        <li><a href="#"><i class="icon-user"></i>Profile</a></li>
        <li class="divider"></li>
        <li class="divider"></li>
        <li><a href="admin.php?logout=1"><i class="icon-key"></i> Log Out</a></li>
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
    <li class="active"><a href="admin.php"><i class="icon icon-home"></i> <span>Bảng giám sát</span></a> </li>
    <li> <a href="admin1.php"><i class="icon icon-signal"></i> <span>Quản lý giá điện</span></a> </li>
    <li> <a href="admin2.php"><i class="icon icon-user"></i> <span>Quản lý người dùng</span></a> </li>
    <li class="submenu"> <a href="#"><i class="icon icon-th-list"></i> <span>Các quận huyện</span> <span class="label label-important">24</span></a>
      <ul>
        <li><a href="not_run.php">Quận 1</a></li>
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
<!--breadcrumbs-->
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.html" title="Go to Home" class="tip-bottom"><i class="icon-home"></i>Quận Thủ Đức</a></div>
  </div>
<!--End-breadcrumbs-->

<!--Action boxes-->
  <div class="container-fluid">
    <div class="quick-actions_homepage">
      <ul class="quick-actions">
        <li class="bg_lb"> <a href="#" class="not-active" id="pbc"> <i class="icon-signal"></i><span class="label label-important">0</span>Bình Chiểu</a> </li>
        <li class="bg_lg"> <a href="#" class="not-active" id="pbt"> <i class="icon-signal"></i><span class="label label-important">0</span>Bình Thọ</a> </li>
        <li class="bg_ly"> <a href="#" class="not-active" id="phbc"> <i class="icon-signal"></i><span class="label label-important">0</span>Hiệp Bình Chánh</a> </li>
        <li class="bg_lo"> <a href="#" class="not-active" id="phbp"> <i class="icon-signal"></i><span class="label label-important">0</span>Hiệp Bình Phước</a> </li>
        <li class="bg_ls"> <a href="#" class="not-active" id="plc"> <i class="icon-signal"></i><span class="label label-important">0</span>Linh Chiểu</a> </li>
        <li class="bg_lo"> <a href="#" class="not-active" id="pld"> <i class="icon-signal"></i><span class="label label-important">0</span>Linh Đông</a> </li>
        <li class="bg_lr"> <a href="#" class="not-active" id="plt"> <i class="icon-signal"></i><span class="label label-important">0</span>Linh Trung</a> </li>
        <li class="bg_lb"> <a href="#" class="not-active" id="pltt"> <i class="icon-signal"></i><span class="label label-important">0</span>Linh Tây</a> </li>
        <li class="bg_lg"> <a href="#" class="not-active" id="plx"> <i class="icon-signal"></i><span class="label label-important">0</span>Linh Xuân</a> </li>
        <li class="bg_ls"> <a href="#" class="not-active" id="ptb"> <i class="icon-signal"></i><span class="label label-important">0</span>Tam Bình</a> </li>
        <li class="bg_ly"> <a href="#" class="not-active" id="ptp"> <i class="icon-signal"></i><span class="label label-important">0</span>Tam Phú</a> </li>
        <li class="bg_lr"> <a href="#" class="not-active" id="ptt"> <i class="icon-signal"></i><span class="label label-important">0</span>Trường Thọ</a> </li>

      </ul>
    </div>
<!--End-Action boxes--> 
<div class="container-fluid" >

<h5>&nbsp</h5>
<h5 class="lead">Danh sách hộ sử dụng các hộ sử dung điện phường <span id ="phuong">(-_-)</span>-Thủ Đức</h5>
  <table class="table table-striped ">

    <tbody  id="list_e_user">
       <tr>
        <td><strong>ID</strong></td>
        <td><strong>Tên chủ hộ</strong></td>
        <td><strong>Địa chỉ</strong></td>
        <td><strong>SDT</strong></td>
         <td><strong>Xem</strong></td>
      </tr>
    </tbody>
  </table>
  <div class="well">
    <h5 class="lead">Bảng theo dõi điện năng sử dụng hàng tháng</h5>
    <h4 id="e_user">(-_-)</h4>
    <p id="e_user_add">(^_^)</p> 
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
      </tr>
      <tr id="chi_so_cong_to">
        <td>Chỉ số công tơ</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
       <tr id="dien_nang_tieu_thu">
        <td>Điện năng tiêu thụ</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>
       <tr id="thanh_tien">
        <td>Thành tiền</td>
        <td>20</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
        <td>0</td>
      </tr>

  
    </tbody>
  </table>
  <p class="lead">Chỉ số công tơ hiện tại : <span class="lead"><strong id="chi_so_hien_tai">0</strong> KWh</span></p>
  </div>
</div>
<!--Chart-box-->    
    <div class="row-fluid">
      <div class="widget-box">
        <div class="widget-title bg_lg"><span class="icon"><i class="icon-signal"></i></span>
          <h5>Biểu đồ điện năng sử dụng trong năm</h5>
        </div>
        <div class="widget-content" >
          <div class="row-fluid">
            <div class="span12">
             <!--  <div class="chart"></div> -->
             <canvas id="myChart" width="400" height="200"></canvas>
             <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.bundle.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>
<!-- <script src="js/dasboard.js"></script> -->

            </div>
          </div>
        </div>
      </div>
    </div>
<!--End-Chart-box--> 
    <hr/>
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
