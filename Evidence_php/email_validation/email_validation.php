<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validation</title>
</head>
<body>

<?php 

if(isset($_POST['email'])){
    $email = $_POST['email'];

    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Email Address is Valid";
    }else{
        echo "Email Address is Invalid";
    }
}

?>
    <form action="" method="post">
        <input type="text" name="email" placeholder="Enter Email Address">
        <input type="submit" name="submit" value="Check">

    </form>
</body>
</html>