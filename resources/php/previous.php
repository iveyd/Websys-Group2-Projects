<?php
	// Here we will subtract one from the user's "contid" value, since they hit previous
  	$host = "localhost";
	$username = "root";
	$password = "";
	$db = "rpirpg";
	try {
	  $dbh = new PDO("mysql:host=$host;dbname=$db", $username, $password);

	  $getusercontid = "SELECT * FROM `users`";
	  foreach($dbh->query($getusercontid) as $row)
	  {
	    $usercontid = $row['contid'];
	  }

	  // Checking if the user is at the earliest possible page so that they do not
	  // go too far back
	  if ($usercontid > 1)
	  {
	  	$usercontid--;
	  }

	  $updateusercontid = "UPDATE `users` SET `contid`=$usercontid WHERE `uid`=2";

	  $dbh->exec($updateusercontid);

	} catch(PDOException $e) {
	  echo "ERROR: " . $e->getMessage();
	}
?>