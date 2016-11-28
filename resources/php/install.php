<?php
  $host = "localhost";
  $username = "root";
  $password = "root";

  // Creating our database
  $db = "RPIRPG";
  $sql1 = "CREATE DATABASE IF NOT EXISTS `$db`;
           USE `$db`;
           CREATE TABLE IF NOT EXISTS `users` (
             `uid` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
             `name` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
             `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
             `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
             `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
             `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
             `isAdmin` int(1) NOT NULL DEFAULT '0'
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;";
  try {
  	$dbh = new PDO("mysql:host=$host", $username, $password);
  	$dbh->exec($sql1);	  	
  } catch(PDOException $e) {
  	echo 'ERROR: ' . $e->getMessage();
  }

  if ($dbh)
  {
  	echo "Created database!";
  	echo "<br>";
  }
?>