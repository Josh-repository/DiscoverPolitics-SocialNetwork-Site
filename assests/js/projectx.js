function getUsers(value,user){
	$.post("includes/handelers/ajax_friend_search.php",{query:value,userLoggedIn:user},function(data){
		$(".results").html(data);
	});
}
function getDropDownData(user,type){
	if($(".dropdown_data_window").css("height")=="0px"){
		var pageName;
		if(type=='notification'){
			pageName="ajax_load_notifications.php";
			$("span").remove("#unread_notification");
		}
		else if(type=='message'){
			pageName="ajax_load_messages.php";
			$("span").remove("#unread_message");
		}
		var ajaxreq = $.ajax({
				url:"includes/handelers/" + pageName,
				type:"POST",
				data: "page=1&userLoggedIn="+user,
				cache:false,
				success:function(response){
					$(".dropdown_data_window").html(response);
					$(".dropdown_data_window").css({"padding":"0px","height":"280px","border":"1px solid #DADADA"});
					$("#dropdown_data_type").val(type);
				}
		});
	}
	else{
		$(".dropdown_data_window").html("");
		$(".dropdown_data_window").css({"padding":"0px","height":"0px","border":"1px solid #DADADA"});
	}

}