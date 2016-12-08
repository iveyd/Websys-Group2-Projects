<?php
  session_start();
  require "connect.php"; 

  if (isset($_POST['submit']) && ($_POST['submit'] == 'Create!')) {
    $charid = $_SESSION['uid'];
    $name = $_POST['name'];
    $avatar = $_POST['avatar'];
 
    $stmt = $dbh->prepare("INSERT INTO `character` (charid, charname, img) VALUES (:charid, :charname, :img)");
    $stmt->execute(array(':charid' => $charid, ':charname' => $name, ':img' => $avatar));

    header("Location: ../../index.html");
  }

?>