<?php 
    require_once "dbconfig.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product List</title>
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
    <h3>Product List</h3>
    <?php 
    $sql = $conn->query("SELECT * FROM product_above_5000_price");

    ?>
    <table>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Manufacturer_ID</th>
        </tr>
        <?php while($row = $sql->fetch_assoc()){ ?>

            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['manufacturer_id'] ?></td>
            </tr>
            

        <?php } ?>
    </table>
</body>
</html>