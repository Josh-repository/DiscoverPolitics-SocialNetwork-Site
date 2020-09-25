<?php
include("../../config/config.php");
include("../classes/User.php");

$query=$_POST['query'];
$userLoggedIn=$_post['userLoggedIn'];
$names=explode("",$query);

if(strpos($query,"_")) !== false){
	$usersReturned=mysqli_query($con,"SELECT * FROM voters WHERE username LIKE '$query%' AND user_closed='no' LIMIT 8");
}
if($query!=""){
	while($row=mysqli_fetch_array($usersReturned)){
		$user=new User($con,$userLoggedIn);
	if($user->isFriend($row['username'])){
		echo "<div class='resultDisplay'>
		<a href='messages.php?u='".$row['username']."'style='color:#000'>
		<img src='".$row['profile_pic']."'>
		</div>
		<div class='liveSearchText'>
		".$row['charactetr']."
		<p>".$row['username']."</p>
		</div>
		</a>
		</div>"
	}


	}
}