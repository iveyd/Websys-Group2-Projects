<?php 

  try {
    $dbname = 'RPIRPG';
    $user = 'root';
    $pass = '';
    $dbconn = new PDO('mysql:host=localhost;dbname='.$dbname, $user, $pass);
  }
  catch (Exception $e) {
    echo "Error: " . $e->getMessage();
  }

  if (isset($_POST['submit']) && ($_POST['submit'] == 'Create!')) {
    $name = $_POST['name'];
    $avatar = $_POST['avatar'];
 
    $stmt = $dbconn->prepare("INSERT INTO `character` (charname, img) VALUES (:charname, :img)");
    $stmt->execute(array(':charname' => $name, ':img' => $avatar)) or die("kjhekjhlkjhlkj");

    header("Location: ../../main.php");
  }

?>