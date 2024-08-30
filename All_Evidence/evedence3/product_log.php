<?php $conn= new mysqli("localhost","root","","eved3") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ans no-2</h2>

    <?php
    $sql = $conn->query("SELECT * FROM product_log");
    
    ?>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Product Price</th>
            <th>Action</th>
            <th>Time</th>
            <th>Product Id</th>
          
        </tr>
        <?php while($row= $sql->fetch_assoc()){ ?>
            <tr>

            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['name'] ?></td>
            <td><?php echo $row['product_price'] ?></td>
            <td><?php echo $row['action'] ?></td>
            <td><?php echo $row['time'] ?></td>
            <td><?php echo $row['product_id'] ?></td>
           
        </td>

            </tr>

            <?php } ?>
    </table><br><br>
    <a href="product.php">Product list</a><br><br>


</body>
</html>