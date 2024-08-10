<?php

session_start();  //Home page

if(isset($_SESSION['login'])){
    echo $_SESSION['login'];
}else{
    header('location:first.php');
}

?>

<h3><a style="color: red;" href="four.php">Logout</a></h3>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>insert</title>
</head>
<body>
    <h1>Insert</h1>
    <form action="" method="post">
    Name: <input type="text" name="name" placeholder="Enter Name" ><br>
    Email:<input type="text" name="email" placeholder="Enter Email Address" ><br>
    Password: <input type="text" name="pass" placeholder="Enter Password" ><br>
    Phone:<input type="text" name="phone" placeholder="Enter Phone Number" ><br>
    <input type="submit" value="Submit" name="submit">
    </form>
    
    <?php 

require_once 'connect.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $pass = $_POST['pass'];
    $phone = $_POST['phone'];

    $sql = "INSERT INTO sign(name,email,password,phone)VALUES('$name','$email','$pass','$phone') ";
    $insert = mysqli_query($conn,$sql);

    if($insert){
        echo "<h3 style='color:green'>Data inserted</h3>";
    }else{
        echo "<h3 style='color:red'>Data not inserted</h3>";
    }


    
    echo "<h1>Data read</h1>";

    $read = $conn->query("SELECT * FROM sign");
    $num = 1;
    
    echo "<table border>";
    echo "<tr><th>Id</th><th>Name</th><th>Email</th><th>Password</th><th>Phone</th><th colspan=3>Action</th></tr>";

    while($output = $read->fetch_array()){
        echo "<tr>
        <td>$num</td>
        <td>$output[name]</td>
        <td>$output[email]</td>
        <td>$output[password]</td>
        <td>$output[phone]</td>
        <td><a style='text-decoration:none' href ='edit.php?idn=$output[id] & nm=$output[name] & em=$output[email] & ps=$output[password] & pn=$output[phone]'>Edit</a></td>
        <td><a style='text-decoration:none' href ='delete.php?idn=$output[id] & nm=$output[name] & em=$output[email] & ps=$output[password] & pn=$output[phone]'>Delete</a></td>
        <td><a style='text-decoration:none' href ='select.php?idn=$output[id] nm=$output[name] & em=$output[email] & ps=$output[password] & pn=$output[phone]'>Select</a></td>
        </tr>";
        $num++;
    }

    echo "</table>";
}

?>
</body>
</html>