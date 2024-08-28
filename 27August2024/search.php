<?php $conn = new mysqli("localhost:3310", "root", "", "classicmodels"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Page</title>
</head>
<body>
    <h3>Search Products</h3>
    <?php 
    if(isset($_GET['search'])){
    $term = $_GET['term'];

    $result = $conn->query("SELECT productCode,productName,buyPrice FROM products WHERE productName LIKE '%$term%'");

    $records = $result->num_rows;

    echo "<p>With the Keyword <b>$term</b> We Have found <b>$records</b> number of records</p>";

    }

    ?>
    <form action="" method="get">
        <input type="text" name="term" placeholder="Search Here">
        <input type="submit" name="search" value="SEARCH">

    </form>

    <?php 
    if(isset($_POST['search'])){
        while($row = $result->fetch_object()){
            echo "product Code:". $row->productCode . "Product Name" . $row->productName . "Product Price:". $row->buyPrice . "<hr>";
        }
    }

    
    
    ?>
</body>
</html>