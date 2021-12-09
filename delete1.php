<?php
include("database_connection_test.php");

// rollno number is neccessary beacuse am delteing the whole row 
$lab_id=$_GET['lab_id'];
$deletequery = "DELETE FROM practical_lab_table WHERE lab_id = '$lab_id'";

$resultsquery=mysqli_query($conn,$deletequery);
if($resultsquery)
{
    echo"Deleted from database";

}
else{
    echo"Failed to delete from database";
}
?>