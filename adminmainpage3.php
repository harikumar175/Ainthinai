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
  <div class="w3-top">
    <div class="w3-bar w3-white w3-padding w3-card" id="topNav" >
      <a class="w3-bar-item w3-button w3-hover-white w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
      </a>
      <a href="#home" class="w3-bar-item w3-button"  style="color:black"><img src="images\icon.jpg"height="40px"border-radius="10px">  Ainthinai Admin</a>
      <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-right"  style="color:black" font-family="Arial"><i class="fa fa-sign-out" style="font-size:25px;color:red"></i> Logout</a>
      <a href="#projects" class="w3-bar-item w3-button w3-hide-small"  style="color:black"><i class="fa fa-line-chart" style="font-size:25px;color:green"></i> Project Queue</a>
      <a href="#approved" class="w3-bar-item w3-button w3-hide-small"  style="color:black"><i class="fa fa-check" style="font-size:25px;color:green"></i> Approved Projects</a>
      <a href="#details" class="w3-bar-item w3-button w3-hide-small"  style="color:black"><i class="fa fa-list" style="font-size:25px;color:green"></i> Project Details</a>
      <a href="#maintanance" class="w3-bar-item w3-button w3-hide-small"  style="color:black"><i class="fa fa-shower" aria-hidden="true" style="font-size:25px;color:green"></i> Maintainance</a>
  </div>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
      <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()"></a>
      <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()"></a>
      <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()"></a>
      <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()"></a>
      <a href="#projects" class="w3-bar-item w3-button" onclick="toggleFunction()"> Project Queue</a>
      <a href="#approved" class="w3-bar-item w3-button" onclick="toggleFunction()"> Approved Projects</a>
      <a href="#details" class="w3-bar-item w3-button" onclick="toggleFunction()"> Project Details</a>
      <a href="#maintanance" class="w3-bar-item w3-button" onclick="toggleFunction()"> Maintainance </a>
      <a href="index.php" class="w3-bar-item w3-button" onclick="toggleFunction()"> Logout </a>
    </div>

    <div class="bgimg-4 w3-display-container w3-opacity-min"id="projects">
      <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide"><u><b>PROJECT QUEUE</b></u></span>
      </div>
    </div>
  <div class="w3-content w3-container w3-padding-64" id="about">
    <h2 class="w3-center">List of Unapproved Projects <i class="fa fa-line-chart" style="font-size:25px;color:green"></i></h2>
    <h3 class="w3-center">Ainthinai</h3>
    <p class="w3-center"><em>Save.Earth.Plant.Trees</em></p>
    <p>These are some of the unapproved projects posted by the users.We can approve it to enable the project to be main project </p>

