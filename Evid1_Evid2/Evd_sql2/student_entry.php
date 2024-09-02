<?php $conn = new mysqli("localhost", "root", "", "evd2"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Entry</title>
</head>
<body>
<h2>Ans No-3</h2>
<h2>Student Entry</h2>

    <?php 
    if(isset($_POST['submit'])){
        extract($_POST);

        $sql = $conn->query("CALL insert_student('$name','$address','$mobile')");
        $insert = mysqli_query($conn,$sql);

        if($insert){
            echo "<h3 style= 'color:green'>Data Inserted</h3>";
        }else{
            "<h3 style= 'color:red'>Data not Inserted</h3>";
        }
    }
    
    ?>
    <form action="" method="post">
        Name: <br><input type="text" name="name" placeholder="Enter Name"><br>
        Address: <br><textarea name="address" placeholder="Enter Address"></textarea><br>
        Mobile: <br><input type="text" name="mobile" placeholder="Enter Mobile Number"><br><br>
        <input type="submit" name="submit" value="Submit">

    </form><br>
    <a href="student_table.php">Student List</a>
</body>
</html>