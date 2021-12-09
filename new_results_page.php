
<?php
require __DIR__ . "/database_credentials.php";
//Create a connect
$conn = new mysqli(servername, username, password, dbname);

if(isset($_POST["SubmitForm"])){
      $userinput1 = $_POST["Searchbox2"];

      //Selecting from the database
      $DbSelect="SELECT `Lab_id`, `Search_term` FROM `practical_lab_table`";
      $InputSelection=$conn->query($DbSelect);
  }
  
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
      
      
 

?>

