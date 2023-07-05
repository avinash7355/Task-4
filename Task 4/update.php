<?php
include("db.php");
error_reporting(0);
$rn= $_GET['rn'];
$fn= $_GET['fn'];
$en= $_GET['en'];
$pn= $_GET['pn'];
$an= $_GET['an'];
?>
<?php
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
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
<title>Welcome to dashboard</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="assests/css/style.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

</head>
<body>
<div class="signup-form">
    <form action="update.php" method="POST" enctype="multipart/form-data">
		<h2>Update</h2>
		<p class="hint-text">!Want to Update your Details</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" value="<?php echo"$rn"?>" class="form-control" name="fullname" placeholder="Fullname" required="required"></div>
			</div>        	
        </div>
        <div class="row">
				<div class="col"><input type="text" value="<?php echo"$rn"?>" class="form-control" name="rollno" placeholder="rollno" required="required"></div>
			</div>     
        </div>
        <div class="form-group">    
        	<input type="email" class="form-control" value="<?php echo"$en"?>" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="text" class="form-control" value="<?php echo"$pn"?>" name="password" placeholder="password" required="required">
        </div>
        <div class="col"><input type="text" class="form-control" name="address" value="<?php echo"$an"?>" placeholder="address" required="required"></div>
			</div>   
		<div class="form-group">
        <button type="submit" name="update" class="btn btn-success btn-lg btn-block">Update Now</button>
    </form>
	
</div>
</body>
</html>
