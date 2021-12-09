<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title>Webtech Form</title>

</head>
<body>
<?php
//Start a session
    session_start();

//Set the session
    if(isset($_POST["SubmitForm"])){
        $_SESSION["Searchbox1Session"]= $_POST["Searchbox1"];
    }
    if(isset($_POST["SubmitForm"])){
        $userinput1 = $_POST["Searchbox2"];
  
        //Selecting from the database
        $DbSelect="SELECT `lab_id`, `Search_term` FROM `practical_lab_table`";
        $InputSelection=$conn->query($DbSelect);
    
    
     if ($InputSelection->num_rows > 0) {
      // Select the data from each row
      while($row = $InputSelection->fetch_assoc()) {
        $id = $row['Lab_id'];
        echo "<br>".$row['Search_term'];
      }
    }
        
    else{
        echo "No search results found" .$conn1->error;
    }
           
        
        $conn->close();
}
    
?>

    <h2> Search Bar 1</h2>
    <form action="my_form.php" method="post">
        <!-- This is to indicate where the results from the search should appear -->
        <!--The session function in this code helps to have a permanent stateless handling -->
        <input type="text" name="Searchbox1" placeholder="Search" value="<?php echo(isset($_SESSION['Searchbox1Session']))? $_SESSION['Searchbox1Session'] : '';?>"><br>
        <input type="submit" name="SubmitForm"><br> 
    </form>

    <?php
    require __DIR__ . "/database_credentials.php";
    //Create a connect

    $conn1 = new mysqli(servername, username, password, dbname);

    if(isset($_POST["SubmitForm"])){
        $userinput1 = $_POST["Searchbox1"];
        $database1 = "SELECT Lab_id, Search_term FROM  practical_lab_table WHERE Search_term= '$userinput1'";
    
    //Check the connection to see that the user input is selected from database
    if ($conn1->query($database1) === TRUE) {
          echo "Your entry: " . $userinput1 . " has been selected from the database successfully.";
        }
    
        else{
        echo "Your entry could not be selected from the database " . $conn1->error;   
        } 
    
    $conn1->close();

    //echo $_POST["Searchbox1"];
    }
     

?>


    <h2> Search Bar 2</h2>
    <form action="results_page.php" method="post">
        <!--This is to indicate where the input data within the second search box should appear -->
        <input type="text" name="Searchbox2" placeholder="Search"><br>
        <input type="submit" name="SubmitForm"><br> 
    </form>




</body>
</html>
