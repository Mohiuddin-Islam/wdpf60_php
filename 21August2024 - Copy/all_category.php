<?php 
require_once "dbconfig.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All-Category</title>
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
    <?php

    $sql = $db->query("SELECT * FROM categories");
    
    ?>
    <table>
        <tr>
            <th>ID</th>
        <th>Category List</th>
        <th>Action</th>
        </tr>
        <?php while($row = $sql->fetch_assoc()){ ?>
            <tr>
            <td><?php echo $row['cat_id'] ;?></td>
                <td><?php echo $row['cat_name'] ;?></td>
                <td><a onclick="return confirm('Are you sure to Delete')" href="category_delete.php?id=<?php echo $row['cat_id'] ?>"><img src="bin2-removebg-preview.png" width="30"></a>
            ||
            <a href="category_edit.php?id=<?php echo $row['cat_id'] ?>"><img src="pencile-removebg-preview.png" width="18"></a></td>

            </tr>

        <?php } ?>
    </table><br>
    <a href="category_entry.php">Category Entry</a>
</body>
</html>