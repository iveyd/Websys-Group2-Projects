<?php
	require "connect.php";
	session_start();
  if (isset($_POST['user']))
  {
      $uid = $_POST['user'];

      $removeUser = "DELETE FROM `users` WHERE `uid` = $uid";

      $dbh->exec($removeUser);
  }
?>