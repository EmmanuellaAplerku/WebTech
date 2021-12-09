<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="website_styles.css" rel="stylesheet" type="text/css">

<body>
    <!--Creating a navbar -->
    <nav class = "navbar navbar-light bg-transparent">
    <div class="container-fluid">
      <div class="navbar-header">
          <a class="navbar-brand" href="#">
           <img src="logo.png" alt="" width="120"  height="80"> 
           <h1 class="webname">The Experience Hub</h1>
          </a>
    </div>


	 	<!--Page Title-->
		<h3 class="loginpagetitle">Log In</h3>

        <br><br>

<!--Form to accpet the login details of users-->
<form action="" method="post" >
   <label class="login-info" >Email: </label><input type="text" name="email" size="50" placeholder="Email" required/><br><br><br>
   <label class="login-info" >Password: </label><input type="password" name="pwd1" size="30" placeholder="Password" required/><br><br><br>
   <label class="login-info" ></label><input type="submit" name="submit" class="button" value="Log In"><br>
   
    <!--Link to signup page-->
   <a href="Sign Up.php"><p class="signuppage">New here? Sign up</p></a>

</form>


<?php

   //Connecting to the database
   require("WebsiteDb_Connection.php");

   //If statement that triggers query from the database - Compares login details to the ones in the database
   if(isset($_POST["submit"])){

       //Assigns form input names to variables
       $Email = $_POST['email'];
          $Password =md5($_POST['pwd1']);


          //Query to retrieve values from the database
          $query = "SELECT COUNT(*)  AS total  FROM user_account WHERE email = '".$Email."' and password = '".$Password."'";


          //Execution of query
          $result = mysqli_query($conn, $query);

          $log = mysqli_fetch_array($result);

   }
      //if statement to check if user details are in the database
      if($log['total'] > 0){


      //Redirects page
      header("location: home.php");

  }

  else{
      //Displays message from the browser if the details are not in the databse
      echo "<script>alert('Email or password is incorrect')</script>";
  }



   

//Closes connection to database
$conn->close();

?>

</body>
</html>