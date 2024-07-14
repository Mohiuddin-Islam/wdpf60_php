<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Validation</title>
</head>
<body>
    <h1>Ans No-1</h1>


    <?php 
    if(isset($_POST['submit'])){
        $user = $_POST['user'];

    $pattern = '/^[A-z0-9]+@[A-z]{4,8}$/';

    if(preg_match($pattern, $user)){
        echo "<h3>Login Validated</h3>";
    }else{
        echo "<h3>User name is invalid</h3>";
    }


    }
    
    
    ?>

    <form action="" method="post">
        <b>User Name:</b>
        <input type="text" name="user" placeholder="Enter User Name"><br>
        <input type="submit" name="submit" value="Login">

    </form>
</body>
</html>