<?php  
include("../../config/config.php");
include("../classes/User.php");
include("../../z/Postz.php");

$limit = 10; //Number of posts to be loaded per call

$posts = new Postz($con, $_REQUEST['userLoggedIn']);
$posts->loadPostsFriends($_REQUEST, $limit);
?>