</div>

    <style>
 table {
   font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
   border-collapse: collapse;
   width: 100%;
 }

 table td, table th {
   border: 1px solid #ddd;
   padding: 8px;
 }

 table tr:nth-child(even){background-color: #f2f2f2;}

 table tr:hover {background-color: #ddd;}

 table th {
   padding-top: 10px;
   padding-bottom: 10px;
   text-align: left;
   background-color: #4CAF50;
   color: white;
 }
 </style>

 <body>

 <?php
   include('dbh.inc.php');
   $sqlget="SELECT*FROM tree";
   $sqldata=mysqli_query($conn,$sqlget);
 echo"<table >";
  echo" <tr>
     <th>ID</th>
      <th>Name</th>
      <th>PhoneNumber</th>
      <th>Email</th>
      <th>Address</th>
      <th>Variant of the Sapling</th>
      <th>Count</th>
      <th>Message</th>
      <th>Actions</th>
       </tr>";
  while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
  {
    echo"<tr><td>";
    echo $row['id'];
    echo"</td><td>";
    echo $row['name'];
    echo"</td><td>";
    echo $row['phonenumber'];
     echo"</td><td>";
    echo $row['email'];
     echo"</td><td>";
    echo $row['address'];
     echo"</td><td>";
    echo $row['type'];
     echo"</td><td>";
    echo $row['count'];
    echo"</td><td>";
    echo $row['message'];
    echo"</td><td>";
    echo $row['message'];
    echo"</td></tr>";
?>


<button onclick="document.getElementById('id01').style.display='block'" class='w3-button w3-green' type='submit' name='edit'>Approve</button>;<br/><br/>;
<div id="id01" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content w3-card-4">
    <header class="w3-container w3-green">
      <span onclick="document.getElementById('id01').style.display='none'"
      class="w3-button w3-large w3-display-topright">&times;</span>
      <h2><i class="fa fa-line-chart"></i>&nbsp;Project Approval</h2>
    </header>
    <div class="w3-container w3-white">

      <form action="" target="" method="POST">
        <h6 class="w3-text-light-grey">Username</h6>

        <div class="w3-full">
          <input class="w3-input w3-border w3-white" type="text" placeholder="Username"  name="username">
        </div><br>

        <h6 class="w3-text-light-grey">Password</h6>

        <div class="w3-full">
          <input class="w3-input w3-border w3-white" type="password" placeholder="Password"  name="password">
        </div>
        <footer class="w3-container w3-white">
          <button class="w3-button w3-green w3-left w3-section " type="submit" name="submit">
            <i class="fa fa-paper-plane"></i> Signin
          </button>
</footer>
</form><a href=""><button class="w3-button w3-green w3-left w3-section" type="submit">
        <i class="fa fa-users"></i> Signup
      </button></a><br>&nbsp;<em>Signup to be a user</em>

    </div>

  </div>
</div>


    <a href='crud.php?delete=<?php echo $row['id'];?>'";
      <?php
    echo"<button class='w3-button w3-red' type='submit' name='delete' >";
    echo"Delete";
    echo"</a></td></tr>";
   }
  echo"</table>";
  ?>
 <center><a href="updatedata.php">
 <button class="w3-button w3-green w3-section" type="submit">
   <i class="fa fa-paper-plane"></i> Update Data
 </button></a>
 </center>





 <div class="bgimg-4 w3-display-container w3-opacity-min"id="expenses">
   <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide"><u><b>EXPENSES</b></u></span>
   </div>
 </div>
 <div class="w3-content w3-container w3-padding-64" >
 <h2 class="w3-center">Expenses <i class="fa fa-inr" style="font-size:25px;color:green"></i></h2>
 <h3 class="w3-center">Ainthinai</h3>
 <p class="w3-center"><em>Save.Earth.Plant.Trees</em></p>
 <p>Make sure the data provided in this table are correct.This coloumn provides the expense data that has been spent on each and every project so far. </p>

 </div>

 <style>
 table {
 font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
 border-collapse: collapse;
 width: 100%;
 }

 table td, table th {
 border: 1px solid #ddd;
 padding: 8px;
 }

 table tr:nth-child(even){background-color: #f2f2f2;}

 table tr:hover {background-color: #ddd;}

 table th {
 padding-top: 10px;
 padding-bottom: 10px;
 text-align: left;
 background-color: #4CAF50;
 color: white;
 }
 </style>

 <body>

 <?php
   include('dbh.inc.php');
   $sqlget="SELECT*FROM expenses";
   $sqldata=mysqli_query($conn,$sqlget);
 echo"<table >";
  echo" <tr>
     <th>id</th>
      <th>Date</th>
      <th>Works</th>
      <th>Expenses</th>
       </tr>";
  while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
  {
    echo"<tr><td>";
    echo $row['id'];
    echo"</td><td>";
    echo $row['dates'];
    echo"</td><td>";
    echo $row['works'];
    echo"</td><td><b>";
    echo $row['expenses'];
    echo"</b></td></tr>";
  }
  echo"</table>";
?>
 <center><a href="updateexpense.php">
 <button class="w3-button w3-green w3-section" type="submit">
 <i class="fa fa-inr" style="color:white"></i> Update Expenses
 </button></a>
 </center>

 <div class="bgimg-4 w3-display-container w3-opacity-min"id="maintainance">
   <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide"><u><b>MAINTAINANCE STATUS</b></u></span>
   </div>
 </div>
 <div class="w3-content w3-container w3-padding-64" >
 <h2 class="w3-center">Maintainance <i class="fa fa-shower" style="font-size:25px;color:green"></i></h2>
 <h3 class="w3-center">Ainthinai</h3>
 <p class="w3-center"><em>Save.Earth.Plant.Trees</em></p>
 <p>Admin involved in the maintanence check can share your view about the saplings that has been planted across various areas.This provides the inspection metric data of Saplings </p>

 </div>

 <style>
 #customers {
 font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
 border-collapse: collapse;
 width: 100%;
 }

 #customers td, #customers th {
 border: 1px solid #ddd;
 padding: 8px;
 }

 #customers tr:nth-child(even){background-color: #f2f2f2;}

 #customers tr:hover {background-color: #ddd;}

 #customers th {
 padding-top: 10px;
 padding-bottom: 10px;
 text-align: left;
 background-color: #4CAF50;
 color: white;
 }
 </style>

 <body>

<?php
   include('dbh.inc.php');
   $sqlget="SELECT*FROM maintainance";
   $sqldata=mysqli_query($conn,$sqlget);
 echo"<table >";
  echo" <tr>
     <th>ID</th>
      <th>Inspection Date</th>
      <th>Inpection Staff</th>
      <th>Location</th>
      <th>Variant of the Tree</th>
      <th>Growth Status</th>
       </tr>";
  while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
  {
    echo"<tr><td>";
    echo $row['id'];
    echo"</td><td>";
    echo $row['inspectiondate'];
    echo"</td><td>";
    echo $row['inspectionstaff'];
     echo"</td><td>";
    echo $row['place'];
     echo"</td><td>";
    echo $row['variant'];
    echo"</td><td><b>";
    echo $row['currentstatus'];
    echo"</b></td></tr>";
  }
  echo"</table>";
?>
 <center><a href="maintainance.php"></a>
 <button class="w3-button w3-green w3-section" type="submit">
 <i class="fa fa-shower" style="color:white"></i> Update Maintainance Status
 </button></a>
 </center>


 <div class="bgimg-4 w3-display-container w3-opacity-min"id="adminacnt">
   <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide"><u><b>ADMIN ACCOUNT ACCESSABILITY</b></u></span>
   </div>
 </div>
 <div class="w3-content w3-container w3-padding-64" >
 <h2 class="w3-center">Admin Account Holders <i class="fa fa-shower" style="font-size:25px;color:green"></i></h2>
 <h3 class="w3-center">Ainthinai</h3>
 <p class="w3-center"><em>Save.Earth.Plant.Trees</em></p>
 <p>This data provides the admin account holders these are the members who are currently accessing the admin rights and data entry process </p>

 </div>

 <style>
 #customers {
 font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
 border-collapse: collapse;
 width: 100%;
 }

 #customers td, #customers th {
 border: 1px solid #ddd;
 padding: 8px;
 }

 #customers tr:nth-child(even){background-color: #f2f2f2;}

 #customers tr:hover {background-color: #ddd;}

 #customers th {
 padding-top: 10px;
 padding-bottom: 10px;
 text-align: left;
 background-color: #4CAF50;
 color: white;
 }
 </style>

 <body>

 <?php
   include('dbh.inc.php');
   $sqlget="SELECT*FROM admin";
   $sqldata=mysqli_query($conn,$sqlget);
 echo"<table >";
  echo" <tr>
     <th>ID</th>
      <th>Name</th>
      <th>Username</th>
      <th>Address</th>
       </tr>";
  while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
  {
    echo"<tr><td>";
    echo $row['id'];
    echo"</td><td>";
    echo $row['name'];
    echo"</td><td>";
    echo $row['username'];
    echo"</td><td>";
    echo $row['address'];
    echo"</td></tr>";
  }
  echo"</table>";
