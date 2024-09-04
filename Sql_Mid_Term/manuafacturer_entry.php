<?php $conn = new mysqli("localhost:3306", "root", "", "company"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer Entry</title>
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
    <br>
    <h2>Ans No-4</h2>
    <h2>Product Price Above 5000</h2>

    <?php 
    $sql = $conn->query("SELECT * FROM product_above_5000_price");
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>manufacturer ID</th>
        </tr>
        <?php 
        while($row = $sql->fetch_assoc()){ ?>

            <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['name'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td style="text-align: center;"><?php echo $row['manufacturer_id'] ?></td>
            </tr>

    <?php } ?>
        
    </table><br>
    <a href="manufacturer_delete.php">Manufacturer List</a>
</body>
</html>