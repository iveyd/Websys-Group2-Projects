<?php
  require "config.php"; 

  try {
    $host = $config["dbhost"];
    $dbname = $config["dbname"];
    $user = $config["dbuser"];
    $pass = $config["dbpass"];
    $dbconn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);
  }
  catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }

  if (isset($_POST['submit']) && ($_POST['submit'] == 'Create!')) {
    $name = $_POST['name'];
    $avatar = $_POST['avatar'];
 
    $stmt = $dbconn->prepare("INSERT INTO `character` (charname, img) VALUES (:charname, :img)");
    $stmt->execute(array(':charname' => $name, ':img' => $avatar)) or die("kjhekjhlkjhlkj");

    header("Location: ../../main.php");
  }

?>