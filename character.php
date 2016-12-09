
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Character</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="./resources/stylesheets/character.css">
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
      <a class="navbar-brand" href="main.php">RPIG</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li id="home-btn"><a href="main.php">Home</a></li>
        <li id="character-btn" class="active"><a href="#">Character</a></li>
        <li id="settings-btn"><a href="settings.php">Settings</a></li>
        <?php require "resources/php/check_admin.php"; ?>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="./index.html"><span class="glyphicon glyphicon-log-in"></span> LogOut</a></li>
      </ul>
    </div>
  </div>
</nav>
    
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <!-- <a class="previous btn" href="main.php">Previous</a> -->
    </div>
    <!-- Main content loaded here -->
    <div class="col-sm-8 text-left gameBox">
      <?php
       // Session and connection from check_admin
       $getCharInfo = $dbh->query("SELECT * FROM `character` WHERE `uid`={$_SESSION['uid']}");
       $charInfo = $getCharInfo->fetch();
       $charName = $charInfo['charname'];
       $charMajor = $charInfo['major'] ? $charInfo['major'] : '';
       $charPic = $charInfo['img'];
       echo "<h1 id='character-screen-title'>Welcome $charName</h1>";
       echo "<img class='center-block' id='avatar' src='resources/images/$charPic'>";
      ?>
    </div>
    <div class="col-sm-2 sidenav"></div>
  </div>
</div>

<footer class="footer-basic-centered">
  <p class="footer-company-name">RPIRPG &copy; 2016</p>
</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<script src="./resources/javascript/character.js"></script>
</body>


