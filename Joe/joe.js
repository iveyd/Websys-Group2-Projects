$("#buttonCharacter").click(function() {
	var c = $("#character");
	if (c.length) {
		c.toggle();
	} else {
		$(this).character();
	}
});

$("#buttonInventory").click(function() {
	var i = $("#inventory");
	if (i.length) {
		i.toggle();
	} else {
		$(this).inventory();
	}
});

(function( $ ) {
		var main = $("#main");

    $.fn.character = function( data ) {
    	main.append("<div class='gameBox' id='character'>Character</div>");
      return this;
    };

    $.fn.inventory = function( data ) {
    	main.append("<div class='gameBox' id='inventory'>Inventory</div>");
    	return this;
    }
}( jQuery ));