<?php $conn = new mysqli("localhost", "root", "", "evd1"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer Entry</title>
</head>
<body>
<h2>Ans No-3</h2>
<h2>Manufacturer Entry</h2>

    <?php 
    if(isset($_POST['submit'])){
        extract($_POST);
        $sql = $conn->query("CALL insert_manufacturer('$name','$address','$contact')");

        $insert = mysqli_query($conn,$sql);

        if($insert){
            echo "<h3 style='color:green'>Data Inserted</h3>";
        }
    }
    
    ?>

    <form action="" method="post">
        Name: <br><input type="text" name="name" placeholder="Enter Name"><br>
        Address: <br><textarea name="address" placeholder="Enter Address"></textarea><br>
        Contact: <br><input type="text" name="contact" placeholder="Enter Contact Number"><br><br>
        <input type="submit" name="submit" value="Submit">
    </form><br>
    <a href="manufacturer.php">Manufacturer List</a>
</body>
</html>