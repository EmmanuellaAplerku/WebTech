<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title>Webtech Form</title>

</head>
<body>
    <?php
    //Start a session
    session_start();
    

    //Set the session
    if(isset($_POST["SubmitPassword"])){
        $_SESSION["Searchbox1Session"]= $_POST["Searchbox1"];
    }
    
    ?>

    <h2> Search Bar 1</h2>
    <form action="my_form.php" method="post">
        <!-- This is to indicate where the results from the search should appear -->
        <!--The session function in this code helps to have a permanent stateless handling -->
        <input type="text" name="Searchbox1" placeholder="Password" value="<?php echo(isset($_SESSION['Searchbox1Session']))? $_SESSION['Searchbox1Session'] : '';?>"><br>
        <input type="submit" name="SubmitPassword"><br> 
    </form>

    <?php
    if(isset($_POST["SubmitPassword"])){
        $numbercheck = "/^[0-9]+$/";
        $Searchbox1=$_POST["Searchbox1"];

    if(preg_match($numbercheck, $Searchbox1) == 1){
            echo "Great! Your password contains numbers only";
    }
  
    else{
     echo "Sorry! Your password does not contain numbers only";
    }

    }
    ?>

 </body>
 </html>
