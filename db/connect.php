<?php
$con = mysqli_connect("localhost","root","","banmaytinh");
//localhost la cong 8080
////ten tai khoan dang nhap root va mat khau di
// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
   // exit();
}
// Change character set to utf8
mysqli_set_charset($con,"utf8");

 
?>