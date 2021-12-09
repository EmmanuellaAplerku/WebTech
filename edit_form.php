<?php
require __DIR__ . "/database_credentials.php";
//Create a connect
$conn = new mysqli(servername, username, password, dbname);

//Editing the database
   $Lab_id = $_GET["Lab_id"]; 
   $query = mysqli_query($conn,"select * from `practical_lab_table` where Lab_id='$Lab_id'"); 
   $datafetching = mysqli_fetch_array($query); 
   if(isset($_POST['update'])) // Checking for when the Update button is clicked on
   {
       $Searchterm = $_POST['Search_term'];
   
       $updating = mysqli_query($con,"update `practical_lab_table` set Search_term='$Searchterm' where Lab_id='$Lab_id'");
       
       if($edit)
       {
           $msg = "Updated successfully";
           header("location:my_form.php"); 
           exit;
       }
       else
       {
           $msg =$edit;
       }    	
   }
   ?>

<html>
    <body>
    <form action="my_form.php" method="POST">
    <label for="new_val">New Value</label>
    <input type='text' name='new_val' placeholder='Type something' />
    <br><br>
    <button type='submit' name='Editing'>Edit</button>
    </form>
    </body>
</html>