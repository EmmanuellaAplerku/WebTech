<?php
$servername = "localhost";
$username = "new";
$password = "exam.16";
$dbname = "websitedb";

//$username = "root";
//$password = "Final.16";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Successful";

?>