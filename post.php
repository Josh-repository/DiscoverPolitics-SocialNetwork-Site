<?php 
include("includes/header.php");
include("includes/classes/Post.php");

if(isset($_GET['id'])){
	$id=$_GET['id'];
}
else
{
	$id=0;

}
if(isset($_GET['party'])){
	$party=$_GET['party'];
}
?>
<div class="user_details column">
		<a href="<?php echo $userLoggedIn;?>"><img src="<?php echo $user['profile_pic']; ?>"></a>

	<div class="user_details_left_right">
	<a href="<?php echo $userLoggedIn;?>">
	<?php 
	echo $user['username'];
	?>
	</a>
	<br>
	<?php 
	echo "Posts:". $user['num_post'],"<br>";
	echo "Votes:". $user['num_likes'];
	 ?>
	</div>
 </div>
 <div clas="main_column column" id="main_column">
 	<div class="posts_area">
		<?php
			if($party=="s")
{	
	$post=new Post($con,$userLoggedIn);
	$post->getSinglePost($id,$party);
}
elseif($party=="a")
{	
	$query=mysqli_query($con,"SELECT * FROM comments WHERE post_id=$post_id");
	echo "<iframe src=commentsa.php?post_id=$post_id></iframe>";

}
elseif($party=="b")
{
	$query=mysqli_query($con,"SELECT * FROM comments WHERE post_id=$post_id");
	echo "<iframe src=commentsb.php?post_id=$post_id></iframe>";

}
elseif($party=="c")
{
	$query=mysqli_query($con,"SELECT * FROM comments WHERE post_id=$post_id");
	echo "<iframe src=commentsc.php?post_id=$post_id></iframe>";

}
elseif($party=="d")
{
	$query=mysqli_query($con,"SELECT * FROM comments WHERE post_id=$post_id");
	echo "<iframe src=commentsd.php?post_id=$post_id></iframe>";

}
elseif($party=="e")
{
	$query=mysqli_query($con,"SELECT * FROM comments WHERE post_id=$post_id");
	echo "<iframe src=commentse.php?post_id=$post_id></iframe>";

}
elseif($party=="f")
{
	$query=mysqli_query($con,"SELECT * FROM comments WHERE post_id=$post_id");
	echo "<iframe src=commentsf.php?post_id=$post_id></iframe>";

}
elseif($party=="g")
{
	$query=mysqli_query($con,"SELECT * FROM comments WHERE post_id=$post_id");
	echo "<iframe src=commentsg.php?post_id=$post_id></iframe>";

}
elseif($party=="h")
{
	$query=mysqli_query($con,"SELECT * FROM comments WHERE post_id=$post_id");
	echo "<iframe src=commentsh.php?post_id=$post_id></iframe>";

}
elseif($party=="i")
{
	$query=mysqli_query($con,"SELECT * FROM comments WHERE post_id=$post_id");
	echo "<iframe src=commentsi.php?post_id=$post_id></iframe>";

}
elseif($party=="j")
{
	$query=mysqli_query($con,"SELECT * FROM comments WHERE post_id=$post_id");
	echo "<iframe src=commentsj.php?post_id=$post_id></iframe>";

}
elseif($party=="k")
{
	$query=mysqli_query($con,"SELECT * FROM comments WHERE post_id=$post_id");
	echo "<iframe src=commentsk.php?post_id=$post_id></iframe>";

}
elseif($party=="l")
{
	$query=mysqli_query($con,"SELECT * FROM comments WHERE post_id=$post_id");
	echo "<iframe src=commentsl.php?post_id=$post_id></iframe>";

}
elseif($party=="m")
{
	$query=mysqli_query($con,"SELECT * FROM comments WHERE post_id=$post_id");
	echo "<iframe src=commentsm.php?post_id=$post_id></iframe>";

}
elseif($party=="n")
{
	$query=mysqli_query($con,"SELECT * FROM comments WHERE post_id=$post_id");
	echo "<iframe src=commentsn.php?post_id=$post_id></iframe>";

}
elseif($party=="o")
{
	$query=mysqli_query($con,"SELECT * FROM comments WHERE post_id=$post_id");
	echo "<iframe src=commentso.php?post_id=$post_id></iframe>";

}
elseif($party=="p")
{
	$query=mysqli_query($con,"SELECT * FROM comments WHERE post_id=$post_id");
	echo "<iframe src=commentsp.php?post_id=$post_id></iframe>";

}
elseif($party=="q")
{
	$query=mysqli_query($con,"SELECT * FROM comments WHERE post_id=$post_id");
	echo "<iframe src=commentsq.php?post_id=$post_id></iframe>";

}
elseif($party=="r")
{
	$query=mysqli_query($con,"SELECT * FROM comments WHERE post_id=$post_id");
	echo "<iframe src=commentsr.php?post_id=$post_id></iframe>";

}
elseif($party=="t")
{
	$query=mysqli_query($con,"SELECT * FROM comments WHERE post_id=$post_id");
	echo "<iframe src=commentst.php?post_id=$post_id></iframe>";

}
elseif($party=="u")
{
	$query=mysqli_query($con,"SELECT * FROM comments WHERE post_id=$post_id");
	echo "<iframe src=commentsu.php?post_id=$post_id></iframe>";

}
elseif($party=="v")
{
	$query=mysqli_query($con,"SELECT * FROM comments WHERE post_id=$post_id");
	echo "<iframe src=commentsv.php?post_id=$post_id></iframe>";

}
elseif($party=="w")
{
	$query=mysqli_query($con,"SELECT * FROM comments WHERE post_id=$post_id");
	echo "<iframe src=commentsw.php?post_id=$post_id></iframe>";

}
elseif($party=="x")
{
	$query=mysqli_query($con,"SELECT * FROM comments WHERE post_id=$post_id");
	echo "<iframe src=commentsx.php?post_id=$post_id></iframe>";

}
elseif($party=="y")
{
	$query=mysqli_query($con,"SELECT * FROM comments WHERE post_id=$post_id");
	echo "<iframe src=commentsy.php?post_id=$post_id></iframe>";
}
?>

			 	



 	</div>
 </div>
 