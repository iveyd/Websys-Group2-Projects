<?php
	require "config.php";
	
	if ($_POST['choice'])
	{
		$choice = $_POST['choice'];

	  $host = $config["dbhost"];
	  $db = $config["dbname"];
	  $username = $config["dbuser"];
	  $password = $config["dbpass"];
		try {
		  $dbh = new PDO("mysql:host=$host;dbname=$db", $username, $password);

		  $getusercontid = "SELECT * FROM `users`";
		  foreach($dbh->query($getusercontid) as $row)
		  {
		    $usercontid = $row['contid'];
		  }

		  $getgamecontent = "SELECT * FROM `game_content`";
		  foreach($dbh->query($getgamecontent) as $row)
		  {
		  	$contid = $row['contid'];
		  	if ($usercontid == $contid)
		  	{
		  	  $body = $row['body'];
              $image = $row['image'];

              $choice1 = $row['choice1'];
              $choice2 = $row['choice2'];
              $choice3 = $row['choice3'];

              $choice1Address = $row['choice1Address'];
              $choice2Address = $row['choice2Address'];
              $choice3Address = $row['choice3Address'];

              if ($choice1 == $choice)
              {
              	$usercontid = $choice1Address;
              }
              else if ($choice2 == $choice)
              {
              	$usercontid = $choice2Address;
              }
              else
              {
              	$usercontid = $choice3Address;
              } 

              break;
		  	}
		  }

		  $updateusercontid = "UPDATE `users` SET `contid`=$usercontid WHERE `uid`=1";
		  $dbh->exec($updateusercontid);

		} catch(PDOException $e) {
		  echo "ERROR: " . $e->getMessage();
		}
	}
?>