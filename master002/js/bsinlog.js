 $(document).ready(function() {

	console.log("jquery werkt");
	// call to action signup
	// hide parent cta show signup
	$('.cta1').on("click", function(){
		
		$('.ctaparent').css("display","none");
		$('.signup').css("display","flex");
		console.log("cta1 clicked");
	})
	// call to action signin
	// hide parent cta show signin
	$('.cta2').on("click", function(){
		
		$('.ctaparent').css("display", "none");
		$('.login').css("display","flex");
		console.log("cta2 clicked");
	})

	// chatapplication
	// open close chat
	$('.enterchat').on("click", function(){
		$('.enterchat').css("display", "none");
		$('.closechat').css("display", "block");
		$('.chatroom').css("display", "block");
		console.log("clicked on enter");
	})

	$('.closechat').on("click", function(){
		$(this).css("display", "none");
		$('.enterchat').css("display", "block");
		$('.chatroom').css("display", "none");
		console.log("clicked on close");
		var exit = confirm("Are you sure you want to end the session?");
		if(exit==true){window.location = 'home.php?logout=true';}	
	})

	//If user submits the form
	$("input[name='chatsubmit']").on("click", function(){	
		var clientmsg = $(".chatinput").val();
		console.log(clientmsg);
		console.log("clicked the submitbutton");
		$.post("post.php", {text: clientmsg});				
		$("input[name='chatinput']").attr("value", "");
		// $(".chatinput").val()="";
		// submit();
		return false;
	});

	//Load the file containing the chat log
	function loadLog(){		
		var oldscrollHeight = $(".messages").attr("scrollHeight") - 20;
		$.ajax({
			url: "log.html",
			cache: false,
			success: function(html){		
				$(".messages").html(html); //Insert chat log into the #chatbox div				
		  		var newscrollHeight = $(".messages").attr("scrollHeight") - 20;
		  		if(newscrollHeight > oldscrollHeight){
					$(".messages").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
				}		
		  	},
		});
	}

 	setInterval (loadLog, 2500);

//end of ready function
}); 

	