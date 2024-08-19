<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php 
    if(isset($_POST['submit'])){
        $user = $_POST['user'];

        $pattern = '/[A-z0-9]+@[A-z]{4,8}$/';

        if(!preg_match($pattern,$user)){
            echo "User Name is not Valid";
        }else{
            echo "User Name is Valid";
        }
    }
    
    
    ?>
    <form action="" method="post">
        <input type="text" name="user" placeholder="Enter User Name">
        <input type="submit" name="submit" value="Login">

    </form>
</body>
</html>