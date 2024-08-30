<?php $conn= new mysqli("localhost","root","","eved3") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Edit</h2>

    <?php
    $id = $_REQUEST['id'];
    $nm= $_REQUEST['nm'];
    $dt= $_REQUEST['dt'];
    $pc= $_REQUEST['pc'];

    if(isset($_POST['submit'])){
        extract($_POST);

        $sql = "UPDATE products SET name='$name',product_details='$details',product_price='$price' WHERE id ='$id' ";

        $update = mysqli_query($conn,$sql);

        if($update){
            echo "Updated";
        }else{
            echo "Not updated";
        }

    }


    /*$sql = $conn->query("SELECT * FROM products");
   $row= $sql->fetch_assoc() ;*/
    
    
    ?>


    <form action="" method="post">
        <input type="text" name="name" placeholder="Product Name" value="<?php echo /*$row['name']*/$nm; ?>"><br><br>
        <textarea name="details" placeholder="Product details"><?php echo /*$row['product_details']*/ $dt ;?></textarea><br><br>
        <input type="text" name="price" placeholder="Product Price" value="<?php echo /*$row['product_price']*/ $pc; ?>"><br><br>
        <input type="submit" value="Update" name="submit">
    </form><br><br>
    <a href="product.php">Product</a>
</body>
</html>