?>
 <center>

 </center>



 <div class="bgimg-4 w3-display-container w3-opacity-min"id="customer">
   <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide"><u><b>CUSTOMERS CONTACTED</b></u></span>
   </div>
 </div>
 <div class="w3-content w3-container w3-padding-64" >
 <h2 class="w3-center">Customer Details <i class="fa fa-users" style="font-size:25px;color:green"></i></h2>
 <h3 class="w3-center">Ainthinai</h3>
 <p class="w3-center"><em>Save.Earth.Plant.Trees</em></p>
 <p>These are the details whom people have tried contacted you so far </p>

 </div>

 <style>
 #customers {
 font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
 border-collapse: collapse;
 width: 100%;
 }

 #customers td, #customers th {
 border: 1px solid #ddd;
 padding: 8px;
 }

 #customers tr:nth-child(even){background-color: #f2f2f2;}

 #customers tr:hover {background-color: #ddd;}

 #customers th {
 padding-top: 10px;
 padding-bottom: 10px;
 text-align: left;
 background-color: #4CAF50;
 color: white;
 }
 </style>

 <body>

 <?php
   include('dbh.inc.php');
   $sqlget="SELECT*FROM contact";
   $sqldata=mysqli_query($conn,$sqlget);
 echo"<table >";
  echo" <tr>
     <th>S.No</th>
      <th>Name</th>
      <th>Email</th>
      <th>Message</th>
       </tr>";
  while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
  {
    echo"<tr><td>";
    echo $row['id'];
    echo"</td><td>";
    echo $row['name'];
    echo"</td><td>";
    echo $row['email'];
    echo"</td><td><b>";
    echo $row['message'];
    echo"</b></td></tr>";
  }
  echo"</table>";
