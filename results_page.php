<?php
require __DIR__ . "/database_credentials.php";
//Create a connect
$conn = new mysqli(servername, username, password, dbname);

//Adding to the database
    $userinput = $_POST["Searchbox2"];
    $database = "INSERT INTO practical_lab_table (Search_term) VALUES('$userinput')";

//Check the connection to see that the user input is stored into database
if ($conn->query($database) === TRUE) {
      echo "Your entry: " . $userinput . " has been added to the database successfully.";
    }
    else{
        echo "Your entry could not be added to the database " . $conn->error;

    }
$conn->close();

?>