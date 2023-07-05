<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Welcome Student</h1>
    
</body>
</html>
<style>
  .my-table {
    border-collapse: collapse;
    width: 400px;
    margin: 10px auto;
  }
  .my-table th, .my-table td {
    border: 1px solid black;
    padding: 10px;
    text-align: center;
  }
  .my-table th {
    background-color: #ccc;
  }
  .my-table tr:nth-child(even) {
    background-color: #f2f2f2;
  }
</style>

<?php
$connection = mysqli_connect('localhost','root','root','portal');
$query = "SELECT * from subject";
$result = mysqli_query($connection,$query); 

if(mysqli_num_rows($result)>0){
?>
  <table class="my-table">
    <tr>
         
      <th>Subject</th>
      
    </tr>
    <?php
    while($row = mysqli_fetch_assoc($result)){
    ?>
      <tr>
      
        <td><?php echo $row['subjectname'];?></td>
        <td>
        </td>
      </tr>
    <?php 
    }
  }
  ?>         
</table>
<style>
  .my-table {
    border-collapse: collapse;
    width: 400px;
    margin: 10px auto;
  } <button><a href="chapteredit.php?in=<?php echo $row['id']?>">edit</a></button>
          <button><a href="chapterdel.php?in=<?php echo $row['id'];?>">delete</a></button>
          <button><a href="chapteradd.php">Add</a></button>
  .my-table th, .my-table td {
    border: 1px solid black;
    padding: 10px;
    text-align: center;
  }
  .my-table th {
    background-color: #ccc;
  }
  .my-table tr:nth-child(even) {
    background-color: #f2f2f2;
  }
</style>

<?php
$connection = mysqli_connect('localhost','root','root','portal');
$query = "SELECT * from chapter";
$result = mysqli_query($connection,$query); 
if(mysqli_num_rows($result)>0){
?>
  <table class="my-table">
    <tr>
        
      <th>Chapter name</th>
     
    </tr>
    <?php
    while($row = mysqli_fetch_assoc($result)){
    ?>
      <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['chaptername'];?></td>
        <td>
         
        </td>
      </tr>
    <?php 
    }
  }
  ?>         
</table>
