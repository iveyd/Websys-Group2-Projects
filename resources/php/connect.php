<?php

$config = array(
	"dbhost" => "localhost",
	"dbname" => "rpirpg",
	"dbuser" => "root",
	"dbpass" => "root"
);

$host = $config["dbhost"];
$db = $config["dbname"];
$username = $config["dbuser"];
$password = $config["dbpass"];

try {
	$dbh = new PDO("mysql:host=$host;dbname=$db", $username, $password);
	$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
	echo "ERROR: " . $e->getMessage();
}