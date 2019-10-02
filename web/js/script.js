function clickMe() {
	alert("Clicked!");
}

function changeColor() {
	var textbox_id = "txtColor";
	var textbox = document.getElementById(textbox_id);

	var div_id = "div1";
	var div = document.getElementById(div_id);

	// We should verify values here before we use them...
	var color = textbox.value;
	div.style.backgroundColor = color;

}


	
	$(".open").on("click", function(){
		$(".overlay, .modal").addClass("active");
	  });
	  
	  $(".close, .overlay").on("click", function(){
		 $(".overlay, .modal").removeClass("active");
	  });
	  
	  $(document).keyup(function(e) {
		if (e.keyCode === 27) {
		  $(".overlay, .modal").removeClass("active");
		}
	  });