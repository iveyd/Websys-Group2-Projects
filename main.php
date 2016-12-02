<!doctype html>
<html lang="en">
<head>
  <title>RPlayI</title>

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
        <li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
      </ul>
    </div>
  </div>
</nav>

<!-- Main content -->
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <!-- Clicking previous button will load in the previous content page -->
      <a class="previous" href="main.php">Previous</a>
    </div>
    <!-- Main content loaded here -->
    <div class="col-sm-8 text-left gameBox"> 
      <?php

        // What will be done here is that the "contid" variable from the users table
        // will be taken, and it will be compared against all rows in the game_content table.
        // If the user's "contid" is equal to the game_content row "contid", then we will load
        // that content.

        $host = "localhost";
        $username = "root";
        $password = "";
        $db = "rpirpg";

        try {
          // Connecting to database
          $dbh = new PDO("mysql:host=$host;dbname=$db", $username, $password);

          // Currently am selecting everything from users page, my users database
          // only contains a single user so this works for testing purposes.
          $getusercontid = "SELECT * FROM `users`";
          foreach($dbh->query($getusercontid) as $row)
          {
            // Getting the user's "contid"
            $usercontid = $row['contid'];
          }

          // Selecting all the game content
          $getcontent = "SELECT * FROM `game_content`";

          // Searching for a match between the user's "contid" and 
          // the game_content row "contid"
          foreach($dbh->query($getcontent) as $row)
          {
            $contid = $row['contid'];

            // Match is found, so we output the game_content row "body",
            // and then exit
            if ($contid == $usercontid)
            {
              $body = $row['body'];
              echo "<h4>" . $body . "</h4";
              echo "<br>";
              break;
            }
          }
        } catch(PDOException $e) {
          echo "ERROR: " . $e->getMessage();
        }
      ?>
    </div>
    <div class="col-sm-2 sidenav">
      <div>
        <!-- Clicking previous button will load in the previous content page -->
        <a class="next" href="main.php">Next</a>
      </div>
    </div>
  </div>
</div>
</body>
<!-- JavaScript used to load PHP pages when "previous" or "next" is clicked -->
<script src="resources/javascript/main.js"></script>
</html>

