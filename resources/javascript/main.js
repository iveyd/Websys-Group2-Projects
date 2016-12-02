$(document).ready(function() {
	$('.previous').click(function() {
		$.get("resources/php/previous.php");
	})
	$('.next').click(function() {
		$.get("resources/php/next.php");
	})
})
