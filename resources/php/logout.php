<?php
	session_start();

	// end your session
	unset($_SESSION);
  session_destroy();

  header("Location: ../../index.html"); //redirect to login
  echo 'You have been logged out.';
  exit;
?>