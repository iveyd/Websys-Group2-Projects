<?php
$config = array(
  "dbhost" => "localhost",
  "dbname" => "rpirpg",
  "dbuser" => "root",
  "dbpass" => "root"
);

session_start();

// Connect to the database
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


// Check login
if ($dbconn && isset($_POST['login']) && $_POST['login'] == 'Login') {
  // get the salt
  $salt_stmt = $dbconn->prepare('SELECT `salt` FROM `users` WHERE `username`=:username');
  $salt_stmt->execute(array(':username' => $_POST['username']));
  $res = $salt_stmt->fetch();
  $salt = ($res) ? $res['salt'] : '';
  // create salted password
  $salted = hash('sha256', $salt . $_POST['password']);
  // check for user/pass in database
  $login_stmt = $dbconn->prepare('SELECT username, password, isAdmin, uid FROM users WHERE username=:username AND password=:password');
  $login_stmt->execute(array(':username' => $_POST['username'], ':password' => $salted));
  // If the user was correct, set session and location
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
    header('Location: ../../index.html?status=failed');
  }
}