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
	include("includes/classes/Postr.php");

	if (isset($_SESSION['username'])) {
		$userLoggedIn = $_SESSION['username'];
		$user_details_query = mysqli_query($con, "SELECT * FROM voters WHERE username='$userLoggedIn'");
		$user = mysqli_fetch_array($user_details_query);
	}
	else {
		header("Location: login.php");
	}
	//Get id of post
	if(isset($_GET['post_id'])) {
		$post_id = $_GET['post_id'];
	}
	$get_likes=mysqli_query($con,"SELECT * FROM postr WHERE id='$post_id'");
	$row=mysqli_fetch_array($get_likes);
	$total_likes=$row['likes'];
	$user_liked=$row['added_by'];

	$user_details_query=mysqli_query($con,"SELECT * FROM voters WHERE username='$user_liked'");
	$row=mysqli_fetch_array($user_details_query);
	$total_user_likes=$row['num_likes'];
	//Like botton
	if(isset($_POST['like_button']))
	{
		$total_likes++;
		$query=mysqli_query($con,"UPDATE postr SET likes='$total_likes' WHERE id='$post_id'");
		$total_user_likes++;
		$user_likes=mysqli_query($con,"UPDATE voters SET num_likes='$total_user_likes' WHERE username='$user_liked'");
		$insert_user=mysqli_query($con,"INSERT INTO likes VALUES('','$userLoggedIn','','','','','','','','','','','','','','','','','','','$post_id','','','','','','','')");
		//Insert Notification

	}
	//Unlike Button
if(isset($_POST['unlike_button']))
	{
		$total_likes--;
		$query=mysqli_query($con,"UPDATE postr SET likes='$total_likes' WHERE id='$post_id'");
		$total_user_likes--;
		$user_likes=mysqli_query($con,"UPDATE voters SET num_likes='$total_user_likes' WHERE username='$user_liked'");
		$insert_user=mysqli_query($con,"DELETE FROM likes WHERE username='$userLoggedIn' AND post_idr='$post_id'");
	}
	//check for previous likes
	$check_query=mysqli_query($con,"SELECT * FROM likes WHERE username='$userLoggedIn' AND post_idr='$post_id'");
	$num_rows=mysqli_num_rows($check_query);
	if($num_rows > 0)
	{
		echo'<form action="likesr.php?post_id=' . $post_id.'" method="POST">
		<input type="submit" class="comment_like" name="unlike_button" value="Unlike">
		<div class="like_value">
		'.$total_likes.'Likes
		</div>
		</form>
		';
	}
	else
	{
		echo'<form action="likesr.php?post_id=' . $post_id.'" method="POST">
		<input type="submit" class="comment_like" name="like_button" value="Like">
		<div class="like_value">
		'.$total_likes.'Likes
		</div>
		</form>
		';;
	}
	?>

</body>
</html>