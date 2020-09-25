<?php  
include("../../config/config.php");
include("../classes/User.php");
include("../classes/Postn.php");

$limit = 10; //Number of posts to be loaded per call

$posts = new Postn($con, $_REQUEST['userLoggedIn']);
$posts->loadPostsFriends($_REQUEST, $limit);
?>