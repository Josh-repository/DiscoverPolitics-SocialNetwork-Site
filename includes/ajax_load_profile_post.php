<?php  
include("../config/config.php");
include("classes/Postprofile.php");
include("classes/User.php");
$limit = 10;
	$posts = new Postprofile($con, $_REQUEST['userLoggedIn']);
	$posts->loadProfilePosts($_REQUEST,$limit);
?>