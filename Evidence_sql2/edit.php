<?php $conn = new mysqli("localhost","root","","eved2"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Page</title>
</head>
<body>
<h1>Ans No-5</h1>
<?php
$id = $_REQUEST['id'];

if(isset($_POST['submit'])){
    extract($_POST);

    $sq = "UPDATE student SET student_name='$student',address='$address',mobile='$mobile' WHERE id='$id'";

    $update = mysqli_query($conn,$sq);

    if($update){
        echo "<h3 style= 'color:green'>Updated</h3>";
        header("location: student_table.php");
    }else{
        echo "<h3 style= 'color:red'>Not Updated</h3>";
    }


}


$sql = $conn->query("SELECT * FROM student WHERE id='$id'");
$row = $sql->fetch_assoc();

?>

<form action="" method="post">
    ID : <br>
    <input type="text" name="id" value="<?php echo $row['id'] ?>" placeholder="Enter ID"><br>
    Name: <br>
    <input type="text" name="student" value="<?php echo $row['student_name'] ?>" placeholder="Enter Student Name"><br>

    Address: <br>
    <textarea name="address" placeholder="Enter Address"><?php echo $row['address'] ?></textarea><br>

    Mobile: <br>
    <input type="text" name="mobile" value="<?php echo $row['mobile'] ?>" placeholder="Enter Mobile Number"><br>

    <input type="submit" value="Update" name="submit">

</form>
</body>
</html>