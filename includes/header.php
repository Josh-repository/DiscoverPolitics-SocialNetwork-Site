<?php 
//database connectivity....
require 'config/config.php';
//checking user logged in
if(isset($_SESSION['username']))
{
 	$userLoggedIn=$_SESSION['username'];
 	$user_details_query=mysqli_query($con,"SELECT * FROM voters WHERE username='$userLoggedIn'");
 	$user=mysqli_fetch_array($user_details_query);
 	$party=mysqli_query($con,"SELECT * FROM partyname");
    $value=mysqli_fetch_array($party);

}
else
{
	header("Location:login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>zlatan</title>
	
	<!-- java script -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="assests/js/bootstrap.js"></script>
	<script src="assests/js/bootbox.min.js"></script>
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="assests/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assests/css/style.css">

</head>
<body>
<div class="top_bar">
		<div class="logo">
			
<a href="index.php">zlatan</a>

		</div>
	<nav>
		<a href="<?php echo $userLoggedIn;?>">
			<?php echo $user['username'];?>
		</a>
		<a href="index.php">home</a>
		<a href="request.php">request</a>
		<a href="#">play</a>
		<a href="includes/handelers/logout.php">out</a>

	</nav>
</div>
<div class="wrapper">









