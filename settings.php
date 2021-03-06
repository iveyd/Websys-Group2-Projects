<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Settings</title>
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="../resources/javascript/settings.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

  <link rel="stylesheet" href="resources/stylesheets/settings.css">
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
        <a class="navbar-brand" href="main.php">RPIRPG</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav">
          <li><a href="main.php">Home</a></li>
          <li><a href="character.php" id="buttonCharacter">Character</a></li>
          <li class="active"><a href="#" id="buttonSettings">Settings</a></li>
          <?php require "resources/php/check_admin.php"; ?>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="resources/php/logout.php"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid text-center">
  <div class="row content">
    <div class="col-sm-2 sidenav">
    </div>
    <div id="settings" class="col-md-8 text-center">
      <!-- <img id="title" src="resources/images/Settings.png" alt="settings"> -->
        <div class="form-inline">
            <section>
              <section class="col-1">
                <button class="button" id="email_popup">Change email</button>
                <div id="email_box" class="popup">
                  <input type="button" id="cancel_email" class="cancel_button" value="X">
                  <form action="../resources/php/settings.php" class="form_popup" method="POST">
                    <label for="input_name">Enter new email:</label>
                    <input type="text" class="input_name" name="email"><br>
                    <input name="changeemail" type="submit" class="button_popup" value="Confirm Change">
                  </form>
                  <input type="button" id="close_email" class="close_button" value="Cancel">
                </div>
                
                <form action="../resources/php/settings.php" method="POST">
                  <input name="charreset" type="submit" class="button" value="Reset Character">
                </form>

                <button class="button" id="pass_popup">Change password</button>
                <div id="pass_box" class="popup">
                  <input type="button" id="cancel_pass" class="cancel_button" value="X">
                  <form action="../resources/php/settings.php" class="form_popup" method="POST">
                    <label for="input_name">Enter new password:</label>
                    <input type="text" class="input_name" name="password"><br>
                    <input name="changepass" type="submit" class="button_popup" value="Confirm Change">
                  </form>
                  <input type="button" id="close_pass" class="close_button" value="Cancel">
                </div>
                
              </section>
              <section class="col-2">
                <button class="button" id="user_popup">Change user name</button>
                <div id="user_box" class="popup">
                  <input type="button" id="cancel_user" class="cancel_button" value="X">
                  <form action="../resources/php/settings.php" class="form_popup" method="POST">
                    <label for="input_name">Enter new username:</label>
                    <input type="text" class="input_name" name="user"><br>
                    <input name="changename" type="submit" class="button_popup" value="Confirm Change">
                  </form>
                  <input type="button" id="close_user" class="close_button" value="Cancel">
                </div>

                <button class="button" id="credit_popup">Credits</button>
                <div id="credit_box" class="popup">
                  <input type="button" id="cancel_credit" class="cancel_button" value="X">
                  <p>Joe, David, Chris, Connor, Ashad</p>
                  <input type="button" id="close_credit" class="close_button" value="Cancel">
                </div>
                
              </section>
              <section class="col-3">
                <button  class="button" id="admin_popup">Contact admins</button>
                <div id="admin_box" class="popup">
                  <input type="button" id="cancel_admin" class="cancel_button" value="X">
                  <p>The Admins won't help you</p>
                  <input type="button" id="close_admin" class="close_button" value="Cancel">
                </div>
              </section>
            </section>
          </div>
      </div>
  </div>
  <div class="col-sm-2 sidenav">
    </div>
</div>

<footer class="footer-basic-centered">
  <p class="footer-company-name">RPIRPG &copy; 2016</p>
</footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="#" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>