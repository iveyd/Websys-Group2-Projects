$(document).on("click", ":submit", function(e){
    var value = $(this).val();

    e.preventDefault();

    $.ajax({
    	type: 'post',
    	url: 'resources/php/post.php',
    	data: {choice: value},
    	success: function() {
    		location.reload();
    	}
    });
});
