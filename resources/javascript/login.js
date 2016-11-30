// Switch from login to register
$("#createAccount").click(function() {
	$("#login-form").hide();
	$("#register-form").show();
});

// Switch from register to login
$("#alreadyRegistered").click(function() {
	$("#register-form").hide();
	$("#login-form").show();
});