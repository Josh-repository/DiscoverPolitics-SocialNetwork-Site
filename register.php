<?php 
	require 'config/config.php';
	require 'includes/form_handelers/register_handeler.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>sign_up_page</title>
	<link rel="stylesheet" type="text/css" href="assests/css/register_style.css">
</head>
<body >
<div class="wrraper">
		<div class="login_box">
			<div class="header">
			<h1>Dirtypolitics</h1>
			Signin or Signup
		</div>
	<form action="register.php" method="post">
		<!-- username entry -->
	<div class="dropdown">
		<select name="reg_character" value="<?php 
			if(isset($_SESSION['reg_character'])){
				echo $_SESSION['reg_character'];
			} 
			?>" style="width:256px" required>   
			<option value=""selected disable>Please Select</option>
			<option value="King">King</option>
			<option value="Queen">Queen</option>
			<option value="Jack">Jack</option>
			<option value="Police">Police</option>
			<option value="Thief">Thief</option>
			</select>
			<br>
</div>
		<!-- email entry -->
		<input type="email" name="reg_email" placeholder="Email" value="<?php 
			if(isset($_SESSION['reg_email'])){
				echo $_SESSION['reg_email'];
			} 
			?>"
		required>
			<br>

		<input type="email" name="reg_email2" placeholder="Confirm Email" value="<?php 
			if(isset($_SESSION['reg_email2'])){
				echo $_SESSION['reg_email2'];
			} 
			?>"
		required>
			<br>
		
		<!-- error email message -->
		<?php 
			if(in_array("Email already exists<br>", $error_array)) echo"Email already exists<br>";
			elseif (in_array("Invalid format<br>",$error_array)) echo"Invalid format<br>";
			elseif (in_array("Emails did not match<br>",$error_array)) echo"Emails did not match<br>";
		?>
		<!-- password entry -->
		<input type="password" name="reg_pswd" placeholder="Password" required>
		<br>
		<input type="password" name="reg_pswd2"  placeholder="Confirm Password" required>
		<br>
		<!-- password check -->
		<?php 
			if(in_array("Password did not match<br>", $error_array)) echo"Password did not match<br>";
			elseif (in_array("Password can contain either english or numbers",$error_array)) echo"Password can contain either english or numbers<br>";
			elseif (in_array("Mininum of five characters<br>",$error_array)) echo"Mininum of five characters<br>";
		?>
	<!-- select country -->
		<div class="country">
		<select name="reg_country" value="<?php 
			if(isset($_SESSION['reg_country']))
			{
				echo $_SESSION['reg_country'];
			} 
			?>"style="width:256px" 
        required>   
			<option value=""selected disable>Please Select a country</option>
			<option value="Tamil nadu">Tamil nadu</option>
		</select>
		</div>
		<br>
		<!-- Slect a party -->
		<div class="party">
		<select name="reg_party" value="<?php 
			if(isset($_SESSION['reg_party']))
			{
				echo $_SESSION['reg_party'];
			}
		?>" style="width:256px" 
        required>   
			<option value=""selected disable>Please Select a party</option>
			<option value="Anna Dhiravida  Munnetra Kazhagam">Anna Dhiravida  Munnetra Kazhagam</option>
			<option value="b">b</option>
			<option value="c">c</option>
			<option value="d">d</option>
			<option value="e">e</option>
			<option value="f">f</option>
			<option value="g">g</option>
			<option value="h">h</option>
			<option value="i">i</option>
			<option value="j">j</option>
			<option value="k">k</option>
			<option value="l">l</option>
			<option value="m">m</option>
			<option value="n">n</option>
			<option value="o">o</option>
			<option value="p">p</option>
			<option value="q">q</option>
			<option value="r">r</option>
			<option value="s">s</option>
			<option value="t">t</option>
			<option value="u">u</option>
			<option value="v">v</option>
			<option value="w">w</option>
			<option value="x">x</option>
			<option value="y">y</option>
		</select>
	</div>
		<br>
		<!--Sign up button  -->
		<input type="submit" name="register_button" value="register">
		<br>
		<!-- pop message -->
		<?php if(in_array("<span style='color:#14C800;'>oops!!you have voted for bjp....haha..</span><br>", $error_array)) echo"<span style='color:#14C800;'>oops!!you have voted for bjp....haha..</span><br>";
		?>
		<?php
		echo "To sign in";
		?><a href="login.php">click here</a>
</form>
</div>
</div>
</body>
</html>