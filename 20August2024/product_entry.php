<?php 
require_once "dbconfig.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Product Entry</h3>
    <?php 
    if(isset($_POST['submit'])){
        extract($_POST);
        $sql = "INSERT INTO products(id, product_name, product_details, product_price, product_quantity) VALUES (NULL, '$name', '$details', '$price', '$quantity')";

        require_once "dbconfig.php";
        $result = $db->query($sql);
        // echo $db->affected_rows;

        if($db->affected_rows){
            echo "Successfully Added";
        }else{
            echo "Failed";
        }
    }
    
    
    ?>

    <fieldset style="width: fit-content;">

    <form action="" method="post">
        Product Name: <br> <input type="text" name="name" placeholder="Enter Product Name"><br>
        Product Details: <br> <textarea name="details" placeholder="Enter Product Details Here"></textarea><br>
        Product Price: <br> <input type="text" name="price" placeholder="Enter Product Price"><br>
        Product Quantity: <br> <input type="number" name="quantity" placeholder="Enter Product Quantity"><br>
        <input type="submit" name="submit" value="Submit">

    </form>
    </fieldset><br>

    <a href="all_products.php">Product List</a>

    
</body>
</html>