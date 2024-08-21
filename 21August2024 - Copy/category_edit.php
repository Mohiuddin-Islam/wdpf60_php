<?php 
require_once "dbconfig.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category Edit</title>
</head>
<body>
    <h3>Category Edit</h3>
    <?php
    $id = $_REQUEST['id'];

    if(isset($_POST['submit'])){
        extract($_POST);

        $sql = "UPDATE categories SET cat_name ='$category' WHERE cat_id = '$id'";
        $update = mysqli_query($db,$sql);

        if($update){
            echo "<h3 style= 'color:green'>Data Updated</h3>";
            header('location:all_category.php');
        }else{
            echo "<h3 style= 'color:red'>Data not Updated</h3>";
        }
    }

    $sql = "SELECT * FROM categories WHERE cat_id = '$id'";
    $data = $db->query($sql);
    $row = $data->fetch_assoc();

    ?>

    <form action="" method="post">
        <input type="text" name="category"  value="<?php echo $row['cat_name'] ?>" >
        <input type="submit" value="Update" name="submit">
    </form>
</body>
</html>