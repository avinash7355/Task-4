<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        
        th, td {
            padding: 10px;
            text-align: left;
        }
        
        th {
            background-color: #007bff;
            color: #fff;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        .button-container {
            margin-top: 20px;
            text-align: center;
        }
        
        .btn {
            display: inline-block;
            padding: 10px 20px;
            font-size: 16px;
            border: none;
            border-radius: 4px;
            color: #fff;
            background-color: #007bff;
            cursor: pointer;
            text-decoration: none;
            transition: background-color 0.3s ease;
        }
        
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <table border="2" cellspacing="7">
        <tr>
            <th>rollno</th>
            <th>fullname</th>
            <th>email</th>
            <th>password</th>
            <th>address</th>
            <th colspan="2" align="">operation</th>
        </tr>
        <?php
        include "db.php";
        error_reporting(E_ALL);     
        ini_set('display_errors', 1);
        $query="SELECT * FROM register ";
        $data=mysqli_query($connection,$query);
        $total=mysqli_num_rows($data);
        if($total!=0){
            while($result=mysqli_fetch_assoc($data)){
                echo "
                <tr>
                    <td>".$result['rollno']."</td>
                    <td>".$result['fullname']."</td>
                    <td>".$result['email']."</td>
                    <td>".$result['password']."</td>
                    <td>".$result['address']."</td>
                    <td><a href='update.php?rn=$result[rollno]&fn=$result[fullname]&en=$result[email]&pn=$result[password]&an=$result[address]' class='btn'>Update/edit</td>
                    <td><a href='delete.php?rn=$result[rollno]' onclick='return checkdelete()' class='btn'>Delete</td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No record found</td></tr>";
        }
        ?>
    </table>
    <div class="button-container">
        <button onclick="window.location.href='register.php';" type="button" class="btn">Add User</button>
        <button onclick="window.location.href='view.php';" type="button" class="btn">View</button>
        <button onclick="window.location.href='logout.php';" type="button" class="btn">Logout</button>
    </div>
    <script>
        function checkdelete() {
            return confirm('Are you sure you want to delete this record?');
        }
    </script>
</body>
</html>
