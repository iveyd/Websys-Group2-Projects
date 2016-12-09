<?php
	require "connect.php";
	session_start();

	$getAdmin = $dbh->query("SELECT `isAdmin` FROM `users` WHERE `uid`={$_SESSION['uid']};");
	if ($getAdmin->fetch()['isAdmin']) {
		echo "<li><a href='admin.php' id='buttonAdmin'>Admin</a></li>";
	}
?>