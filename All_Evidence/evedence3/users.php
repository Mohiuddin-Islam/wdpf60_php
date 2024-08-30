<?php $conn= new mysqli("localhost","root","","eved3") ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <h1>Ans No-1</h1>
    <h3>Login Form</h3>

    <?php
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $pass = $_POST['pass'];

        $md5 = md5($pass);

        $sql = $conn->query("SELECT * FROM users WHERE name='$name' AND pass='$md5'");

        if($sql->num_rows>0){
            echo "<h4 style=color:green>Login valid</h4>";
        }else{
            echo "<h4 style=color:red>Login not valid</h4>";
        }

    }
    
    ?>


    <form action="" method="post">
        Name : <br>
        <input type="text" name="name" ><br>
        Password: <br>
        <input type="text" name="pass" ><br>
        <input type="submit" value="Login" name="submit">

    </form>
</body>
</html>