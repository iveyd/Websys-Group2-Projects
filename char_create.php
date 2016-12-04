<?php 

  try {
    $dbname = 'RPIRPG';
    $user = 'root';
    $pass = 'test_password';
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

    header("Location: main.php");
  }

?>
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Character Creation</title>
  <link rel="stylesheet" href="resources/stylesheets/char_create.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="index.html">RPIRPG</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid text-center">
  <div class="row content">
    <div id="charCreate" class="col-md-12 text-center">
    <img id="title" src="resources/images/Create-Your-Character.png" alt="Create Your Character">


    <form id="charCreateForm" action="char_create.php" method="POST">
      <div class="form-inline">
      <div class="text-center">
        <img src="resources/images/Name-Your-Character.png" alt="Name Your Character">
      </div>
      <div class="text-center">
        <input id="nameField" class="form-control" type="text" name="name" autofocus required>
      </div>
      <div class="text-center">
        <img src="resources/images/Choose-Your-Avatar.png" alt="Choose Your Avatar">
      </div>
        <div id="avatarSelect">
          <label>
            <input type="radio" name="avatar" value="light_male.png"  checked/>
            <img class="avatar" src="resources/images/light_male.png" alt="light_male">
          </label>
          <label>
            <input type="radio" name="avatar" value="light_female.png" />
            <img class="avatar" src="resources/images/light_female.png" alt="light_female">
          </label>

          <label>
            <input type="radio" name="avatar" value="dark_male.png" />
            <img class="avatar" src="resources/images/dark_male.png" alt="dark_male">
          </label>
          <label>
            <input type="radio" name="avatar" value="dark_female.png" />
            <img class="avatar" src="resources/images/dark_female.png" alt="dark_female">
          </label>

          <label>
            <input type="radio" name="avatar" value="tan_male.png" />
            <img class="avatar" src="resources/images/tan_male.png" alt="tan_male">
          </label>
          <label>
            <input type="radio" name="avatar" value="tan_female.png" />
            <img class="avatar" src="resources/images/tan_female.png" alt="tan_female">
          </label>

          <label>
            <input type="radio" name="avatar" value="pale_male.png" />
            <img class="avatar" src="resources/images/pale_male.png" alt="pale_male">
          </label>
          <label>
            <input type="radio" name="avatar" value="pale_female.png" />
            <img class="avatar" src="resources/images/pale_female.png" alt="pale_female">
          </label>
        </div>
        <input id="submit" type="submit" class="btn btn-success" name="submit" value="Create!"/>
      </div>
    </form>
  </div>
</div>

  <footer class="container-fluid text-center">
    <p>Footer Text</p>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>

