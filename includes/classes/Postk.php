<?php
class Postk
{
		private $user_obj;
		private $con;

		public function __construct($con,$user)
		{
			$this->con=$con;
			
			$this->user_obj= new User($con,$user);
		}
		public function submitPost($body,$user_to)
		{
			$body=strip_tags($body);
			$body=mysqli_real_escape_string($this->con,$body);
			$check_empty=preg_replace('/\s+/','', $body);
			if($check_empty != "")
			{
				
				$date_added=date("Y-m-d H:i:s");
				
				//GEt username	
				$added_by=$this->user_obj->getusername();
			
				if($user_to== $added_by)
				{
					$user_to="none";
				}
			//insert post
				$query=mysqli_query($this->con,"INSERT INTO postk VALUES('','$body','$added_by','$user_to','$date_added','no','no','0')");
				$returned_id=mysqli_insert_id($this->con);
				// insert notification
				//update count for user
				$num_post=$this->user_obj->getNumPost();
				$num_post++;
				$update_query=mysqli_query($this->con,"UPDATE voters SET num_post='$num_post' WHERE username='$added_by'");
			}
		
		}
		//writing code to load post
	public function loadPostsFriends($data, $limit) {

		$page = $data['page']; 
		$userLoggedIn = $this->user_obj->getusername();

		if($page == 1) 
			$start = 0;
		else 
			$start = ($page - 1) * $limit;


		$str = ""; //String to return 
		$data_query = mysqli_query($this->con, "SELECT * FROM postk WHERE deleted='no' ORDER BY id DESC");

		if(mysqli_num_rows($data_query) > 0) {


			$num_iterations = 0; //Number of results checked (not necasserily posted)
			$count = 1;

			while($row = mysqli_fetch_array($data_query)) {
				$id = $row['id'];
				$body = $row['body'];
				$added_by = $row['added_by'];
				$date_time = $row['date_added'];

				//Prepare user_to string so it can be included even if not posted to a user
				if($row['user_to'] == "none") {
					$user_to = "";
				}
				else {
					$user_to_obj = new User($con, $row['user_to']);
					$user_to_name = $user_to_obj->getcharacter();
					$user_to = "to <a href='" . $row['user_to'] ."'>" . $user_to_name . "</a>";
				}

				//Check if user who posted, has their account closed
				$added_by_obj = new User($this->con, $added_by);
				if($added_by_obj->isClosed()) {
					continue;
				}

				

					if($num_iterations++ < $start)
						continue; 


					//Once 10 posts have been loaded, break
					if($count > $limit) {
						break;
					}
					else {
						$count++;
					}
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
					$comments_check=mysqli_query($this->con,"SELECT
						* FROM comments WHERE post_id='$id'");
					$comments_check_num=mysqli_num_rows($comments_check);
										
					
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

					$str .= "<div class='status_post'onClick='javascript:toggle$id()' >
								<div class='post_profile_pic'>
									<img src='$profile_pic' width='50'>
								</div>

								<div class='posted_by' style='color:#ACACAC;'>
									<a href='$added_by'> $username </a> $user_to &nbsp;&nbsp;&nbsp;&nbsp;$time_message
								$delete_button		
								</div>
								<div id='post_body'>
									$body

									<br>
								</div>
								<br>
								<br>
								<br>

							</div>
							<div class='newsfeedPostOptions'>
							comments($comments_check_num)&nbsp&nbsp&nbsp&nbsp;
							<iframe src='likesk.php?post_id=$id' scrolling='no'></iframe>

							
							</div>
							<div class='post_comment' id='toggleComment$id' style='display:none;''>
							<iframe src='commentsk.php?post_id=$id' id='comment_iframe' frameborder='0'>
							</iframe>
							</div>
							<hr>
							
							"
							;
				
					?>
					<script>

						$(document).ready(function()
						{
							$('#post<?php echo $id;?>').on('click',function()
							{
							event.preventDefault();
							bootbox.confirm("Are you sure you want to delete this post?",function(result)
								{	
									$.post("delete_postk.php?post_id=<?php echo $id;?>",{result:result});
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
				$str .= "<input type='hidden' class='noMorePosts' value='true'><p style='text-align: centre;'> No more posts to show! </p>";
		}//End of if

		echo $str;
	}
}
?>