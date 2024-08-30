<?php $conn = new mysqli("localhost", "root", "", "eved")  ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
</head>

<body>
<h1>Ans no-4</h1>


    <?php
    $sql = $conn->query("SELECT * FROM product_list_view");

    ?>

    <table border="1">

        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Price</th>
            <th>Manufacturer id</th>
        </tr>

        <?php while ($row = $sql->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['p_id'] ?></td>
                <td><?php echo $row['product_name'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['m_id'] ?></td>
            </tr>


        <?php } ?>
    </table>
    <a href="manufacture.php">manufacture</a>

</body>

</html>