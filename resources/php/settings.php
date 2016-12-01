<?php
  $host = "localhost";
  $username = "root";
  $password = "";

  
  $db = "RPIRPG";

  try {
  	$dbh = new PDO("mysql:host=$host", $username, $password);
  } 
  catch(PDOException $e) {
  	echo 'ERROR: ' . $e->getMessage();
  }

  if(isset($_POST['charreset']))
  {

  	$sql = "UPDATE `character`
			SET `charname` = '', 
				`img` = '',
				`major` = '',
				`semester` = '',
				`courses` = '',
				`year` = '',
				`passed` = 0,
				`failed` = 0
			WHERE `character`.`charid` = 0;";
	$update = $dbh->prepare($sql);
  	$update->execute();

  	print("Return number of rows that were updated:\n");
	$count = $update->rowCount();
	print("Updated $count rows.\n");	
  }
  
?>