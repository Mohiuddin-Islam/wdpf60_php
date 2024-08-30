<?php $conn=new mysqli("localhost","root","","eved4")  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
</head>
<body>
    <h1>Ans no-1</h1>
    <h3>Login form</h3>

    <?php
    if(isset($_POST['submit'])){
        extract($_POST);

        $sql = $conn->query("SELECT * FROM users WHERE name='$name' AND password='$pass' AND phone='$phone'");

        if($sql->num_rows>0){
            echo "<h4 style=color:green>Login valid</h4>";
        }else{
            echo "<h4 style=color:red>Login not valid</h4>";
        }
    }
    
    
    
    ?>


    <form action="" method="post">
        User name : <br>
        <input type="text" name="name" ><br>
        Password : <br>
        <input type="text" name="pass" ><br>
        Phone : <br>
        <input type="text" name="phone" ><br>
        <input type="submit" value="Login" name="submit">

    </form>
</body>
</html>