<?php
  require "connect.php";
  session_start();

// Check login
if ($dbh && isset($_POST['login']) && $_POST['login'] == 'Login') {
  // get the salt
  $salt_stmt = $dbh->prepare('SELECT `salt` FROM `users` WHERE `username`=:username');
  $salt_stmt->execute(array(':username' => $_POST['username']));
  $res = $salt_stmt->fetch();
  $salt = ($res) ? $res['salt'] : '';
  // create salted password
  $salted = hash('sha256', $salt . $_POST['password']);
  // check for user/pass in database
  $login_stmt = $dbh->prepare('SELECT username, password, isAdmin, uid FROM users WHERE username=:username AND password=:password');
  $login_stmt->execute(array(':username' => $_POST['username'], ':password' => $salted));
  // If the user was correct, set session and location
  if ($dbuser = $login_stmt->fetch()) {
    $_SESSION['username'] = $dbuser['username'];
    $_SESSION['uid'] = $dbuser['uid'];
    $_SESSION['isAdmin'] = $dbuser['isAdmin'];

    if ($dbuser['isAdmin']==true) {
      header('Location: ../../admin.php');
      exit();
    } else {
      header('Location: ../../main.php');
      exit();
    }
  } else {
    header('Location: ../../index.html?status=failed');
  }
}