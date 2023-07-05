<?php include "db.php";?>

<?php
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
    $query = "INSERT INTO register( rollno,fullname,  email,password,address)" ;
    $query .= " VALUES('$rollno','$fullname','$email','$password','$address')";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('ENTER unique Rollno and UNIQUE email ' . mysqli_error($connection));}
        else{
            echo"DATA SAVED";
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
<link rel="stylesheet" href="assests/css/ssult = mysqli_query($connectiontyle.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="signup-form">
    <form action="register.php" method="post" enctype="multipart/form-data">
		<h2>Register</h2>
		<p class="hint-text">Create your account</p>
        <div class="form-group">
			<div class="row">
				<div class="col"><input type="text" class="form-control" name="fullname" placeholder="Fullname" required="required"></div>
			</div>        	
        </div>
        <div class="row">
				<div class="col"><input type="text" class="form-control" name="rollno" placeholder="rollno" required="required"></div>
			</div>     
        </div>
        <div class="form-group">    
        	<input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="password" required="required">
        </div>
		<div class="form-group">
            <input type="password" class="form-control" name="cpass" placeholder="Confirm password" required="required">
        </div>
        <div class="col"><input type="text" class="form-control" name="address" placeholder="address" required="required"></div>
			</div>   
                <select id="profileDropdown" onchange="showProfile()">
                    <option value="">Select Profile</option>
                    <option value="profile1">Admin</option>
                    <option value="profile2">Teacher</option>
                    <option value="profile3">Student</option>
                    <option value="profile4">Librarian</option>
                </select>
  
        <div id="profileInfo">
    
        </div>
       
		<div class="form-group">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Register Now</button>
        </div>
        <div class="text-center">Already have an account? <a href="login.php">Sign in</a></div>
    </form>
	
</div>
</body>
</html>