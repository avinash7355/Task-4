<?php include "db.php";?>

<?php
global $connection;
if (isset($_POST['save'])) {
    $id = $_POST['id'];
    $standard_name = $_POST['standard_name'];
    $connection = mysqli_connect('localhost', 'root','root', 'portal');
    if (!$connection)  {
        die("database connection failed");
    }
    $query = "INSERT INTO standard(id,standard_name)" ;
    $query .= " VALUES('$id','$standard_name')";
    $result = mysqli_query($connection, $query);
    if (!$result) {
        die('ENTER wrong detials ' . mysqli_error($connection));}
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
    <title>Welcome to dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f2f2f2;
        }
        .signup-form {
            width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
        }
        .signup-form h2 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }
        .signup-form input[type="text"] {
            border: none;
            border-bottom: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 20px;
            width: 100%;
            font-size: 16px;
            font-weight: 400;
            color: #555;
        }
        .signup-form input[type="text"]:focus {
            outline: none;
            border-bottom: 2px solid #4CAF50;
        }
        .signup-form button[type="submit"] {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 10px 20px;
            margin-top: 20px;
            border-radius: 5px;
            cursor: pointer;
        }
        .signup-form button[type="submit"]:hover {
            background-color: #3e8e41;
        }
    </style>
</head>
<body>
    <div class="signup-form">
        <form action="standardadd.php" method="post" enctype="multipart/form-data">
            <h2>Add new standard</h2>
            <div class="form-group">
                <input type="text" class="form-control" name="id" placeholder="ID" required="required">
            </div>
            <div class="form-group">
                <input type="text" class="form-control" name="standard_name" placeholder="standard Name" required="required">
            </div>
            <div class="form-group">
                <button type="submit" name="save">Add</button>
            </div>
        </form>
    </div>
</body>
</html>