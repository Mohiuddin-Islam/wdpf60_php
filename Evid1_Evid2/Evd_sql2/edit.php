<?php $conn = new mysqli("localhost", "root", "", "evd2"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Edit</title>
</head>
<body>

<h2>Student Edit</h2>

    <?php 
    $id = $_REQUEST['id'];
    if(isset($_POST['update'])){
        extract($_POST);

        $sql = "UPDATE student SET name = '$name', address = '$address', mobile = '$mobile' WHERE id = '$id'";
        $update = mysqli_query($conn,$sql);

        if($update){
            echo "<h3 style= 'color:green'>Data Updated</h3>";
        }else{
            "<h3 style= 'color:red'>Data not Updated</h3>";
        }
    }
    
    $sql = $conn->query("SELECT * FROM student WHERE id = '$id'");
    $row = $sql->fetch_assoc();

    ?>
    <form action="" method="post">
        ID: <br><input type="text" name="id" placeholder="Enter ID" value="<?php echo $row['id'] ?>"><br>
        Name: <br><input type="text" name="name" placeholder="Enter Name" value="<?php echo $row['name'] ?>"><br>
        Address: <br><textarea name="address" placeholder="Enter Address"><?php echo $row['address'] ?></textarea><br>
        Mobile: <br><input type="text" name="mobile" placeholder="Enter Mobile Number" value="<?php echo $row['mobile'] ?>"><br><br>
        <input type="submit" name="update" value="Update">

    </form><br>
    <a href="student_table.php">Student List</a>
</body>
</html>