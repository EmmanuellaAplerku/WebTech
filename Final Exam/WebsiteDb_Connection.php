<?php
$servername = "localhost";
$username = "root";
$password = "Obaapasweetie16";
$dbname = "websitedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}


?>