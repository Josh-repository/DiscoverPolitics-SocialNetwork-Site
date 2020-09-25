<?php  
include("../../config/config.php");
include("../classes/User.php");
include("../classes/Postb.php");

$limit = 10; //Number of posts to be loaded per call

$posts = new Postb($con, $_REQUEST['userLoggedIn']);
$posts->loadPostsFriends($_REQUEST, $limit);
?>