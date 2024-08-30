<?php $conn=new mysqli("localhost","root","","eved4")  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product list</title>
    <style>
        th,td{
            border: 1px solid;
        }table{
            border-collapse: collapse;
        }

    </style>
</head>
<body>
    <h1>Ans no - 4</h1>
        <h2> Product list price from 2000 to 6000</h2>

   <?php
   $sql = $conn->query("SELECT * FROM product_list");
   
    ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Price</th>
            <th>Manufacturer Id</th>
        </tr>

        <?php while($row=$sql->fetch_assoc()){ ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['price']; ?></td>
                <td><?php echo $row['manufacturer_id']; ?></td>
            </tr>

            <?php } ?>
    </table><br><br>

    <a href="manufacture_delete.php">Manufacture</a>


</body>
</html>