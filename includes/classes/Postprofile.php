<?php
class Postprofile
{
		private $user_obj;
		private $con;

		public function __construct($con,$user)
		{
			$this->con=$con;
			
			$this->user_obj= new User($con,$user);
		}
		public function submitPost($body,$user_to,$id,$imageName)
		{
			$body=strip_tags($body);
			$body=mysqli_real_escape_string($this->con,$body);
			$check_empty=preg_replace('/\s+/','', $body);
			if($check_empty != "")
			{
				
				$date_added=date("Y-m-d H:i:s");
				$postid=$id;
				$party=$user_to;
				//GEt username	
				$added_by=$this->user_obj->getusername();
			
				//insert post
				if($party=="s")
				$query=mysqli_query($this->con,"INSERT INTO postprofile VALUES('','$body','$added_by','$user_to','$date_added','no','no','0','$postid','','','','','','','','','','','','','','','','','','','','','','','','','$imageName')");
				elseif($party=="a")
				$query=mysqli_query($this->con,"INSERT INTO postprofile VALUES('','$body','$added_by','$user_to','$date_added','no','no','0','','$postid','','','','','','','','','','','','','','','','','','','','','','','','$imageName')");
				elseif($party=="b")
				$query=mysqli_query($this->con,"INSERT INTO postprofile VALUES('','$body','$added_by','$user_to','$date_added','no','no','0','','','$postid','','','','','','','','','','','','','','','','','','','','','','','$imageName')");	
				elseif($party=="c")
				$query=mysqli_query($this->con,"INSERT INTO postprofile VALUES('','$body','$added_by','$user_to','$date_added','no','no','0','','','','$postid','','','','','','','','','','','','','','','','','','','','','','$imageName')");
				elseif($party=="d")
				$query=mysqli_query($this->con,"INSERT INTO postprofile VALUES('','$body','$added_by','$user_to','$date_added','no','no','0','','','','','$postid','','','','','','','','','','','','','','','','','','','','','$imageName')");
				elseif($party=="e")
				$query=mysqli_query($this->con,"INSERT INTO postprofile VALUES('','$body','$added_by','$user_to','$date_added','no','no','0','','','','','','$postid','','','','','','','','','','','','','','','','','','','','$imageName')");
				elseif($party=="f")
				$query=mysqli_query($this->con,"INSERT INTO postprofile VALUES('','$body','$added_by','$user_to','$date_added','no','no','0','','','','','','','$postid','','','','','','','','','','','','','','','','','','','$imageName')");
				elseif($party=="g")
				$query=mysqli_query($this->con,"INSERT INTO postprofile VALUES('','$body','$added_by','$user_to','$date_added','no','no','0','','','','','','','','$postid','','','','','','','','','','','','','','','','','','$imageName')");
				elseif($party=="h")
				$query=mysqli_query($this->con,"INSERT INTO postprofile VALUES('','$body','$added_by','$user_to','$date_added','no','no','0','','','','','','','','','$postid','','','','','','','','','','','','','','','','','$imageName')");
				elseif($party=="i")
				$query=mysqli_query($this->con,"INSERT INTO postprofile VALUES('','$body','$added_by','$user_to','$date_added','no','no','0','','','','','','','','','','$postid','','','','','','','','','','','','','','','$imageName')");
				elseif($party=="j")
				$query=mysqli_query($this->con,"INSERT INTO postprofile VALUES('','$body','$added_by','$user_to','$date_added','no','no','0','','','','','','','','','','','$postid','','','','','','','','','','','','','','','$imageName')");
				elseif($party=="k")
				$query=mysqli_query($this->con,"INSERT INTO postprofile VALUES('','$body','$added_by','$user_to','$date_added','no','no','0','','','','','','','','','','','','$postid','','','','','','','','','','','','','','$imageName')");
				elseif($party=="l")
				$query=mysqli_query($this->con,"INSERT INTO postprofile VALUES('','$body','$added_by','$user_to','$date_added','no','no','0','','','','','','','','','','','','','$postid','','','','','','','','','','','','','$imageName')");
				elseif($party=="m")
				$query=mysqli_query($this->con,"INSERT INTO postprofile VALUES('','$body','$added_by','$user_to','$date_added','no','no','0','','','','','','','','','','','','','','$postid','','','','','','','','','','','','$imageName')");
				elseif($party=="n")
				$query=mysqli_query($this->con,"INSERT INTO postprofile VALUES('','$body','$added_by','$user_to','$date_added','no','no','0','','','','','','','','','','','','','','','$postid','','','','','','','','','','','$imageName')");
				elseif($party=="o")
				$query=mysqli_query($this->con,"INSERT INTO postprofile VALUES('','$body','$added_by','$user_to','$date_added','no','no','0','','','','','','','','','','','','','','','','$postid','','','','','','','','','','$imageName')");
				elseif($party=="p")
				$query=mysqli_query($this->con,"INSERT INTO postprofile VALUES('','$body','$added_by','$user_to','$date_added','no','no','0','','','','','','','','','','','','','','','','','$postid','','','','','','','','','$imageName')");
				elseif($party=="q")
				$query=mysqli_query($this->con,"INSERT INTO postprofile VALUES('','$body','$added_by','$user_to','$date_added','no','no','0','','','','','','','','','','','','','','','','','','$postid','','','','','','','','$imageName')");
				elseif($party=="r")
				$query=mysqli_query($this->con,"INSERT INTO postprofile VALUES('','$body','$added_by','$user_to','$date_added','no','no','0','','','','','','','','','','','','','','','','','','','$postid','','','','','','','$imageName')");
				elseif($party=="t")
				$query=mysqli_query($this->con,"INSERT INTO postprofile VALUES('','$body','$added_by','$user_to','$date_added','no','no','0','','','','','','','','','','','','','','','','','','','','$postid','','','','','','$imageName')");
				elseif($party=="u")
				$query=mysqli_query($this->con,"INSERT INTO postprofile VALUES('','$body','$added_by','$user_to','$date_added','no','no','0','','','','','','','','','','','','','','','','','','','','','$postid','','','','','$imageName')");
				elseif($party=="v")
				$query=mysqli_query($this->con,"INSERT INTO postprofile VALUES('','$body','$added_by','$user_to','$date_added','no','no','0','','','','','','','','','','','','','','','','','','','','','','$postid','','','','$imageName')");
				elseif($party=="w")
				$query=mysqli_query($this->con,"INSERT INTO postprofile VALUES('','$body','$added_by','$user_to','$date_added','no','no','0','','','','','','','','','','','','','','','','','','','','','','','$postid','','','$imageName')");
				elseif($party=="x")
				$query=mysqli_query($this->con,"INSERT INTO postprofile VALUES('','$body','$added_by','$user_to','$date_added','no','no','0','','','','','','','','','','','','','','','','','','','','','','','','$postid','','$imageName')");
				elseif($party=="y")
				$query=mysqli_query($this->con,"INSERT INTO postprofile VALUES('','$body','$added_by','$user_to','$date_added','no','no','0','','','','','','','','','','','','','','','','','','','','','','','','','$postid','$imageName')");
				// insert notification
				//update count for user
				$num_post=$this->user_obj->getNumPost();
				$num_post++;
				$update_query=mysqli_query($this->con,"UPDATE voters SET num_post='$num_post' WHERE username='$added_by'");
			}
		}


public function loadProfilePosts($data, $limit) {

		$page = $data['page']; 
		$profileUser=$data['profileUsername'];
		$userLoggedIn = $this->user_obj->getusername();
		
		if($page == 1) 
			$start = 0;
		else 
			$start = ($page - 1) * $limit;


		$str="";//String to return 
		$data_query = mysqli_query($this->con, "SELECT * FROM postprofile WHERE deleted='no' AND (added_by='$profileUser') ORDER BY id DESC");
		if(mysqli_num_rows($data_query) > 0) {
			$num_iterations = 0; //Number of results checked (not necasserily posted)
			$count = 1;
			while($row = mysqli_fetch_array($data_query)) {
				$body = $row['body'];
				$added_by = $row['added_by'];
				$date_time = $row['date_added'];
				$user_to=$row['user_to'];
				$imagePath=$row['image'];
				$imageFileType=pathinfo($imagePath,PATHINFO_EXTENSION);
				//Prepare user_to string so it can be included even if not posted to a user
				if($user_to=="s")
				{
					$id=$row['profile_post_id'];
					//no of comments 
					$comments_check=mysqli_query($this->con,"SELECT* FROM comments WHERE post_id='$id'");
					$comments_check_num=mysqli_num_rows($comments_check);
					$likes_check=mysqli_query($this->con,"SELECT * FROM likes WHERE post_id='$id'");
					$likes_num=mysqli_num_rows($likes_check);
				}	
				elseif($user_to=="a"){
					$id=$row['post_ida'];
					$comments_check=mysqli_query($this->con,"SELECT* FROM comments WHERE post_ida='$id'");
					$comments_check_num=mysqli_num_rows($comments_check);
					$likes_check=mysqli_query($this->con,"SELECT * FROM likes WHERE post_ida='$id'");
					$likes_num=mysqli_num_rows($likes_check);}
				elseif($user_to=="b"){
					$id=$row['post_idb'];
					$comments_check=mysqli_query($this->con,"SELECT* FROM comments WHERE post_idb='$id'");
					$comments_check_num=mysqli_num_rows($comments_check);
					$likes_check=mysqli_query($this->con,"SELECT * FROM likes WHERE post_idb='$id'");
					$likes_num=mysqli_num_rows($likes_check);}
				elseif($user_to=="c"){
					$id=$row['post_idc'];
					$comments_check=mysqli_query($this->con,"SELECT* FROM comments WHERE post_idc='$id'");
					$comments_check_num=mysqli_num_rows($comments_check);
					$likes_check=mysqli_query($this->con,"SELECT * FROM likes WHERE post_idc='$id'");
					$likes_num=mysqli_num_rows($likes_check);}
				elseif($user_to=="d"){
					$id=$row['post_idd'];
					$comments_check=mysqli_query($this->con,"SELECT* FROM comments WHERE post_idd='$id'");
					$comments_check_num=mysqli_num_rows($comments_check);
					$likes_check=mysqli_query($this->con,"SELECT * FROM likes WHERE post_idd='$id'");
					$likes_num=mysqli_num_rows($likes_check);}
				elseif($user_to=="e"){
					$id=$row['post_ide'];
					$comments_check=mysqli_query($this->con,"SELECT* FROM comments WHERE post_ide='$id'");
					$comments_check_num=mysqli_num_rows($comments_check);
					$likes_check=mysqli_query($this->con,"SELECT * FROM likes WHERE post_ide='$id'");
					$likes_num=mysqli_num_rows($likes_check);}
				elseif($user_to=="f"){
					$id=$row['post_idf'];
					$comments_check=mysqli_query($this->con,"SELECT* FROM comments WHERE post_idf='$id'");
					$comments_check_num=mysqli_num_rows($comments_check);
					$likes_check=mysqli_query($this->con,"SELECT * FROM likes WHERE post_idf='$id'");
					$likes_num=mysqli_num_rows($likes_check);}
				elseif($user_to=="g"){
					$id=$row['post_idg'];
					$comments_check=mysqli_query($this->con,"SELECT* FROM comments WHERE post_idg='$id'");
					$comments_check_num=mysqli_num_rows($comments_check);
					$likes_check=mysqli_query($this->con,"SELECT * FROM likes WHERE post_idg='$id'");
					$likes_num=mysqli_num_rows($likes_check);}
				elseif($user_to=="h"){
					$id=$row['post_idh'];
					$comments_check=mysqli_query($this->con,"SELECT* FROM comments WHERE post_idh='$id'");
					$comments_check_num=mysqli_num_rows($comments_check);
					$likes_check=mysqli_query($this->con,"SELECT * FROM likes WHERE post_idh='$id'");
					$likes_num=mysqli_num_rows($likes_check);}
				elseif($user_to=="i"){
					$id=$row['post_idi'];
					$comments_check=mysqli_query($this->con,"SELECT* FROM comments WHERE post_idi='$id'");
					$comments_check_num=mysqli_num_rows($comments_check);
					$likes_check=mysqli_query($this->con,"SELECT * FROM likes WHERE post_idi='$id'");
					$likes_num=mysqli_num_rows($likes_check);}
				elseif($user_to=="j"){
					$id=$row['post_idj'];
					$comments_check=mysqli_query($this->con,"SELECT* FROM comments WHERE post_idj='$id'");
					$comments_check_num=mysqli_num_rows($comments_check);
					$likes_check=mysqli_query($this->con,"SELECT * FROM likes WHERE post_idj='$id'");
					$likes_num=mysqli_num_rows($likes_check);}
				elseif($user_to=="k"){
					$id=$row['post_idk'];
					$comments_check=mysqli_query($this->con,"SELECT* FROM comments WHERE post_idk='$id'");
					$comments_check_num=mysqli_num_rows($comments_check);
					$likes_check=mysqli_query($this->con,"SELECT * FROM likes WHERE post_idk='$id'");
					$likes_num=mysqli_num_rows($likes_check);}
				elseif($user_to=="l"){
					$id=$row['post_idl'];
					$comments_check=mysqli_query($this->con,"SELECT* FROM comments WHERE post_idl='$id'");
					$comments_check_num=mysqli_num_rows($comments_check);
					$likes_check=mysqli_query($this->con,"SELECT * FROM likes WHERE post_idl='$id'");
					$likes_num=mysqli_num_rows($likes_check);}
				elseif($user_to=="m"){
					$id=$row['post_idm'];
					$comments_check=mysqli_query($this->con,"SELECT* FROM comments WHERE post_idm='$id'");
					$comments_check_num=mysqli_num_rows($comments_check);
					$likes_check=mysqli_query($this->con,"SELECT * FROM likes WHERE post_idm='$id'");
					$likes_num=mysqli_num_rows($likes_check);}
				elseif($user_to=="n"){
					$id=$row['post_idn'];
					$comments_check=mysqli_query($this->con,"SELECT* FROM comments WHERE post_idn='$id'");
					$comments_check_num=mysqli_num_rows($comments_check);
					$likes_check=mysqli_query($this->con,"SELECT * FROM likes WHERE post_idn='$id'");
					$likes_num=mysqli_num_rows($likes_check);}
				elseif($user_to=="o"){
					$id=$row['post_ido'];
					$comments_check=mysqli_query($this->con,"SELECT* FROM comments WHERE post_ido='$id'");
					$comments_check_num=mysqli_num_rows($comments_check);
					$likes_check=mysqli_query($this->con,"SELECT * FROM likes WHERE post_ido='$id'");
					$likes_num=mysqli_num_rows($likes_check);}
				elseif($user_to=="p"){
					$id=$row['post_idp'];
					$comments_check=mysqli_query($this->con,"SELECT* FROM comments WHERE post_idp='$id'");
					$comments_check_num=mysqli_num_rows($comments_check);
					$likes_check=mysqli_query($this->con,"SELECT * FROM likes WHERE post_idp='$id'");
					$likes_num=mysqli_num_rows($likes_check);}
				elseif($user_to=="q"){
					$id=$row['post_idq'];
					$comments_check=mysqli_query($this->con,"SELECT* FROM comments WHERE post_idq='$id'");
					$comments_check_num=mysqli_num_rows($comments_check);
					$likes_check=mysqli_query($this->con,"SELECT * FROM likes WHERE post_idq='$id'");
					$likes_num=mysqli_num_rows($likes_check);}
				elseif($user_to=="r"){
					$id=$row['post_idr'];
					$comments_check=mysqli_query($this->con,"SELECT* FROM comments WHERE post_idr='$id'");
					$comments_check_num=mysqli_num_rows($comments_check);
					$likes_check=mysqli_query($this->con,"SELECT * FROM likes WHERE post_idr='$id'");
					$likes_num=mysqli_num_rows($likes_check);}
				elseif($user_to=="t"){
					$id=$row['post_idt'];
					$comments_check=mysqli_query($this->con,"SELECT* FROM comments WHERE post_idt='$id'");
					$comments_check_num=mysqli_num_rows($comments_check);
					$likes_check=mysqli_query($this->con,"SELECT * FROM likes WHERE post_idt='$id'");
					$likes_num=mysqli_num_rows($likes_check);}
				elseif($user_to=="u"){
					$id=$row['post_idu'];
					$comments_check=mysqli_query($this->con,"SELECT* FROM comments WHERE post_idu='$id'");
					$comments_check_num=mysqli_num_rows($comments_check);
					$likes_check=mysqli_query($this->con,"SELECT * FROM likes WHERE post_idu='$id'");
					$likes_num=mysqli_num_rows($likes_check);}
				elseif($user_to=="v"){
					$id=$row['post_idv'];
					$comments_check=mysqli_query($this->con,"SELECT* FROM comments WHERE post_idv='$id'");
					$comments_check_num=mysqli_num_rows($comments_check);
					$likes_check=mysqli_query($this->con,"SELECT * FROM likes WHERE post_idv='$id'");
					$likes_num=mysqli_num_rows($likes_check);}
				elseif($user_to=="w"){
					$id=$row['post_idw'];
					$comments_check=mysqli_query($this->con,"SELECT* FROM comments WHERE post_idw='$id'");
					$comments_check_num=mysqli_num_rows($comments_check);
					$likes_check=mysqli_query($this->con,"SELECT * FROM likes WHERE post_idw='$id'");
					$likes_num=mysqli_num_rows($likes_check);}
				elseif($user_to=="x"){
					$id=$row['post_idx'];
					$comments_check=mysqli_query($this->con,"SELECT* FROM comments WHERE post_idx='$id'");
					$comments_check_num=mysqli_num_rows($comments_check);
					$likes_check=mysqli_query($this->con,"SELECT * FROM likes WHERE post_idx='$id'");
					$likes_num=mysqli_num_rows($likes_check);}
				elseif($user_to=="y"){
					$id=$row['post_idy'];
					$comments_check=mysqli_query($this->con,"SELECT* FROM comments WHERE post_idy='$id'");
					$comments_check_num=mysqli_num_rows($comments_check);
					$likes_check=mysqli_query($this->con,"SELECT * FROM likes WHERE post_idy='$id'");
					$likes_num=mysqli_num_rows($likes_check);
					}
				if($num_iterations++ < $start)
					continue; 
				//Once 10 posts have been loaded, break
				if($count > $limit) 
					break;
				else 
					$count++;
				if($userLoggedIn == $added_by)
					$delete_button = "<button class='delete_button btn-danger' id='post$id'>X</button>";
				else
					$delete_button="";
					$user_details_query = mysqli_query($this->con, "SELECT * FROM voters WHERE username='$added_by'");
					$user_row = mysqli_fetch_array($user_details_query);
					$username = $user_row['username'];
					$profile_pic = $user_row['profile_pic'];
					?>
					<script>
							function toggle<?php echo $id; ?>() 
						{
						var target=$(event.target);
					    if(!target.is("a") || !target.is("button"))
					    {
						var element = document.getElementById("toggleComment<?php echo $id; ?>");

							if(element.style.display == "block") 
								element.style.display = "none";
							else 
								element.style.display = "block";
						}

					}
					</script>					
					<?php					
					//Timeframe
					$date_time_now = date("Y-m-d H:i:s");
					$start_date = new DateTime($date_time); //Time of post
					$end_date = new DateTime($date_time_now); //Current time
					$interval = $start_date->diff($end_date); //Difference between dates 
					if($interval->y >= 1) {
						if($interval == 1)
							$time_message = $interval->y . " year ago"; //1 year ago
						else 
							$time_message = $interval->y . " years ago"; //1+ year ago
					}
					else if ($interval-> m >= 1) {
						if($interval->d == 0) {
							$days = " ago";
						}
						else if($interval->d == 1) {
							$days = $interval->d . " day ago";
						}
						else {
							$days = $interval->d . " days ago";
						}


						if($interval->m == 1) {
							$time_message = $interval->m . " month". $days;
						}
						else {
							$time_message = $interval->m . " months". $days;
						}

					}
					else if($interval->d >= 1) {
						if($interval->d == 1) {
							$time_message = "Yesterday";
						}
						else {
							$time_message = $interval->d . " days ago";
						}
					}
					else if($interval->h >= 1) {
						if($interval->h == 1) {
							$time_message = $interval->h . " hour ago";
						}
						else {
							$time_message = $interval->h . " hours ago";
						}
					}
					else if($interval->i >= 1) {
						if($interval->i == 1) {
							$time_message = $interval->i . " minute ago";
						}
						else {
							$time_message = $interval->i . " minutes ago";
						}
					}
					else {
						if($interval->s < 30) {
							$time_message = "Just now";
						}
						else {
							$time_message = $interval->s . " seconds ago";
						}
					}
					if($imagePath!="")
						{
							if(strtolower($imageFileType) == "jpeg" || strtolower($imageFileType)=="png" || strtolower($imageFileType)=="jpg")
						{	
							$imageDiv="<div class='postedImage'>
							<img src=$imagePath></div>";
						}
						else
						{
							$imageDiv="<div class='postedImage'><video src=$imagePath  controls='controls' tabindex='0'></video></div>";
						}
						}
					else
						$imageDiv="";
					$party=$user_to;
					$post_id=$id;
					if($party=="s")
						{
							$query=mysqli_query($this->con,"SELECT * FROM comments WHERE post_id=$post_id");
							$link="<iframe src='comment_frame.php?post_id=$post_id' id='comment_iframe' frameborder='0'></iframe>";
						}
						elseif($party=="a")
						{	
							$query=mysqli_query($this->con,"SELECT * FROM comments WHERE post_id=$post_id");
							$link="<iframe src='commentsa.php?post_id=$post_id' id='comment_iframe' frameborder='0'></iframe>";

						}
						elseif($party=="b")
						{
							$query=mysqli_query($this->con,"SELECT * FROM comments WHERE post_id=$post_id");
							$link="<iframe src='commentsb.php?post_id=$post_id' id='comment_iframe' frameborder='0'></iframe>";

						}
						elseif($party=="c")
						{
							$query=mysqli_query($this->con,"SELECT * FROM comments WHERE post_id=$post_id");
							 $link="<iframe src='commentsc.php?post_id=$post_id' id='comment_iframe' frameborder='0'></iframe>";

						}
						elseif($party=="d")
						{
							$query=mysqli_query($this->con,"SELECT * FROM comments WHERE post_id=$post_id");
							$link="<iframe src='commentsd.php?post_id=$post_id' id='comment_iframe' frameborder='0'></iframe>";

						}
						elseif($party=="e")
						{
							$query=mysqli_query($this->con,"SELECT * FROM comments WHERE post_id=$post_id");
							$link="<iframe src='commentse.php?post_id=$post_id' id='comment_iframe' frameborder='0'></iframe>";

						}
						elseif($party=="f")
						{
							$query=mysqli_query($this->con,"SELECT * FROM comments WHERE post_id=$post_id");
							$link="<iframe src='commentsf.php?post_id=$post_id' id='comment_iframe' frameborder='0'></iframe>";

						}
						elseif($party=="g")
						{
							$query=mysqli_query($this->con,"SELECT * FROM comments WHERE post_id=$post_id");
							$link= "<iframe src='commentsg.php?post_id=$post_id' id='comment_iframe' frameborder='0'></iframe>";

						}
						elseif($party=="h")
						{
							$query=mysqli_query($this->con,"SELECT * FROM comments WHERE post_id=$post_id");
							$link= "<iframe src='commentsh.php?post_id=$post_id' id='comment_iframe' frameborder='0'></iframe>";

						}
						elseif($party=="i")
						{
							$query=mysqli_query($this->con,"SELECT * FROM comments WHERE post_id=$post_id");
							$link= "<iframe src='commentsi.php?post_id=$post_id' id='comment_iframe' frameborder='0'></iframe>";

						}
						elseif($party=="j")
						{
							$query=mysqli_query($this->con,"SELECT * FROM comments WHERE post_id=$post_id");
							$link= "<iframe src='commentsj.php?post_id=$post_id' id='comment_iframe' frameborder='0'></iframe>";

						}
						elseif($party=="k")
						{
							$query=mysqli_query($this->con,"SELECT * FROM comments WHERE post_id=$post_id");
							$link= "<iframe src='commentsk.php?post_id=$post_id' id='comment_iframe' frameborder='0'></iframe>";

						}
						elseif($party=="l")
						{
							$query=mysqli_query($this->con,"SELECT * FROM comments WHERE post_id=$post_id");
							$link= "<iframe src='commentsl.php?post_id=$post_id' id='comment_iframe' frameborder='0'></iframe>";

						}
						elseif($party=="m")
						{
							$query=mysqli_query($this->con,"SELECT * FROM comments WHERE post_id=$post_id");
							$link= "<iframe src='commentsm.php?post_id=$post_id' id='comment_iframe' frameborder='0'></iframe>";

						}
						elseif($party=="n")
						{
							$query=mysqli_query($this->con,"SELECT * FROM comments WHERE post_id=$post_id");
							$link= "<iframe src='commentsn.php?post_id=$post_id' id='comment_iframe' frameborder='0'></iframe>";

						}
						elseif($party=="o")
						{
							$query=mysqli_query($this->con,"SELECT * FROM comments WHERE post_id=$post_id");
							$link= "<iframe src='commentso.php?post_id=$post_id' id='comment_iframe' frameborder='0'></iframe>";

						}
						elseif($party=="p")
						{
							$query=mysqli_query($this->con,"SELECT * FROM comments WHERE post_id=$post_id");
							$link= "<iframe src='commentsp.php?post_id=$post_id' id='comment_iframe' frameborder='0'></iframe>";

						}
						elseif($party=="q")
						{
							$query=mysqli_query($this->con,"SELECT * FROM comments WHERE post_id=$post_id");
							$link= "<iframe src='commentsq.php?post_id=$post_id' id='comment_iframe' frameborder='0'></iframe>";

						}
						elseif($party=="r")
						{
							$query=mysqli_query($this->con,"SELECT * FROM comments WHERE post_id=$post_id");
							$link= "<iframe src='commentsr.php?post_id=$post_id' id='comment_iframe' frameborder='0'></iframe>";

						}
						elseif($party=="t")
						{
							$query=mysqli_query($this->con,"SELECT * FROM comments WHERE post_id=$post_id");
							$link= "<iframe src='commentst.php?post_id=$post_id' id='comment_iframe' frameborder='0'></iframe>";

						}
						elseif($party=="u")
						{
							$query=mysqli_query($this->con,"SELECT * FROM comments WHERE post_id=$post_id");
							$link= "<iframe src='commentsu.php?post_id=$post_id' id='comment_iframe' frameborder='0'></iframe>";

						}
						elseif($party=="v")
						{
							$query=mysqli_query($this->con,"SELECT * FROM comments WHERE post_id=$post_id");
							$link= "<iframe src='commentsv.php?post_id=$post_id' id='comment_iframe' frameborder='0'></iframe>";

						}
						elseif($party=="w")
						{
							$query=mysqli_query($this->con,"SELECT * FROM comments WHERE post_id=$post_id");
							$link= "<iframe src='commentsw.php?post_id=$post_id' id='comment_iframe' frameborder='0'></iframe>";

						}
						elseif($party=="x")
						{
							$query=mysqli_query($this->con,"SELECT * FROM comments WHERE post_id=$post_id");
							$link= "<iframe src='commentsx.php?post_id=$post_id' id='comment_iframe' frameborder='0'></iframe>";

						}
						elseif($party=="y")
						{
							$query=mysqli_query($this->con,"SELECT * FROM comments WHERE post_id=$post_id");
							$link= "<iframe src='commentsy.php?post_id=$post_id' id='comment_iframe' frameborder='0'></iframe>";
						}
						$str .= "<div class='main_column column'>
						<div class='status_post' >
								<div class='post_profile_pic'>
									<img src='$profile_pic' width='50'>
								</div>

								<div class='posted_by' style='color:#ACACAC;;'>
									<a href='$added_by'> $username </a>shared a post to  $user_to<br>
									$time_message
								$delete_button		
								</div><br>
								<div id='post_body'>
									$body<br>
									$imageDiv
								</div>
								<br>
								<br>
							</div>
							<div class='newsfeedPostOptions'>
							<div class='commentda' onClick='javascript:toggle$id()'>
							".$comments_check_num."&nbspComments
							</div>
							<iframe src='likeprofile.php?post_id=".$id."&party=".$user_to."' scrolling='no'></iframe>
							</div>
							<div class='post_comment' id='toggleComment$id' style='display:none;''>
							$link
							</div>
							</div>
							<br>
							<br>";
				
					?>
					<script>

						$(document).ready(function()
						{
							$('#post<?php echo $id;?>').on('click',function()
							{
							event.preventDefault();
							bootbox.confirm("Are you sure you want to delete this post?",function(result)
								{	
									$.post("delete_post.php?post_id=<?php echo $id;?>",{result:result});
									if(result)
										location.reload();
										
															
							});
							});
							});
					</script>
					<?php
				} //End while loop
			if($count > $limit) 
				$str .= "<input type='hidden' class='nextPage' value='" . ($page + 1) . "'>
							<input type='hidden' class='noMorePosts' value='false'>";
			else 
				$str .= "<div class='main_column column'>
			<input type='hidden' class='noMorePosts' value='true'><br><b><p style='text-align: centre;'> No more posts to show! </p></b>
						</div>";
		}//End of if
		else
		{
			$str .= "<div class='main_column column'>
			<input type='hidden' class='noMorePosts' value='true'><br><b><p style='text-align: centre;'> No more posts to show! </p></b>
						</div>";
		}
	echo $str;
	}
}
?>		