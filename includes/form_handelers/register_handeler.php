<?php
$character="";
$em="";
$em2="";
$password="";
$password2="";
$date="";
$country="";
$party="";
$error_array=array();
if(isset($_POST['register_button']))
{
	//firstname
	
	$character=strtolower($_POST['reg_character']);
    $_SESSION['reg_character']=$character;
    
	//email
	
	$em=strip_tags($_POST['reg_email']);
	$em=str_replace(' ','', $em); 
	$em=ucfirst(strtolower($em));
	$_SESSION['reg_email']=$em;
	
	$em2=strip_tags($_POST['reg_email2']);
	$em2=str_replace(' ','', $em2); 
	$em2=ucfirst(strtolower($em2));
	$_SESSION['reg_email2']=$em2;
	
	//password
	$password=strip_tags($_POST['reg_pswd']);
	$password2=strip_tags($_POST['reg_pswd2']);
	
	//date
	$date=date("Y-m-d");
	
	//country
	$country=strtolower($_POST['reg_country']);
    $_SESSION['reg_country']=$country;
	
	//party
	$party=strtolower($_POST['reg_party']);
    $_SESSION['reg_party']=$party;
	
	//email verification
if($em==$em2)
	{
		if(filter_var($em,FILTER_VALIDATE_EMAIL))
		{
        $em=filter_var($em,FILTER_VALIDATE_EMAIL);
        //check email
        $e_check=mysqli_query($con,"SELECT email FROM voters WHERE email='$em'");
        //num of rows
        $num_rows=mysqli_num_rows($e_check);
		if($num_rows>0)
		{
			array_push($error_array,"Email already exists<br>");
		}
		}
	else
		{
			array_push($error_array,"Invalid email id<br>");
		}

	}
	else
		{
		array_push($error_array, "Emails did not match<br>");
		}
	// password check
if($password != $password2)
	{
		array_push($error_array,"Password did not match<br>");
	}
else
	{
		if(preg_match('/[^A-Za-z0-9]/',$password))
		{
		array_push($error_array,"Password can contain either english or numbers<br>");
		}
	}
if(strlen($password)>30 || strlen($password)<5)
	{
		array_push($error_array,"Mininum of five characters<br>");
	}
	//update info into database
if(empty($error_array))
	{
	$password=md5($password);
	$username=$character;
	$check_username_query=mysqli_query($con,"SELECT username FROM voters WHERE username='$username'");
	$i=0;
while(mysqli_num_rows($check_username_query)!=0)
	{
		$username=$character;
		$i++;
		$username=$username.$i;
		$check_username_query=mysqli_query($con,"SELECT username FROM voters WHERE username='$username'");
	}
	//profile picture
	$rand=rand(1,2);
	if($rand==1)
	$profile_pic="assests/images/profile_pics/defaults/head_amethyst.png";
	else if($rand==2)
	$profile_pic="assests/images/profile_pics/defaults/head_carrot.png";
    //value insert
	$query=mysqli_query($con,"INSERT INTO voters VALUES ('','$username','$em','$password','$country','$party','$date','$profile_pic','0','0','no','$character', ',')");
	array_push($error_array,"<span style='color:#14C800;'>oops!!you have voted for bjp....haha..</span><br>");
	//hold value	
	$_SESSION['reg_character']='';
	$_SESSION['reg_email']='';
	$_SESSION['reg_email2']='';
	$_SESSION['reg_country']='';
	$_SESSION['register_party']='';
}
}
?>