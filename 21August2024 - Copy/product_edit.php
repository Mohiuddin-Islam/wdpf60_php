<?php 
require_once "dbconfig.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Edit</title>
</head>
<body>
    <h3>Product Edit</h3>
    <?php 

    //Category list collect
    $sql = "SELECT * FROM categories";
    $cats = $db->query($sql);

    //Pick id from URL and from
    $id = $_REQUEST['id'];

    // print_r($row);


    if(isset($_POST['update'])){
        extract($_POST);

        $sql = "UPDATE products SET product_name = '$name', product_details = '$details', product_price = '$price', product_quantity = '$quantity', product_category = '$category' WHERE id = '$id'";

        $result = $db->query($sql);
        // echo $db->affected_rows;

        if($db->error){
            echo "<h3 style= 'color:red'>Failed</h3>";
        }else{
            echo "<h3 style= 'color:green'>Successfully Added</h3>";
        }
    }

    // Getting Data from Table
    $sql = "SELECT * FROM products WHERE id = '$id'";
    $data = $db->query($sql);
    $row = $data->fetch_object();
    
    
    ?>

    <fieldset style="width: fit-content;">

    <form action="" method="post">
        Product Name: <br> <input type="text" name="name" placeholder="Enter Product Name" value="<?php echo $row->product_name; ?>"><br>
        Product Details: <br> <textarea name="details" placeholder="Enter Product Details Here"><?php echo $row->product_details; ?></textarea><br>
        Product Price: <br> <input type="text" name="price" placeholder="Enter Product Price" value="<?php echo $row->product_price; ?>"><br>
        Product Quantity: <br> <input type="number" name="quantity" placeholder="Enter Product Quantity" value="<?php echo $row->product_quantity; ?>"><br>
        Product Category: <br>
        <select name="category">
            <option value="">Select One</option>
        <?php 
        while($cat = $cats->fetch_assoc()){ ?>
            <option value="<?php  echo $cat['cat_id'] ?>" <?php echo $row->product_category == $cat['cat_id']? "selected" : ""; ?>><?php  echo $cat['cat_name'] ?></option>

            <?php 
            }
        
        ?>

        </select><br><br>
        <input type="submit" name="update" value="UPDATE">
        <input type="hidden" name="id" value="<?php echo $id ?>">

    </form>
    </fieldset><br>

    <a href="all_products.php">Product List</a>

    
</body>
</html>