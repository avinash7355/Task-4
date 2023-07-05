<style>
  body {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
    }

    button {
      padding: 10px 20px;
      font-size: 16px;
      background-color: #4CAF50;
      color: white;
      border: none;
      cursor: pointer;
    }

    button a {
      text-decoration: none;
      color: white;
    }
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
$query = "SELECT * from standard";
$result = mysqli_query($connection,$query); 

if(mysqli_num_rows($result)>0){
?>
  <table class="my-table">
    <tr>
      <th>id</th>   
      <th>standard</th>
      <th>Operation</th>
    </tr>
    <?php
    while($row = mysqli_fetch_assoc($result)){
    ?>
      <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['standard_name'];?></td>
        <td>
          <button><a href="standardedit.php?in=<?php echo $row['id']?>">edit</a></button>
          <button><a href="standarddel.php?in=<?php echo $row['id'];?>">delete</a></button>
          
        </td>
      </tr>
    <?php 
    }
  }
  ?>         
</table>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
<button><a href="standardadd.php">Add Standard</a></button>
</body>
</html>