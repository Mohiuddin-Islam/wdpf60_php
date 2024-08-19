<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Validation</title>
</head>
<body>
    <?php 
    if(isset($_POST['submit'])){
        $email = $_POST['email'];

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<h3 style= 'color:red'>Email Address is not Valid</h3>";
        }else{
            echo "<h3 style= 'color:green'>Email Address is Valid</h3>";
        }
    }
    
    ?>
    <form action="" method="post">
        <input type="text" name="email" placeholder="Enter Email Address">
        <input type="submit" name="submit" value="Submit">

    </form>
</body>
</html>