<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device=width, initial-scale=1.0">
    <title>AJAX</title>

</head>
<body>
<?php
//Start a session
    session_start();
    

//Set the session
    if(isset($_POST["SubmitForm"])){
        $_SESSION["Searchbox1Session"]= $_POST["Searchbox1"];
    }
    
?>

    <h2> Search Bar 1</h2>
    <form action="my_form.php" method="post">
        <!-- This is to indicate where the results from the search should appear -->
        <!--The session function in this code helps to have a permanent stateless handling -->
        <input type="text" name="Searchbox1" placeholder="Search" value="<?php echo(isset($_SESSION['Searchbox1Session']))? $_SESSION['Searchbox1Session'] : '';?>"><br>
        <input type="submit" name="SubmitForm"><br> 
    </form>

    <?php
    if(isset($_POST["SubmitForm"])){
    echo $_POST["Searchbox1"];
    }

?>


    <h2> Search Bar 2</h2>
    <form action="results_page.php" method="post">
        <!--This is to indicate where the input data within the second search box should appear -->
        <input type="text" name="Searchbox2" placeholder="Search"><br>
        <input type="submit" name="SubmitForm"><br> 
    </form>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script> 

<script> 
 $(document).on('submit','#result',function(e){ 
    e.preventDefault(); 
    
    $.ajax({ 
    method:"POST", 
    url: "results_page.php", 
    data:$(this).serialize(), 
    success: function(data){ 
    $('#msg').html(data); 
    $('#userForm').find('input').val('') 
            }}); 
    }); 

</script>


</body>
</html>
