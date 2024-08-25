<?php $conn = new mysqli("localhost:3310", "root", "", "evidence")  ?>
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
    <h3>All Products(above 5000 price)</h3>
    <?php 
    $data = $conn->query("SELECT * FROM product_above_5000_price");
    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
        </tr>
        <?php 
        while($row = $data->fetch_assoc()){ ?>

            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['price'] ?></td>
            </tr>
<?php  } ?>
        
    </table><br>
    <a href="manufacturer.php">All Manufacturer</a>

</body>
</html>