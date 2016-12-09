<!doctype html>
<html lang="en">
<head>
  <title>Admin</title>
  <!-- Bootstrap Stuff -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- Our Stuff -->
  <link rel="stylesheet" href="resources/stylesheets/admin.css">
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
      <ul class="nav navbar-nav">
        <li><a href="main.php">Home</a></li>
        <li><a href="character.php" id="buttonCharacter">Character</a></li>
        <li><a href="settings.php" id="buttonSettings">Settings</a></li>
        <li class="active"><a href="#" id="buttonAdmin">Admin</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-8 text-left" id="main">
      <?php
        try {
          // Get all users from the database
          $getusercontid = "SELECT * FROM `users`";

          echo "<table><tr><th>uid</th><th>contid</th><th>email</th><th>username</th><th>password</th><th>isAdmin</th><th>Action</th></tr>";

          foreach($dbh->query($getusercontid) as $row)
          {
            $uid = $row['uid'];
            $contid = $row['contid'];
            $email = $row['email'];
            $username = $row['username'];
            $password = $row['password'];
            $isAdmin = $row['isAdmin'];

            echo "<tr><td>$uid</td><td>$contid</td><td>$email</td><td>$username</td><td>$password</td><td>$isAdmin</td><td><input type='submit' class='button' name=$uid value='Remove' /></td></tr>";
          }

          echo "</table>";
        } catch(PDOException $e) {
          echo "ERROR: " . $e->getMessage();
        }
      ?>
    </div>

  </div>
</div>

<footer class="footer-basic-centered">
  <p class="footer-company-name">RPIRPG &copy; 2016</p>
</footer>

</body>
<script src="resources/javascript/joe.js"></script>
</html>

