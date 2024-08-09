<?php

require_once 'connect.php';  //Registration page


$msz ='';
$msz1 ='';
$msz2 ='';
$msz3 ='';
$msz4 ='';


if(isset($_POST['submit'])){
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $c_pass = $_POST['con_password'];

    $md5 = md5($pass);

    if(empty($fname)){
        $msz = 'Fill up this field';
    } if(empty($lname)){
        $msz1 = 'Fill up this field';
    } if(empty($email)){
        $msz2 = 'Fill up this field';
    } if(empty($pass)){
        $msz3 = 'Fill up this field';
    } if(empty($c_pass)){
        $msz4 = 'Fill up this field';
    }
    if(!empty($fname) && !empty($lname) && !empty($email) && !empty($pass) && !empty($c_pass)){
    if($pass===$c_pass){
        $sql = "INSERT INTO user(fname,lname,email,password)VALUES('$fname','$lname','$email','$md5')";
        $insert = mysqli_query($conn,$sql);
        if($insert){
        header("Location:first.php?created") ;
    }else{
        echo "Password not matched";
    }
    }
    }


}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">

            </div>
            <div class="col-lg-4" style="margin-top: 100px;">
            <form action="" method="post">
            <div class="mb-2">
                <label class="form-label"><b>First Name:</b></label>
                <input type="text" name="fname" placeholder="Enter First Name" class="form-control" value="<?php if(isset($_POST['submit'])){ echo $fname;}  ?>" >
                <?php if(isset($_POST['submit'])){echo "<h6 style=color:red>$msz</h6>" ;} ?>
            </div>
            <div class="mb-2">
                <label class="form-label"><b>Last Name:</b></label>
                <input type="text" name="lname" placeholder="Enter Last Name" class="form-control" value="<?php if(isset($_POST['submit'])){ echo $lname;}  ?>">
                <?php if(isset($_POST['submit'])){echo "<h6 style=color:red>$msz1</h6>"  ;} ?>
            </div>
            <div class="mb-2">
                <label class="form-label"><b>Email:</b></label>
                <input type="text" name="email" placeholder="Enter Email Address" class="form-control" value="<?php if(isset($_POST['submit'])){ echo $email;}  ?>">
                <?php if(isset($_POST['submit'])){echo "<h6 style=color:red>$msz2</h6>"  ;} ?>
            </div>
            <div class="mb-2">
                <label class="form-label"><b>Password:</b></label>
                <input type="password" name="password" placeholder="Enter Password" class="form-control" value="<?php if(isset($_POST['submit'])){ echo $pass;}  ?>">
                <?php if(isset($_POST['submit'])){echo "<h6 style=color:red>$msz3</h6>"  ;} ?>
            </div>
            <div class="mb-2">
                <label class="form-label"><b>Confirm Password:</b></label>
                <input type="password" name="con_password" placeholder="Enter Confirm Password" class="form-control" value="<?php if(isset($_POST['submit'])){ echo $c_pass;}  ?>">
                <?php if(isset($_POST['submit'])){echo "<h6 style=color:red>$msz4</h6>"  ;} ?>
            </div>
            <div class="mb-2">
            <input type="submit" value="Submit" class="btn btn-primary" name="submit">
            <!-- <button class="btn btn-primary" name="submit">Submit</button> -->
            </div> 
            </form>
            <h5>Have an account?<a style="text-decoration:none" href="first.php">Login</a></h5>
            </div>
            <div class="col-lg-4">

            </div>
        </div>
    </div>
    
</body>
</html>