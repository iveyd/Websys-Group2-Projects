<?php
  $host = "localhost";
  $username = "root";
  $password = "";

  
  $db = "RPIRPG";

  try {
  	$dbh = new PDO("mysql:host=$host;dbname=".$db, $username, $password);
  	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  } 
  catch(PDOException $e) {
  	echo 'ERROR: ' . $e->getMessage();
  }

try {
  if(isset($_POST['charreset']))
  {

  	$sql = "UPDATE `character` 
  			SET `charname` = '', 
  				`img` = '', 
  				`major` = '', 
  				`semester` = '', 
  				`courses` = '', 
  				`year` = '', 
  				`passed` = '0', 
  				`failed` = '0';";
	$dbh->query($sql);
  	//$update->execute();

	// $count = $update->rowCount();
	print("Updated rows.\n");	
  }
}
catch(PDOException $e) {
	echo 'ERROR: ' . $e->getMessage();
}
  
?>