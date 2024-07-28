<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>
<body>
    <h1>Insert</h1>
    <form action="" method="post">
        Name:<input type="text" name="name" placeholder="Enter Name"><br>
        Email:<input type="text" name="email" placeholder="Enter Email"><br>
        Password:<input type="text" name="pass" placeholder="Enter Password"><br>
        Phone:<input type="text" name="phone" placeholder="Enter Phone Number"><br>
        <input type="submit" name="submit" value="Submit">

    </form>

    <?php 
    
    require_once 'connect.php';

    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];
        $phone = $_POST['phone'];

        $sql = "INSERT INTO sign (name,email,password,phone)VALUES('$name','$email','$pass','$phone')";
        $insert = mysqli_query($conn,$sql);

        if($insert){
            echo "<h3 style='color:green'>Data Inserted</h3>";
            header('location: read.php');
        }else{
            echo "<h3 style='color:red'>Data not Inserted</h3>";
        }
    }
    
    
    ?>

</body>
</html>