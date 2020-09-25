<?php  
include("../../config/config.php");
include("../classes/User.php");
include("../classes/Posth.php");

$limit = 10; //Number of posts to be loaded per call

$posts = new Posth($con, $_REQUEST['userLoggedIn']);
$posts->loadPostsFriends($_REQUEST, $limit);
?>