<?php $conn = new mysqli("localhost", "root", "", "evd1"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer Delete</title>
</head>
<body>
<h2>Ans No-2</h2>
<h2>Manufacturer Delete</h2>

    <?php 
    if(isset($_POST['delete'])){
        $mid = $_POST['company'];

        $sql = $conn->query("DELETE FROM manufacturer WHERE id = '$mid'");
        $delete = mysqli_query($conn,$sql);

        if($delete){
            echo "<h3 style= 'color:green'>Delete Successfully</h3>";
            header("location: product.php");
        }
    }
    ?>

    <form action="" method="post">
        <select name="company">
            <option value="">Select One</option>

            <?php 
            $sql = $conn->query("SELECT * FROM manufacturer");

            while($row = $sql->fetch_assoc()){    ?>

            <option value="<?php echo $row['id'] ?>"><?php echo $row['name'] ?></option>

        <?php } ?>

        </select>
        <input type="submit" name="delete" value="Delete">

    </form><br>
    <a href="manufacturer_entry.php">Manufacturer Entry</a><br><br>
    <a href="product.php">Product List</a>
</body>
</html>