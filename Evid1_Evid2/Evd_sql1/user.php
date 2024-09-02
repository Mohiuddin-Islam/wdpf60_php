<?php $conn = new mysqli("localhost", "root", "", "evd1"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
</head>
<body>
    <h2>Ans No-1</h2>
    <h2>User Validate Form</h2>

    <?php 
    if(isset($_POST['submit'])){
        extract($_POST);

        $sql = $conn->query("SELECT * FROM user WHERE username = '$user' AND password = '$pass'");

        if($sql->num_rows>0){
            echo "<h3 style= 'color:green'>Valid User</h3>";
        }else{
            echo "<h3 style= 'color:red'>Not Valid User</h3>";
        }
    }
    
    
    ?>
    <form action="" method="post">
        User Name: <br><input type="text" name="user" placeholder="Enter User Name"><br>
        Password: <br><input type="text" name="pass" placeholder="Enter Password"><br><br>
        <input type="submit" name="submit" value="Login">

    </form>
</body>
</html>