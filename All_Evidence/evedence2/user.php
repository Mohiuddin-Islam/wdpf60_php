<?php $conn = new mysqli("localhost","root","","eved2"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ans no-1</h1>
    <?php 

    if(isset($_POST['submit'])){
        extract($_POST);

        $sql = $conn->query("SELECT * FROM user WHERE name='$name' AND password ='$pass' ");

        if($sql->num_rows >0){
            echo "Login Valid";
        }else{
            echo "Login not valid";
        }
    }

    ?>

    <form action="" method="post">
        User name : <br>
        <input type="text" name="name" ><br>
        Password : <br>
        <input type="text" name="pass" ><br>
        <input type="submit" value="Login" name="submit">

    </form>
</body>
</html>