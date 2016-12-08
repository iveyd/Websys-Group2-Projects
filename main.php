<!doctype html>
<html lang="en">
<head>
  <title>RPIRPG</title>

  <!-- Bootstrap Stuff -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <!-- Our Stuff -->
  <link rel="stylesheet" href="resources/stylesheets/joe.css">
</head>
<body>

<!-- Navigation bar -->
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
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="character.html" id="buttonCharacter">Character</a></li>
        <li><a href="inventory.html" id="buttonInventory">Inventory</a></li>
        <li><a href="settings.html" id="buttonSettings">Settings</a></li>
        <li><a href="admin.html" id="buttonAdmin">Admin</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="resources/php/logout.php"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Main content -->
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <!-- <a class="previous btn" href="main.php">Previous</a> -->
    </div>
    <!-- Main content loaded here -->
    <div class="col-sm-8 text-left gameBox">
      <?php
        session_start();
        require "resources/php/connect.php";

        // Getting the user's "contid"
        $getusercontid = "SELECT `contid` FROM `users` WHERE `uid`={$_SESSION['uid']}";
        $result = $dbh->query($getusercontid);
        $usercontid = $result->fetch()['contid'];

        // Selecting correct game content
        $getcontent = "SELECT * FROM `game_content` WHERE `contid`=$usercontid";
        $res = $dbh->query($getcontent);
        $row = $res->fetch();
        $contid = $row['contid'];

        // Assign variables from results
        $body = $row['body'];
        $image = $row['image'];
        $choice1 = $row['choice1'];
        $choice2 = $row['choice2'];
        $choice3 = $row['choice3'];

        // Follow code creates the html for the question and buttons
        $choices = array($choice1, $choice2, $choice3);
        $choicesLength = count($choices);

        // echo "<img class='storyImage' src='resources/images/$image'/>";
        echo "<h4 id='gameContent'>" . $body . "</h4>";
        echo "<br>";
        echo "<div id='choices'>";
        
        // Not all stages have three options so handle 1 to 3 choices
        if ($choice2 == "")
        {
            echo "<input class='btn' type='submit' value='$choice1'></input>";
        }
        else if ($choice3 == "")
        {
            for ($i = 0; $i < 2; $i++)
            {
              echo "<input class='btn' type='submit' value='$choices[$i]'></input>";
            }
        }
        else
        {
          for ($i = 0; $i < 3; $i++)
          {
            echo "<input class='btn' type='submit' value='$choices[$i]'></input>";
          }
        }
        echo "</div>";
      ?>
    </div>
    <div class="col-sm-2 sidenav">
      <!-- <div>
        Clicking next button will load in the next content page
        <a class="btn next" href="main.php">Next</a>
      </div> -->
    </div>
  </div>
</div>

<footer class="footer-basic-centered">
  <p class="footer-company-name">RPIRPG &copy; 2016</p>
</footer>

<script src="resources/javascript/main.js"></script>

</body>
</html>

