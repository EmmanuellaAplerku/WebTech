<?php
require(__DIR__ . "/quiz_database_credentials.php");

        //Create a connect
        $conn = new mysqli(servername, username, password);

        //Check the connection
        if ($conn->connect_error) {
               die("Connection failed: " . $conn->connect_error);
               echo "Connection failed";
        }

        else{
        echo "Connection successful";
        }
        $conn->close();

?>