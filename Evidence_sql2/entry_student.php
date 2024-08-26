<?php $conn = new mysqli("localhost","root","","eved2"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Entry</title>
</head>
<body>
<h1>Ans no-3</h1>
<?php
if(isset($_POST['submit'])){
    extract($_POST);

    $sql = "CALL insert_student('$student','$address','$mobile')";

    $insert= mysqli_query($conn,$sql);

    if($insert){
        echo "<h3 style= 'color:green'>Inserted</h3>";
        header("location:student_delete.php");
    }

}

?>

<form action="" method="post">
    Name: <br>
    <input type="text" name="student" placeholder="Enter Student Name"><br>

    Address: <br>
    <textarea name="address" placeholder="Enter Address"></textarea><br>

    Mobile: <br>
    <input type="text" name="mobile" placeholder="Enter Mobile Number"><br>

    <input type="submit" value="Submit" name="submit">

</form><br>
<a href="student_delete.php">Student Delete</a>

</body>
</html>