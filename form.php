



<!DOCTYPE html>
<html>
<link rel="shortcut icon" type="image/x-icon" href="images\icon.jpg">
<title>Ainthinai</title>
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
     <span class="w3-xxlarge w3-text-white w3-wide"><u>PLANT TREE</u></span>
    </div>
  </div>
  <br><br>


<link type="text/css" rel="stylesheet" href="style.css">
<h2 class="w3-center">Plant Tree  <i class="fa fa-leaf" style="font-size:25px;color:green"></i></h2>
<h3 class="w3-center">You can also Contribute</h3>
<p class="w3-center"><em>Save.Earth.Plant.Trees</em></p>

<?php
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$place=$_POST['place'];
$type=$_POST['type'];
$count=$_POST['count'];
$msg=$_POST['message'];

$to='harikumarkannanarul@gmail.com';
$message="Name: ".$name."\n\n"."Phone Number : ".$phone."\n\nEmail: ".$email."\n\nLocation: ".$place."\n\nType of Tree: ".$type."\n\nCount of Trees: ".$count."\n\nWould Like to convey the Following Message: ".$msg;
$header="From :".$email;
mail($to,$header,$message);
echo"<center><h3>Mail Sent! Thank You ".$name."We will contact soon</h3></center>";

include_once'dbh.inc.php';

$sql="INSERT INTO tree(name,phonenumber,email,address,type,count,message) VALUES('$name','$phone','$email','$place','$type','$count','$msg');";
mysqli_query($conn,$sql);
echo"success";
}

?>

  <div class="w3-row w3-padding-32 w3-section">
      
    <div class="w3-col m4 w3-container">
      <img src="gallery/img6.jpg" class="w3-image w3-round" style="width:100%">
    </div>
    <div class="w3-col m8 w3-panel">
      <div class="w3-large w3-margin-bottom">
        <i class="fa fa-circle fa-fw w3-text-green w3-xlarge w3-margin-right" aria-hidden="true"></i>All Details should be given precisely <br>
        <i class="fa fa-circle fa-fw w3-text-green w3-xlarge w3-margin-right" aria-hidden="true"></i>Please avoid null messages <br>
        <i class="fa fa-circle fa-fw w3-text-green w3-xlarge w3-margin-right" aria-hidden="true"></i>Confirmation Mail will be sent to your mail soon after evaluation of responses by admins <br>
      </div>
      <p>Let's join our hands <i class="fa fa-leaf" style="color:green"></i> and make a better Eco-System</p>

      <form action="" target="_blank" method="POST">
              <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                <div class="w3-half">
                  <input class="w3-input w3-border" type="text" placeholder="Name" name="name">
                </div>
                <div class="w3-half">
                  <input class="w3-input w3-border" type="text" placeholder="PhoneNumber" name="phone">
                </div>
                <div class="w3-half">
                  <input class="w3-input w3-border" type="text" placeholder="Email" name="email">
                </div>
                <div class="w3-half">
                  <input class="w3-input w3-border" type="text" placeholder="Address" name="place">
                </div>
                <div class="w3-half">
                  <input class="w3-input w3-border" type="text" placeholder="Type or Variant of Tree You would like to prefer(eg.Neem)" name="type">
                </div>
                <div class="w3-half">
                  <input class="w3-input w3-border" type="text" placeholder="Number of trees" name="count">
                </div>
              </div>
              <input class="w3-input w3-border" type="text" placeholder="Purpose or Message yould like to share with us" name="message">
              <button class="w3-button w3-green w3-left w3-section" type="submit" name="submit">
                <i class="fa fa-paper-plane"></i> SEND MESSAGE
              </button>
            </form>&nbsp;&nbsp;<a href="index.php">
              <button class="w3-button w3-red  w3-section" type="" name="">
                <i class="fa fa-sign-out"></i> Exit
              </button></a>
    </div>
  </div>
  <footer class="w3-center w3-green w3-padding-64  w3-hover-opacity-off">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section">
    <a href="https://www.facebook.com/pg/NellaiNatureClub"><i class="fa fa-facebook-official w3-hover-opacity w3-green"></i></a>
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
