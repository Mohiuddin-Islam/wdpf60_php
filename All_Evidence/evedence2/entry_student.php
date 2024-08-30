<?php $conn = new mysqli("localhost","root","","eved2"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Ans no-3</h1>
<?php
if(isset($_POST['submit'])){
    extract($_POST);

    $sql = "CALL insert_student('$student','$address','$mobile')";

    $insert= mysqli_query($conn,$sql);

    if($insert){
        echo "Inserted";
        header("location:student_delete.php");
    }

}

?>


<form action="" method="post">
    Name: <br>
    <input type="text" name="student" ><br>

    Address: <br>
    <textarea name="address" ></textarea><br>

    Mobile: <br>
    <input type="text" name="mobile" ><br>

    <input type="submit" value="Submit" name="submit">

</form><br><br>
<a href="student_delete.php">Student</a>

</body>
</html>