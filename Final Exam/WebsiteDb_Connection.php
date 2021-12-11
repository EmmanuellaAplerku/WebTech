<?php
$servername = "20.108.166.138";
$username = "server";
$password = "Final.16";
$dbname = "websitedb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo $conn;

?>