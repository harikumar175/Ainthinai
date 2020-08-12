
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
  <div class="bgimg-5 w3-display-container w3-opacity-min"id="projects">
    <div class="w3-display-middle">
      <span class="w3-xxlarge w3-text-white w3-wide"><u><b>APPROVAL</b></u></span>
    </div>
  </div>
  <div class="w3-content w3-container w3-padding-64" id="about">
    <h2 class="w3-center">Approval of Projects<i class="fa fa-line-chart" style="font-size:25px;color:green"></i></h2>
    <h3 class="w3-center">Ainthinai</h3>
    <p class="w3-center"><em>Save.Earth.Plant.Trees</em></p>
    <p>Please provide precise information and avoid null data as possible. </p>
    <?php
    if(isset($_POST['submit']))
    {
 include_once'dbh.inc.php';

 $name= $row['name'];
 $phonenumber= $row['phonenumber'];
 $email = $row['email'];
 $address= $row['address'];
 $type = $row['type'];
 $count= $row['count'];
 $message= $row['message'];
$sql="INSERT INTO data(dates,variant,counts,location,ownership,phonenumber) VALUES('$date','$variant','$counts',' $location','$ownership','$phonenumber');";
mysqli_query($conn,$sql);
echo"<h5>Success</h5>";
}
?>

    <form action="" target="" method="POST">
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-full">
                <input class="w3-input w3-border" type="text" placeholder="Name"value="<?php echo $name;?>" name="name">
              </div>
            </div>
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-full">
                <input class="w3-input w3-border" type="text" placeholder="Phonenumber" value="<?php echo $phonenumber;?>" name="phonenumber">
              </div>
            </div>
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-full">
                <input class="w3-input w3-border" type="text" placeholder="Email" value="<?php echo $email;?>" name="email">
              </div>
            </div>
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-full">
                <input class="w3-input w3-border" type="text" placeholder="Address" value="<?php echo $address;?>" name="address">
              </div>
            </div>
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-full">
                <input class="w3-input w3-border" type="text" placeholder="Variant of Tree" value="<?php echo $type;?>" name="type">
              </div>
            </div>
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-full">
                <input class="w3-input w3-border" type="text" placeholder="Count" value="<?php echo $count;?>" name="count">
              </div>
            </div>
            <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
              <div class="w3-full">
                <input class="w3-input w3-border" type="text" placeholder="Message" value="<?php echo $message;?>" name="message">
              </div>
            </div>

            <button class="w3-button w3-green w3-left w3-section" type="submit" name="submit">
              <i class="fa fa-paper-plane"></i> Submit
            </button>
          </form>&nbsp;&nbsp;<a href="adminmainpage.php"><button class="w3-button w3-green  w3-section" type="" name="signup">
              <i class="fa fa-sign-out"></i> Back
            </button></a>&nbsp;&nbsp;<em>Return to Admin Dashboard<em>


</div>
