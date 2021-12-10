<?php
session_start();
$dbname = mysqli_connect('localhost','root','','WebsiteDb');

//initialize variables
$Name = "";
$Email = "";
$GPA = "";
$CompanyPreference = "";
$id = 0;
$update = false;

//When user clicks the update button, it saves changes into the database
if (isset($_POST['update'])) {
    $id=$_POST['applicantID'];
    $Name = $_POST['fname'];
    $Email = $_POST['email'];
    $GPA = $_POST['gpa'];
    $CompanyPreference = $_POST['companypreference'];

    $sql= mysqli_query($dbname, "UPDATE applicant SET fname='$Name', email='$Email', gpa='$GPA', companypreference='$CompanyPreference' WHERE  applicantID=$id");

    $_SESSION['message'] = "Application details updated!"; 
    header('location: application_form.php');
    
}
//When user clicks the delete button, it deletes from the database
if (isset($_GET['del'])) {
    $id = $_GET['del'];
    mysqli_query($dbname, "DELETE FROM applicant WHERE applicantID=$id");
    $_SESSION['message'] = "Application withdrawn!"; 
    header('location: application_form.php');
}


?>