<?php
  session_start();
  require "connect.php"; 

  if (isset($_POST['submit']) && ($_POST['submit'] == 'Create!')) {
    $uid = $_SESSION['uid'];
    $name = $_POST['name'];
    $avatar = $_POST['avatar'];
 
    $stmt = $dbh->prepare("INSERT INTO `character` (uid, charname, img) VALUES (:uid, :charname, :img)");
    $stmt->execute(array('uid' => $uid, ':charname' => $name, ':img' => $avatar));

    header("Location: ../../main.php");
  }

?>