<?php $conn = new mysqli("localhost:3310", "root", "", "evidence")  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer</title>
</head>
<body>
    <h3>Manufacturer</h3>
    <?php 
    if(isset($_POST['submit'])){
        extract($_POST);
        $conn->query("CALL add_manufacturer('$name', '$address', '$contact')");
    }
    
    
    
    ?>
    <form action="" method="post">
        <input type="text" name="name" placeholder="Enter Manufacturer Name"><br>
        <textarea name="address" placeholder="Enter Address"></textarea><br>
        <input type="text" name="contact" placeholder="Enter Contact Number"><br>
        <input type="submit" name="submit" value="SUBMIT">
    </form><br>
    <a href="manufacturer.php">Manufacturer List</a>
</body>
</html>