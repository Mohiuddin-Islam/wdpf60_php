<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email_Pass Validation</title>
</head>
<body>

    <?php 
    if(isset($_POST['submit'])){
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
            echo "<h3 style= 'color:red'>Email Address is Wrong</h3>";
        }else if(strlen($pass)<8){
            echo "<h3 style= 'color:red'>Password must be at lest 8 Characters Long</h3>";
        }else{
            echo "<h3 style= 'color:green'>Login Valid</h3>";
        }
    }
    
    
    ?>
    <form action="" method="post">
        <input type="text" name="email" placeholder="Enter Email Address"><br>
        <input type="text" name="pass" placeholder="Enter Password"><br>
        <input type="submit" name="submit" value="Login">

    </form>
</body>
</html>