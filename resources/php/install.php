<?php
  $host = "localhost";
  $username = "root";
  $password = "";

  // Creating our database
  $db = "RPIRPG";
  $sql1 = "CREATE DATABASE IF NOT EXISTS `$db`;
           USE `$db`;
           CREATE TABLE IF NOT EXISTS `users` (
             `uid` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
             `contid` int(3) NOT NULL DEFAULT '1',
             `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
             `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
             `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
             `salt` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
             `isAdmin` int(1) NOT NULL DEFAULT '0'
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
          CREATE TABLE IF NOT EXISTS `game_content` (
           `contid` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
           `body` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
           `item` varchar(100) COLLATE utf8_unicode_ci NOT NULL
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
          CREATE TABLE IF NOT EXISTS `character` (
           `charid` int(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
           `charname` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
           `img` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
           `major` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
           `semester` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
           `courses` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
           `year` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
           `passed` int(50) NOT NULL,
           `failed` int(50) NOT NULL
           ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
          CREATE TABLE IF NOT EXISTS `settings` (
           `credits` varchar(100) COLLATE utf8_unicode_ci NOT NULL
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