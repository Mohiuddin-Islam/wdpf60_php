<?php 
    require_once "dbconfig.php";
    session_start();

    if(isset($_POST['login'])){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $password = md5($password);
        $usertype = $_POST['usertype'];
    }

    if($usertype==1){
        $sql = $conn->query("SELECT * FROM admin WHERE email = '$email' AND password = '$password'");
        if($sql->num_rows){
            //session
            $_SESSION['email'] = $email;
            $_SESSION['utype'] = $usertype;
            // Redirect
            header("location:dashboard.php");
        }
        
    }
    if($usertype==2){
        $sql = $conn->query("SELECT * FROM doctors WHERE email = '$email' AND password = '$password'");
        if($sql->num_rows){
            //session
            $_SESSION['email'] = $email;
            $_SESSION['utype'] = $usertype;
            header("location:doctor_dashboard.php");
            // Redirect
        }
    }
    if($usertype==3){
        $sql = $conn->query("SELECT * FROM users WHERE email = '$email' AND password = '$password'");
        if($sql->num_rows){
            //session
            $_SESSION['email'] = $email;
            $_SESSION['utype'] = $usertype;
            header("location:patient_dashboard.php");
            // Redirect
        }

    }

?>