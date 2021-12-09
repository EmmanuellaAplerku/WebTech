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

<!--Practical N -->

 <!-- File Upload-->
 <h2>Upload File</h2>
    <form action="my_forms.php" method="POST" enctype="multipart/form-data">
        Select Image to be uploaded:
        <input type="border: 1px solid black;" type="file" name="filename">
        <input type="submit" name="Submit">

    <?php
        $fileExists = 0;
        echo "Filename: ".$_FILES['filename']['name']."<br>";
        $fileName = $_FILES['fileName']['name'];

        require _DIR_ . '/database_credentials.php';

        $conn = new mysqli(servername,username,password,dbname);

        if($conn->connect_error){
            die("Connection Failed: ".conn->connect_error);
        }


        //checking if file exists already 

        $query = "SELECT user_image FROM practical_upload_table WHERE user_image='$fileName'";
        $result = $conn ->query($query) or die("Error : ".mysqli_error($conn));
        while($row = mysqli_fetch_array($result)){
            if ($row['user_image'] == $fileName) {
                $fileExistsFlag = 1;
            }  
        }

        // If File is not present in directory folder
        if($fileExists == 0){
            $target = "uploads_folder/";
            $fileTarget = $target.$fileName;
            $tempFName = $_FILES['fileName']['tmp_name'];
            $result = move_uploaded_file($tempFName, $FileTarget);
        }

        //After successful upload
        if($result){
            echo "Your File <html><b><i>".$fileName."</i></b></html> has been successfully uploaded";
            $query = "INSERT INTO practical_upload_table(user_image) VALUES ('$fileTarget')";
            $conn ->query($query) or die("Error : ".mysqli_error($conn));
        }
        else{
            mysqli_close($conn);
        }

        else{
            echo "file <html><b><i>".$fileName."</i></b></html> already exists in your folder. Try again by renaming the file";
            mysqli_close($conn);
        }

    ?>

