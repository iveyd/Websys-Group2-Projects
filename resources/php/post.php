<?php
	session_start();
	require "connect.php";

	if (isset($_POST['choice']))
	{
		// Set user choice
		$choice = $_POST['choice'];
		// Get the correct contid based off of choice
	  $getgamecontent = "SELECT `contid`, `choice1`, `choice2`, `choice3`, `choice1Address`, `choice2Address`, `choice3Address`
	  									 FROM `game_content` 
	  									 WHERE `choice1`='$choice' OR `choice2`='$choice' OR `choice3`='$choice';";
	  $result = $dbh->query($getgamecontent);
	  $res = $result->fetch();
	  if ($choice==$res['choice1']) {
	  	$newcontid = $res['choice1Address'];
	  } else if ($choice==$res['choice2']) {
	  	$newcontid = $res['choice2Address'];
	  } else {
	  	$newcontid = $res['choice3Address'];
	  }

	  // Update user with new contid
	  $updateusercontid = "UPDATE `users` SET `contid`=$newcontid WHERE `uid`={$_SESSION['uid']};";
	  $affected = $dbh->exec($updateusercontid);
	}
?>