<?php $conn= new mysqli("localhost","root","","eved3") ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ans no-3</h2>
    <h2>Insert</h2>

    <?php
   

    if(isset($_POST['submit'])){
        extract($_POST);

        $sql = "CALL insert_product('$name','$details','$price') ";

        $insert = mysqli_query($conn,$sql);

        if($insert){
            echo "insert";
            header("location:product.php");
        }else{
            echo "Not insert";
        }

    }


    
    ?>


    <form action="" method="post">
        <input type="text" name="name" placeholder="Product Name"><br><br>
        <textarea name="details" placeholder="Product details"></textarea><br><br>
        <input type="text" name="price" placeholder="Product Price"><br><br>
        <input type="submit" value="insert" name="submit">
    </form><br><br>
    <a href="product_log.php">Product</a>
</body>
</html>