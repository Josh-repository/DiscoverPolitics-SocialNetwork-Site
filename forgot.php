<!DOCTYPE html>
<html>
<head>
	<title>Dp.Password Recovery</title>
	<link rel="stylesheet" type="text/css" href="assests/css/signin_style.css">
</head>
<body>
<div class="header_forgot">
	<h3>Discoverpolitics</h3>
</div>
<div class="box">
<form action="forgot.php" method="POST">
	<?php  
	require 'config/config.php';
	require 'includes/form_handelers/register_handeler.php';
	require 'includes/form_handelers/login_handeler.php';
	?>
	<h2 align="center">Password Recovery</h2>
	<h4 align="left">Enter mail to recover password</h4>
		<input type="email" name="check_email" placeholder="Login email" value="<?php 
			if(isset($_SESSION['check_email'])){
				echo $_SESSION['check_email'];
			} 
			?>"required>
		<br>
		<input type="submit" name="change_em" value="change"> <br><br>
		<?php if(in_array("Password was changed.Look your mail for new password.<br>",$error_array)) echo"Password was changed.Look your mail for new password.<br>";
		else
			 if(in_array("Email doesn't match<br>",$error_array)) echo"Email doesn't match<br>";
		?>
		<br>
		<a href="login.php">Cancel</a>
</form>
</div>
</body>
</html>