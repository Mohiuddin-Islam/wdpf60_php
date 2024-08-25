<?php $conn = new mysqli("localhost:3310", "root", "", "mj5")  ?>

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
    <?php
    $sql = $conn->query("SELECT * FROM product_above_5000_price");

    ?>

    <table>

        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Manufacturer ID</th>
        </tr>

        <?php while ($row = $sql->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['p_id'] ?></td>
                <td><?php echo $row['product_name'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['m_id'] ?></td>
            </tr>


        <?php } ?>
    </table><br>
    <a href="manufacture.php">Manufacture</a>

</body>

</html>