<?php $conn = new mysqli("localhost","root","","eved2"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User</title>
</head>
<body>
    <h1>Ans No-1</h1>
    <?php 

    if(isset($_POST['submit'])){
        extract($_POST);

        $sql = $conn->query("SELECT * FROM user WHERE name ='$name' AND password ='$pass' ");

        if($sql->num_rows >0){
            echo "<h3 style= 'color:green'>Login Valid</h3>";
        }else{
            echo "<h3 style= 'color:red'>Login is not Valid</h3>";
        }
    }

    ?>

    <form action="" method="post">
        User Name : <br>
        <input type="text" name="name" placeholder="Enter User Name"><br>
        Password : <br>
        <input type="text" name="pass" placeholder="Enter Password"><br>
        <input type="submit" value="Login" name="submit">

    </form>
</body>
</html>