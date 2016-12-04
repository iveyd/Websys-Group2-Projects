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

    // echo '<div id="email_alert">';
    // echo '<input type="button" id="cancel_button" value="X">';
    // echo '<p>Email changed</p>';
    // echo '<input type="button" id="close_button" value="Cancel">';
    // echo '</div>';
    // echo '<script>window.location.href = "../../settings.html";</script>';

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

    // echo '<div id="email_alert">';
    // echo '<input type="button" id="cancel_button" value="X">';
    // echo '<p>Email changed</p>';
    // echo '<input type="button" id="close_button" value="Cancel">';
    // echo '</div>';
    // echo '<script>window.location.href = "../../settings.html";</script>';

  }

  if(isset($_POST['changpass']))
  {
    $newPass = $_POST['pass'];
    $uid = $_SESSION['uid'];

    $sql =   "UPDATE `users`
              SET `password` = '$newPass'
              WHERE `uid` = $uid;";
    $dbh->query($sql) or die($uid);
echo 'hello';
    echo '<script language="javascript">';
    echo 'alert("Password changed");';
    echo 'window.location.href = "../../settings.html";';
    echo '</script>';

    // echo '<div id="email_alert">';
    // echo '<input type="button" id="cancel_button" value="X">';
    // echo '<p>Email changed</p>';
    // echo '<input type="button" id="close_button" value="Cancel">';
    // echo '</div>';
    // echo '<script>window.location.href = "../../settings.html";</script>';

  }
  
?>