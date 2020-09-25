<?php
include("includes/header.php");
include("includes/form_handelers/settings_handeler.php");
?>
<div class="main_column column">
	<h4>Account Settings</h4>

	Modify the values and click 'Update Details'
	<?php
	$user_data_query=mysqli_query($con,"SELECT email from voters WHERE username='$userLoggedIn'");
	$row=mysqli_fetch_array($user_data_query);
	$email=$row['email'];
	?>
	<form action="settings.php" method="POST">
		Email:<input type="text" name="email" value="<?php echo $email;?>" id="settings_input"><br>
		<?php echo $message;?>
		<input type="submit" name="update_details" id="save_details" value="Update details"><br>
	</form>
	<h4>Change Password</h4>
	<form action="settings.php" method="POST">
		Old Password:<input type="password" name="old_password" id="settings_input1"><br>
		New Password:<input type="password" name="new_password_1" id="settings_input2"><br>
		New Password Again:<input type="password" name="new_password_2"  id="settings_input3"><br>
		<?php echo $password_message;?>
		<input type="submit" name="update_password" id="save_details2" value="Update password"><br>
	</form>
	<h4>Close Account</h4>
	<form action=settings.php method="POST">
		<input type="submit" name="close_account" value="Close Account">
	</form>
	<h4>Log Out</h4>
	<a href="includes/handelers/logout.php">Log out</a>
</div>
