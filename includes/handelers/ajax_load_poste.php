<?php  
include("../../config/config.php");
include("../classes/User.php");
include("../classes/Poste.php");

$limit = 10; //Number of posts to be loaded per call

$posts = new Poste($con, $_REQUEST['userLoggedIn']);
$posts->loadPostsFriends($_REQUEST, $limit);
?>