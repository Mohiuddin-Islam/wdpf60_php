<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Validation</title>
</head>
<body>

    <?php 
    if(isset($_POST['submit'])){
        $user = $_POST['user'];

        $pattern = '/^[A-z0-9]+@[A-z]{4,8}$/';

        if(preg_match($pattern, $user)){
            echo "<h3 style= 'color:green'>User Name is Valid</h3>";
        }else{
            echo "<h3 style= 'color:red'>User Name is Invalid</h3>";
        }
    }
    
    
    
    ?>
    <form action="" method="post">
        <input type="text" name="user" placeholder="Enter User Name">
        <input type="submit" name="submit" value="Submit">

    </form>
</body>
</html>