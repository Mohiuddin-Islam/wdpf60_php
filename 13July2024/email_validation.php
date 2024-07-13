<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email validation</title>
</head>
<body>
    <h1>Email validation</h1>

<?php 

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Not a valid Email";
    }else {
        echo "Email is Validated";
    }
}




?>


    <form action="" method="post">
        <input type="text" name="email" placeholder="Enter Email"><br>
        <input type="submit" name="submit" value="Submit">

    </form>
</body>
</html>