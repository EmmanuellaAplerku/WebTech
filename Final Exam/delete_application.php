<?php
session_start();

$dbname = mysqli_connect('localhost','root','','WebsiteDb');


$id=$_POST('withdraw');
// sql to delete a record
$sql = "DELETE FROM applicant WHERE withdraw='$id'";

if (mysqli_query($conn, $sql)) {
  echo "Record deleted successfully";
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

mysqli_close($conn);
?>