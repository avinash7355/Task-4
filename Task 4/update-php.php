<!-- <?php
include("db.php");

if(isset($_POST['update']))
{
    $rollno=$_POST['rollno'];
    $fullname=$_POST['fullname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $address=$_POST['address'];
    $query ="UPDATE register SET fullname='$fullname',email='$email',password='$password',address='$address' WHERE rollno=$rollno";
    $data=mysqli_query($connection,$query);
    if($data){
        echo"<script>alert('Record Updated')</script>";
    }
    else{
        echo"<script>alert('Failed')</script>";
    }
}
?> -->