$(document).on("click", ":submit", function(e){
    var value = $(this).val();
    e.preventDefault();
    $.ajax({
        url: "resources/php/post.php",
    	type: "POST",
    	data: {choice: value},
    	success: function() {
    		window.location = "main.php";
    	}
    });
});
