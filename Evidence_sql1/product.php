<?php $conn = new mysqli("localhost","root", "", "homework2"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product</title>
    <style>
        th,td{
            border: 1px solid;
        }
        table{
            border-collapse: collapse;
        }
    </style>
</head>
<body>
    <h2>Ans No-2</h2>
    <?php 
    $sql = $conn->query("SELECT * FROM product_above_5000");

    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Manufacturer ID</th>
        </tr>
        <?php 
        while($row = $sql->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['manufacturer_id'] ?></td>
            </tr>
            <?php } ?>
        
    </table><br>
    <a href="manufacturer.php">All Manufacturer</a>
</body>
</html>