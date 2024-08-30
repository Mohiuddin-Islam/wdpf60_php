<?php $conn= new mysqli("localhost","root","","eved3") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ans no-3</h2>

    <?php
    $sql = $conn->query("SELECT * FROM products");
    
    ?>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Product Details</th>
            <th>Product Price</th>
            <th>Action</th>
        </tr>
        <?php while($row= $sql->fetch_assoc()){ ?>
            <tr>

            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['product_details'] ?></td>
            <td><?php echo $row['product_price'] ?></td>
            <td><a href="edit.php?id=<?php echo $row['id'] ?> & nm=<?php echo $row['name'] ?> & dt=<?php echo $row['product_details'] ?> & pc=<?php echo $row['product_price'] ?>">Edit</a>
            ||
            <a href="delete.php?id=<?php echo $row['id'] ?>& nm=<?php echo $row['name'] ?> & dt=<?php echo $row['product_details'] ?> & pc=<?php echo $row['product_price'] ?>">Delete</a>
            ||
            <a href="new.php">New</a>
        </td>

            </tr>

            <?php } ?>
    </table><br><br>

    <a href="product_log.php">Product Log</a>

</body>
</html>