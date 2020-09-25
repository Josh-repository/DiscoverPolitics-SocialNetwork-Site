<?php
class Notification
{
		private $user_obj;
		private $con;

		public function __construct($con,$user)
		{
			$this->con=$con;
			
			$this->user_obj= new User($con,$user);
		}
		public function getUnreadNumber(){
			$userLoggedIn=$this->user_obj->getusername();
			$query=mysqli_query($this->con,"SELECT * FROM notifications WHERE viewed='no' AND user_to='$userLoggedIn'");
			return mysqli_num_rows($query);

		}
	

		public function insertNotification($post_id,$added_by,$type,$User_to){
			$userLoggedIn=$this->user_obj->getusername();
			$userLoggedInName=$this->user_obj->getcharacter();
			$date_time=date("Y-m-d H:i:s");
			switch($type){
				case 'comment':
				$message=$userLoggedInName." commented on you post";
				break;
				case 'like':
				$message=$userLoggedInName."liked your post";
				break;
				case 'profile_post':
				$message=$userLoggedInName."posted on to $User_to";
				break;
				case 'comment_non_owner':
				$message=$userLoggedInName."commented on a post you commented on";
				break;
				
			}
		
			$link='post.php?id='.$post_id.'&party='.$User_to.'';
			$insert_query=mysqli_query($this->con,"INSERT INTO notifications VALUES('','$added_by','$userLoggedIn','$message','$link','$date_time','no','no')");
		}
public function getNotification($data,$limit){
			$page=$data['page'];
			$userLoggedIn=$this->user_obj->getusername();
			$return_string="";
			
			if($page==1)
				$start=0;
			else
				$start=($page-1)*$limit;

			$set_viewed_query=mysqli_query($this->con,"UPDATE notifications SET viewed='yes' WHERE user_to='$userLoggedIn'");


			$query=mysqli_query($this->con,"SELECT * FROM notifications WHERE user_to='$userLoggedIn' ORDER BY id DESC");
			if(mysqli_num_rows($query)==0)
			{
				echo "You have no notifications";
				return;
			}
			$num_iterations=0;
			$count=1;

		while($row=mysqli_fetch_array($query)) {
				# code...
				if($num_iterations++ < $start){
					continue;
				}
				if($count>$limit)
					break;
				else
					$count++;

				$user_from=$row['user_from'];
				$user_data_query=mysqli_query($this->con,"SELECT * FROM voters WHERE username='$user_from'");
				$user_data=(mysqli_fetch_array($user_data_query));

				//Timeframe
					$date_time_now = date("Y-m-d H:i:s");
					$start_date = new DateTime($row['datetime']); //Time of post
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
					




				$opened=$row['opened'];
				$style=($row['opened']=='no')?"background-color:#DDEDEE;":"";

				$return_string.="<a href='".$row['link']."'>
				<div class='reultDisplay resultDisplayNotification' style'".$style. "'>
				<div class='notificationProfilepic'>
					<img src='".$user_data['profile_pic']."'>
					</div>
					<p class='timestamp_smaller' id='grey'>".$time_message."</p>".$row['message']."
				</a>";
		}
		if($count>$limit)
		{
			$return_string.="<input type='hidden' class='nextPageDropdownData'  value='".($page+1)."'><input type='hidden' class='noMoreDropdownData' value='false'";
		}
		else
			$return_string.="<input type='hidden'  class='noMoreDropdownData' value='true'><p style='text-align: center;'>No more notifications to load!</p>";
		return $return_string;
}
}
?>