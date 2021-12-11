<!--Source for login design: https://codepen.io/Ihor_Sukhorada/pen/LBwRvv-->
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
<style>
body {
  background-image: url('https://images.pexels.com/photos/3694711/pexels-photo-3694711.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: cover;
}
</style>
    <!--Creating a navbar -->
    <nav class = "navbar navbar-light bg-transparent">
    <div class="container-fluid">
      <div class="navbar-header">
          <a class="navbar-brand" href="#">
           <img src="logo.png" alt="" width="120"  height="80"> 
           <h1 class="webname">The Experience Hub</h1>
          </a>
    </div>

    <div class="container">
         <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="login-form">
	 	<!--Page Title-->
		<h3 class="loginpagetitle">Log In</h3>

        <br><br>

<!--Form to accpet the login details of users-->
<form class="lgform" action="" method="post" >
   <label class="login-info" >Email: </label><input type="text" name="email" size="80" pattern="/^\w+([\.-]?\w+)@\w+([\.-]?\w+)(\.\w{2,3})+$/" placeholder="Email" required/><br><br><br>
   <label class="login-info" >Password: </label><input type="password" name="password" size="80" pattern="(?=. *d)(?=. *[a-z])(?=. *[A-Z])(?=.*?[#?!@$%^&*-\=+]\[]).{8,}" placeholder="Password" required/><br><br><br>
   <label class="login-info" ></label><input type="submit" name="submit" class="lgbutton" value="Log In"><br>
   
    <!--Link to signup page-->
   <a href="Sign Up.php"><p class="signuppage">New here? Sign up</p></a>

</form>
                </div>
            </div>
        </div>
    </div>


<?php
   //Connecting to the database
   require("WebsiteDb_Connection.php");

   //If statement that triggers query from the database - Compares login details to the ones in the database
   if(isset($_POST["submit"])){

       //Assigns form input names to variables
       $Email = $_POST['email'];
          $password =$_POST['password'];


          //Query to retrieve values from the database
          $query = "SELECT *  FROM user_account WHERE email = '".$Email."'";
          //echo $query;
          //return;


          //Execution of query
          $result = mysqli_query($conn, $query);

          $log = mysqli_fetch_array($result);
          
          
   
      //if statement to check if user details are in the database
      if(!empty($log)){
        $password= md5($password);
        
        echo 'user password '.$password."<br>";
        echo 'database '.$log['password']."<br>";
    

       if($password== $log['password']){
        


      //Redirects page
      header("location: home.php");

       }
       else{
        //Displays message from the browser if the details are not in the database
        echo "<script>alert('Email or password is incorrect')</script>";
       }  
    
    }
       else{
        //Displays message from the browser if the details are not in the database
        echo "<script>alert('User cannot be found')</script>";
    }
  
//Closes connection to database

      }
?>

</body>
</html>