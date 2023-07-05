<?php include "db.php";?>
<?

function createtherow(){
    global $connection;
if (isset($_POST['save'])) {
    $rollno = $_POST['rollno'];
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $connection = mysqli_connect('localhost', 'root','root', 'portal');
    if (!$connection)  {
        die("database connection failed");
    }
    $query = "INSERT INTO user(rollno,fullname,email,password,address)" ;
    $query .= " VALUES('$rollno','$fullname','$email','$password','address')";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('Query FAILED' . mysqli_error($connection));}
        else{
            echo"DATA SAVED";
        }
    }
}


?>