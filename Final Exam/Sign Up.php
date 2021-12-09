<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link href="website_styles.css" rel="stylesheet" type="text/css">

<body>
<img src="logo.png" alt="" width="120" height="80">
                <h1 class="webname">The Experience Hub</h1>
    <h3 class="SignUpPageTitle">Sign Up</h3>

<Script>
    //Checking that passwords are equal
    function PasswordMatch(){
        var originalpass=document.SignUp.pwd1.value;
        var confirmpass=document.SignUp.pwd2.value;

        if(originalpass===confirmpass){
            return true;
        }
        else{
            alert("Passwords must be equal!");
            return false;
        }

    }

</Script>

<!--Form to accept sign up details from user-->
<form action="" method="post" name="SignUp" onsubmit="return PasswordMatch()">
      <label class="signupinfo">First name: </label><input type="text" name="fname" size="30" placeholder="First Name" required/><br><br>
      <label class="signupinfo">Last name: </label><input type="text" name="lname" size="30" placeholder="Last Name" required/><br><br>
      <label class="signupinfo">Email: </label><input type="email" name="email" size="50" placeholder="Email" required/><br><br>
      <label class="signupinfo">Password:   </label><input type="password" name="password" size="30" pattern="(?=. *d)(?=. *[a-z])(?=. *[A-Z])(?=.*?[#?!@$%^&*-\=+]\[]).{8,}" title="Must contain at least a number, one uppercase letter, one lowercase letter, and at least 8 or more characters" placeholder="Password" required><br><br>
      <label class="signupinfo">Confirm Password:   </label><input type="password" name="pwd2" size="30" pattern="(?=. *d)(?=. *[a-z])(?=. *[A-Z])(?=.*?[#?!@$%^&*-\=+]\[]).{8,}" title="Must contain at least a number, one uppercase letter, one lowercase letter, and at least 8 or more characters" placeholder="Confirm Password" required><br><br>
      <label class="signupbutton"></label><input  type="submit" name="submit" class="button" value="Sign Up">
      
</form>
<!--Adding link to login page-->
<a href="Login.php"><p class="loginpage">Already have an account? Login here</p></a>

<?php
            //Connecting to the database
      		require("WebsiteDb_Connection.php");


            //If statement that triggers query from the database - Allows users details to be inserted
      		 if(isset($_POST["submit"])){

                //Assigning form data names to variables
     			 $Fname = $_POST['fname'];
      			 $Lname = $_POST['lname'];
      			 $Email = $_POST['email'];
      			 $Password = md5($_POST['password']);


                 //Query to insert variables into the database
      			 $query = "INSERT INTO `user_account`(`fname`, `lname`, `email`, `password`) VALUES ('$Fname','$Lname','$Email','$Password')";

                 //Execution of query
      			 mysqli_query($conn, $query);

                 //Redirects to another page
      			 header("location: Login.php");


      		 }

    //Closes connection to database
	$conn->close();
?>



</body>
</html>