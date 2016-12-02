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
        <ul class="nav navbar-nav">
          <li><a href="main.php">Home</a></li>
          <li><a href="character.html" id="buttonCharacter">Character</a></li>
          <li><a href="inventory.html" id="buttonInventory">Inventory</a></li>
          <li class="active"><a href="#" id="buttonSettings">Settings</a></li>
          <li><a href="admin.html" id="buttonAdmin">Admin</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.html"><span class="glyphicon glyphicon-log-in"></span> Logout</a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid text-center">
  <div class="row content">
    <div id="charCreate" class="col-md-8 text-center">
    <img id="title" src="resources/images/Create-Your-Character.png" alt="Create Your Character">


    <form id="charCreateForm" action="char_create.php">
      <div class="form-inline">
      <div class="text-center">
        <img src="resources/images/Name-Your-Character.png" alt="Name Your Character">
      </div>
      <div class="text-center">
        <input class="form-control" type="text" name="name">
      </div>
      <div class="text-center">
        <img src="resources/images/Choose-Your-Avatar.png" alt="Choose Your Avatar">
      </div>
        <div id="avatarSelect">
        <?php $avatar = 'tan_male'; ?>
          <img onClick="<?php $avatar = 'light_male'; ?>" type="image" class="avatar" src="resources/images/light_male.png" alt="light_male" name="light_male" />
          <img onClick="<?php $avatar = 'light_female'; ?>" type="image" class="avatar" src="resources/images/light_female.png" alt="light_female" name="light_female" />

          <img onClick="<?php $avatar = 'dark_male'; ?>" type="image" class="avatar" src="resources/images/dark_male.png" alt="dark_male" name="dark_male" />
          <img onClick="<?php $avatar = 'dark_female'; ?>" type="image" class="avatar" src="resources/images/dark_female.png" alt="dark_female" name="dark_female" />

          <img onClick="<?php $avatar = 'tan_male'; ?>" type="image" class="avatar" src="resources/images/tan_male.png" alt="tan_male" name="tan_male" />
          <img onClick="<?php $avatar = 'tan_female'; ?>" type="image" class="avatar" src="resources/images/tan_female.png" alt="tan_female" name="tan_female" />

          <img onClick="<?php $avatar = 'pale_male'; ?>" type="image" class="avatar" src="resources/images/pale_male.png" alt="pale_male" name="pale_male" />
          <img onClick="<?php $avatar = 'pale_female'; ?>" type="image" class="avatar" src="resources/images/pale_female.png" alt="pale_female" name="pale_female" />
        </div>
        <input style="display: none" name="avatar" value="<?php $avatar?>">
        <input id="submit" type="submit" class="btn btn-success" value="Create!"/>
      </div>
    </form>
  </div>
</div>

  <footer class="container-fluid text-center">
    <p>Footer Text</p>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="char_create.js" type="text/javascript" charset="utf-8" async defer></script>
</body>
</html>

