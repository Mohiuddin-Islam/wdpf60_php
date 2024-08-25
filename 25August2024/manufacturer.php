<?php $conn = new mysqli("localhost:3310", "root", "", "evidence")  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manufacturer</title>
</head>
<body>
    <?php 
    if(isset($_POST['submit'])){
        $mid = $_POST['company'];

        $result = "DELETE FROM manufacturer WHERE id = '$mid'";
        $delete = mysqli_query($conn,$result);

        if($delete){
            echo "<h1>Successfully Delete</h1>";
        }
    }
    
    
    ?>
    <?php 
    $result = $conn->query("SELECT * FROM manufacturer");

    ?>
    <h3>All manufacturer</h3>
    <form action="" method="post">
        <select name="company">
    <option value="">Select One</option>
    <?php 
    while($row = $result->fetch_object()){ ?>

    <option value="<?php echo $row->id; ?>"><?php echo $row->name; ?></option>

<?php } ?>
    
        </select>
        <input type="submit" name="submit" value="Delete">
    </form><br>
    <a href="product.php">All Product</a>
</body>
</html>