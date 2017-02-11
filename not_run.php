<?php 
//file này để update chỉ số công tơ vào mỗi ngày 1 hàng tháng, file này chỉ chạy 1 lần.click run file và thoát, file sẽ được chạy ngầm trong background
$command = 'php update.php';
pclose(popen($command,'r'));


 ?>