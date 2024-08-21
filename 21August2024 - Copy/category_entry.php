<?php 
require_once "dbconfig.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Entry</title>
</head>
<body>
    <h3>Category Entry</h3>
    <?php

    if(isset($_POST['submit'])){
        extract($_POST);

        $sql = "INSERT INTO categories(cat_id,cat_name) VALUES (NULL,'$category')";
        $insert = mysqli_query($db,$sql);

        if($insert){
            echo "<h3 style= 'color:green'>Data Inserted</h3>";
           // header('location:product_entry.php');
        }else{
            echo "<h3 style= 'color:red'>Data not Inserted</h3>";
        }
    }

    ?>

    <form action="" method="post">
        <input type="text" name="category" placeholder="Enter Product">
        <input type="submit" value="Submit" name="submit">
    </form><br>
    <a href="all_category.php">Category List</a>

</body>
</html>