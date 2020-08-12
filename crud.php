<?php

$id = '';
$name= '';
$phonenumber= '';
$email = '';
$address= '';
$type = '';
$count= '';
$message= '';


if(isset($_GET['delete']))
{
  include_once'dbh.inc.php';
$id=$_GET['delete'];
$mysqli="DELETE FROM tree where id=$id";
mysqli_query($conn,$mysqli);
header("location:adminmainpage3.php");
}

if(isset($_GET['edit']))
{
  include_once'dbh.inc.php';
  $id=$_GET['edit'];
  $result=$mysqli->query("SELECT * FROM tree WHERE id=$id");
  if(count($result)==1)
  {
    $row=$result->fetch_array();
    $id = $row['id'];
    $name= $row['name'];
    $phonenumber= $row['phonenumber'];
    $email = $row['email'];
    $address= $row['address'];
    $type = $row['type'];
    $count= $row['count'];
    $message= $row['message'];
    $sql="INSERT INTO data(dates,variant,counts,location,ownership,phonenumber) VALUES('$date','$variant','$counts',' $location','$ownership','$phonenumber');";
    mysqli_query($conn,$sql);
    header("location:approval.php");
  }
  header("location:approval.php");
}

?>
