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
    <h2>Ans No-2</h2>
    <h2>Manufacturer Entry</h2>

    <?php 
    if(isset($_POST['submit'])){
        extract($_POST);

        $sql = "CALL add_manufacturer('$name','$address','$contact')";

        $insert = mysqli_query($conn,$sql);

        if($insert){
            echo "<h3 style= 'color:green'>Data Inserted</h3>";
        }else{
            echo "<h3 style= 'color:red'>Data not Inserted</h3>";
        }
    }
    
    
    ?>

    <form action="" method="post">
        Name: <br><input type="text" name="name" placeholder="Enter Manufacturer Name"><br>
        Address: <br><textarea name="address" placeholder="Enter Address Here"></textarea><br>
        Contact: <br><input type="text" name="contact" placeholder="Enter Contact Number"><br>
        <input type="submit" name="submit" value="Submit">


    </form><br>
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