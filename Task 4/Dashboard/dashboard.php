
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        
        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        
        h1 {
            font-size: 24px;
            margin-bottom: 20px;
            text-align: center;
        }
        
        .button-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }     
        .btn {
            display: inline-block;
            padding: 10px 20px;
            margin: 0 10
        }

        .btn-primary {
            background-color: #007bff;
        }
        
        .btn-primary:hover {
            background-color: #0056b3;
        }
        
        .btn-info {
            background-color: #17a2b8;
        }
        
        .btn-info:hover {
            background-color: #117a8b;
        }
    </style>
        <?php
session_start();
if(!(isset($_SESSION['log'])) || $_SESSION['log'] !== true){
    header("Location: login.php");
    exit();
}
?>
</head>
<body>
    <div class="container">
        <h1>Welcome back!</h1>
            <div class="button-container">
                <button onclick="window.location.href='register.php';" type="button" class="btn btn-primary">Add User</button>
                <button onclick="window.location.href='view.php';" type="button" class="btn btn-info">View</button>
                <button onclick="window.location.href='logout.php';" type="button" class="btn btn-info">Logout</button>
            </div>
            </div>
</body>
</html>