<?php 
require_once "dbconfig.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Products</title>
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
    <h3>Product List</h3>

    <?php 
    
    // $sql = "SELECT * FROM products";
        $sql = "SELECT * FROM products, categories WHERE categories.cat_id = products.product_category";
    $data = $db->query($sql);  ?>

    <table>
        <tr>
            <th>ID</th>
            <th>Product Name</th>
            <th>Product Details</th>
            <th>Product Price</th>
            <th>Product Quantity</th>
            <th>Category</th>
            <th>Action</th>
            
        </tr>

<?php 
    while($row = $data->fetch_assoc()){  ?>

        <tr>
            <td><?php echo $row['id']?></td>
            <td><?php echo $row['product_name']?></td>
            <td><?php echo $row['product_details']?></td>
            <td><?php echo $row['product_price']?></td>
            <td><?php echo $row['product_quantity']?></td>
            <td><?php echo $row['cat_name']?></td>
            <td><a onclick="return confirm('Are you sure to delete')" href="product_delete.php?id=<?php echo $row['id']?>"><img src="bin2-removebg-preview.png" alt="" width="30"></a> |

            <a href="product_edit.php?id=<?php echo $row['id']?>"><img src="pencile-removebg-preview.png" alt="" width="18"></a></td>
        
            
        </tr>
    
        <?php    
        }
    
    ?>
    </table><br>
    <a href="product_entry.php">New Product</a>
</body>
</html>