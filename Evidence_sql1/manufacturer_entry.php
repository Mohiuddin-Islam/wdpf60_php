<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer Entry</title>
</head>
<body>
    <h2>Ans No-3</h2>

    <?php 
    if(isset($_POST['submit'])){
        $sql = "CALL add_manufacturer($name,$address,$contact)";
    }
    ?>
    <form action="" method="post">
    Name: <br><input type="text" name="name" placeholder="Enter Manufacturer Name"><br>
    Address: <br><textarea name="address" placeholder="Enter Address"></textarea><br>
    Contact: <br><input type="text" name="contact" placeholder="Enter Contact Number"><br>
    <input type="submit" name="submit" value="Submit">

    </form><br>
    <a href="manufacturer.php">All Manufacturer</a>
</body>
</html>