<?php 
session_start();
$wrong="";
if(isset($_POST['login']))
{
   if((($_POST['email']=="lecaonguyen1993@gmail.com")&&($_POST['pwd']=="123456"))||(($_POST['email']=="11141018@student.hcmute.edu.vn")&&($_POST['pwd']=="123456")))
   { 
   	if($_POST['email']=="lecaonguyen1993@gmail.com") 
	 {$_SESSION["user"] = "Nguyên" ;}
	 else { $_SESSION["user"] = "Chính" ;}
	 header("location: admin.php");
   }
   else {$wrong="Sai tên người dùng hoặc mật khẩu, vui lòng đăng nhập lại";}
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Đăng nhập</title>
	<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.8/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
<div class="containter">
	<div class="row" id="form-login">

	<div class="col-md-4 col-md-offset-4" id="form-center">
		 <form  method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
		  <div class="form-group">
		    <label for="email">Email:</label>
		    <input type="email" class="form-control" id="email" name="email">
		  </div>
		  <div class="form-group">
		    <label for="pwd">Password:</label>
		    <input type="password" class="form-control" id="pwd" name="pwd">
		  </div>
		  <div class="checkbox">
		    <label><?php echo $wrong; ?></label>
		  </div>
		  <button type="submit" class="btn btn-success btn-block" name="login">Đăng nhập</button>
		  <a href="/chinh" type="button" class="btn btn-link"><span class="glyphicon glyphicon-home"></span> Về trang chủ</a>     
		</form>
	</div>
</div>
</div>

</body>
</html>