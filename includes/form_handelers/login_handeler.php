<?php 
if(isset($_POST['login_button']))
{
	$email=filter_var($_POST['log_email'],FILTER_SANITIZE_EMAIL);
	
	$_SESSION['log_email']=$email;
	$password=md5($_POST['login_password']);

	$check_database_query=mysqli_query($con,"SELECT * FROM voters WHERE email='$email' AND password='$password'");
	$check_login_query=mysqli_num_rows($check_database_query);

	if($check_login_query==1)
	{
		$row=mysqli_fetch_array($check_database_query,MYSQLI_BOTH);
		$username1=$row['username'];
		//account open or closed
		$user_closed_query=mysqli_query($con,"SELECT * FROM voters WHERE email='$email' AND user_closed='yes'");
		if(mysqli_num_rows($user_closed_query)==1)
			$reopen_account=mysqli_query($con,"UPDATE voters SET user_closed='no' WHERE email='$email");
		$_SESSION['username']=$username1;
		header("Location:index.php");
		exit();
	}
	else
	{
		array_push($error_array,"Email or password is incorrect<br>");
	}
}