<?php
  session_start();
  $host = "localhost";
  $username = "root";
  $password = "";

  
  $db = "RPIRPG";

  try {
  	$dbh = new PDO("mysql:host=$host;dbname=".$db, $username, $password);
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

	  $dbh->query($sql);
  
  	echo '<script language="javascript">';
    echo 'alert("character reset");';
    echo 'window.location.href = "../../settings.html";';
    echo '</script>';

  }

  if(isset($_POST['changeemail']))
  {
    $newEmail = $_POST['email'];
    $uid = $_SESSION['uid'];

    $sql =   "UPDATE `users`
              SET `email` = '$newEmail'
              WHERE `uid` = $uid;";
    $dbh->query($sql) or die($uid);

    echo '<script language="javascript">';
    echo 'alert("Email changed");';
    echo 'window.location.href = "../../settings.html";';
    echo '</script>';

  }

  if(isset($_POST['changename']))
  {
    $newUser = $_POST['user'];
    $uid = $_SESSION['uid'];

    $sql =   "UPDATE `users`
              SET `email` = '$newUser'
              WHERE `uid` = $uid;";
    $dbh->query($sql) or die($uid);

    echo '<script language="javascript">';
    echo 'alert("Username changed");';
    echo 'window.location.href = "../../settings.html";';
    echo '</script>';

  }

  if(isset($_POST['changepass']))
  {
      $uid = $_SESSION['uid'];

    // Generate salt
      $salt = hash('sha256', uniqid(mt_rand(), true));
      // Apply salt before hash
      $salted = hash('sha256', $salt . $_POST['password']);
      // Store salt


      // echo '<script language="javascript">';
      // echo 'alert("Password changed");';
      // echo 'window.location.href = "../../settings.html";';
      // echo '</script>';

      try {
        $sql = "UPDATE `users`
                SET `password` = $salted,
                    `salt` = $salt
                WHERE `uid` = $uid;";
        $dbh->query($sql);
      } 
      catch (PDOException $e) {
        echo $e->getMessage();
      }

  }
  
?>