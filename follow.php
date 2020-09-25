<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" type="text/css" href="assests/css/style.css">
</head>
<body>

	<style type="text/css">
	
	*{
		font-family: Helvetica,sans-serif;
	}	
		body{
			background-color: #fff;
		}
		 form{
		position: absolute;
		top:0;
		}
	</style>
	<?php  
	require 'config/config.php';
	include("includes/classes/User.php");
	if (isset($_SESSION['username'])) 
	{
		$userLoggedIn = $_SESSION['username'];
		$user_details_query = mysqli_query($con, "SELECT * FROM voters WHERE username='$userLoggedIn'");
		$user = mysqli_fetch_array($user_details_query);
	}
	if(isset($_GET['name'])) 
	{
	$to_follow=$_GET['name'];
	}
	if(isset($_POST['remove']))
	{
		$user=new User($con,$userLoggedIn);
		$user->Unfollow($to_follow);
	}
	if(isset($_POST['add']))
	{
		$user=new User($con,$userLoggedIn);
		$user->Follow($to_follow);
	}
	$array_follow= new User($con,$userLoggedIn);
	if($userLoggedIn!=$to_follow)
		{
		if($array_follow->isFriend($to_follow))
		{
			$follow="<input type='submit' name='remove' class='danger' value='Unfollow' width:'30px'><br>";
		}
		else
			$follow='<input type="submit" name="add" class="success" value="Follow" width="30px"><br>';
		}
	else
	$follow="";	
		echo'<form action="follow.php?name='.$to_follow.'" method="POST">
		'.$follow.'
		</form>';
?>
	











	