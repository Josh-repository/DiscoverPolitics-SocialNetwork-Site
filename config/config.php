<?php 
session_start();
ob_start();
session_save_path();
$timezone=date_default_timezone_set("Asia/Colombo");
$con=mysqli_connect("localhost","root","","projectx");
if(mysqli_connect_errno())
{
	echo"failed" . mysqli_connect_errno();
}
?>