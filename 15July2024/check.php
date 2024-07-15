<?php 

$userEmail = "abdullah@gmail.com";
$userPass = "123456";

$email = $_POST['email'];
$password = $_POST['password'];


if($email == $userEmail && $password == $userPass){
    session_start();
    $_SESSION['email'] = $email;
    header("Location: hme.php");
}else{
    header("Location: login.php");
}

?>