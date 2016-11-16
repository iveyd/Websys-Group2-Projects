<?php
  $host = "localhost";

  $username = "root";
  $password = "";

  // Creating our database
  $db = "RPIRPG";
  try {
  	$dbh = new PDO("mysql:host=$host", $username, $password);
  	$dbh->exec("CREATE DATABASE IF NOT EXISTS `$db`;");	  	
  } catch(PDOException $e) {
  	echo 'ERROR: ' . $e->getMessage();
  }

  if ($dbh)
  {
  	echo "Created database!";
  	echo "<br>";
  }
?>