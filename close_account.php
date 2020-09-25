<?php
include("includes/header.php");
if(isset($_POST['cancel'])){
	header("Location:settings.php");
}
if(isset($_POST['close_account'])){
	$close_query=mysqli_query($con,"UPDATE voters user_closed='yes' WHERE username='$userLoggedIn'");
	session_destroy();
	header("Location:login.php");
}
?>
<div class="main_column column">
	<h4> Close Account</h4>

	Are you sure to close your account<br><br>
	Closing your account will hide your profie and all your activity from other users.<br><br>
	You can re-open your account at the time by simply logging in.<br><br>
	<form action="close_account.php" method="POST">
		<input type="submit" name="close_account" id="close_account" value="yes! Close it!">
		<input type="submit" name="cancel" id="update_details" value="No way!">
	</form>
</div>

