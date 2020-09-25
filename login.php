<?php 
	require 'config/config.php';
	require 'includes/form_handelers/register_handeler.php';
	require 'includes/form_handelers/login_handeler.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>sign in page</title>
	<link rel="stylesheet" type="text/css" href="assests/css/signin_style.css">
	
	<!-- <script src="assests/css/slide.js"></script> -->
	<meta name="viewport" content="width=device-width,initial-scale=1"/>

</head>
<body>
	<script src="assests/css/quotes.js"></script>
	<div class="wrraper1" >
		<div class="signin_box">
	<div class="header1">
		<h1>Dirty Politics</h1>
		Sign in
	</div>
	<form action="login.php" method="POST">
		<input type="email" name="log_email" placeholder="Login email" value="<?php 
			if(isset($_SESSION['log_email'])){
				echo $_SESSION['log_email'];
			} 
			?>" 
			required>
		<br>
		<input type="password"name="login_password" placeholder="password">
		<br>
		<input type="submit" name="login_button" value="login">
		<br>
		<?php if(in_array("Email or password is incorrect<br>",$error_array)) echo"Email or password is incorrect<br>";
		?>
		<?php
		echo "Dont have an account";
		?>
		<a href="register.php">click here</a>
	</form>
</div>

<div class="quotes"  >
	<!-- Slideshow container -->
<div class="slideshow-container"  >
<!-- Full-width slides/quotes -->
  <div class="mySlides"id="slide">
    <q>I love you the more in that I believe you had liked me for my own sake and for nothing else</q>
    <p class="author">- John Keats</p>
  </div>
</div>
<!-- Dots/bullets/indicators -->
<div class="dot-container"  onclick='javascript:toggle()'>
</div>
</div>
</div>
</body>
</html>