<!DOCTYPE html>
<html>
<head>
	<title>Discoverpolitics</title>
	<!-- java script -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="assests/js/bootstrap.js"></script>
	<script src="assests/js/bootbox.min.js"></script>
	<script src="assests/js/projectx.js"></script>
	<script src="assests/js/follow.js"></script>	
	<!-- CSS -->
	<link rel="stylesheet" type="text/css" href="assests/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assests/css/style.css">
</head>
<body>
<?php 
include "config/config.php";
	//Get id of post
	if(isset($_GET['post_id'])) {
		$post_id = $_GET['post_id'];
		
	}
	if(isset($_GET['party'])) {
		$party = $_GET['party'];

	}
if($party=="s")
{
	$query=mysqli_query($con,"SELECT * FROM comments WHERE post_id=$post_id");
	 echo "<iframe src=comment_frame.php?post_id=$post_id></iframe>";
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
</body>
</html>