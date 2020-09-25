<?php  
include("../../config/config.php");
include("../classes/User.php");
include("../classes/Postk.php");

$limit = 10; //Number of posts to be loaded per call

$posts = new Postk($con, $_REQUEST['userLoggedIn']);
$posts->loadPostsFriends($_REQUEST, $limit);
?>