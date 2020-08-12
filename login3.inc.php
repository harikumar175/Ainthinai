<?php
 include_once'dbh.inc.php';

 $name=$_POST['name'];
 $username=$_POST['username'];
 $age=$_POST['age'];
 $address=$_POST['address'];
 $gender=$_POST['gender'];
 $occupation=$_POST['occupation'];
 $pwd=$_POST['pwd'];
$sql="INSERT INTO admin(name,username,age,address,gender,occupation,pwd) VALUES('$name','$username','$age','$address','$gender','$occupation','$pwd');";
mysqli_query($conn,$sql);
header("location:admincreated.php");
?>
