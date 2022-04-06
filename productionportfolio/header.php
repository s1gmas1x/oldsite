<!--
         888               888      888
         888               888      888
         888               888      888
 .d8888b 888  888  .d88b.  88888b.  888      .d8888b  .d88b.  88888b.d88b.
d88P"    888 .88P d88""88b 888 "88b 888     d88P"    d88""88b 888 "888 "88b
888      888888K  888  888 888  888 888     888      888  888 888  888  888
Y88b.    888 "88b Y88..88P 888  888 888 d8b Y88b.    Y88..88P 888  888  888
 "Y8888P 888  888  "Y88P"  888  888 888 Y8P  "Y8888P  "Y88P"  888  888  888
-->
<?php
session_start();
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="Description" content="Description">
<title> Title </title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> 
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script> 
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
<link href="https://fonts.googleapis.com/css2?family=Audiowide&family=Julius+Sans+One&family=Play:wght@400;700&family=Roboto:wght@400;900&family=Syncopate:wght@400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Roboto:wght@500&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="stylesheets/stylesheet.css">
</head>

<body>
<div class="page-container">
<div class="content-wrap">
<!-- all other page content --> 
<!--Header-->
<header>
  <nav class="navbar navbar-expand-md navbar-light bg-light"> <a href="index.php" class="navbar-brand logo"><img class="logoImg d-inline-block" src="images/logo2sm.png" alt="logo">
    <h2 class="d-inline-block firstname">CHAD </h2>
    <h2 class="d-inline-block lastname">KOHL</h2>
    </a>
    <button class="navbar-toggler" data-toggle="collapse" data-target="#navbarMenu"> <span class="navbar-toggler-icon"></span> </button>
    <div class="collapse navbar-collapse" id="navbarMenu">
      <ul class="navbar-nav nav-fill navMenu">
        <li class="nav-item" > <a href="#" id="homeBtn" class="nav-link linkCustom active activeLink" >Home</a> </li>
        <li class="nav-item" > <a href="#" id="aboutBtn" class="nav-link linkCustom">About</a></li>
        <li class="nav-item" > <a href="#" id="workBtn" class="nav-link linkCustom">My Work</a> </li>
        <li class="nav-item" > <a href="#" id="contactBtn" class="nav-link linkCustom">Contact</a> </li>
      </ul>
      <div class="navbar navbar-nav ml-auto">
        <?php
        if ( isset( $_SESSION[ "id" ] ) ) {
          $name = $_SESSION[ "user" ];
          echo "<div class=' linkUser'><a class='navUser'>$name</a></div>";
        }
        ?>
        <div class="nav-item">
          <?php
          if ( isset( $_SESSION[ "id" ] ) ) {
            $name = $_SESSION[ "user" ];
            echo "<a href='includes/logout.inc.php' id='logoutBtn' type='submit' name='logout-submit' class='dropFont logOutUser'>Logout</a>";
          } else {
            echo "<a class='dropFont logInUser' data-toggle='dropdown' data-target='dropdown_target' href='#'>Login </a>";
          }
          ?>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdown_target">
            <form class="myForm dropFont" id="loginForm" method="POST" action="includes/login.inc.php" name="login" onsubmit="return validateLogin()">
              <div class="form-group">
                <label for="user">Username:</label>
                <input type="text" class="form-control" id="user" name="userlog" placeholder="Username">
              </div>
              <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="pass" name="passlog" placeholder="Password">
              </div>
              <div class="btnBox">
                <?php
                if ( isset( $_GET[ "error" ] ) ) {
                  if ( $_GET[ "error" ] == "emptyinput" ) {
                    echo '<p class="warnTxt">Fill in all fields!</p>';
                  } else if ( $_GET[ "error" ] == "wronglogin" ) {
                    echo '<p class="warnTxt">Username or password error!</p>';
                  }
                }

                ?>
                <p class="warnTxt" id="msg"></p>
                <button id="loginBtn" type="submit" name="login-submit" class="btn submitButton">Login</button>
              </div>
            </form>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item dropFont"  href="registration.php">New around here? Sign up</a> </div>
        </div>
      </div>
    </div>
  </nav>
</header>
<!--End Header--> 
