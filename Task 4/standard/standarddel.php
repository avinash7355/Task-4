<?php
include("db.php");
error_reporting(0);
$id = $_GET['in'];
$query = "DELETE FROM standard WHERE id='$id'";
if(mysqli_query($connection, $query)){
    echo "<font color='green'>Record deleted from database";
} else {
    echo "<font color='red'>Record not deleted from database";
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
<a href="standard.php">
  <button type="button" class="btn btn-primary">go back</button>
</a>
</body>
</html>