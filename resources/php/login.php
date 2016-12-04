<?php
session_start();

// Connect to the database
try {
  $dbname = 'RPIRPG';
  $user = 'root';
  $pass = '';
  $dbconn = new PDO('mysql:host=localhost;dbname='.$dbname, $user, $pass);
}
catch (Exception $e) {
  echo "Error: " . $e->getMessage();
}


// Check login
if ($dbconn && isset($_POST['login']) && $_POST['login'] == 'Login') {
  $salt_stmt = $dbconn->prepare('SELECT `salt` FROM `users` WHERE `username`=:username');
  $salt_stmt->execute(array(':username' => $_POST['username']));
  $res = $salt_stmt->fetch();
  $salt = ($res) ? $res['salt'] : '';
  $salted = hash('sha256', $salt . $_POST['password']);
  
  $login_stmt = $dbconn->prepare('SELECT username, password, isAdmin, uid FROM users WHERE username=:username AND password=:password');
  $login_stmt->execute(array(':username' => $_POST['username'], ':password' => $salted));
  
  if ($user = $login_stmt->fetch()) {
    $_SESSION['username'] = $user['username'];
    $_SESSION['uid'] = $user['uid'];
    $_SESSION['isAdmin'] = $user['isAdmin'];

    if ($user['isAdmin']==true) {
      header('Location: ../../admin.html');
      exit();
    } else {
      header('Location: ../../main.php');
      exit();
    }
  } else {
    $err = 'Incorrect username or password.';
  }
} else {
  echo "Shit.";
}