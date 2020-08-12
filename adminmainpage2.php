<!DOCTYPE html>
<html>
<head>
<title>Ainthinai</title>
<link rel="shortcut icon" type="image/x-icon" href="images\icon.jpg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link type="text/css" rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <div class="w3-top">
    <div class="w3-bar w3-white w3-padding w3-card" id="topNav" >
      <a class="w3-bar-item w3-button w3-hover-white w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
        <i class="fa fa-bars"></i>
      </a>
      <a href="#home" class="w3-bar-item w3-button"  style="color:black"><img src="images\icon.jpg"height="40px"border-radius="10px">  Ainthinai Admin</a>
      <a href="index.php" class="w3-bar-item w3-button w3-hide-small w3-right"  style="color:black" font-family="Arial"><i class="fa fa-sign-out" style="font-size:25px;color:red"></i> Logout</a>
      <a href="#projects" class="w3-bar-item w3-button w3-hide-small"  style="color:black"><i class="fa fa-line-chart" style="font-size:25px;color:green"></i> Projects</a>
      <a href="#expenses" class="w3-bar-item w3-button w3-hide-small"  style="color:black"><i class="fa fa-inr" style="font-size:25px;color:green"></i> Expenses</a>
      <a href="#maintainance" class="w3-bar-item w3-button w3-hide-small"  style="color:black"><i class="fa fa-shower" style="font-size:25px;color:green"></i> Maintainance</a>
      <a href="#adminacnt" class="w3-bar-item w3-button w3-hide-small"  style="color:black"><i class="fa fa-users" style="font-size:25px;color:green"></i> Admin Accounts</a>
      <a href="#customer" class="w3-bar-item w3-button w3-hide-small"  style="color:black"><i class="fa fa-volume-control-phone" aria-hidden="true" style="font-size:25px;color:green"></i> Customers Contacted</a>
      <a href="#nextproject" class="w3-bar-item w3-button w3-hide-small"  style="color:black"><i class="fa fa-leaf" style="font-size:25px;color:green"></i> Next Project Status</a>
  </div>
    </div>

    <!-- Navbar on small screens -->
    <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
      <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()"></a>
      <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()"></a>
      <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()">nil</a>
      <a href="#portfolio" class="w3-bar-item w3-button" onclick="toggleFunction()"></a>
      <a href="#projects" class="w3-bar-item w3-button" onclick="toggleFunction()"> Projects</a>
      <a href="#expenses" class="w3-bar-item w3-button" onclick="toggleFunction()"> Expenses</a>
      <a href="#maintainance" class="w3-bar-item w3-button" onclick="toggleFunction()"> Maintainance</a>
      <a href="#adminacnt" class="w3-bar-item w3-button" onclick="toggleFunction()"> Admin Accounts</a>
      <a href="#customer" class="w3-bar-item w3-button" onclick="toggleFunction()"> Customers Contacted</a>
      <a href="#nextproject" class="w3-bar-item w3-button" onclick="toggleFunction()"> Next Project Status </a>
      <a href="index.php" class="w3-bar-item w3-button" onclick="toggleFunction()"> Logout </a>
    </div>

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

    </body>
    </html>
