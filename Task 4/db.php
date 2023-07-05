<?php       
$connection = mysqli_connect('localhost', 'root','root', 'portal');
    if (!$connection) {
         
        die("database connection failed");
    }
    $query = "SELECT * FROM register ";
    $query1="SELECT * FROM subject";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query FAILED' . mysqli_error($connection));
    }
    ?>  
     