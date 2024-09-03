<?php $conn = new mysqli("localhost:3306", "root", "", "company"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer Delete</title>
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
<h2>Ans No-3</h2>
<h2>Manufacturer List</h2>

    <?php 
    if(isset($_POST['delete'])){
        $mid = $_POST['company'];

        $sql = "DELETE FROM manufacturer WHERE id = '$mid'";
        $delete = mysqli_query($conn,$sql);

        if($delete){
            echo "<h3 style= 'color:green'>Successfully Delete</h3>";
        }
    }
    
    ?>

    <form action="" method="post">
        <select name="company">
            <option value="">Select One</option>

            <?php 
            $sql = $conn->query("SELECT * FROM manufacturer");

            while($row = $sql->fetch_assoc()){   ?>

                <option value="<?php echo $row['id'] ?>"><?php echo $row['id'] ?><?php echo $row['name'] ?></option>
        <?php  }   ?>
            
        </select>
        <input type="submit" name="delete" value="Delete">

    </form><br>
    <h2>Product Price Above 5000</h2>
    
    <?php 
    $sql = $conn->query("SELECT * FROM product_above_5000_price");
    
    ?>
    <table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Price</th>
        <th>Manufacturer ID</th>
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
    <a href="manuafacturer_entry.php">Manufacturer Entry</a>
</body>
</html>