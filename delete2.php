<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Deleting from database</title>
</head>
<body>
    <table align="center" border="2px" style="width:430px; line-height:55px;"> 
        <tr> 
            <th colspan="2"><h2>Record</h2></th> 
            </tr> 
                <th> ID </th> 
                <th> Name </th> 
                <th> Function </th> 
            </tr> 
      </tr>

<?php
include('database_connection_test.php');
$firstquery="select * from practical_lab_table";
$resultsquery=mysqli_query($conn,$firstquery);
$finalquery= mysqli_num_rows($resultsquery);

               

    while($rows=mysqli_fetch_assoc($resultsquery)) 
    { 
      ?>
        <tr> 
          <td><?php echo $rows['lab_id'];?></td> 
          <td><?php echo $rows['search_term'];?></td> 
          <td><a href = "delete.php? lab_id=<?php echo $rows['lab_id'];?>">Delete</a></td> 
       </tr> 
       <?php 
        }
        ?>
    
    
 

      
</table>
</body>
</html>