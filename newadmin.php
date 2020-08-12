<?php
session_start();
 ?>


<!DOCTYPE html>
<html>
<title>Ainthinai</title>
<link rel="shortcut icon" type="image/x-icon" href="images\icon.jpg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

<body>

  <div class="bgimg-4 w3-display-container w3-opacity-min"id="gallery">
    <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide"><u>NEW ADMIN</u></span>
    </div>
  </div>
  <br><br>


<link type="text/css" rel="stylesheet" href="style.css">
<h2 class="w3-center"><i class="fa fa-user" style="font-size:25px;color:black"></i> Admin Account  </h2>
<p class="w3-center"><em>Ainthinai.Nellai</em></p>


  <div class="w3-row w3-padding-32 w3-section">
    <div class="w3-col m4 w3-container">
      <img src="images/members.jpg" class="w3-image w3-round" style="width:100%">
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-circle fa-fw w3-text-green w3-xlarge w3-margin-right" aria-hidden="true"></i>You need the permission of an Admin to create a new Admin <br>
      </div>
      <p>Let's join our hands <i class="fa fa-leaf" style="color:green"></i> and make a better Eco-System</p>

      <form action="login2.inc.php" target="" method="POST">
              <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                <div class="w3-half">
                  <input class="w3-input w3-border" type="text" placeholder="Username" name="username">
                </div>
              </div>
              <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                <div class="w3-half">
                  <input class="w3-input w3-border" type="password" placeholder="Password" name="password">
                </div>
              </div>
              <button class="w3-button w3-green w3-left w3-section" type="submit" name="submit">
                <i class="fa fa-user"></i> Create Admin
              </button>
            </form>
    </div>
  </div>
  <footer class="w3-center w3-green w3-padding-64  w3-hover-opacity-off">
    <a href="index.php" class="w3-button w3-light-grey"><i class="fa fa-home w3-margin-right"></i>Home</a>
    <div class="w3-xlarge w3-section">
    <a href="https://www.facebook.com/pg/NellaiNatureClub/"><i class="fa fa-facebook-official w3-hover-opacity w3-green"></i></a>
    <a href=""><i class="fa fa-instagram w3-hover-opacity w3-green"></i></a>
      <i class="fa fa-snapchat w3-hover-opacity w3-green"></i>
      <i class="fa fa-pinterest-p w3-hover-opacity w3-green"></i>
      <i class="fa fa-twitter w3-hover-opacity w3-green"></i>
      <i class="fa fa-linkedin w3-hover-opacity w3-green"></i>
    </div>
    <p>Copyrights &copy AinthinaiNellai</p>
  </footer>
  </body>
  </html>
