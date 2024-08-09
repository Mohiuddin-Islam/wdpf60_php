<?php

require_once 'connect.php';
session_start();   //Login page;



if(isset($_POST['submit'])){
    $em = $_POST['email'];
    $ps = $_POST['password'];
    $md5 = md5($ps);

    $msz = $msz1 ='';
    if(empty($em)){
        $msz = 'Fill up this field';
    } if(empty($ps)){
        $msz1 = 'Fill up this field';
    } 

    if(!empty($em) && !empty($ps)){
        $sql = "SELECT * FROM user WHERE email ='$em' AND password ='$md5'";
        $query = $conn->query($sql);

        if($query->num_rows>0){
            $_SESSION['login'] = "<h3 style='color:green'>Login Successful</h3>";
            header('location:insert.php');
        }else{
            echo "Not found";
            echo $sql;
        }
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">

            </div>
            <div class="col-lg-4" style="margin-top: 200px;">
                <?php
                if(isset($_GET['created'])){
                    echo "<h3 style='color:green'>User Create Successfully</h3>";
                }
                ?>
            <form action="" method="post">
            <div class="mb-3">
                <label class="form-label"><b>Email:</b></label>
                <input type="text" name="email" placeholder="Enter Email Address" class="form-control"  value="<?php if(isset($_POST['submit'])){ echo $em;}  ?>">
                <?php if(isset($_POST['submit'])){echo "<h6 style=color:red>$msz</h6>" ;} ?>
            </div>
            <div class="mb-3">
                <label class="form-label"><b>Password:</b></label>
                <input type="password" name="password" placeholder="Enter Password" class="form-control"  value="<?php if(isset($_POST['submit'])){ echo $ps;} ?>">
                <?php if(isset($_POST['submit'])){echo "<h6 style=color:red>$msz1</h6>" ;} ?>
            </div>
            <div class="mb-3">
            
            <button class="btn btn-primary" name="submit">Login</button>
            </div> 
        </form>
            <h5>Not have an account?<a style="text-decoration:none" href="second.php">Register</a></h5>
            </div>
            <div class="col-lg-4">

            </div>
        </div>
    </div>
    
</body>
</html>