<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="website_styles.css" rel="stylesheet" type="text/css">


<body>
    <!--Creating a navbar -->
    <nav class = "navbar navbar-light bg-transparent">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="#">
                <img src="logo.png" alt="" width="120" height="80">
                <h1 class="webname">The Experience Hub</h1>
          </a>
      </div>
  <ul class="nav justify-content-end">
        <li class="nav-item">
      <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="client companies.php">Client Companies</a>
        </li>
        <li class="nav-item">
      <a class="nav-link" href="Partner Universities.php">Partner Universities</a>
        </li>
        <li class="nav-item">
      <a class="nav-link" href="Success stories.php">Success Stories</a>
        </li>
        <li class="nav-item">
      <a class="nav-link" href="application_form.php">Apply Now</a>
        </li>
    </ul>
    </div>
    </nav>

<div class="applicantinfo">
    <p><h3>Application Form</h3>Kindly fill out this form with the neccessary details to apply for an internship opportunity with our client companies.
</p>
</div>

<!--Form to accept application details from user-->
<form action="confirmation.php" method="POST" name="Application Form">
      <label class="applicantinfo">Full Name: </label><input type="text" name="fname" size="30" placeholder="Full Name" required/><br><br>
      <label class="applicantinfo">Email: </label><input type="email" name="email" size="50" placeholder="Email" required/><br><br>
      <label class="applicantinfo"for="gender">Select your gender:</label>
      <select name="gender" id="gender">
        <option value="male">male</option>
        <option value="female">female</option>
        <option value="other">other</option>
      </select><br><br>
      <label class="applicantinfo">University ID: </label><input type="text" name="universityID" size="60" placeholder="Use first three letters of your university name eg.LEG" required/><br><br>
      <label class="applicantinfo">Major: </label><input type="text" name="major" size="50" placeholder="Type your major course here" required/><br><br>
      <label class="applicantinfo"for="level">Select your level:</label>
      <select name="levels" id="level">
        <option value="100">100</option>
        <option value="200">200</option>
        <option value="300">300</option>
        <option value="400">400</option>
      </select><br><br>
      <label class="applicantinfo">GPA: </label><input type="text" name="gpa" size="10" placeholder="GPA e.g., 3.34" required/><br><br>
      <label class="applicantinfo" for="Company">Select your preferred company:</label>
      <select name="company" id="company">
        <option value="KPMG Ghana">KPMG GHANA</option>
        <option value="Databank">Databank</option>
        <option value="Cargill Ghana Limited">Cargill Ghana Limited</option>
        <option value="Nestle Ghana">Nestle Ghana</option>
        <option value="Genkey">Genkey</option>
      </select><br><br>
      <label class="applicationbutton"></label><input type="submit" name="submit" class="button" value="Submit Application">
      
</form><br><br>

<?php
session_start();
require("footer.php");
     
include("WebsiteDb_Connection.php");

//If statement that triggers query from the database - Allows applicant's details to be inserted
if(isset($_POST["submit"])){

    //Assigning form data names to variables
    $UniversityID = $_POST['universityID'];
       $Name = $_POST['fname'];
       $Gender = $_POST['gender'];
       $Email = $_POST['email'];
       $Level = $_POST['levels'];
       $Major = $_POST['major'];
       $GPA = $_POST['gpa'];
       $CompanyPreference = $_POST['companypreference'];


     //Query to insert variables into the database
       $query = "INSERT INTO `applicant` (`universityID`,`fname`,`gender`,`email`,`levels`,`major`,`gpa`,`companypreference`) VALUES ('$UniversityID','$Name','$Gender','$Email','$Level','$Major','$GPA','$CompanyPreference')";

          //Execution of query
          mysqli_query($conn, $query);

          //Redirects to another page
      header("location: confirmation.php");


    }

//Closes connection to database
$conn->close();
?>


</body>
</html>