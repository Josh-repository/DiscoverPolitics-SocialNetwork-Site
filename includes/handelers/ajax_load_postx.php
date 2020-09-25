<?php  
include("../../config/config.php");
include("../classes/User.php");
include("../classes/Postx.php");

$limit = 10; //Number of posts to be loaded per call

$posts = new Postx($con, $_REQUEST['userLoggedIn']);
$posts->loadPostsFriends($_REQUEST, $limit);
?>