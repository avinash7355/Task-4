
<?php include "db.php"; ?>
<?php
$connection = mysqli_connect("localhost", "root", "root", "portal");
if (!$connection) {
    die("Database connection failed: ".mysqli_connect_error());
}
if (isset($_POST['password']) && isset($_POST['email'])) {
    $password = $_POST['password'];
    $email = $_POST['email'];
    if (!empty($password) && !empty($email)) {
        $password = mysqli_real_escape_string($connection, $password);
        $email = mysqli_real_escape_string($connection, $email);
        $query = "SELECT * FROM register WHERE email = '$email' AND password = '$password'" ;
        $result = mysqli_query($connection, $query);
        if ($result && mysqli_num_rows($result) > 0) {
            echo "Login successfully!";
            session_start();
            $_SESSION['log'] = true;
            $_SESSION['email'] = $email;
            header("Location: dashboard.php");
            exit();
        } else {
            echo "Invalid email or password";
        }
    } else {
        echo "Please enter both email and password";
    }
} else {
    echo "Please enter both email and password";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
<script>
function showProfile() {
    var profile = document.getElementById("profileDropdown").value;
    if (profile === "profile1") {
        window.location.href = "admindashboard.php";
    } else if (profile === "profile2") {
        window.location.href = "teacherdashboard.php";
    } else if (profile === "profile3") {
        window.location.href = "studentdash.php";
    }   
}
</script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700">
    <title>Welcome to Login page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assests/css/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="signup-form">
    <form action="login.php" method="post" enctype="multipart/form-data">
        <h2>Login page</h2>
        <p class="hint-text">Enter Login Details</p>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="password" required="required">
        </div>
        <select id="profileDropdown" onchange="showProfile()">
                <option value="">Select Profile</option>
                <option value="profile1">Admin</option>
                <option value="profile2">Teacher</option>
                <option value="profile3">Student</option>
            </select>
        <div class="form-group">
            <button type="submit" name="save" class="btn btn-success btn-lg btn-block">Login</button>
        </div>
        <div class="text-center">Don't have an account? <a href="register.php">Register Here</a></div>
       
    </form>
</div>
</body>
</html>
<?php
