<?php

    include 'constants.php';

    session_start();
    if($_SESSION['adminlogincheck'] != true)
    {
        header("Location: login.php");
    }
    
    $sql = "SELECT * FROM product";
    $r = mysqli_query($con,$sql);

?>
<html>
    <body>
<table border="2">
   <tr>
      <th>Ind</th>
      <th>Product_Name</th>
      <th>Processor</th>
      <th>Ram</th>
      <th>Rom</th>
      <th>Screen</th>
      <th>Graphics</th>
      <th>Edit</th>
      <th>Delete</th>
    </tr>

<?php 
    while($row = mysqli_fetch_assoc($r))
    {
        echo '<tr>
            <td>'.$row['Ind'].'</td>
            <td>'.$row['Product_name'].'</td>
            <td>'.$row['Processor'].'</td>
            <td>'.$row['Ram'].'</td>
            <td>'.$row['Rom'].'</td>
            <td>'.$row['Screen'].'</td>
            <td>'.$row['Graphic'].'</td>
            <td><a href="prod_edit.php?id='.$row["Ind"].'">edit</a></td>
            <td><a href="delete.php?id='.$row["Ind"].'">delete</a></td>
        </tr>'; 

    }
    
?>
</table>
</body>
</html>