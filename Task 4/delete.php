<?php
include("db.php");
error_reporting(0);
$rollno=$_GET['rn'];
$query ="DELETE FROM register WHERE rollno='$rollno'";
$data=mysqli_query($connection,$query);
if($data){
    echo "<font color='green'>Record deleted from database";
    
}
else
{
    echo "<font color='red'>Record deleted from database";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="view.php">
  <button type="button" class="btn btn-primary">go back</button>
</a>
</body>
</html>