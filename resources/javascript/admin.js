$(document).on("click", ":submit", function(e){
    var name = $(this).attr('name');
    e.preventDefault();

    $.ajax({
        url: "resources/php/remove.php",
        type: "POST",
        data: {user: name},
        success: function() {
            window.location = "admin.php";
        }
    });
});
