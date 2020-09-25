<!DOCTYPE html>
<html>
<head>
    <title>Dp.account_verification</title>
    <link rel="stylesheet" type="text/css" href="assests/css/signin_style.css">
</head>
<body>
<div class="header_forgot">
    <h3>Discoverpolitics</h3>
</div>
<div class="box">
    <?php  
    require 'config/config.php';
    ?>
    <?php
$error_array=array(); 
//echo $_GET['email'];
if(isset($_GET['email']) && !empty($_GET['email']) AND isset($_GET['hash']) && !empty($_GET['hash'])){
    // Verify data
    $email = $_GET['email']; // Set email variable
    $hash =$_GET['hash']; // Set hash variable
                 
    $search = mysqli_query($con,"SELECT email, hash, user_closed FROM voters WHERE email='$email' AND hash='$hash' AND user_closed='yes'") or die(mysqli_error()); 
    $match  = mysqli_num_rows($search);
                 
    if($match > 0){
        // We have a match, activate the account
        mysqli_query($con,"UPDATE voters SET user_closed='no' WHERE email='$email' AND hash='$hash' AND user_closed='yes'") or die(mysqli_error());
        array_push($error_array,"Your account has been activated, you can now login<br>");
    }
    else
    {
        // No match -> invalid url or account has already been activated.
        array_push($error_array,"Your account has been in use already.<br>");
    }
}
else
    {
    // Invalid approach
    array_push($error_array,"Invalid approach, please use the link that has been send to your email.<br>");
    }
?>
    <h2 align="center">Email verification</h2>
    <p>Thank you for creating an account in Discoverpolitics.</p><br>
    &nbsp<p>On logging in discover the various politics happenning around you and its time for you to contribute to the nation growth by playing the role of a journalist.
    <br>
    <br>
    <?php
    if(in_array("Your account has been activated, you can now login<br>",$error_array)) {echo"Your account has been activated, you can now login<br>"; 
        echo "To open your account<a href='login.php'>Click here</a>";
    }   
    else if(in_array("Your account has been in use already.<br>",$error_array)) 
        {
            echo"Your account has been in use already.<br>";  
            echo "To create a new account<a href='register.php'>Click here</a>";
        }
    else if(in_array("Invalid approach, please use the link that has been send to your email",$error_array)) echo"Invalid approach, please use the link that has been send to your email";
    ?>
</div>
</body>
</html>


