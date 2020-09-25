<?php  
include("../../config/config.php");
include("../classes/User.php");
include("../classes/Postc.php");

$limit = 10; //Number of posts to be loaded per call

$posts = new Postc($con, $_REQUEST['userLoggedIn']);
$posts->loadPostsFriends($_REQUEST, $limit);
?>