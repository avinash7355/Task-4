<!DOCTYPE html>
<html>
<head>
    <title>Assign Chapter in Subjects</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        h1 {
            margin-top: 20px;
        }
        form {
            margin-top: 30px;
        }

        select, input[type="submit"] {
            padding: 10px;
            font-size: 16pxid
            border-radius: 5px;
            border: 1px solid #ccc;
            margin: 5px;
            width: 300px;
        }

        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        select {
            width: 320px;
        }

        option {
            padding: 5px;       
        }
    </style>
</head>
<body>
    <h1>Assign Chapter to Subjects</h1>
    <form action="Assignchapter.php" method="post">
        <select name="chapter">
            <option value="">Select a Chapter</option>
            <?php
            include "db.php";
            $sql = "SELECT * FROM chapter";
            $result = mysqli_query($connection, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                echo "<option value='$id'>$id</option>";
            }
            ?>
        </select>
        <br><br>
        <select name="subject">
            <option value="">Select a subject</option>
            <?php
            $sql = "SELECT * FROM subject";
            $result = mysqli_query($connection, $sql);
            while ($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                echo "<option value='$id'>$id</option>";
            }
            ?>
        </select>
        <br><br>
        <input type="submit" name="assign_sub" value="Assign Subject">
    </form>
</body>
</html>
<?php
if (isset($_POST['assign_sub'])) {
    $assign_std = $_POST['chapter'];
    $assign_sub = $_POST['subject'];
    $assign_sub_sql = "INSERT INTO `Chapter_s` (`chapter_id`, `subject_id`) VALUES ('$assign_std', '$assign_sub')";
    $assign_sub_result = mysqli_query($connection, $assign_sub_sql);
}
?>
