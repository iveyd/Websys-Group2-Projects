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
        <li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span>Logout</a></li>
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
              $image = $row['image'];
              $choice1 = $row['choice1'];
              $choice2 = $row['choice2'];
              $choice3 = $row['choice3'];

              $choices = array($choice1, $choice2, $choice3);
              $choicesLength = count($choices);

              // echo "<img class='storyImage' src='resources/images/$image'/>";
              echo "<h4 id='gameContent'>" . $body . "</h4>";
              echo "<br>";
              echo "<div id='choices'>";
              
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
              break;
            }
          }
        } catch(PDOException $e) {
          echo "ERROR: " . $e->getMessage();
        }
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

   <!--    <p class="footer-company-motto">Enjoying the game? Check out more stuff below</p> -->

      <p class="footer-links">
        <a href="#">Home</a>
        ·
        <a href="#">Blog</a>
        ·
        <a href="#">About</a>
        ·
        <a href="faq.html">Faq</a>
        ·
        <a href="#">Contact</a>
      </p>

      <p class="footer-company-name">RPIRPG &copy; 2016</p>

</footer>
</body>
<!-- JavaScript used to load PHP pages when "previous" or "next" is clicked -->
<script src="resources/javascript/main.js"></script>
</html>

