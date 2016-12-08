<?php
  session_start();
  require "connect.php";

  if ($dbh && isset($_POST['create']) && $_POST['create'] == 'Create') {
  	if (!isset($_POST['username']) || !isset($_POST['password']) || 
  			!isset($_POST['confirm'])  || !isset($_POST['email'])) {
  		$msg = "Please fill in all fields.";
  	} else if ($_POST['password'] !== $_POST['confirm']) {
  		$msg = "Passwords must match.";
  	} else {
  		// Generate salt
  		$salt = hash('sha256', uniqid(mt_rand(), true));
  		// Apply salt before hash
  		$salted = hash('sha256', $salt . $_POST['password']);
  		// Store salt
  		$stmt = $dbh->prepare("INSERT INTO `users` (`email`, `username`, `password`, `salt`) VALUES (:email, :username, :password, :salt)");
  		try {
	  		$stmt->execute(array(':email' => $_POST['email'],
	  												 ':username' => $_POST['username'],
	  												 ':password' => $salted,
	  												 ':salt' => $salt));
	  		header('Location: ../../char_create.html');
	  		exit();
	  	} catch (PDOException $e) {
	  		echo $e->getMessage();
	  	}

  	}
  }
?>