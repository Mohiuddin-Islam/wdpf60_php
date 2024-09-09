<?php require_once "dbconfig.php";
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <?php 
    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);

        $sql = $conn->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
        $row = $sql->fetch_assoc();

        if($sql->num_rows==0){
            $_SESSION['login_err'] = "Email or Password may wrong. Please try again";
            header("location: index.php");
        }else{
            $_SESSION['email'] = $email;
            $_SESSION['name'] = $row['fullname'];
            header("location: dashboard.php");
        }
    }
    
    ?>
</body>
</html>