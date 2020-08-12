<?php
 include_once'dbh.inc.php';

 $date=$_POST['date'];
 $variant=$_POST['variant'];
 $counts=$_POST['counts'];
 $location=$_POST['location'];
 $ownership=$_POST['ownership'];
 $phonenumber=$_POST['phonenumber'];
$sql="INSERT INTO data(dates,variant,counts,location,ownership,phonenumber) VALUES('$date','$variant','$counts',' $location',''$ownership',''$phonenumber');";
mysqli_query($conn,$sql);
echo"<h5>Success</h5>";
?>