?>
 <center>

 </center>



 <div class="bgimg-4 w3-display-container w3-opacity-min"id="nextproject">
   <div class="w3-display-middle">
     <span class="w3-xxlarge w3-text-white w3-wide"><u><b>PLANT TREE</b></u></span>
   </div>
 </div>
 <div class="w3-content w3-container w3-padding-64" >
 <h2 class="w3-center">Plant Tree Details <i class="fa fa-leaf" style="font-size:25px;color:green"></i></h2>
 <h3 class="w3-center">Ainthinai</h3>
 <p class="w3-center"><em>Save.Earth.Plant.Trees</em></p>
 <p>These are the details taken from the form ,the people have filled .Kindly follow up the checklist and targets </p>

 </div>

 <style>
 #customers {
 font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
 border-collapse: collapse;
 width: 100%;
 }

 #customers td, #customers th {
 border: 1px solid #ddd;
 padding: 8px;
 }

 #customers tr:nth-child(even){background-color: #f2f2f2;}

 #customers tr:hover {background-color: #ddd;}

 #customers th {
 padding-top: 10px;
 padding-bottom: 10px;
 text-align: left;
 background-color: #4CAF50;
 color: white;
 }
 </style>

 <body>

 <?php
   include('dbh.inc.php');
   $sqlget="SELECT*FROM tree";
   $sqldata=mysqli_query($conn,$sqlget);
 echo"<table >";
  echo" <tr>
     <th>ID</th>
      <th>Name</th>
      <th>PhoneNumber</th>
      <th>Email</th>
      <th>Address</th>
      <th>Variant of the Sapling</th>
      <th>Count</th>
      <th>Message</th>
       </tr>";
  while($row=mysqli_fetch_array($sqldata,MYSQLI_ASSOC))
  {
    echo"<tr><td>";
    echo $row['id'];
    echo"</td><td>";
    echo $row['name'];
    echo"</td><td>";
    echo $row['phonenumber'];
     echo"</td><td>";
    echo $row['email'];
     echo"</td><td>";
    echo $row['address'];
     echo"</td><td>";
    echo $row['type'];
     echo"</td><td>";
    echo $row['count'];
    echo"</td><td>";
    echo $row['message'];
    echo"</td></tr>";
  }
  echo"</table>";
?>


    <script>
  // Modal Image Gallery
  function onClick(element) {
    document.getElementById("img01").src = element.src;
    document.getElementById("modal01").style.display = "block";
    var captionText = document.getElementById("caption");
    captionText.innerHTML = element.alt;
  }

  // Change style of navbar on scroll
  window.onscroll = function() {myFunction()};
  function myFunction() {
      var navbar = document.getElementById("myNavbar");
      if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
          navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
      } else {
          navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
      }
  }

  // Used to toggle the menu on small screens when clicking on the menu button
  function toggleFunction() {
      var x = document.getElementById("navDemo");
      if (x.className.indexOf("w3-show") == -1) {
          x.className += " w3-show";
      } else {
          x.className = x.className.replace(" w3-show", "");
      }
  }
  </script>
</body>
</html>
