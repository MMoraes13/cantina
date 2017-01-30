
$(document).ready(function(){
	$("#error").css('display', 'none', 'important');
	 $("#connect").click(function(){	
		  username=$("#login").val();
		  password=$("#password").val();
		  $.ajax({
		   type: "POST",
		   url: "add_lanche.php",
		   data: "name="+username+"&pwd="+password,
		   success: function(html){    
			if(html=='true')    {
			 //$("#add_err").html("right username or password");
			 window.location="dashboard.php";
			}
			else    {
			$("#error").css('display', 'inline', 'important');
			 $("#error").html("Wrong username or password");
			}
		   },
		   beforeSend:function()
		   {
			$("#error").css('display', 'inline', 'important');
			$("#error").html("<img src='images/ajax-loader.gif' /> Loading...")
		   }
		  });
		return false;
	});
});