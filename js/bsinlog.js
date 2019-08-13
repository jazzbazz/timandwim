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

 	

//end of ready function
}); 

